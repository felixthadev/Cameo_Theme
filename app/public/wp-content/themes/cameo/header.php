<?php
/**
 * Header template
 * 
 * @package Udemy
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php 
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
}

?>

    <div class="site" id="page">
    
        <Header class="site-header" id="masthead" role="banner">
            <?php get_template_part( 'template-parts/header/nav' ); ?>
        </Header>

        <div id="content" class="site-content">
           