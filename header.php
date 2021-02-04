<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprendre & Commencer</title>
    <?php wp_head() ?>
    <!--permet d'inclure toutes les fonctions en en-tête -->
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container-fluid">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1508 89">
            <a href=<?= get_home_url() ?>>
                <text id="APPRENDRE_COMMENCER" data-name="APPRENDRE &amp; COMMENCER" transform="translate(0 69)" fill="#0800e8" font-size="72" font-family="BodoniMT, Bodoni MT">
                    <tspan x="0" y="0">A</tspan>
                    <tspan y="0" font-size="58" font-family="FuturaBT-Light, Futura Lt BT" font-weight="300" fill="#000">PPRENDRE</tspan>
                    <tspan y="0" font-size="58" fill="#000"> </tspan>
                    <tspan y="0" font-family="FuturaBT-Light, Futura Lt BT" font-weight="300" fill="#000">&amp;</tspan>
                    <tspan y="0" font-size="58" fill="#000"> </tspan>
                    <tspan y="0" fill="#fc0d0b">C</tspan>
                    <tspan y="0" font-size="58" font-family="FuturaBT-Light, Futura Lt BT" font-weight="300" fill="#000">OMMENCER</tspan>
                </text>
            </svg>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => false,
                    'menu_class' => 'navbar-nav mr-auto',
                ]) ?>
            </div>
        </div>
    </nav>


    <div class="container">