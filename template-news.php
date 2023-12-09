<?php
/*
    Template Name: Novosti Template
*/
get_header();
get_template_part('template-parts/content', 'hero');

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'post',          
    'orderby' => 'date',            
    'order' => 'DESC',
    'posts_per_page' => 6, 
    'paged' => $paged, 
);

$latest_posts = new WP_Query($args);
?>

<section class="news pt-0 pb-100" data-animation="animate__fadeIn" data-animation-delay="0.1">
    <div class="container">
        <div class="row ">
            <?php
            if ($latest_posts->have_posts()) {
                while ($latest_posts->have_posts()) {
                    $latest_posts->the_post();
                    ?>
                     <div class="col-lg-4 mb-50-md-20">
                        <div class="item-wrapper">
                            <?php the_post_thumbnail('full', array('class' => 'news_img')); ?>
                            <h2 class="news_heading"><?= get_the_title(); ?></h2>
                            <?php
                            $content = get_the_content();
                            $content = wp_trim_words($content, 10, '...');
                            ?>
                            <p class="news_date"><?php echo get_the_date(); ?></p>
                            <p class="news_desc"><?php echo $content; ?></p>
                            <a href="<?php the_permalink(); ?>" class="news_btn">Pročitaj sve</a>
                        </div>
                    </div>
                    <?php
                }
                echo '<div class="pagination">';
                echo paginate_links(array(
                    'total' => $latest_posts->max_num_pages,
                    'current' => $paged,
                    'prev_text' => '&laquo;',
                    'next_text' => '&raquo;',
                ));
                echo '</div>';
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