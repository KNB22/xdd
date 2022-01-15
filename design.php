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
<title><?php echo $videotitle?></title>
<meta name="description" content="<?php echo $videodesc?>"/>
<meta name="Keyword" content="<?php echo $videokeyword?>"/>
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
						<h1 class="title">Design</h1>
					</div>
					<div class="breadcrumb-wrapper">
						<div class="container">
							<div class="breadcrumb-wrapper-inner">
								<span>
									<a title="Home" href="<?php echo $url_path_f?>index.php" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
								</span>
								<span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
								<span>Design</span>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div> 
	</div>                      
</div>
<div class="site-main">
	<section class="ttm-row pb-70 res-991-pb-20 clearfix">
		<div class="container">
			<div class="row multi-columns-row ttm-boxes-row-wrapper">
				<?php
					$query = "SELECT * FROM pvc";
					$result = mysqli_query($mysqli,$query)or die(mysqli_error());
					while($row = mysqli_fetch_array($result))
					{
						extract($row);
						$img1 = $row['imagepvc'];
						$imgpath1 = rtrim($img1, ',');
						$imgpath1 = ltrim($imgpath1);
						$imagepvc = explode(',', $imgpath1 );
						foreach($imagepvc as $v)    
						{
							$path = (isset($v) && !empty($v)) ? $url_path_f."webadmintechno/dbimages/".$v : '' ;
				?>
				<div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
					<div class="featured-imagebox featured-imagebox-portfolio">
						<div class="featured-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo $path;?>" alt="<?php echo $galttag;?>" title="<?php echo $gtitle;?>" longdesc="<?php echo $gdescription;?>" style="width:100%;height:260px;"></a>
						</div>
						<div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
							<div class="featured-iconbox ttm-media-link">
								<a class="ttm_prettyphoto ttm_image" title="<?php echo $imgtitle;?>" data-rel="prettyPhoto" href="<?php echo $path;?>">
									<i class="ti ti-search"></i>
								</a>
							</div>
							<div class="ttm-box-view-content-inner">
								<div class="featured-content featured-content-portfolio">
									<div class="featured-title">
										<h5><a href="#" title="<?php echo $imgtitle;?>"><?php echo $imgtitle;?></a></h5>
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
<?php include('include/footer.php');?>