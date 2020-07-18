<?php

$today = time();

$veranstaltungenQuery = new WP_Query(array(
    'post_type' => 'veranstaltung',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'date_query' => array(
        'before' => (new DateTime('yesterday'))->format('Y-m-d')
    )
));

global $wp_query;
$previousQuery = $wp_query;
$wp_query = $veranstaltungenQuery;

while ($veranstaltungenQuery->have_posts()) {
    $veranstaltungenQuery->the_post();
    get_template_part('veranstaltung', 'detail');
}
$wp_query = $previousQuery;
wp_reset_postdata();