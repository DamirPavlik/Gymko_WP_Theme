<?php
    get_header();
?>

<section class="gymko-single-intro">
    <img src="http://gymko.edu.rs/wp-content/uploads/2023/11/single-desktop-compressed.png" class="gymko-single-intro-img d-md-block d-none" alt="">
    <img src="http://gymko.edu.rs/wp-content/uploads/2023/11/single-mobile-compressed.png" class="gymko-single-intro-img d-md-none d-block" alt="">
    <div class="container">
        <h2 class="gymko-single-intro-heading"><?php the_title(); ?></h2>
        <p class="gymko-single-intro-date">Objavljeno <?= get_the_date(); ?></p>
    </div>
</section>
<div class="gymko-single-blog">
<article class="container pb-100 p-md-5">
    <div class="blog-wrapper">
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
</div>

<?php
    get_footer();
?>