<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<?php include("application/templates/header.php"); 
  include("assets/js/JS.js");
    // include("applications/templates/footer.php");?>
	<title>User Dashboard</title>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top plaid">
      <div class="container">
        <h1 class="navbar-brand span 10" href="#">shirt buildr </h1>
        <div class="nav-collapse collapse">
          <h1 class="span 6 offset2">Welcome <?php echo $user['first_name']?>!</h1>
          	<!-- logout button -->
			<form action="/user/logout" class="pull-right">
				<button type="submit" value="Logoff" class="btn btn-primary">Logoff</button>
			</form>
        </div>
      </div>
    </div>
    <div class="bottom_banner bump-top">
    <div class="container">
      <h1>Visualize Your Design:</h1>
        <div class="row plaid size">
          <div class="col-lg-3">
            <div class="thumbnail">
              <img data-toggle="modal" href="#myModal" src="<?=base_url() ?>/assets/img/tshirt_front.png" alt="t-shirt" class="img-swap" id='tshirt'>
            </div>
          </div>
           <div class="col-lg-3">
            <div class="thumbnail">
              <img data-toggle="modal" href="#myModal" src="<?=base_url() ?>/assets/img/collared_front.png" alt="collared shirt" class="img-swap" id='collared'>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="thumbnail">
              <img data-toggle="modal" href="#myModal" src="<?=base_url() ?>/assets/img/sweatshirt_front.png" alt="sweatshirt" class="img-swap" id='sweatshirt'>
            </div>
          </div>
          <div class="col-lg-3">
            <div id="hat_margin" class="thumbnail">
              <img data-toggle="modal" href="#myModal" src="<?=base_url() ?>/assets/img/hat_front.png" alt="hat" class="img-swap" id='hat'>
            </div>
          </div>
        </div>
      </div>
  </div> 
  <!-- Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header plaid">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h1 class="modal-title">Design Your Garment</h1>
        </div>
        <div class="modal-body">
        	<div id="new_logo">
        		<img src="<?php echo $user['image']?>" alt="">
        	</div>
          <div class="product-preview pull-left"> 
            <div class="product">
              <img src="" alt="Shirt Image" id='image'/>
              <img id="tt-mask" class="mask" src="" alt="Mask Image" />
            </div>
            <div class="swatch">
              <a rel="255,255,255" href="#tt-mask" title="White">White</a>
              <a rel="32,223,95" href="#tt-mask" title="Green">Green</a>
              <a rel="255,211,8" href="#tt-mask" title="Yellow">Yellow</a>
              <a rel="255,101,8" href="#tt-mask" title="Orange">Orange</a>
              <a rel="16,200,255" href="#tt-mask" title="Blue">Blue</a>
              <a rel="255,0,0" href="#tt-mask" title="Red">Purple</a>
              <a rel="0,0,0" href="#tt-mask" title="Black">Red</a>
            </div> 
          </div>  
          <div id="upload_box" class="plaid pull-right">
            <h2>Upload Logo Image</h2>
             <?php echo form_open_multipart('/upload/do_upload');?>
             <input id="file_upload_button" type="file" name="userfile" size="20" class="pull-right"/>
              <button type="submit" value="upload" class="btn btn-mini btn-primary pull-right">Upload</button>
              </form>
              <div class="clear"></div>
            <h3>Number of Ink Colors</h3>            
            <select name id="ink" class="form-control"> 
              <option class="dropdown-header" value="">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
            <a href="#" class="btn btn-primary pull-right save">Save Design</a>
          </div>
          <div class="clear"></div>
        </div> 
        </div> 
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->   
  <div class="bottom_banner brown">
    <div class="container">
      <h1>Saved Designs:</h1>
        <div class="row plaid size">
          <div class="col-lg-3">
          </div>
           <div class="col-lg-3">
          </div>
          <div class="col-lg-3">
          </div>
          <div class="col-lg-3">
          </div>
        </div>
    </div>  
  </div>
</body>
</html>