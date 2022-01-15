
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $url_path_f?>favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $url_path_f?>favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $url_path_f?>favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $url_path_f?>favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $url_path_f?>favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $url_path_f?>favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $url_path_f?>favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $url_path_f?>favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url_path_f?>favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $url_path_f?>favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $url_path_f?>favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $url_path_f?>favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url_path_f?>favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo $url_path_f?>favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo $url_path_f?>favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<link rel="stylesheet" type="text/css" href="<?php echo $url_path_f?>css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $url_path_f?>css/animate.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $url_path_f?>css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url_path_f?>css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $url_path_f?>css/themify-icons.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $url_path_f?>css/flaticon.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $url_path_f?>revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url_path_f?>revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url_path_f?>css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url_path_f?>css/twentytwenty.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $url_path_f?>css/shortcodes.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $url_path_f?>css/main.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $url_path_f?>css/responsive.css"/>
<?php
	include('database.php');
	$query_dis = "select themecolor from indexpage";
	$result_dis = mysqli_query($mysqli,$query_dis);

	if($row = mysqli_fetch_array($result_dis))
	{
	extract($row);
	$finalthemecolor = $themecolor;
	}	
	if($themecolor == "Pink")
	{	  
	?>
	<link href="<?php echo $url_path_f?>css/style-pink.css" rel="stylesheet" id="option_color">
	<?php
	}
	if($themecolor == "Green")
	{
	?>
	<link href="<?php echo $url_path_f?>css/style-yellow-green.css" rel="stylesheet" id="option_color">
	<?php
	}
	if($themecolor == "Orange")
	{
	?>
	<link href="<?php echo $url_path_f?>css/style-orange.css" rel="stylesheet" id="option_color">
	<?php
	}
	if($themecolor == "Jade Green")
	{
	?>
	<link href="<?php echo $url_path_f?>css/style-jade-green.css" rel="stylesheet" id="option_color">
	<?php
	}
	if($themecolor == "Blue")
	{
	?>
	<link href="<?php echo $url_path_f?>css/style-blue.css" rel="stylesheet" id="option_color">
	<?php
	} 
	if($themecolor == "Purple")
	{
	?>
	<link href="<?php echo $url_path_f?>css/style-purple.css" rel="stylesheet" id="option_color">
	<?php
	}
	if($themecolor == "Yellow")
	{
	?>
	<link href="<?php echo $url_path_f?>css/style-yellow.css" rel="stylesheet" id="option_color">
	<?php
	}
	?>
