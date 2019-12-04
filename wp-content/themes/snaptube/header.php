<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<title><?php wp_title(); ?></title>
 <meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>./images/favicon.ico">


<?php wp_head(); ?>
</head>

<body <?php body_class();?> >
<!--===================================-->
<!--============= HEADER ==============-->
<!--===================================-->
<header class="header">
    <div class="container">
        <div class="tableLayout">
            <div class="logoBox">
                <?php
                $logo=new WP_Query(array(
                    'post_type'=>'logo',
                    'post_per_page'=>1
                ));
                if($logo->have_posts()):
                    $logo->the_post();
                ?>

                <a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>
"><?php the_post_thumbnail('logo-thumb');?><!-- <img src="images/logo.png" alt="Logo"> --></a>
                <?php
                    else:
                ?>
                <p><?php esc_html_e( 'Sorry, no posts logo your criteria.' ); ?></p>
                <?php
                    endif;
                ?>
            </div>
            <div class="searchBox">
                <form  role="search" class="searchForm" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                    <input type="search" name="s" id="search" value="<?php the_search_query();?>" placeholder="Search">
                </form>
            </div>
            <div class="socialBox">        
                <ul>
                    <li><a class="pinterest" href="http://pinterest.com"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                    <li><a class="g-plus" href="http://plus.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a class="facebook" href="http://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a class="twitter" href="http://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a class="userBtn" href="#loginPop"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                    <li class="menuBtn"><a href="JavaScript:;"><span>&nbsp;</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>