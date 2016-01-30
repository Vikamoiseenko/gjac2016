<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
<!-- begin meta -->
<meta name="viewport" content="user-scalablo=no, initial-scale=1.0, maximum-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- end meta -->

<!--Favicon -->


<!--Favicon -->

<!-- begin style -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="<?php bloginfo('template_directory'); ?>/flexslider.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap-social.css" rel="stylesheet">

<!-- end style -->

<!-- Start WP head -->
<?php wp_head(); ?>
<!-- End wp head -->
</head>
<body <?php body_class(); ?>>

<!-- Begin HEADER -->
<div id="header-conteiner">
<div class="container">
<div class="row">
<div id="logo" class="col-lg-8 col-md-8 col-xs-12">
<a href="<?php echo get_settings('home'); ?>" title="Link to Washinghton Junior Golf Association">
<img id="mainLogo" class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/GJAC2-Logo-Vector.jpg" />
</a>
<a class="navbar-brand-desktop" href="<?php echo esc_url( home_url() ); ?>">Girls Junior Americas Cup</a>
</div><!-- end logo -->
<div id="utilities-header" class="col-lg-4 col-md-4">
<!-- Begin Social  Icon-->
<div id="social-header" >
<a href="#"><i class="fa fa-envelope-o fa-2x"></i></a>
<a href="#" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
</div> <!-- end social icon -->
<!--<div id="link2">
<ul>
<li><a href="#">Contact</a></li>
</ul>
</div>-->
</div> <!-- end utiliti menu -->

<!-- begin search form -->
<div id="search" class="col-lg-4 col-md-4 col-xs-12">
<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>/">
<input type="text" value="<?php echo get_search_query(); ?>" placeholder="Search" name="s" id="s" />
	<button type="submit" class="add-on"><i class="fa fa-search"></i></button>
<!-- <input type="submit" id="searchsubmit" value="" /> -->
</form> <!-- end search form -->
</div>		
</div>	<!-- closed div .row -->
</div>	<!-- closed div .container -->
<!-- Begin new Navigation -->	
<div id="navigation">	
<div class="navbar navbar-default navbar-static-top" role="navigation">
                       
                    <div class="container">

                        <div class="navbar-header">
                            <a data-toggle="collapse" href=".main-menu-select" aria-expanded="true" aria-controls="collapseOne">
                                <button type="button" class="navbar-toggle collapsed">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </a>
                        </div><!--/navbar-header-->
	
<div class="main-menu-select navbar-collapse collapse" id="main-menu-select">
                            <ul class="nav navbar-nav">
                                 <?php
                                    wp_nav_menu( array(
                                        'menu'              => 'Main',                
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse main-menu-select',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker'            => new wp_bootstrap_navwalker())
                                    );
                                ?>
                            </ul>
                        </div><!--/.nav-collapse -->	
	</div>
	</div>
	</div>
</div> <!--end header -->
	
<!-- END MAIN NAVIGATION -->
			
 <div class="container">