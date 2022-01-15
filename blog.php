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
<title><?php echo $blogtitle?></title>
<meta name="description" content="<?php echo $blogdesc?>"/>
<meta name="Keyword" content="<?php echo $blogkeyword?>"/>
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
						<h1 class="title">Blog</h1>
					</div>
					<div class="breadcrumb-wrapper">
						<div class="container">
							<div class="breadcrumb-wrapper-inner">
								<span>
									<a title="Go to Delmont." href="<?php echo $url_path_f?>index.php" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
								</span>
								<span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
								<span>Blog</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>                     
</div>
<section class="ttm-row blog-section clearfix">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="section-title with-desc clearfix text-center">
					<div class="title-header">
						<h5>RECENT ARTICLES AND NEWS</h5>
						<h2 class="title">Our Blog</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="sep_holder_box width-100 mt_15 mb-35 res-991-mt-0">
					<span class="sep_holder"><span class="sep_line"></span></span>
					<span class="sep_holder"><span class="sep_line"></span></span>
				</div>
			</div>
		</div>
		
		<div class="row">
			<?php
			   include("database.php");
			   $query = "SELECT * FROM news order by newsdate desc";
			   $result = mysqli_query($mysqli,$query)or die(mysqli_error());
			   $numrow = mysqli_num_rows($result);
			   
			   if($numrow > 0)
			   {	
			?>
			<div class="post-slide owl-carousel owl-theme owl-loaded mt-5" data-item="3" data-nav="false" data-dots="false" data-auto="false">
				<?php
					while($row = mysqli_fetch_array($result))
					{
						extract($row);
						$descrption_str = (strlen($descrption ) > 120) ? substr($descrption ,0,120).'...' : $descrption;
						$photo1 = $url_path_f."webadmintechno/dbimages/".$row['image'];	
					
						$fblogname = str_replace(" ","-",$title);
						$link=$url_path_f."viewblog/$fblogname";
				?>
				<div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
					<div class="ttm-post-featured-outer">
						<div class="ttm-post-format-icon">
							<i class="ti ti-pencil"></i>
						</div>
						<div class="ttm-post-thumbnail featured-thumbnail">
							<img class="img-fluid" src="<?php echo $photo1;?>" class="rounded img-fluid" alt="<?php echo $balttag;?>" title="<?php echo $btitle;?>" longdesc="<?php echo $bdescrption;?>" style="width:100%;height:280px;">
						</div>
						<div class="ttm-box-post-date">
							<span class="ttm-entry-date">
								<time class="entry-date" datetime="2019-01-16T07:07:55+00:00"><?php echo date('d',strtotime($newsdate));?>
								
								<span class="entry-year"><?php echo date('F',strtotime($newsdate));?></span></time>
							</span>
						</div>
					</div>
					<div class="featured-content featured-content-post box-shadow">
						<div class="post-meta">
							<span class="ttm-meta-line comments-link"><i class="fa fa-calendar"></i> <?php echo date('d F, Y',strtotime($newsdate));?></span>
							<span class="ttm-meta-line byline"><i class="fa fa-user"></i> <?php echo $postby;?></span>
						</div>
						<div class="post-title featured-title">
							<h5><a href="<?php echo $link;?>" title="<?php echo $title;?>"><?php echo $title;?></a></h5>
						</div>
						<div class="post-desc featured-desc">
							<p><?php echo $descrption_str;?></p>
							<a class="ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-skincolor btn-inline mb-15" href="<?php echo $link;?>" title="<?php echo $title;?>">READ MORE<i class="ti ti-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<?php 
					}
				?>
			</div>
			<?php
			   }
			   else
			   {
			?>
				<div class="col-sm-12 col-xs-12">
				    <img src="<?php echo $url_path_f?>webadmintechno/dbimages/coming-Soon.png">
				</div>
			<?php
				} 	   
			?>
		</div>
	</div>
</section>
<?php include('include/footer.php'); ?>