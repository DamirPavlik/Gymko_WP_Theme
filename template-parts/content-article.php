<header class="content-header">
    <div class="meta mb-3"><span class="date">
    </span><span class="tag"><i class='fa fa-tag'></i> 
        <?php the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');?>
    </span>
</header>


<?php
    // the_post_thumbnail('full', array('class' => 'news_img'));
    the_content();
?>