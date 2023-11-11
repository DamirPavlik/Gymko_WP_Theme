<?php
/*
Template Name: Gallery Template
*/
get_header(); 
get_template_part('template-parts/content', 'hero');
$idx = 0;
$gallery_images = get_field('gallery_images');
?>

<?php 
if ($gallery_images) {
    ?>
        <div class="container gallery-imgs">
            <div class="row">
                <?php
                    foreach ($gallery_images as $image) {
                        ?>
                            <div class="col-md-4 mb-4"><a class="image-popup" href="<?= $image['url'] ?>"><img id="<?= $idx++ ?>" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>"  /></a></div>
                        <?php
                    }
                ?>
            </div>
        </div>
    <?php
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