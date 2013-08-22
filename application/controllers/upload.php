<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('show', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '3000';
		$config['max_width']  = '2000';
		$config['max_height']  = '2000';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			// var_dump($this->upload->display_errors());
			$this->session->set_flashdata('upload_message',$this->upload->display_errors());

			$user_data = $this->session->userdata('user_session');

			redirect('/index.php');
		
		}

		else
		{
			$this->session->set_flashdata('upload_message','You have successfully uploaded your logo!');

			$user_data = $this->session->userdata('user_session');

			$image_data = $this->upload->data();


			$this->load->model('User_model');

			$user = array('image_path' => '/assets/uploads/'.$image_data['file_name'], 'id' => $user_data['id']);

			$update_user_data = $this->User_model->update_user($user);

			// var_dump($update_user_data);
			// die();

			redirect(base_url('/user/profile/')); 

		
		}
	}
}
?>