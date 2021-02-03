<?php get_header() ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row mt-5">
            <h1><?php the_title() ?></h1>
            <p><img src="<?php the_post_thumbnail_url() ?>" alt="" style="width:auto; height:100%;"></p>
            <?php the_post_thumbnail() ?>
            <?php the_content() ?>
        </div>
<?php endwhile;
endif ?>


<?php get_footer() ?>