<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js"> <![endif]-->

<head id="header">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<meta name="theme-color" content="#000000">
	<meta name="msapplication-navbutton-color" content="#000000">
	<meta name="apple-mobile-web-app-status-bar-style" content="#000000">

	<title>
		<?php wp_title();?>
	</title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/favicon.png" />

	<link href="https://fonts.googleapis.com/css?family=Ek+Mukta:300,400|Josefin+Sans:400,400i,600,700" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:800,600,500,400,200" rel="stylesheet">

	<?php wp_head();?>

</head>

<body <?php body_class($class);?>>

	<header id="header">
        <!-- Static navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">


                    <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri() ; ?>/assets/images/silcoates_logo.jpg" alt="" width="270"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">


                    <?php
                    wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 3,
                            'container'         => 'div',
                            'container_class'   => 'nav navbar-nav navbar-right',
                            'container_id'      => 'main-menu',
                            'menu_class'        => 'nav navbar-nav navbar-right',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                    );

                    ?>



                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
        <div class="book-wrapper pull-right">
            <a title="" href="<?php echo site_url().'/' ?>">
                <span class="book">Book a Visit</span>
            </a>
        </div>

        <!-- mobile menu -->
        <div id="page">

            <div class="mh-head Sticky">
				<span class="mh-btns-left" id="bars">
					<span class="mh-text">Menu</span>
					<a href="#menu" >
                        <div class="click close">
                            <b></b>
                            <b></b>
                            <b></b>
                            <i></i>
                            <i></i>

                      </div>
                    </a>
                    <!-- <a class="mh-hamburger" href="#menu"></a> -->
				</span>

            </div>

        </div>
        <nav id="menu">


                <p>Welcome to the advanced menu.<br />


            <?php
            wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             =>3,
                    'container'         => 'ul',

                )
            );

            ?>
        </nav><!-- end mobile menu -->



	</header>

	<div class="clearfix"></div>

	
 <section class="wrapper">