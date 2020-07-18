<?php

echo '<hr>';
echo '<div id="'.get_post_field('post_name', get_post()).'" class="kuenstler kuenstler--detail">';
echo '<h1>';
the_title();
echo '</h1>';
echo '<div class="kuenstler__image">';
the_post_thumbnail('medium', array('class' => 'alignright'));
echo '</div>';
the_content();
echo '<p><a href="'.get_post_meta(get_the_ID(), 'website', true).'">Zur Website</a></p>';
echo '</div>';