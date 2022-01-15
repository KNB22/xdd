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
<title><?php echo $servicetitle?></title>
<meta name="description" content="<?php echo $servicedesc?>"/>
<meta name="Keyword" content="<?php echo $servicekeyword?>"/>
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
<div class="ttm-page-title-row" style="background: url(<?php echo $breadcrumbimg;?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-12"> 
				<div class="title-box ttm-textcolor-white">
					<div class="page-title-heading">
						<h1 class="title"><?php echo $finalservicemenu?></h1>
					</div>
					<div class="breadcrumb-wrapper">
						<div class="container">
							<div class="breadcrumb-wrapper-inner">
								<span>
									<a title="Go to Delmont." href="<?php echo $url_path_f?>index.php" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
								</span>
								<span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
								<span><?php echo $finalservicemenu?></span>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div> 
	</div>                      
</div>
<div class="site-main">

	<section class="element-row element-style pb-15">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title clearfix">
						<h2 class="title" style="color:#000;">Our <?php echo $finalservicemenu;?></h2>
					</div>
				</div>
			</div>
			<div class="row multi-columns-row ttm-boxes-row-wrapper pt-10">
				<?php
					$query_dis = "select * from services order by rank asc";
					$result_dis = mysqli_query($mysqli,$query_dis);
					while($row = mysqli_fetch_array($result_dis))
					{
						extract($row);
						$photo1 = $url_path_f."webadmintechno/dbimages/".$row['image'];	
						$servicename_str = (strlen($servicename ) > 20) ? substr($servicename ,0,20).'...' : $servicename;
						$description_str = (strlen($description ) > 120) ? substr($description ,0,120).'...' : $description;
						
						$fservicename = str_replace(" ","-",$servicename);
						$link=$url_path_f."product/$serviceid/$fservicename";		

				?>
				<div class="ttm-box-col-wrapper ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
					<div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image ttm-box-view-top-image">
						<div class="ttm-box-view-content-inner">
							<div class="featured-thumbnail">
								<a href="#"> 
									<img class="img-fluid" src="<?php echo $photo1?>" alt="<?php echo $salttag;?>" title="<?php echo $stitle;?>" longdesc="<?php echo $sdescription;?>" style="width: 360px;height:250px;">
								</a>
							</div>
							<div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
								<div class="featured-iconbox ttm-media-link">
									<a class="ttm_prettyphoto ttm_image" title="Fitness Guidance to Patient" data-rel="prettyPhoto" href="<?php echo $photo1?>">
										<i class="ti ti-search"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="ttm-box-bottom-content featured-content-portfolio box-shadow">
							<div class="featured-title">
								<h5><a href="<?php echo $link;?>" title="<?php echo $servicename;?>"><?php echo $servicename_str;?></a></h5>
							</div>
							<span class="category" style="font-size: 15px;">
								<p><?php echo $description_str;?></p>
							</span>
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
</div>
<?php include('include/footer.php');?>