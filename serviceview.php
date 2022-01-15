<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php
    include("database.php");
	extract($_GET);
	$fservicename = str_replace("-"," ",$title);

	$query = "SELECT * FROM services where serviceid='".$id."'";
	
	$result = mysqli_query($mysqli,$query)or die(mysqli_error());
	if($finalrow = mysqli_fetch_array($result))
	{
		extract($finalrow);
		
		$photo1 = $url_path_f."webadmintechno/dbimages/".$finalrow['image'];	
		$fserviceimg = trim($serviceimg);
		$fservicename1 = $servicename;
		$fdescription = $description;
		$fdescription1 = $description1;
	}
?>
<title><?php echo $seotitle?></title>
<meta name="description" content="<?php echo $seodesc?>"/>
<meta name="Keyword" content="<?php echo $seokeyword?>"/>
<meta name="robots" content="index,follow">
<?php 
	include('include/header.php');	
	include("database.php");
	extract($_GET);

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
						<h1 class="title">Our <?php if($finalservicemenu == "Services"){ 
						echo "Service"; 
					} if($finalservicemenu == "Products"){ 
					   echo "Product" ;
					}?> View</h1>
					</div>
					<div class="breadcrumb-wrapper">
						<div class="container">
							<div class="breadcrumb-wrapper-inner">
								<span>
									<a title="Go to Delmont." href="<?php echo $url_path_f?>index.php" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
								</span>
								<span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
								<span>
									<a title="Go to Delmont." href="<?php echo $url_path_f?>services.php" class="">&nbsp;&nbsp;<?php echo $finalservicemenu?></a>
								</span>
								<span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
								<span><?php echo $finalrow['servicename'];?></span>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div> 
	</div>                      
</div>
<section class="ttm-row intro-section clearfix">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="pt-50 pl-20 res-991-pl-0">
					<div class="section-title clearfix">
						<div class="title-header">
							<h2 class="title"><?php echo $finalrow['servicename'];?></h2>
						</div>
					</div>
					<div class="mb-25 clearfix">
						<p><?php echo $fdescription;?></p>
					</div>
				</div>
				<a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor mb-20" href="<?php echo $url_path_f?>contact-us.php">CONTACT US</a>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="ttm_single_image-wrapper text-right">
					<img class="img-fluid" src="<?php echo $photo1;?>" alt="<?php echo $salttag;?>" title="<?php echo $stitle;?>" longdesc="<?php echo $sdescription;?>" />
				</div>
			</div>
			<div class="col-lg-12 col-sm-12">
				<div class="mb-25 clearfix">
					<p><?php echo $fdescription1;?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="site-main">
	<section class="ttm-row pb-70 res-991-pb-20 clearfix">
		<div class="container">
			<div class="row multi-columns-row ttm-boxes-row-wrapper">
			
				<?php
					if(!empty($fserviceimg))
					{		
						$img1 = $fserviceimg;
						$imgpath1 = rtrim($img1, ',');
						$imgpath1 = ltrim($imgpath1);
						$serviceimg = explode(',', $imgpath1 );
						foreach($serviceimg as $v)    
						{
							$path = (isset($v) && !empty($v)) ? $url_path_f."webadmintechno/dbimages/".$v : '' ;
							$imgname = explode(".",$v);
				?>
				<div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
					<div class="featured-imagebox featured-imagebox-portfolio">
						<div class="featured-thumbnail">
							<a href="#"> <img class="img-fluid" src="<?php echo $path;?>" alt="<?php echo $fservicename1;?>" style="width:100%;height:260px;"></a>
						</div>
						<div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
							<div class="featured-iconbox ttm-media-link">
								<a class="ttm_prettyphoto ttm_image" title="<?php echo $serviceimgtitle;?>" data-rel="prettyPhoto" href="<?php echo $path;?>">
									<i class="ti ti-search"></i>
								</a>
							</div>
							<div class="ttm-box-view-content-inner">
								<div class="featured-content featured-content-portfolio">
									<div class="featured-title">
										<h5><a href="#" title="<?php echo $serviceimgtitle;?>"><?php echo $serviceimgtitle;?></a></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <?php
					    }
					}	
				?>
			</div>
		</div>
	</section>
</div>
<?php
	$i=0;
	$query = "SELECT * FROM subservices where serviceid='".$finalrow['serviceid']."'";
	$result = mysqli_query($mysqli,$query)or die(mysqli_error());
	$numrow = mysqli_num_rows($result);
	if($numrow > 0)
	{	 
?>
<div class="site-main">
	<section class="ttm-row pb-60 res-991-pb-20 clearfix">
		<div class="container">
		    <div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="section-title with-desc clearfix text-center">
						<div class="title-header">
							<h2 class="title">Related <?php echo $finalservicemenu?> </h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row multi-columns-row ttm-boxes-row-wrapper">
				<?php
					$i=0;
					while($row = mysqli_fetch_array($result))
					{
						extract($row);
						$photo1 = $url_path_f."webadmintechno/dbimages/".$row['image'];	
					  
						$servicename_str = (strlen($subservicename ) > 20) ? substr($subservicename ,0,20).'...' : $subservicename;
						$description_str = (strlen($description ) > 50) ? substr($description ,0,50).'...' : $description;

						$fsubservicename = str_replace(" ","-",$subservicename);
						$link1=$url_path_f."productview/$subserviceid/$fsubservicename";		

					?>
				<div class="ttm-box-col-wrapper col-lg-4 col-sm-6 col-md-4 col-xs-12">
					<div class="featured-imagebox featured-imagebox-event ttm-box-view-top-image">
						<div class="featured-thumbnail">
							<img class="img-fluid" src="<?php echo $photo1?>" alt="<?php echo $salttag;?>" title="<?php echo $stitle;?>" longdesc="<?php echo $sdescription;?>" style="width:100%;height:250px;">
						</div>
						<div class="featured-content featured-content-bottom">
							<div class="featured-title">
								<h5><a href="<?php echo $link1;?>" title="<?php echo $servicename;?>"><?php echo $servicename_str;?></a></h5>
							</div>
							<div class="featured-desc">
								<p><?php echo $description_str;?></p>
							</div>
							<div class="ttm-eventbox-footer">
								<a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor ttm-icon-btn-right btn-inline" href="<?php echo $link1;?>" title="<?php echo $servicename;?>">View Details<i class="ti ti-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</section>
</div>
<?php
	}
?>
<?php include('include/footer.php');?>