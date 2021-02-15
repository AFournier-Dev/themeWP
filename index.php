<?php get_header() ?>

<div class="row">
    <div class="col">
    </div>
    <div class="col">
        <h1>Un play book (parmi d'autre)</h1>
    </div>
    <div class="col">
    </div>
</div>

<div class="row">
    <div class="col-12 col-lg-4 mb-5">
        <h2>Pourquoi les méthodes</h2>
        <?php
        $args = [
            'category_name' => 'pourquoi-des-methodes',
            'order' => 'ASC'
        ];
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
        ?>
                <div class="col">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt() ?> </p>
                    <a href="<?php the_permalink() ?>">Voir l'article</a>
                </div>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>
    <div class="col-12 col-lg-4 mb-5">
        <h2>Quelques méthodes</h2>
        <?php
        $args = [
            'category_name' => 'quelques-methodes',
            'order' => 'ASC'
        ];
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
        ?>
                <div class="col">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt() ?> </p>
                    <a href="<?php the_permalink() ?>">Voir l'article</a>
                </div>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>

    <div class="col-12 col-lg-4 mb-5">
        <h2>Appliquer les méthodes</h2>
        <?php
        $args = [
            'category_name' => 'appliquer-les-methodes',
            'order' => 'DESC'
        ];
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
        ?>
                <div class="col">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt() ?> </p>
                    <a href="<?php the_permalink() ?>">Voir l'article</a>
                </div>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>

</div>

<?php get_footer() ?>