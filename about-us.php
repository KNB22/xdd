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
<title><?php echo $abouttitle?></title>
<meta name="description" content="<?php echo $aboutdesc?>"/>
<meta name="Keyword" content="<?php echo $aboutkeyword?>"/>
<meta name="robots" content="index,follow">
<?php 
	include('include/header.php');
	$query_breadcrum = "select breadcrumbimg from indexpage";
	$result_breadcrum = mysqli_query($mysqli,$query_breadcrum);
	if($row_breadcrum= mysqli_fetch_array($result_breadcrum))
	{
		$breadcrumbimg = $url_path_f."webadmintechno/dbimages/".$row_breadcrum['breadcrumbimg'];
	}
?>
<div class="ttm-page-title-row" style="background-image: url(<?php echo $breadcrumbimg;?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-12"> 
				<div class="title-box ttm-textcolor-white">
					<div class="page-title-heading">
						<h1 class="title">About Us</h1>
					</div>
					<div class="breadcrumb-wrapper">
						<div class="container">
							<div class="breadcrumb-wrapper-inner">
								<span>
									<a title="Go to Delmont." href="<?php echo $url_path_f?>index.php" class="home"><i class="themifyicon ti-home"></i>
									&nbsp;&nbsp;Home</a>
								</span>
								<span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
								<span>About Us</span>
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
	$query = "SELECT * FROM aboutus";
	$result = mysqli_query($mysqli,$query)or die(mysqli_error());
	if($row = mysqli_fetch_array($result))
	{
		extract($row);
		$fphoto1 = $url_path_f."webadmintechno/dbimages/".$row['image'];	
	}
?>
<section class="ttm-row introduction-section clearfix">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-xs-12">
				<div class="pt-50 res-991-pt-0" style="padding-top: 0px !important;">
					<div class="section-title clearfix">
						<div class="title-header">
							<h5>WHAT WE DO</h5>
							<h2 class="title">About Us</h2>
						</div>
					</div>
					<div class="mb-30 clearfix">
						<p><?php echo $aboutus;?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-xs-12">
				<div class="ttm_single_image-wrapper text-right">
					<img class="img-fluid" src="<?php echo $fphoto1?>" alt="<?php echo $aalttag;?>" title="<?php echo $atitle;?>" longdesc="<?php echo $adescrption;?>" style="width:100%;height:350px;">
				</div>
			</div>
			<div class="col-lg-12 col-xs-12">
			    <p><?php echo $aboutus1;?></p>
			</div>
		</div>
	</div>
