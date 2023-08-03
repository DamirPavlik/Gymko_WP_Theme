<?php

function gymko_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action( 'after_setup_theme', 'gymko_theme_support' );

function gymko_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    
    if(is_front_page()){
        wp_enqueue_style( 'gymko-css', get_template_directory_uri() . "/style.css", array('gymko-bootstrap'), $version, 'all' );
    }else{
        wp_enqueue_style( 'gymko-sectioncss', get_template_directory_uri() . "/sections.css", array('gymko-bootstrap'), $version, 'all' );
    }
    wp_enqueue_style( 'gymko-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", array(), '5.0.2', 'all' );
    wp_enqueue_style( 'gymko-owlcarousel', get_template_directory_uri() . "/assets/owlcarousel/assets/owl.carousel.min.css", array(), $version ,'all' );
    wp_enqueue_style( 'gymko-owlcarousel-default', get_template_directory_uri() . "/assets/owlcarousel/assets/owl.theme.default.min.css", array(),$version, 'all' );
    wp_enqueue_style( 'gymko-animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css", array(), '4.1.1', 'all' );
}

add_action('wp_enqueue_scripts', 'gymko_register_styles');

function gymko_register_scripts(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script( 'gymko-loader', get_template_directory_uri() . "/assets/js/loader.js", NULL, NULL, true );
    wp_enqueue_script( 'gymko-jquery', 'https://code.jquery.com/jquery-3.6.3.min.js', array(), '3.6.3', false);
    wp_enqueue_script( 'gymko-bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), '5.0.2', true );
    wp_enqueue_script( 'gymko-animate', get_template_directory_uri() . "/assets/js/animate.js", NULL, NULL, true );
    wp_enqueue_script( 'gymko-dropdown', get_template_directory_uri() . "/assets/js/dropdown.js", NULL, NULL, true );
    wp_enqueue_script( 'gymko-app', get_template_directory_uri() . "/assets/js/app.js", NULL, NULL, true );
    wp_enqueue_script( 'gymko-carousel', get_template_directory_uri() . "/assets/owlcarousel/owl.carousel.min.js", NULL, NULL, true );
    // STUDENTS SA MA LOADUVAT AJ NA UCENINICI AJ NA INDEXI
    wp_enqueue_script( 'gymko-students', get_template_directory_uri() . "/assets/js/students.js", NULL, NULL, true );
    
    if ( !is_front_page() ) {
        wp_enqueue_script( 'gymko-section', get_template_directory_uri() . "/assets/js/section.js", NULL, NULL, true );
    }
 
    
    if ( is_page( 'Zaposleni' ) ) {
        wp_enqueue_script( 'gymko-profesori', get_template_directory_uri() . "/assets/js/profesori.js", NULL, NULL, true );
    }

    if(is_page( 'Dokumenti' )){
        wp_enqueue_script( 'gymko-dokumenti', get_template_directory_uri() . "/assets/js/documents.js", NULL, NULL, true );
    }
}   

add_action('wp_enqueue_scripts', 'gymko_register_scripts');

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

            $to = 'damir.pavlik@gmail.com'; 
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
                echo 'Greška pri slanju e-maila. Pokušajte ponovo kasnije.';
            }
        }
    }
}

add_action('admin_post_nopriv_custom_contact_form', 'custom_contact_form_handler');
add_action('admin_post_custom_contact_form', 'custom_contact_form_handler');

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

?>