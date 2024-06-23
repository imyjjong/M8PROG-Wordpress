<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <script src="846de9e07b.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="header">
    <div class="headerNavigation">
        <div class="headerNavigation__logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </div>
        <?php 
        wp_nav_menu(
            [
                'menu'            => 'header',
                'link_before'     => '',
                'link_after'      => '',
                'menu_class'      => 'headerNavigation__menu',
                'container'       => 'div',
                'container_class' => 'headerNavigation__menu--items',
                'container_id'    => 'navbarSupportedContent',
                'add_li_class'    => 'headerNavigation__menu--items-item',
                'add_a_class'     => 'headerNavigation__menu--items-link',
            ]
        );
        ?>
    </div>
</nav>

