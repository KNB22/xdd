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
<div class="ttm-page-title-row" style="background-image: url(<?php echo $breadcrumbimg;?>);"> 
	<div class="container">
		<div class="row">
			<div class="col-md-12"> 
				<div class="title-box ttm-textcolor-white">
					<div class="page-title-heading">
						<h1 class="title">Video</h1>
						<h3 class="subtitle"> About Our Video</h3>
					</div>
					<div class="breadcrumb-wrapper">
						<div class="container">
							<div class="breadcrumb-wrapper-inner">
								<span>
									<a title="Go to Delmont." href="<?php echo $url_path_f?>index.php" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
								</span>
								<span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
								<span>Video</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>                    
</div>
<section class="ttm-row intro-section clearfix" style="background-color: #fff;">
	<div class="container">
		<div class="row">
			<?php
				$query = "SELECT * FROM video order by videoid asc";
				$result = mysqli_query($mysqli,$query)or die(mysqli_error());
				$norow = mysqli_num_rows($result);
				if($norow > 0)
				{	  
				    while($row = mysqli_fetch_array($result))
				    {
					    extract($row);
				
			?>
			<div class="col-lg-6 col-sm-12">
				<div class="ttm_single_image-wrapper text-right">
					<iframe src="<?php echo $link?>" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" style="width:100%;height:250px"></iframe>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="pt-50 pl-20 res-991-pl-0" style="padding-top: 0px !important;">
					<div class="section-title clearfix">
						<div class="title-header">
							<h2 class="title"><?php echo $title?></h2>
						</div>
					</div>
					<div class="mb-25 clearfix">
						<p><?php echo $description;?></p>
					</div>
				</div>
			</div><br>
			<?php
				  }
				 }
				 else
				 {	 
			?>	 
			 <div class="col-md-12 col-sm-12 col-xs-12"> <img src="<?php echo $url_path_f?>webadmintechno/dbimages/novideo.png"></div>
			<?php
				 }
			?>
		</div>
	</div>
</section>


<?php include('include/footer.php');?>