</head>
<body>
<div class="page">
	<header id="masthead" class="header ttm-header-style-classicinfo">
		<?php
			$query_dis = "select * from contactus";
			$result_dis = mysqli_query($mysqli,$query_dis);
			if($row = mysqli_fetch_array($result_dis))
			{
				extract($row);
			}	
		?>
		<div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
			<div class="container">
				<div class="ttm-topbar-content">
					<ul class="top-contact text-left">
						<li><i class="themifyicon ti-email"></i><a href="mailto:<?php echo $emailid?>?subject=Inquiry"><?php echo $emailid?></a></li>
						<li><i class="themifyicon ti-mobile"></i><a href="tel:<?php echo $mobileno;?>"><?php echo $mobileno?></a></li>
					</ul>
					<div class="topbar-right text-right">
						<div class="ttm-social-links-wrapper list-inline">
							<ul class="social-icons">
								<?php
								  if(!empty($facebook)){
								?>
								<li><a href="<?php echo $facebook;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<?php
								  }if(!empty($twitter)){
								?>
								<li><a href="<?php echo $twitter;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
							    <?php
								 }if(!empty($linkedin)){
								?>
								<li><a href="<?php echo $linkedin;?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							    <?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			$query_index = "select * from indexpage";
			$result_index = mysqli_query($mysqli,$query_index);
			if($indexrow = mysqli_fetch_array($result_index))
			{
				extract($indexrow);
				$finalservicemenu = $servicemenu;
			}	
		?>
		<div class="ttm-header-wrap">
			<div id="ttm-stickable-header-w" class="ttm-stickable-header-w ttm-bgcolor-white clearfix">
				<div id="site-header-menu" class="site-header-menu">
					<div class="site-header-menu-inner ttm-stickable-header">
						<div class="container">
							<div class="site-branding">
								<a class="home-link" href="<?php echo $url_path_f?>index.php" title="" rel="home">
									<img id="logo-img" class="img-center" src="<?php echo $url_path_f?>webadmintechno/dbimages/<?php echo $indexrow['logo'];?>" alt="<?php echo $lalttag;?>" title="<?php echo $ltitle;?>" longdesc="<?php echo $ldescrption;?>">
								    <!--<h3 style="padding-top: 30px;">Ved PVC Wall Panel</h3>-->
								</a>
							</div>
							<div id="site-navigation" class="site-navigation">
								<div class="ttm-menu-toggle">
									<input type="checkbox" id="menu-toggle-form" />
									<label for="menu-toggle-form" class="ttm-menu-toggle-block">
										<span class="toggle-block toggle-blocks-1"></span>
										<span class="toggle-block toggle-blocks-2"></span>
										<span class="toggle-block toggle-blocks-3"></span>
									</label>
								</div>
								<nav id="menu" class="menu">
									<?php 
										$actual_link = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
									?>
									<ul class="dropdown">
									    <li <?php if($actual_link=="index.php"){?>class="active"<?php } ?>><a href="<?php echo $url_path_f?>index.php">Home</a></li>
										<li <?php if($actual_link=="about-us.php"){?>class="active"<?php } ?>><a href="<?php echo $url_path_f?>about-us.php">About Us</a></li>
										<li <?php if(($actual_link=="services.php") || ($actual_link == "serviceview.php") || ($actual_link == "service-view.php")){?>class="active"<?php } ?> class="ab">
										<a href="<?php echo $url_path_f?>services.php"><?php echo $finalservicemenu?></a>
											<ul>
												<?php
													$query_dis1 = "select servicename,serviceid from services order by rank asc ";
													$result_dis1 = mysqli_query($mysqli,$query_dis1);
													while($row1 = mysqli_fetch_array($result_dis1))
													{
														extract($row1);
														$fservicename = str_replace(" ","-",$servicename);

														$link=$url_path_f."product/$serviceid/$fservicename";		
														
														$query_dis = "select subservicename,subserviceid from subservices where serviceid=$serviceid order by rank asc limit 7";
														$result_dis = mysqli_query($mysqli,$query_dis);
														$numservice = mysqli_num_rows($result_dis);
												?>
												<li class="ab"><a href="<?php echo $link;?>"><?php echo $servicename;?></a>
													<?php
														if($numservice > 0) {
													?>
													<ul>
														<?php		
															while($row = mysqli_fetch_array($result_dis))
															{
																extract($row);
																
																$fsubservicename = str_replace(" ","-",$subservicename);
																$link1=$url_path_f."productview/$subserviceid/$fsubservicename";		
																
																$query_dis_p = "select prosubservicename,prosubserviceid from subservices_sub where subserviceid=$subserviceid limit 6";
																$result_dis_p = mysqli_query($mysqli,$query_dis_p);
																$numservice1 = mysqli_num_rows($result_dis_p);										
														?>
														<li class="ab"><a href="<?php echo $link1;?>"><?php echo $subservicename;?></a></li>
														<?php
															}
														?>
														
													</ul>
													<?php
														}
													?>
												</li>
												<?php
													}
												?>
											</ul>
										</li>
										<li <?php if(($actual_link=="blog.php") || ($actual_link == "blogview.php")){?>class="active"<?php } ?>><a href="<?php echo $url_path_f?>blog.php">Blog</a></li>
									    <li class="ab" <?php if(($actual_link=="gallery.php") || ($actual_link == "video.php")){?>class="active"<?php } ?>><a href="<?php echo $url_path_f?>gallery.php">Gallery</a>
											<ul>
												<li><a href="<?php echo $url_path_f?>gallery.php">Gallery</a></li>
												<li><a href="<?php echo $url_path_f?>design.php">Design</a></li>
												
											</ul>
										</li>
										<li <?php if($actual_link=="contact-us.php"){?>class="active"<?php } ?>><a href="<?php echo $url_path_f?>contact-us.php">Contact Us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>