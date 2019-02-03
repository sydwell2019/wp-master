<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php bloginfo('name');  ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?> >
<div >
    <h1> 
        <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    </h1>
    <h5> <?php bloginfo('description'); 
               echo ('Coded in header.php'); ?> </h5>
    <hr>
    <!-- Tha actual location of our primary menu -->
  
    <nav class="site-nav">
        <?php 
            $args = array('theme_location' => 'primary');
        ?>
        <?php wp_nav_menu($args); ?>
    </nav>
 