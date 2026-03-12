<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php bloginfo('name'); ?></title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="site-header">

    <div class="container">

        <div class="site-branding">
    <?php if (has_custom_logo()) : ?>
        <div class="site-logo">
            <?php the_custom_logo(); ?>
        </div>
    <?php else : ?>
        <h1 class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </h1>
    <?php endif; ?>
</div>

        <nav class="site-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary'
            ));
            ?>
        </nav>

    </div>

</header>