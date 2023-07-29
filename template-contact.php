<?php
/*
Template Name: Kontakt Template
*/

get_header(); 

?>

<section class="hero-section">
    <h2 class="section_heading"><?php the_title(); ?></h2>
    <p class="section_desc"><?php echo get_field('section_description'); ?></p>
</section>

<section class="form">
    <div class="container">
        <div class="row row-gallery flex-column-reverse flex-lg-row">

            <div class="col-lg-3 contact-infos" data-animation="animate__fadeIn" data-animation-delay="0.15">
                <div class="info_address">
                    <h4 class="heading_adress">Adresa</h4>
                    <p class="desc_adress">Nikola Tesle 57, 26210 <br>Kovačica, Srbija</p>
                </div>
                <hr>
                <div class="info_contact">
                    <h4 class="heading_adress">Kontakt Informacije</h4>
                    <p class="desc_adress"><span>Email: </span>office@gymko.edu.rs<br><span>Telefon:</span> 013 661 180</p>
                </div>
                <hr>
                <div class="social-icons-contact">
                    <a href="https://www.instagram.com/gimnazijamihajlopupin/" target="_blank"><img src="img/icons/instagram.png" alt="instagram gymko - Gimnazija Mihajlo Pupin Kovačica"></a>
                    <a href="https://www.facebook.com/gymkoedurs/?locale=sr_RS" target="_blank"><img src="img/icons/facebook.png" alt="facebook gymko - Gimnazija Mihajlo Pupin Kovačica"></a>
                </div>
            </div>

            <div class="col-lg-9">
                <h3 class="form-heading" data-animation="animate__fadeIn" data-animation-delay="0.15">Ostavite Poruku</h3>
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" data-animation="animate__fadeIn" data-animation-delay="0.15">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="name" id="name" placeholder="Ime i Prezime">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="subject" id="subject" placeholder="Naslov">
                        </div>
                        <div class="col-lg-12">
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Poruka"></textarea>
                        </div>
                    </div>
                    <div class="align-right">
                        <input type="hidden" name="action" value="custom_contact_form">
                        <?php wp_nonce_field('custom_contact_form_nonce', 'custom_contact_form_nonce'); ?>
                        <button class="submit_btn" type="submit" name="submit">Posalji</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    function getURLParameter(name) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(name);
    }

    function displayErrorMessage(error) {
        const errorMessageElement = document.createElement('div');
        errorMessageElement.className = 'error-message';
        errorMessageElement.textContent = error;
        alert(error)
    }
    
    const errorParam = getURLParameter('error');
    if (errorParam) {
        displayErrorMessage(decodeURIComponent(errorParam));
    }
</script>

<?php

get_footer(); 

?>