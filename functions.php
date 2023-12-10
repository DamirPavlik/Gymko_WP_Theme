<?php

function gymko_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action( 'after_setup_theme', 'gymko_theme_support' );

function gymko_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'gymko-owlcarousel', get_template_directory_uri() . "/assets/owlcarousel/assets/owl.carousel.min.css", array(), $version ,'all' );
    wp_enqueue_style( 'gymko-owlcarousel-default', get_template_directory_uri() . "/assets/owlcarousel/assets/owl.theme.default.min.css", array(),$version, 'all' );
    if(is_front_page()){
        wp_enqueue_style( 'gymko-css', get_template_directory_uri() . "/style.css", array('gymko-bootstrap'), $version, 'all' );
    }else{
        wp_enqueue_style( 'gymko-sectioncss', get_template_directory_uri() . "/assets/styles/sections.css", array('gymko-bootstrap'), $version, 'all' );
    }
    wp_enqueue_style( 'gymko-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", array(), '5.0.2', 'all' );
    wp_enqueue_style( 'gymko-animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css", array(), '4.1.1', 'all' );
}

add_action('wp_enqueue_scripts', 'gymko_register_styles');

function gymko_register_scripts(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script( 'gymko-carousel', get_template_directory_uri() . "/assets/owlcarousel/owl.carousel.min.js", NULL, NULL, true );
    if(is_front_page()){
        wp_enqueue_script( 'gymko-app', get_template_directory_uri() . "/assets/js/app.js", NULL, NULL, true );
        wp_enqueue_script( 'gymko-gallery', get_template_directory_uri() . "/assets/js/gallery.js", NULL, NULL, true );
    }else{
        wp_enqueue_script( 'gymko-section', get_template_directory_uri() . "/assets/js/section.js", NULL, NULL, true );
    }
    wp_enqueue_script( 'gymko-jquery', 'https://code.jquery.com/jquery-3.6.3.min.js', array(), '3.6.3', false);
    wp_enqueue_script( 'gymko-bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), '5.0.2', true );
    wp_enqueue_script( 'gymko-animate', get_template_directory_uri() . "/assets/js/animate.js", NULL, NULL, true );
    wp_enqueue_script( 'gymko-dropdown', get_template_directory_uri() . "/assets/js/dropdown.js", NULL, NULL, true );
    // STUDENTS SA MA LOADUVAT AJ NA UCENINICI AJ NA INDEXI
    wp_enqueue_script( 'gymko-students', get_template_directory_uri() . "/assets/js/students.js", NULL, NULL, true );
    // if ( !is_front_page() ) {
    //     wp_enqueue_script( 'gymko-section', get_template_directory_uri() . "/assets/js/section.js", NULL, NULL, true );
    // }
    if ( is_page( 'Zaposleni' ) ) {
        wp_enqueue_script( 'gymko-profesori', get_template_directory_uri() . "/assets/js/profesori.js", NULL, NULL, true );
    }
    if(is_page( 'Dokumenti' )){
        wp_enqueue_script( 'gymko-dokumenti', get_template_directory_uri() . "/assets/js/documents.js", NULL, NULL, true );
    }
}   

add_action('wp_enqueue_scripts', 'gymko_register_scripts');

function enqueue_admin_scripts() {
    wp_enqueue_script('admin-script', get_template_directory_uri() . '/assets/js/admin.js', NULL, NULL, true);
}
add_action('admin_enqueue_scripts', 'enqueue_admin_scripts');

function custom_contact_form_handler() {
    if (isset($_POST['custom_contact_form_nonce']) && wp_verify_nonce($_POST['custom_contact_form_nonce'], 'custom_contact_form_nonce')) {
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
            $name = sanitize_text_field($_POST['name']);
            $email = sanitize_email($_POST['email']);
            $subject = sanitize_text_field($_POST['subject']);
            $message = esc_textarea($_POST['message']);

            $error = '';

            if (strlen($name) < 2) {
                $error = 'Polje "Ime i Prezime" mora imati minimum 2 karaktera';
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error = 'Neispravna email adresa';
            }

            if (strlen($subject) < 2) {
                $error = 'Polje "Naslov" mora imati minimum 2 karaktera';
            }

            if (strlen($message) < 2) {
                $error = 'Polje "Poruka" mora imati minimum 2 karaktera';
            }

            if ($error !== '') {
                wp_redirect(home_url('/kontakt/?error=' . urlencode($error)));
                exit;
            }

            $to = 'office@gymko.edu.rs'; 
            $headers = array('Content-Type: text/html; charset=UTF-8');
            $body = "Name: $name<br>Email: $email<br>Subject: $subject<br>Message: $message";
            $sent = wp_mail($to, $subject, $body, $headers);

            if ($sent) {
                session_start();
                $_SESSION['email_sent'] = true;
                session_write_close();
                wp_safe_redirect(home_url('/success/')); 
                exit;
            } else {
                wp_safe_redirect(home_url('/kontakt/?error=email_send')); 
                echo 'Greška pri slanju e-maila. Pokušajte ponovo.';
            }
        }
    }
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

function enable_wpauto_posts($content){
    if (is_single()) {
        $content = wpautop($content);
    }
    return $content;
}

add_action('wp_footer', function() {
    $show_notification_bar = get_field("show_notification_bar", 'option');
    $notification_bar_text = get_field("notification_bar_text", 'option');
    $show_button = get_field("show_button", 'option');
    $button_text = get_field("button_text", 'option');
    $button_link = get_field("button_link", 'option');
    if ($show_notification_bar === "Yes") {
        ?>
            <script>
                let template = `<div class="notifiction-bar position-relative py-4 bg-primary px-md-0 px-5">
                                    <div class="container">
                                        <div class="d-flex justify-content-center align-items-center flex-column flex-md-row">
                                            <span class="close-notifiction-bar cursor-pointer position-absolute fs-3 text-light fw-bold end-10 top-10">X</span>
                                            <p class="fs-3 mb-0 text-center text-light"> <?php echo $notification_bar_text?></p>
                                            <?php echo $show_button === "Yes" ? "<div class='text-md-left text-center mt-md-0 mt-3'><a class='text-decoration-none fs-4 py-2 px-4 ms-3 bg-white rounded-3' href='$button_link'>$button_text</a></div>" :  "" ?>
                                        <div>
                                    </div>
                                </div>
                                `;
                document.querySelector('header').insertAdjacentHTML("afterbegin", template);
                document.querySelector('.close-notifiction-bar').addEventListener('click', () => document.querySelector('.notifiction-bar').remove());
            </script>
        <?php
    }
});

add_filter('the_content', 'enable_wpauto_posts');

add_action('admin_post_nopriv_custom_contact_form', 'custom_contact_form_handler');
add_action('admin_post_custom_contact_form', 'custom_contact_form_handler');

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

?>