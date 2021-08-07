<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<?php if ( is_page('Front') ): ?>
    <!-- Front page without header -->
    <body <?php body_class(); ?>>

<?php else : ?>
    <!-- Other pages with header -->
    <body <?php body_class(); ?>>
        
        <!-- <div class="page" id="page"> -->
            <header class="site-header">
            
                <div class="header-upper">
    
                    <?php the_custom_logo(); ?>

                    <h1><a class="site-title" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>

                    <div class="main-menu-wrapper">
                    
                        <i class="fas fa-bars" id="mainMenuSlideBtn"></i>    

                        <!-- Main Menu Location -->
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'menu-main',
                                'menu_class' => 'main-menu',
                                'link_before' => '<span>',
                                'link_after' => '</span>',
                            )); 
                        ?>

                    </div>
                
                </div>

                <!-- Main Menu Location // This is for slidein -->
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-main',
                        'menu_class' => 'main-menu-slide close',
                        'link_before' => '<span>',
                        'link_after' => '</span>',
                    )); 
                ?>

                <!-- Featured and About pages without Category Menu and Search -->
                <?php if ( !is_page('About') && !is_page('Featured') ): ?>
                    <div class="header-lower">

                        <!-- Category Menu Location -->
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'menu-category',
                                'container' => 'nav',
                                'container_class' => 'category-menu-container',
                                'menu_class' => 'category-menu',
                            )); 
                        ?>

                        <?php get_search_form(); ?>

                    </div>
                <?php endif; ?>

            </header>

<?php endif; ?>

    <main id="main" class="site-main">

