<?php
/*
Template Name: Gallery Template
*/
get_header(); 
?>

<?php
    $idx = 0
?>

<section class="hero-section">
    <h2 class="section_heading"><?php the_title(); ?></h2>
    <p class="section_desc"><?php echo get_field('section_description'); ?></p>
</section>

<?php $gallery_images = get_field('gallery_images');
if ($gallery_images) {
    echo '<div class="container gallery-imgs">';
    echo '<div class="row">';
    foreach ($gallery_images as $image) {
        echo '<div class="col-md-4 mb-4"><a class="image-popup" href="' . $image['url'] . '"><img id="'. $idx++ .'" src="' . $image['url'] . '" alt="' . $image['alt'] . '"  /></a></div>';
    }
    echo '</div>';
    echo '</div>';
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.image-popup').magnificPopup({
			type: 'image',
			gallery:{
				enabled:true
			}
		});
	});
</script>

<?php
get_footer();
?>