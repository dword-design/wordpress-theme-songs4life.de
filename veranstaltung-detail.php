<?php

echo '<hr>';
echo '<div id="'.get_post_field('post_name', get_post()).'" class="veranstaltung">';
echo '<h1>';
the_title();
echo '</h1>';

$kuenstlerQuery = new WP_Query(array(
    'connected_type' => 'veranstaltung_to_kuenstler',
    'connected_items' => get_post(),
    'nopaging' => true,
    'order' => 'DESC'
));

echo '<div class="kuenstler-container">';
if ($kuenstlerQuery->have_posts()) {
    while ($kuenstlerQuery->have_posts()) {
        $kuenstlerQuery->the_post();
        get_template_part('kuenstler', 'teaser');
    }
    wp_reset_postdata();
}
echo '</div>';

the_content();
echo '</div>';