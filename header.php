<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <title>

        <?php wp_title('|','true','right') ?>

        <?php bloginfo('name'); ?>

    </title>

    <!-- Stylesheets -->

    <?php wp_head(); ?>

    <link rel="shortcut icon" href="<?=get_option('gsa_favicon_img')?>" id="fav-shortcut" type="image/x-icon">

    <link rel="icon" href="<?=get_option('gsa_favicon_img')?>" id="fav-icon" type="image/x-icon">

    <!-- Responsive Settings -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

	<header class="main-header">

		<nav class="navbar navbar-expand-lg navigation-menu">

		  	<div class="container-fluid">

		    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

		      		<img src="<?= gsa_URL.'assets/img/menu.svg' ?>">

		    	</button>
		    	<a href="<?php bloginfo('url')?>" class="logo-mobile"><img src="<?=get_option('gsa_header_logo_img');?>"></a>

		    	<div class="collapse navbar-collapse justify-content-around" id="navbarNav">

		    		<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>

                    <?php gsa_menu_left();?>

                    <?php else: ?>

                    <?php gsa_menu_left_arabic();?>

                    <?php endif; ?> 
 
				   

				    <a href="<?php bloginfo('url')?>" class="logo"><img src="<?=get_option('gsa_header_logo_img');?>"></a>
				    <a href="<?php bloginfo('url')?>" class="logo-sticky"><img src="<?=get_option('gsa_sticky_logo_img');?>"></a>

				    <?php if ( ICL_LANGUAGE_CODE=='en' ) :?>

                    <?php gsa_menu_right();?>

                    <?php else: ?>

                    <?php gsa_menu_right_arabic();?>

                    <?php endif; ?> 

				</div>

		    </div>

		</nav>

	</header>