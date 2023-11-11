<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_post_thumbnail('full', array('class' => 'single-featured-image')); ?>
    <?php the_content(); ?>
</div>

<div class="single-last-posts">
    <h3>Ostale Objave</h3>
    <div class="row g-5">
        <?php
        $curIDX = get_the_ID();
        $randomPosts = new WP_Query([
            'orderby' => 'rand',
            'posts_per_page' => 2,
            'post__not_in' => array($curIDX),
        ]);

        while ($randomPosts->have_posts()) {
            $randomPosts->the_post();
            ?>
            <div class="col-md-6">
                <div class="random-post-wrapper">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'last-post-img')); ?>
                    <h6 class="text-center"><?= get_the_title();?></h6>
                    <p><?= wp_trim_words( get_the_content(), 20, '...') ?></p>
                    <a href="<?= get_the_permalink(); ?>">Pročitaj sve</a>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata(); // Reset the post data after the loop
        ?>
    </div>
</div>