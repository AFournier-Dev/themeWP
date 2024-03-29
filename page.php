<?php get_header() ?>


<div class="container" id="front-page">
    <?php if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
            <h2 class="text-center"><?php the_title(); ?></h2>
            <div class="intro">
                <?php the_content(); ?>
            </div>
    <?php endwhile;
    endif;
    wp_reset_postdata(); ?>


    <?php
    // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
    $args = array(
        'post_type' => 'pourquoi-des-methodes',
        'posts_per_page' => 2,
        'order' => 'ASC'
    ); //DESC
    // 2. On exécute la WP Query
    $my_query = new WP_Query($args); ?>
    <div class="row">
        <?php // 3. On lance la boucle !
        if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
        ?>
                <div class="col-12 col-md-4 character">
                    <a class="btn btn-dark btn-outline-light" href="<?= the_permalink(); ?>">
                        <img src=" <?= get_the_post_thumbnail_url() ?>" class="w-100">
                        <h3><?php the_title(); ?></h3>
                    </a>
                </div>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
        <!-- 4. On réinitialise à la requête principale (important) -->
    </div>


    <?php wp_reset_postdata(); ?>

    <?php
    // echo esc_html(get_the_title());
    // echo get_category_link(2);

    $title = esc_html(get_the_title());

    switch ($title) {
        case 'Appliquer les méthodes':
            $args = [
                'category_name' => 'appliquer-les-methodes'
            ];
            break;
        case 'Pourquoi des méthodes':
            $args = [
                'category_name' =>     'pourquoi-des-methodes'
            ];
            break;
        case 'Quelques méthodes':
            $args = [
                'category_name' =>     'quelques-methodes'
            ];
            break;
    }
    $my_query = new WP_Query($args);
    if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
            the_content(); ?>

            <div class="d-grid gap-2">
                <a class="btn btn-dark btn-outline-light mb-5" href="<?php the_permalink() ?>">L'article</a>
            </div>



    <?php endwhile;
    endif;
    wp_reset_postdata(); ?>

</div>
<?php get_footer() ?>