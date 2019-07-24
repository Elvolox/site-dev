<!doctype html>

<html <?php language_attributes();?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Seçãp dos modulos .css utilizados no projeto-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/iconfont.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/slick/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/plugins.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/responsive.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    

    <!--<title>Bino</title>-->

    <?php wp_head(); ?>

</head>

<!--Menu Fixo Efeito e responsivo com o menu Hamburger-->
<body data-spy="scroll" data-target=".navbar-collapse">

    <div class='preloader'>
        <div class='loaded'>&nbsp;</div>
    </div>
    <div class="culmn">
        <header id="main_menu" class="header navbar-fixed-top">
            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu">
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#home">
                                        <?php
          
                                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                                            $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );
                                            if ( has_custom_logo() ) {
                                                echo '<img src="' . esc_url( $logo[0] ) . '" class="img-fluid">';
                                            } else {
                                                echo '<h1>' . get_bloginfo('name') . '</h1>';
                                                echo '<p class="lead">' . get_bloginfo('description') . '</p>';
                                            }
                                            
                                            ?>
                                        </a>
                                    </div>

                                    



                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#home">HOME</a></li>
                                            <li><a href="#portfolio">PORTFOLIO</a></li>
                                            <li><a href="#blog">BLOG</a></li>

                                        </ul>


                                    </div>

                                </div>
                            </nav>
                        </div>
                    </div>

                </div>

            </div>
        </header>
<!--Fim do Menu Fixo Efeito e responsivo com o menu Hamburger-->