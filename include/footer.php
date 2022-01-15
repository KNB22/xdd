<footer class="footer widget-footer clearfix">
	<div class="first-footer ttm-bgcolor-skincolor">
		<div class="container">
			<?php
				$query_dis = "select * from contactus";
				$result_dis = mysqli_query($mysqli,$query_dis);
				if($row = mysqli_fetch_array($result_dis))
				{
					extract($row);
				}	
			?>
			<style>
				.featured-title h5 a:hover{color:#000;}
			</style>
			<div class="row">
				<div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">
					<aside class="widget widget-text">
						<div class="featured-icon-box iconalign-before-heading">
							<div class="featured-icon">
								<div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
									<i class="fa fa-phone"></i>
								</div>
							</div>
							<div class="featured-title">
								<h5>Eknath Shivale: <a href="tel:<?php echo $mobileno;?>" style="font-size:16px;"><?php echo $mobileno;?></a></h5>
								<h5>Office No: <a href="tel:<?php echo $whatsapp;?>" style="font-size:16px;"><?php echo $whatsapp;?></a></h5>
								<h4>Have a question? call us now</h4>
							</div>
						</div>
					</aside>
				</div>
				<div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">
					<aside class="widget widget-text">
						<div class="featured-icon-box iconalign-before-heading">
							<div class="featured-icon">
								<div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
									<i class="fa fa-envelope-o"></i>
								</div>
							</div>
							<div class="featured-title">
								<h5><a href="mailto:<?php echo $emailid?>?subject=Inquiry"><?php echo $emailid?></a></h5>
								<h4>Need support? Drop us an email</h4>
							</div>
						</div>
					</aside>
				</div>
				<div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">
					<aside class="widget widget-text">
						<div class="featured-icon-box iconalign-before-heading" style="margin-bottom: 0px;">
							<div class="featured-icon">
								<div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square" style="top: -13px;">
									<i class="fa fa-map-marker"></i>
								</div>
							</div>
							<style>.pp p{display:inline}</style>
							<div class="featured-title">
								<h5 class="pp" style="font-size:13px;">
								    <span style="font-size: 18px;">Godwon Address :</span> House No.361, Shivle Wasti Tulapur, Taluka Haveli, District Pune 412216<br>
									   <span style="font-size: 18px;">Office Address :</span> Plot No 4510/4513 Resv No.180, Wind D, Ground Floor, Shop No 3, Mumbai Pune Highway, Opp Big Bazar, Chinchwad, Pune - 411019
								    </h5>
							
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	 <div class="second-footer ttm-textcolor-white">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
					<?php 
						$query = "SELECT aboutus FROM aboutus";
						$result = mysqli_query($mysqli,$query)or die(mysqli_error());
						if($row = mysqli_fetch_array($result))
						{
							extract($row);
							$aboutus_str = (strlen($aboutus) > 300) ? substr($aboutus ,0,300).'...' : $aboutus;
						}
					?>
					<div class="widget widget_text clearfix">
						<h3 class="widget-title">About Us</h3>
						<div class="textwidget widget-text">
						    <div style="text-align:justify;padding-bottom: 10px;"><?php echo $aboutus_str?> <a href="<?php echo $url_path_f?>about-us.php">Read more</a>
							</div>
							<div class="social-icons social-hover">
								<ul class="list-inline">
									<?php
									  if(!empty($facebook)){
									?>
									<li class="social-facebook"><a class="tooltip-top" target="_blank" href="<?php echo $facebook;?>" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<?php
									  }if(!empty($twitter)){
									?>
									<li class="social-twitter"><a class="tooltip-top" target="_blank" href="<?php echo $twitter;?>" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<?php
									 }if(!empty($linkedin)){
									?>
									<li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="<?php echo $linkedin;?>" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								    <?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-2 widget-area">
					<div class="widget widget_nav_menu clearfix">
					   <h3 class="widget-title">Quick Links</h3>
						<ul id="menu-footer-quick-links">
							<li><a href="<?php echo $url_path_f?>index.php">Home</a></li>
							<li><a href="<?php echo $url_path_f?>about-us.php">About Us</a></li>
							<li><a href="<?php echo $url_path_f?>services.php">Services</a></li>
							<li><a href="<?php echo $url_path_f?>blog.php">Blog</a></li>
							<li><a href="<?php echo $url_path_f?>gallery.php">Gallery</a></li>
							<li><a href="<?php echo $url_path_f?>contact-us.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 widget-area">
					<div class="widget style2 widget-out-link clearfix">
					   <h3 class="widget-title">Contact Us</h3>
						<form id="ttm-contactform" class="ttm-contactform wrap-form clearfix" method="post" action="#">
						   <div class="row"> 
						   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
							<label>
								<span class="text-input"><i class="ttm-textcolor-skincolor ti-user"></i>
								<input name="your-name" type="text" value="" placeholder="Your Name" required="required"></span>
							</label>
							</div>
							</div>
							
							<div class="row"> 
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
							<label>
								<span class="text-input"><i class="ttm-textcolor-skincolor ti-mobile"></i><input name="your-phone" type="text" value="" placeholder="Cell Phone" required="required"></span>
							</label>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
							<label>
								<span class="text-input"><i class="ttm-textcolor-skincolor ti-email"></i><input name="email" type="email" value="" placeholder="Email" required="required"></span>
							</label>
							</div>
							</div>
							<div class="row"> 
							 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
							<label>
								<span class="text-input"><i class="ttm-textcolor-skincolor ti-comment"></i><textarea name="message" cols="40" rows="3" placeholder="Message" required="required"></textarea></span>
							</label>
							</div>
							</div>
							<div class="row"> 
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
							<input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black" value="SEND MESSAGE">
							</div>
							</div>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="bottom-footer-text ttm-textcolor-white">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12">
					<span>Ved PVC Wall Panel © 2020 Design by <a target="_blank" href="http://adctechno.com/"> Adc Technologies</a></span>
				</div>
			   
			</div>
		</div>
	</div>
</footer>
<a id="totop" href="#top">
	<i class="fa fa-angle-up"></i>
</a>
</div>



<script src="<?php echo $url_path_f?>js/jquery.min.js"></script>
<script src="<?php echo $url_path_f?>js/tether.min.js"></script>
<script src="<?php echo $url_path_f?>js/bootstrap.min.js"></script> 
<script src="<?php echo $url_path_f?>js/jquery.easing.js"></script>    
<script src="<?php echo $url_path_f?>js/jquery-waypoints.js"></script>    
<script src="<?php echo $url_path_f?>js/jquery-validate.js"></script> 
<script src="<?php echo $url_path_f?>js/owl.carousel.js"></script>
<script src="<?php echo $url_path_f?>js/jquery.prettyPhoto.js"></script>
<script src="<?php echo $url_path_f?>js/numinate.min.js"></script>
<script src="<?php echo $url_path_f?>js/jquery.event.move.js"></script>
<script src="<?php echo $url_path_f?>js/jquery.twentytwenty.js"></script>
<script src="<?php echo $url_path_f?>js/booked-calendar.js"></script>
<script src="<?php echo $url_path_f?>js/main.js"></script>

<script src="<?php echo $url_path_f?>revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo $url_path_f?>revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo $url_path_f?>revolution/js/slider.js"></script>

<script src="<?php echo $url_path_f?>revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo $url_path_f?>revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo $url_path_f?>revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo $url_path_f?>revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo $url_path_f?>revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo $url_path_f?>revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo $url_path_f?>revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo $url_path_f?>revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

<script>
	$(function(){ 
	$('.dropdown .ab > a:not(a[href="#"])').on('click', function() { 
	self.location = $(this).attr('href'); 
	}); 
	}) 
</script>
</body>
</html>