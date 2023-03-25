<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/images/icon.png' ?>" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body class="page grey darken-4 grey-text text-lighten-5">
<header id="header">
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper container">
                <a href="#header" class="brand-logo">КСП</a>
                <?php /*
                <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#"></a></li>
                    <li><a href="#">Article</a></li>
                    <li><a href="#">JS</a></li>
                    <li><a href="#">PHP</a></li>
                </ul>
                */ ?>
            </div>
        </nav>
    </div>
    <?php /*
    <ul class="sidenav" id="mobile-menu">
        <li><a href="articles.html">Articles</a></li>
        <li><a href="article.html">Article</a></li>
        <li><a href="#">JS</a></li>
        <li><a href="#">PHP</a></li>
    </ul>
    */ ?>
</header>