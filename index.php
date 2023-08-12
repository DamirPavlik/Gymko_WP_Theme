<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        // Your default post content goes here
    }
}

get_footer();
?>