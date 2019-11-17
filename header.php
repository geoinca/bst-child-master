<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php b4st_navbar_before(); ?>
    <header>
        <div class="name">
            <span>T</span><span>O</span><span>A</span><span>S</span><span>T</span><span>Y</span>
        </div>
        <div class="opening-hours">Open Sunday to Friday 10AM - 8PM. Closed on Mondays.</div>
        <div class="location">
            <p>880 Toast Street, Avocado, NY 23511</p>
            <p>(233) 323 3444</p>
        </div>
        <div class="special-announcements"></div>
    </header>
    <nav id="navbar" class="navbar navbar-expand-md navbar-light bg-light legend">
        <div class="container">
            <div class="namehidden">
                <span>T</span><span>O</span><span>A</span><span>S</span><span>T</span><span>Y</span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarDropdown">
                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'navbar',
                    'container'       => false,
                    'menu_class'      => '',
                    'fallback_cb'     => '__return_false',
                    'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
                    'depth'           => 2,
                    'walker'          => new b4st_walker_nav_menu()
                ));
                ?>

                <?php b4st_navbar_search(); ?>
            </div>

        </div>
    </nav>

    <?php b4st_navbar_after(); ?>