<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safat Alnur Portfolio</title>
    <script src="https://kit.fontawesome.com/11d88d03e3.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<?php
    $postname_classes = $post->post_name . '-custom-class';
    if(is_front_page()):
        $special_classes = array($postname_classes,'alnur-class', 'special-class');
    else:
        $special_classes = array($postname_classes, 'non-home-class');
    endif; 
    // if(isset ($post)):
    //     $alnur_classes = $post->post_name . '-custom-class';
    // endif;
?>
<body <?php body_class($special_classes);?>>
    <!-- <?php var_dump(get_custom_header());?> -->

    <!-- Adding Bootstrap 5.3.0 navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <!-- Adding header image inside header section -->
                <img src="<?php header_image();?>" width=<?php echo get_custom_header()->width;?> height=<?php echo get_custom_header()->height; ?> alt="Safat Alnur logo black">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <!-- <?php wp_nav_menu( array (
                    'theme_location'  => 'primary-menu',  // Use the registered menu location
                    'menu'            => '', // Use a specific menu ID if needed
                    'container'       => 'nav', // Wrap the menu in a <nav> tag
                    'container_class' => 'primary-navigation', // Add a CSS class to the container
                    'menu_class'      => 'nav-menu', // Add a CSS class to the menu UL
                    'menu_id'         => 'main-menu', // Add an ID to the menu UL
                    'echo'            => true, // Whether to output the menu directly
                    'fallback_cb'     => 'wp_page_menu', // Fallback if no menu is set
                    'link_before' => '<span class="menu-icon"></span>',
                    'link_after'      => '', // Text after link text
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', // Custom wrapping structure
                    'depth'           => 2, // Define menu depth (nested levels)
                    'walker'          => '' // Custom walker class for advanced styling
                    )); 
                ?> -->
                <?php 
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'       => 'nav', // Wrap the menu in a <nav> tag
                    'container_class' => 'primary-navigation', // Add a CSS class to the container
                    'menu_class'      => 'nav-menu', // Add a CSS class to the menu UL
                    'menu_id'         => 'main-menu', // Add an ID to the menu UL
                    'link_before' => '<span class="menu-icon"></span>',
                    'link_after'      => '', // Text after link text
                ));
                ?>
                <!-- <?php
                    $menu_items = wp_get_nav_menu_items('Main Navigation');
                    foreach($menu_items as $items) { ?>
                        <a href=""><?php $items->title;?></a>
                    <?php }
                ?> -->

            </div>
            </div>
        </div>
    </nav>

    <!-- <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->

