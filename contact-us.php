<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php
	include("database.php");
	$query = "SELECT * FROM seo";
	$result = mysqli_query($mysqli,$query)or die(mysqli_error());
	if($row = mysqli_fetch_array($result))
	{
		extract($row);
	}
?>	
<title><?php echo $contacttitle?></title>
<meta name="description" content="<?php echo $contactdesc?>"/>
<meta name="Keyword" content="<?php echo $contactkeyword?>"/>
<meta name="robots" content="noindex,follow">
<?php 
    include('include/header.php');
	
	$query_breadcrum = "select breadcrumbimg from indexpage";
	$result_breadcrum = mysqli_query($mysqli,$query_breadcrum);
	if($row_breadcrum= mysqli_fetch_array($result_breadcrum))
	{
		$breadcrumbimg = $url_path_f."webadmintechno/dbimages/".$row_breadcrum['breadcrumbimg'];
		
	}
?>
<div class="ttm-page-title-row" style="background: url(<?php echo $breadcrumbimg;?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-12"> 
				<div class="title-box ttm-textcolor-white">
					<div class="page-title-heading">
						<h1 class="title">Contact Us</h1>
					</div>
					<div class="breadcrumb-wrapper">
						<div class="container">
							<div class="breadcrumb-wrapper-inner">
								<span>
									<a title="Go to Delmont." href="<?php echo $url_path_f?>index.php" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
								</span>
								<span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
								<span>Contact Us</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>                      
</div>
<div class="site-main">
<?php
	$query_dis = "select * from contactus";
	$result_dis = mysqli_query($mysqli,$query_dis);
	if($row = mysqli_fetch_array($result_dis))
	{
		extract($row);
	}	
?>
<section class="ttm-row bg-layer bg-layer-equal-height res-991-p-0 clearfix">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-skincolor ttm-textcolor-white spacing-8">
					<div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
					<div class="layer-content">
						<h3>Contact With Us</h3>
						<p>Book a Complimentary Appointment by Visiting or calling Us!</p>
						<div class="sep_holder_box width-100 pt-20 mb-35" style="margin-bottom: 0px !important;">
							<span class="sep_holder"><span class="sep_line"></span></span>
							<span class="sep_holder"><span class="sep_line"></span></span>
						</div>
						<div class="featured-icon-box iconalign-before-heading mb-25">
							<div class="featured-content">
								<div class="featured-icon">
									<div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
										<i class="fa fa-map-marker"></i>
									</div>
								</div>
								<div class="featured-title">
									<h5 style="font-size: 13px;">
									   <span style="font-size: 18px;">Godwon Address :</span> House No.361, Shivle Wasti Tulapur, Taluka Haveli, District Pune 412216
									   <br>
									   <span style="font-size: 18px;">Office Address :</span> Plot No 4510/4513 Resv No.180, Wind D, Ground Floor, Shop No 3, Mumbai Pune Highway, Opp Big Bazar, Chinchwad, Pune - 411019


									</h5>
								</div>
							</div>
						</div>
						<style>
						    .featured-title h5 a:hover{color:#981237;}
						</style>
						<div class="featured-icon-box iconalign-before-heading mb-25">
							<div class="featured-content">
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
						</div>
						<div class="featured-icon-box iconalign-before-heading mb-25">
							<div class="featured-content">
								<div class="featured-icon">
									<div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
										<i class="fa fa-phone"></i>
									</div>
								</div>
								<div class="featured-title">
									<h5>Eknath Shivale: <a href="tel:<?php echo $mobileno;?>"><?php echo $mobileno;?></a>
									</h5>
										<h5>Office No: <a href="tel:<?php echo $whatsapp;?>"><?php echo $whatsapp;?></a></h5>
									<h4>Have a question? call us now</h4>
								</div>
							</div>
						</div>
						<div class="sep_holder_box width-100 pt-20 mb-30">
							<span class="sep_holder"><span class="sep_line"></span></span>
							<span class="sep_holder"><span class="sep_line"></span></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7">
			   <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-grey spacing-8">
					<div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
					<div class="section-title with-desc clearfix">
						<div class="title-header">
							<h5>WHAT WE DO</h5>
							<h2 class="title">Get In Touch</h2>
						</div>
						<div class="title-desc">We offer extensive medical procedures to outbound and inbound patients what it is and we are very proud of achievpatients for recovery</div>
					</div>
					<form id="" class="ttm-contactform wrap-form clearfix" method="post" action="contactscript.php">
						<label>
							<span class="text-input"><i class="ttm-textcolor-skincolor ti-user"></i>
							<input name="name" type="text" value="" placeholder="Your Name" required="required" style="color:#000;"></span>
						</label>
						<label>
							<span class="text-input"><i class="ttm-textcolor-skincolor ti-mobile"></i>
							<input name="phoneno" type="text" value="" placeholder="Cell Phone" required="required"></span>
						</label>
						<label>
							<span class="text-input"><i class="ttm-textcolor-skincolor ti-email"></i>
							<input name="emailid" type="email" value="" placeholder="Email" required="required"></span>
						</label>
						<label>
							<span class="text-input"><i class="ttm-textcolor-skincolor ti-comment"></i>
							<textarea name="message" cols="40" rows="3" placeholder="Message" required="required" style="color:#000;"></textarea></span>
						</label>
						<input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black" value="SEND MESSAGE">
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="map-wrapper">
	<div id="map1" style="width: 100%; height: 400px"></div>
	<script>
	function myMap() {
	  var myCenter = new google.maps.LatLng(18.651564,73.987904);
	  var mapCanvas = document.getElementById("map1");
	  var mapOptions = {center: myCenter, zoom: 14};
	  var map1 = new google.maps.Map(mapCanvas, mapOptions);
	  var marker = new google.maps.Marker({position:myCenter});
	  marker.setMap(map1);
	}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf1cl1jC4hk_GNeDwFz9GmURxQwU4U0No&callback=myMap"></script>	

</div>
</div>
<?php include('include/footer.php');?>