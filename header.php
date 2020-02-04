<?php
/**
* The header for our theme
*/
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo( ‘charset’ ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Agency Template</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="blue">
                <img src="<?php echo get_template_directory_uri(); ?>img/header-shepe-blue.png" alt="">
            </div>
            <div class="white">
                <img src="<?php echo get_template_directory_uri(); ?>img/header-shepe-white.png" alt="">
            </div>
            <div class="container">
                <img class="shepe1" src="/<?php echo get_template_directory_uri(); ?>img/shepe1.png" alt="">
                <img class="shepe2" src="<?php echo get_template_directory_uri(); ?>img/shepe2.png" alt="">
                <img class="shepe3" src="<?php echo get_template_directory_uri(); ?>img/shepe2.png" alt="">
                <img class="shepe4" src="<?php echo get_template_directory_uri(); ?>img/shepe2.png" alt="">
                <img class="shepe5" src="<?php echo get_template_directory_uri(); ?>img/shepe1.png" alt="">
                <img class="shepe6" src="<?php echo get_template_directory_uri(); ?>img/shepe2.png" alt="">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="logo">
                            <?php
                            function theme_prefix_the_custom_logo() {
                                    if ( function_exists( 'the_custom_logo' ) ) {
                                        the_custom_logo();
                                    }

                                }
                    ?>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="menu">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'nav navbar-nav'
                            ) );
                           ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php 
                    global $post;
                    $args = array('post_per_page'=>'2','post_type'=>'header');
                    $myposts = get_posts($args);
                    foreach ($myposts as $posts):setup_postdata( $post ); ?>
                    <div class="col-md-12">
                        <div class="header-text">
                            <h1><?php the_title(); ?></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <br> nostrud exercitation</p>
                            <button>Read More</button>
                            <button>Explore</button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="another-text">
                            <h3>Three Simple Steps</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>