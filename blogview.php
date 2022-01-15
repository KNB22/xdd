<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php
    extract($_GET);
	include("database.php");
	
	$blog = str_replace("-"," ",$title);
	
	$query = "SELECT * FROM news where title='$blog'";
	$result = mysqli_query($mysqli,$query)or die(mysqli_error());
	if($row = mysqli_fetch_array($result))
	{
		extract($row);
		
		$photo1 = $url_path_f."webadmintechno/dbimages/".$row['image'];	
		
		$fblogname = urlencode($title);	 
	}
?>
<title><?php echo $seotitle?></title>
<meta name="description" content="<?php echo $seodesc?>"/>
<meta name="Keyword" content="<?php echo $seokeyword?>"/>
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
						<h1 class="title">Blog Single</h1>
					</div>
					<div class="breadcrumb-wrapper">
						<div class="container">
							<div class="breadcrumb-wrapper-inner">
								<span>
									<a title="Go to Delmont." href="<?php echo $url_path_f?>index.php" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
								</span>
								<span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
								<span>
									<a title="Go to Delmont." href="<?php echo $url_path_f?>blog.php" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Blog</a>
								</span>
								<span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
								<span><?php echo $blog?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>                      
</div>

<div class="site-main">
<div class="sidebar ttm-sidebar-right ttm-bgcolor-white break-991-colum clearfix">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 content-area">
				<article class="post ttm-blog-classic clearfix">
					<div class="ttm-post-featured-wrapper ttm-featured-wrapper">
						<div class="ttm-post-featured">
							<img class="img-fluid" src="<?php echo $photo1;?>" alt="<?php echo $balttag;?>" title="<?php echo $btitle;?>" longdesc="<?php echo $bdescrption;?>" style="width:100%;height:400px;">
						</div>
						<div class="ttm-box-post-date" style="padding-top: 21px;">
							<span class="ttm-entry-date">
								<time class="entry-date" datetime="2019-01-16T07:07:55+00:00"><?php echo date('d',strtotime($newsdate));?></time>
							</span>
						</div>
					</div>
					<div class="ttm-blog-classic-content">
						<div class="ttm-post-entry-header">
							<div class="post-meta">
								<span class="ttm-meta-line byline"><i class="ti ti-user"></i><?php echo $postby;?></span>
								<span class="ttm-meta-line cat-links"><i class="ti ti-calendar"></i><?php echo date('d F, Y',strtotime($newsdate));?></span>
							</div>
							<header class="entry-header">
								<h2 class="entry-title"><a href="#" title="<?php echo $title;?>"><?php echo $title;?></a></h2>
							</header>
						</div>
						<div class="entry-content">
							<div class="ttm-box-desc-text">
								<p><?php echo $descrption;?></p>
							</div>
						</div>
					</div>
				</article>
			</div>
			<div class="col-lg-3 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-grey">
				<div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
				<aside class="widget widget-recent-post">
				   <h3 class="widget-title">Popular News</h3>
					<ul class="widget-post ttm-recent-post-list">
						<?php
							include("database.php");
							$query = "SELECT * FROM news order by newsdate desc";
							$result = mysqli_query($mysqli,$query)or die(mysqli_error());
							while($row = mysqli_fetch_array($result))
							{
								extract($row);
								$title_str = (strlen($title ) > 18) ? substr($title ,0,18).'...' : $title;
								$photo1 = $url_path_f."webadmintechno/dbimages/".$row['image'];	
								
								$fblogname = str_replace(" ","-",$title);
								$link=$url_path_f."viewblog/$fblogname";
						?> 
						<li>
							<a href="single-blog.html"><img src="<?php echo $photo1;?>" alt="<?php echo $balttag;?>" title="<?php echo $btitle;?>" longdesc="<?php echo $bdescrption;?>"></a>
							<span class="post-date"><?php echo date('d F, Y',strtotime($newsdate));?></span>
							<a href="<?php echo $link?>" title="<?php echo $title?>"><?php echo $title_str;?></a>
						</li>
						<?php 
							}
						?>
					</ul>
				</aside>
			</div>
		</div>
	</div>
</div>
</div>
<?php include('include/footer.php'); ?>