<?php
/*
    Template Name: Novosti Template
*/
get_header();
?>
<section class="hero-section">
    <h2 class="section_heading"><?php the_title(); ?></h2>
    <p class="section_desc"><?php echo get_field('section_description'); ?></p>
</section>

<?php
$args = array(
    'post_type' => 'post',          
    'orderby' => 'date',            
    'order' => 'DESC',              
);

$latest_posts = new WP_Query($args);
?>

<section class="news pt-0" data-animation="animate__fadeIn" data-animation-delay="0.1">
    <div class="container">
        <div class="row ">
            <?php
            // Check if there are posts
            if ($latest_posts->have_posts()) {
                while ($latest_posts->have_posts()) {
                    $latest_posts->the_post();
                    ?>
                    <div class="col-lg-4 mb-50-md-20">
                        <div class="item-wrapper">
                            <?php the_post_thumbnail('full', array('class' => 'news_img')); ?>

                            <h2 class="news_heading"><?php the_title(); ?></h2>
                            <?php
                            $content = get_the_content();
                            $content = wp_trim_words($content, 10, '...');
                            ?>
                            <p class="news_date"><?php echo get_the_date(); ?></p>
                            <p class="news_desc"><?php echo $content; ?> ...</p>
                            <a href="<?php the_permalink(); ?>" class="news_btn">Pročitaj sve</a>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            } else {
                echo '<p class="no-news">Trenutno Nema Novosti</p>';
            }
            ?>
        </div>
    </div>
</section>


<?php
    get_footer();
?>
