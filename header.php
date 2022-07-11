<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./inc/img/logos/favicon.png" type="image/x-icon">
    <title>Blog de la Promo 122 | Accueil</title>
    <?php wp_head(); ?>
</head>

<body class="body-promo">
    <header>
        <div class="full-size-header">
            <div class="row-limit-size flex-between margin-auto">
                <figure class="header-figure"><a href="http://localhost/blogpromo/"><img
                            src="<?php echo get_template_directory_uri() ?>/inc/img/logos/logo_v1_negatif.png" alt="Logo de la Promo 122"
                            class="header-logo"></a></figure>
                <nav class="grow-basis header-nav" id="header-nav">
                    <!-- <ul class="flex-around header-nav-list">
                        <li class="header-nav-li grow-basis"><a href="./index.html" class="header-nav-lien">Accueil</a></li>
                        <li class="header-nav-li grow-basis"><a href="./blog.html" class="header-nav-lien">Blog</a></li>
                        <li class="header-nav-li grow-basis"><a href="./team.html" class="header-nav-lien">Notre equipe</a>
                        </li>
                    </ul> --> 
                    <?php wp_nav_menu(array(
                        'theme_location' => 'navHeader',
                        'container' => 'ul',
                        'menu_class' => 'flex-around header-nav-list',
                        'add_li_class' => 'header-nav-li grow-basis',
                        'link_class' => 'header-nav-lien'
                    ))?>
                </nav>
               
                <div class="grow-basis header-form-container">
                    <form action="#" method="POST" class="flex-between">
                        <input type="text" name="search" class="header-input grow-basis">
                        <input type="image" src="<?php echo get_template_directory_uri() ?>/inc/img/icons/search.png" class="header-submit">
                    </form>
                </div>
                <div class="header-burger-container" id="burger-container">
                    <div class="menu-button" id="menu-button-top"></div>
                    <div class="menu-button" id="menu-button-center"></div>
                    <div class="menu-button" id="menu-button-bottom"></div>
                </div>
            </div>
        </div>
            
        <nav class="header-nav-burger" id="header-nav-burger">
            <ul class="flex-around header-nav-list">
                <li class="header-nav-li"><a href="./index.html" class="header-nav-lien">Accueil</a></li>
                <li class="header-nav-li"><a href="./blog.html" class="header-nav-lien">Blog</a></li>
                <li class="header-nav-li"><a href="./team.html" class="header-nav-lien">Notre equipe</a></li>
            </ul>
        </nav>
    </header>

    