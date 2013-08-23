<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<?php include("application/templates/header.php");?>
	<title>User Dashboard</title>
</head>
<body >
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
              <img data-toggle="modal" href="#myModal" src="/assets/img/tshirt_front.png" alt="t-shirt" class="img-swap" id='tshirt'>
            </div>
          </div>
           <div class="col-lg-3">
            <div class="thumbnail">
              <img data-toggle="modal" href="#myModal" src="/assets/img/collared_front.png" alt="collared shirt" class="img-swap" id='collared'>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="thumbnail">
              <img data-toggle="modal" href="#myModal" src="/assets/img/sweatshirt_front.png" alt="sweatshirt" class="img-swap" id='sweatshirt'>
            </div>
          </div>
          <div class="col-lg-3">
            <div id="hat_margin" class="thumbnail">
              <img data-toggle="modal" href="#myModal" src="/assets/img/hat_front.png" alt="hat" class="img-swap" id='hat'>
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
        	</div>i
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


			<!-- New Shirt Buildr -->
				<div id="main-container" class="container">
	              	<h3 id="clothing">Shirt Buildr</h3>
	              	<div id="clothing-designer">
	              		<div class="fpd-product" title="Shirt Front" data-thumbnail="<?=base_url() ?>/assets/img/images/yellow_shirt/front/preview.png">
			    			<img src="<?=base_url() ?>/assets/img/images/yellow_shirt/front/base.png" title="Base" data-parameters='{"x": 123, "y": 81, "colors": "#d59211", "price": 20}' />
			    			<img src="<?=base_url() ?>/assets/img/images/yellow_shirt/front/body.png" title="Hightlights" data-parameters='{"x": 249, "y": 80}' />
					  		<img src="<?=base_url() ?>/assets/img/images/yellow_shirt/front/shadows.png" title="Shadow" data-parameters='{"x": 123, "y": 81}' />
					  		<span title="Any Text" data-parameters='{"x": 243, "y": 181, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000", "zChangeable": true}' >Default Text</span>
					  		<div class="fpd-product" title="Shirt Back" data-thumbnail="<?=base_url() ?>/assets/img/images/yellow_shirt/back/preview.png">
				    			<img src="<?=base_url() ?>/assets/img/images/yellow_shirt/back/base.png" title="Base" data-parameters='{"x": 123, "y": 81, "colors": "Base", "price": 20}' />
				    			<img src="<?=base_url() ?>/assets/img/images/yellow_shirt/back/body.png" title="Hightlights" data-parameters='{"x": 277, "y": 79}' />
						  		<img src="<?=base_url() ?>/assets/img/images/yellow_shirt/back/shadows.png" title="Shadow" data-parameters='{"x": 123, "y": 81}' />
							</div>
						</div>
						<div class="fpd-product" title="Sweater" data-thumbnail="<?=base_url() ?>/assets/img/images/sweater/preview.png">
			    			<img src="<?=base_url() ?>/assets/img/images/sweater/basic.png" title="Base" data-parameters='{"x": 120, "y": 76, "colors": "#D5D5D5,#990000,#cccccc", "price": 20}' />
					  		<img src="<?=base_url() ?>/assets/img/images/sweater/highlights.png" title="Hightlights" data-parameters='{"x": 123, "y": 76}' />
					  		<img src="<?=base_url() ?>/assets/img/images/sweater/shadow.png" title="Shadow" data-parameters='{"x": 123, "y": 81}' />
						</div>
						<div class="fpd-product" title="Hoodie" data-thumbnail="<?=base_url() ?>/assets/img/images/hoodie/preview.png">
			    			<img src="<?=base_url() ?>/assets/img/images/hoodie/basic.png" title="Base" data-parameters='{"x": 100, "y": 60, "colors": "#850b0b", "price": 40}' />
					  		<img src="<?=base_url() ?>/assets/img/images/hoodie/highlights.png" title="Hightlights" data-parameters='{"x": 100, "y": 60}' />
					  		<img src="<?=base_url() ?>/assets/img/images/hoodie/shadows.png" title="Shadow" data-parameters='{"x": 100, "y": 60}' />
					  		<img src="<?=base_url() ?>/assets/img/images/hoodie/zip.png" title="Zip" data-parameters='{"x": 281, "y": 172}' />
						</div>
						<div class="fpd-product" title="Shirt" data-thumbnail="<?=base_url() ?>/assets/img/images/shirt/preview.png">
			    			<img src="<?=base_url() ?>/assets/img/images/shirt/basic.png" title="Base" data-parameters='{"x": 140, "y": 96, "colors": "#6ebed5", "price": 10}' />
			    			<img src="<?=base_url() ?>/assets/img/images/shirt/collar_arms.png" title="Collars & Arms" data-parameters='{"x": 140, "y": 96, "colors": "#000000"}' />
					  		<img src="<?=base_url() ?>/assets/img/images/shirt/highlights.png" title="Hightlights" data-parameters='{"x": 140, "y": 96}' />
					  		<img src="<?=base_url() ?>/assets/img/images/shirt/shadow.png" title="Shadow" data-parameters='{"x": 140, "y": 96}' />
					  		<span title="Any Text" data-parameters='{"x": 243, "y": 181, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span>
						</div>
						<div class="fpd-product" title="Basecap" data-thumbnail="<?=base_url() ?>/assets/img/images/cap/preview.png">
			    			<img src="<?=base_url() ?>/assets/img/images/cap/basic.png" title="Base" data-parameters='{"x": 100, "y": 126, "colors": "#ededed", "price": 5}' />
					  		<img src="<?=base_url() ?>/assets/img/images/cap/highlights.png" title="Hightlights" data-parameters='{"x": 114, "y": 141}' />
					  		<img src="<?=base_url() ?>/assets/img/images/cap/shadows.png" title="Shadows" data-parameters='{"x": 114, "y": 141}' />
						</div>
				  	</div>
				  	<div class="api-buttons clearfix" style="text-align: left;">
					  	<a href="#" id="print-button" class="btn btn-info">Print</a>
					  	<a href="#" id="image-button" class="btn btn-info">Create Image</a>
					  	<a href="#" id="upload-button" class="btn btn-warning">Upload own design</a>
					  	<label class="checkbox inline"><input type="checkbox" id="colorizable" /> Colorizable?</label>
					  	<span class="pull-right price badge badge-inverse"><span id="thsirt-price"></span> $</span>
					  	
					  	<input type="file" id="design-upload" style="display: none;" />
						<form action="recreation.php" id="recreation-form" method="post">
							<input type="hidden" name="recreation_product" value="" />
						</form>				  	
				  	</div>
	       		</div>   





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