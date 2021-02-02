<?php get_header() ?>
<?php

echo esc_html(get_the_title());

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
        the_content();
        ?>
<a href="<?php the_permalink()?>">lien </a>

<?php
    endwhile;
endif;
wp_reset_postdata();

?>
<?php get_footer() ?>