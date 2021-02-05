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


            <svg xmlns="http://www.w3.org/2000/svg" width="775" height="123" viewBox="0 0 775 123">
                <a href=<?= get_home_url() ?>>
                    <style type="text/css">
                        a:link {
                            text-decoration: none;
                        }
                    </style>
                    <g id="Groupe_6" data-name="Groupe 6" transform="translate(-928 -213)">
                        <text id="PPRENDRE_OMMENCER" data-name="PPRENDRE  &amp;    OMMENCER" transform="translate(980 294)" font-size="58" font-family="FuturaBT-Light, Futura Lt BT" font-weight="300">
                            <tspan x="0" y="0" letter-spacing="-0.005em">P</tspan>
                            <tspan y="0">PRENDRE</tspan>
                            <tspan y="0" xml:space="preserve" font-family="BodoniMT, Bodoni MT" font-weight="400"> </tspan>
                            <tspan y="0" font-size="72">&amp; </tspan>
                            <tspan y="0" xml:space="preserve" font-family="BodoniMT, Bodoni MT" font-weight="400"> </tspan>
                            <tspan y="0">OMMENCER</tspan>
                        </text>
                        <text id="C" transform="translate(1338 307)" fill="#fc0d0b" font-size="102" font-family="BodoniMT, Bodoni MT">
                            <tspan x="0" y="0">C</tspan>
                        </text>
                        <text id="A" transform="translate(928 307)" fill="#0800e8" font-size="102" font-family="BodoniMT, Bodoni MT">
                            <tspan x="0" y="0">A</tspan>
                        </text>
                    </g>
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