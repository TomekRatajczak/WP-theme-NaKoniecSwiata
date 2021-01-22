<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Na koniec świata - turystyka ekstramalna</title>
    <meta name="description"
        content="Jedyne takie biuro podróży w Polsce. Zabierzemy cię w ekstremalną podróż do nadzikszych rejonów na naszej kuli ziemskiej. Pakuj plecak i ruszaj z nami w drogę.">
    <meta name="keywords" content="turystyka, ekstermalna, globetrotter, nepal, azja, ...">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/main.css">

    <script src="<?php echo NAKONIECSWIATA_THEME_URL ?>script/script.js"></script>
</head>

<body>
    <header>
        <div class="single-page-nav-bar-container">
            <div class="nav-option-logo">
                <img class="nav-option-logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/compass.svg" alt="logo">
                    <p class="nav-option-logo-txt">Na koniec Świata</p>
            </div>
            <div class="nav-menu">        
                <nav>
                    <?php wp_nav_menu(array( 
                        'name' => 'Menu Główne',
                        'menu_class' => 'nav-menu-list',
                     ));?>
                </nav>
            </div>
            <div class="single-page-nav-hero">
                <img class="single-page-nav-hero-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero.jpg" alt="scotland">
            </div>
            <form class="nav-form">
                <input class="nav-form-input" type="text" id="person" value="liczba uczestników">
                <input class="nav-form-input" type="text" id="place" value="cel podróży">
                <input class="nav-form-input" type="date" id="start" value="data wylotu">
                <input class="nav-form-input" type="date" id="stop" value="data powrotu">
                <input class="nav-form-button button" type="submit" value="Wyszukaj">
            </form>
        </div>
    </header>