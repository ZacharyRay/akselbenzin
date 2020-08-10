<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?= bloginfo('name'); ?></title>
    <style type="text/css">    @font-face{
        font-family:"DIN W01 Cond Black";
        src:url("Fonts/5425695/c71fe0d4-b93a-4c1e-adad-db17a9cd77d4.eot?#iefix");
        src:url("Fonts/5425695/c71fe0d4-b93a-4c1e-adad-db17a9cd77d4.eot?#iefix") format("eot"),url("Fonts/5425695/9c8aa9fd-ae90-4994-bde8-5f2e9cde87f5.woff2") format("woff2"),url("Fonts/5425695/2b2ab75c-c539-41c2-a6a2-3317e206a0c8.woff") format("woff"),url("Fonts/5425695/47e45063-139c-466f-bf4d-6a76e9159ebd.ttf") format("truetype");
    }
    </style>  	
	<?php wp_head(); ?>
</head>
<body>
<header class="main-wrapper">
<nav #nav>

    <!-- mobile menu -->
    <div class="mobile_menu_wrapper">
        <div class="mobile_navigation">
           <div class="mobile_logo">
               <?php if ( function_exists( 'the_custom_logo' ) ) {
                   the_custom_logo();
               } ?>
           </div>
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>

                 <ul id="menu">
                     <?php   wp_nav_menu(
                         array(
                             'theme_location' => 'main-mobile'
                         )
                     ); ?>
                  </ul>
            </div>
        </div>
    </div>


    <!-- Desktop menu  -->

    <div class="desktop_menu">
        <div class="top_bar">
            <?php   wp_nav_menu(
                array(
                    'theme_location' => 'main-top'
                )
            ); ?>
        </div>
        <div class="menu_wrapper">
            <header class="logo_bar">
                <div class="mobile_logo">
                    <?php if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    } ?>
                </div>
                <p>24 timers service / 38 12 48 00</p>
            </header>

            <div class="main_menu">
                <?php   wp_nav_menu(
                    array(
                        'theme_location' => 'main'
                    )
                ); ?>
            </div>
        </div>
    </div>


</nav>

    <!-- Modal -->
    <div class="bg" id="bg-grey"></div>
    <div class="modal_wrap">
        <div class="modal">
            <div class="modal_news_grid">
                <div class="modal_image">
                    <div class="button_close_wrap"><button type="button" class="js-close-modal" id="btn-close">&#10005</button></div>
                    <div class="modal_text_wrap">
                        <h1>HOLD DIG OPDATERET</h1>
                        <h4>Få vores e-nyhedsbrev med produktnyheder til hele råstofindustrien og miljøsektores.</h4>
                        <h4>Tilmeld dig her.</h4>
                        <form class="type_email_wrapper" action="">
                            <input class="type_email" type="text" name="Your email" value="Indtast din e-mail her...">
                            <button class="email_send" type="submit">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="content-grid">
