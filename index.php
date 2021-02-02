<?php get_header() ?>


<!-- ICI INTEGRER LES GOOGLE TRENDS ACCES NON AUTORISER
<script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/2431_RC04/embed_loader.js"></script> <script type="text/javascript"> trends.embed.renderExploreWidget("GEO_MAP", {"comparisonItem":[{"keyword":"entreprenariat","geo":"FR","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=entreprenariat&geo=FR&date=today 12-m","guestPath":"https://trends.google.com:443/trends/embed/"}); </script> 

-->



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <?php the_content() ?>
        </article>
<?php endwhile; else : ?>
    <p>Aucun articles ;(</p>
<?php endif; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' => '', 'style' => 'heigh: auto;']) ?>
                    <img src="https://ssl.gstatic.com/trends_nrtr/2431_RC04/embed_loader.js" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                        <p class="card-text">
                            <?php the_content('Voir cet article') ?>
                        </p>
                        <a href="<?php the_permalink() ?>" class="btn btn-primary">Lire</a>
                    </div>

                </div>
            </div>
<?php endwhile ?>
        </div>
<?php else : ?>
        <p>Aucun articles ;(</p>
<?php endif; ?>

<?php get_footer() ?>