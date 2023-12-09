<?php
if (is_front_page()) {
    get_template_part('template-parts/header', 'front');
    // get_header('front');
} else {
    get_template_part('template-parts/header', 'section');
    // get_header('section');
}
?>