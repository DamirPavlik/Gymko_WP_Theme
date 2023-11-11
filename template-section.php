<?php
/*
Template Name: Section Template
*/

    get_header();
    get_template_part('template-parts/content', 'hero');
    the_content(); 
    get_footer();

?>