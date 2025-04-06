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
    <?php wp_nav_menu( array (
        'theme_location' => 'primary'
    )); 
    ?>
    <!-- Adding header image inside header section -->
         <!-- <?php var_dump(get_custom_header());?> -->
    <img src="<?php header_image();?>" width=<?php echo get_custom_header()->width;?> height=<?php echo get_custom_header()->height; ?> alt="Safat Alnur logo black">