</section>
<?php
	$query_dis = "select * from testimonials order by createdate desc";
	$result_dis = mysqli_query($mysqli,$query_dis);
	$numrow = mysqli_num_rows($result_dis);
	if($numrow > 0)
	{
?>
<section class="ttm-row broken-section break-991-colum bg-layer clearfix">
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-5">
			   <div class="ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-skincolor spacing-2">
					<div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
					<div class="layer-content">
						<!-- section title -->
						<div class="section-title with-desc clearfix">
							<div class="title-header">
								
								<h2 class="title">Happy Clients</h2>
							</div>
							<div class="title-desc" style="text-align:justify;">If you need any help we are available for you.
							    We got very good service from them, they completed their work on time, All of us should take service from them, workers are also so good and hardworking.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="ttm-col-bgcolor-yes ttm-right-span ttm-bg ttm-bgcolor-darkgrey spacing-3">
					<div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
					<div class="layer-content">
						<div class="testimonial-slide owl-carousel" data-item="1" data-nav="true" data-dots="false" data-auto="false">
							<?php
								$query_dis = "select * from testimonials order by createdate desc";
								$result_dis = mysqli_query($mysqli,$query_dis);
								while($row = mysqli_fetch_array($result_dis))
								{
									extract($row);
									
									if (isset($row['profilephoto']) && !empty($row['profilephoto'])) {
										$profilepic = $url_path_f."webadmintechno/dbimages/".$row['profilephoto'];
									}
									else
									{
										$profilepic = $url_path_f."webadmintechno/dbimages/default.jpg";	
									}
							?>
							<div class="testimonials ttm-testimonial-box-view-style1">
								<div class="testimonial-avatar">
									<div class="testimonial-img">
										<img class="img-fluid" src="<?php echo $profilepic?>" alt="<?php echo $tmalttag;?>" title="<?php echo $tmtitle;?>" longdesc="<?php echo $tmdescription;?>">
									</div>
									 <div class="testimonial-caption">
										<h5><?php echo $name;?></h5>
										<label><?php echo $designation;?></label>
									</div>
								</div>
								<div class="testimonial-content">
									<blockquote class="ttm-testimonial-text" style="text-align:justify;"><?php echo $testimonial;?></blockquote>
									<div class="star-ratings">
										<ul class="rating">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<?php
							    }
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	}
	$query_dis = "select * from team order by teamid ASC";
    $result_dis = mysqli_query($mysqli,$query_dis);
	$numrow = mysqli_num_rows($result_dis);
	if($numrow > 0)
	{	  
?>
<section class="ttm-row team-section clearfix">
	 <div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-lg-10 col-md-10">
				<!-- section-title -->
				<div class="section-title with-desc clearfix">
					<div class="title-header">
						<h5>MEET OUR EXPERIENCED TEAM</h5>
						<h2 class="title">Our Dedicated Team</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2"></div>
		</div><!-- row end -->
		<!-- row -->
		<div class="row">
			<div class="wrap-team team-slide owl-carousel" data-item="4" data-nav="true" data-dots="false" data-auto="false">
				<?php
					while($row = mysqli_fetch_array($result_dis))
					{
						extract($row);
						if (isset($row['profilephoto']) && !empty($row['profilephoto'])) {
							$profilepic = $url_path_f."webadmintechno/dbimages/".$row['profilephoto'];
						}
						else
						{
							$profilepic = $url_path_f."webadmintechno/dbimages/default.jpg";	
						}
				?>
				<div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
					<div class="featured-thumbnail">
						<img class="img-fluid" src="<?php echo $profilepic;?>" alt="<?php echo $talttag;?>" title="<?php echo $ttitle;?>" longdesc="<?php echo $tdescription;?>"> 
					</div> 
					<div class="ttm-box-view-overlay">
					</div>
					<div class="featured-content featured-content-team">
						<div class="ttm-team-position"><?php echo $designation;?></div>
						<div class="featured-title">
							<h5><a href="team-details.html"><?php echo $name;?></a></h5>
						</div>
					</div>
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
</section>
<?php
	}
	$query = "SELECT * FROM logo";
	$result = mysqli_query($mysqli,$query)or die(mysqli_error());
	
	$numrow = mysqli_num_rows($result);
	
	if($numrow > 0)
	{	
?>
<div class="ttm-row client-section ttm-bgcolor-grey mt_70 res-991-mt-0 clearfix">
	<div class="container">
		<!-- row -->
		<div class="row text-center">
			<div class="col-md-12">
				<div class="ttm-client clients-slide owl-carousel owl-theme owl-loaded" data-item="5" data-nav="false" data-dots="false" data-auto="false">
					<?php
						while($row = mysqli_fetch_array($result))
						{
							extract($row);
							$img1 = $row['galleryimg'];
							$imgpath1 = rtrim($img1, ',');
							$imgpath1 = ltrim($imgpath1);
							$galleryimg = explode(',', $imgpath1 );
							foreach($galleryimg as $v)    
							{
								$path = (isset($v) && !empty($v)) ? $url_path_f."webadmintechno/dbimages/".$v : '' ;
						
					?>
					<div class="client-box ttm-box-view-separator-logo">
						<div class="ttm-client-logo-tooltip" data-tooltip="client-01">
							<div class="client-thumbnail">
								<img src="<?php echo $path;?>" alt="<?php echo $clalttag;?>" title="<?php echo $cltitle;?>" longdesc="<?php echo $cldescription;?>">
							</div>
						</div>
					</div>
					<?php
						    }
						}
					?>
				</div>  
			</div>
		</div>
	</div>
</div>
<?php
    }
?>
</div>
<?php include('include/footer.php'); ?>