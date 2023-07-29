<?php
if (is_front_page()) {
    get_header('front');
} else {
    get_header('section');
}
?>