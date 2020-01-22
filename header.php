<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv=" X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <h1>課題電子ビジネス専門学校（課題）</h1>
    <?php
    $args = [
        'theme_location' => 'header-navi',
        'container'       => 'nav',
        'container_class' => 'navbar navbar-expand-sm navbar-light bg-light',
        'menu_class' => 'navbar-nav mr-auto mt-2 mt-lg-0'
    ];
    wp_nav_menu($args);
    ?>
    