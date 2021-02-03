<?php get_header() ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                

                <div class="container mt-4">
                        <h1>Contexte entreprenarial en France en 2021</h1>
                        <p>21% des Français (soit 11 millions de personnes) déclarent avoir envie de créer une entreprise, d’en reprendre une ou de se mettre à leur compte en 2021. 58% d’entre eux (3,7 millions de personnes) déclarent vouloir concrétiser leur projet dans les deux ans à venir, soit une augmentation de 4 points par rapport à janvier 2020
                        Des futurs entrepreneurs bien préparés. 34% des entrepreneurs potentiels déclarent cette année avoir un projet bien préparé à court terme, soit une augmentation de 3 points par rapport à la précédente édition du baromètre. Ce sont ainsi 7% des Français qui ont un projet d’entrepreneuriat prêt à débuter dans les deux ans. Autre signal positif, cette proportion reste dans la moyenne observée au cours des années passées (entre 5% et 7% depuis 2016). Des jeunes toujours séduits par l’aventure entrepreneuriale. Le baromètre démontre également le maintien de l’intérêt des jeunes pour les perspectives d’entrepreneuriat, et ce même avant leur entrée sur le marché du travail. Ce sont ainsi 36% des étudiants qui déclarent vouloir créer leur entreprise en 2021.
                        </p>
                </div>

                <div class="container mt-2">
                        <h2>Qu'est ce que sont les méthodes</h2>
                        <p>Avec de tel chiffre pour l'entreprenariat il serai dangereux de croire que l'adventure est facile. La méthodologie est l'étude de l'ensemble des méthodes scientifiques. Elle peut être considérée comme la science de la méthode, ou « méthode des méthodes ». Wikipédia</p>
                </div>

                <div class="row mt-2 mb-2">
                        <div class="col-4">
                                <a href="
                                <?= get_home_url() ?>/pourquoi-des-methodes" class="btn btn-danger">Pourquoi des méthodes</a>
                        </div>
                        <div class="col-4">
                                <a href="<?= get_home_url() ?>/quelques-methodes" class="btn btn-danger">Quelques méthodes</a>
                        </div>
                        <div class="col-4">
                                <a href="<?= get_home_url() ?>/appliquer-les-methodes" class="btn btn-danger">Appliquer des méthodes</a>
                        </div>
                </div>
                <div class="row mt-2">
                        <a href="<?= get_post_type_archive_link('post') ?>" class="btn btn-primary">Voir les archives</a>
                </div>
                <div class="container-fluid">
        <?php endwhile;
endif;
wp_reset_postdata(); ?>
                </div>



<?php get_footer() ?>