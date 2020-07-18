<?php

$url = get_permalink(get_page_by_path('kuenstler')).'#'.get_post_field('post_name', get_post());
echo '<a class="kuenstler kuenstler--teaser" href="'.$url.'">';
echo '<h2>';
the_title();
echo '</h2>';
echo '<div class="kuenstler__image alignleft">';
the_post_thumbnail('medium', array('class' => 'alignright'));
echo '</div>';
echo '</a>';