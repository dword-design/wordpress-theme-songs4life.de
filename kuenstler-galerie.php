<?php

$parameters = array(
    'post_type' => 'kuenstler',
    'posts_per_page' => -1,
    'order' => 'ASC'
);
foreach (get_posts($parameters) as $post) {
    setup_postdata($post);
    get_template_part('kuenstler', 'detail');
}
wp_reset_postdata();