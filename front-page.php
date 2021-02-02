<?php get_header() ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="container-fluid">
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 754 89">
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

                </div>

<div class="container">
<h1>Qu'est ce que sont les méthodes</h1>
<p>La méthodologie est l'étude de l'ensemble des méthodes scientifiques. Elle peut être considérée comme la science de la méthode, ou « méthode des méthodes ». Wikipédia</p>
</div>



                <a href="<?= get_post_type_archive_link('post') ?>" class="btn btn-primary">Voir les archives</a>


<div class="container-fluid">
<?php endwhile;
endif;
wp_reset_postdata(); ?>
</div>



<?php get_footer() ?>