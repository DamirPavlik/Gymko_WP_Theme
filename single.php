<?php
    get_header();
?>

<section class="hero-section">
    <h2 class="section_heading"><?php the_title(); ?></h2>
    <p class="section_desc"><?php echo get_the_date(); ?></p>
</section>
<article class="container px-3 pb-100 p-md-5">
    <div class="item-blog-wrapper">
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                get_template_part('template-parts/content', 'article');   
            }
        }
    ?>
    </div>
</article>

<?php
    get_footer();
?>