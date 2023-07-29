<?php
/*
Template Name: Section Template
*/

get_header();
?>
<section class="hero-section">
    <h2 class="section_heading"><?php the_title(); ?></h2>
    <p class="section_desc"><?php echo get_field('section_description'); ?></p>
</section>

<?php the_content(); ?>

<?php

get_footer(); // Include the footer.php file

?>