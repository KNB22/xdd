<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
<title>Thank You Page</title>
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
						<h1 class="title">Thank You Page</h1>
					</div>
					<div class="breadcrumb-wrapper">
						<div class="container">
							<div class="breadcrumb-wrapper-inner">
								<span>
									<a title="Go to Delmont." href="<?php echo $url_path_f?>index.php" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
								</span>
								<span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
								<span>Thank You Page</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>                      
</div>
<div class="site-main">
	<section class="error-404" style="background-image: none;padding: 0px 0;">
		<div class="ttm-big-icon">
			<img src="<?php echo $url_path_f?>images/smile.jpg">
		</div>
		<header class="page-header"><h1 class="page-title" style="font-size: 38px;">Thank you for contact us !! <br><br>Your message sent successfully.</h1></header>
	
	</section>
</div>
<?php include('include/footer.php');?>