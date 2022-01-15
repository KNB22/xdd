<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
<title>404 Page</title>
<meta name="description" content=""/>
<meta name="Keyword" content=""/>
<meta name="robots" content="index, follow">
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
						<h1 class="title">404 Page</h1>
					</div>
					<div class="breadcrumb-wrapper">
						<div class="container">
							<div class="breadcrumb-wrapper-inner">
								<span>
									<a title="Go to Delmont." href="<?php echo $url_path_f?>index.php" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
								</span>
								<span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
								<span>404 Page</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>                      
</div>
<div class="site-main">
	<section class="error-404">
		<div class="ttm-big-icon">
			<i class="fa fa-thumbs-o-down"></i>
		</div>
		<header class="page-header"><h1 class="page-title">404 ERROR</h1></header>
		<div class="page-content"> <p>This page may have been moved or deleted. Be sure to check your spelling.</p></div>
		<a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="<?php echo $url_path_f?>index.php">Back To Home</a>
	</section>
</div>
<?php include('include/footer.php');?>