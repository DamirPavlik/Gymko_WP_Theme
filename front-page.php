<?php
    get_header();
?>

<section class="hero">
    <img src="<?= site_url()?>/wp-content/uploads/2023/08/hero_shape_big.png" alt="" class="vector">
    <div class="container custom_ctn">
        <div class="row">
            <div class="col-md-5 hero-text-box">
                <h1 class="primary-heading mb-40" data-animation="animate__fadeIn" data-animation-delay="0.2">Dobrodošli u <br><span>Gimnaziju Mihajlo Pupin Kovačica</span></h1>
                <p class="p-hero mb-50" data-animation="animate__fadeIn" data-animation-delay="0.3">Proširi znanje, razvijaj svoje talente i veštine sa nama!</p>
                <div class="btn-wrapper-hero" data-animation="animate__fadeIn" data-animation-delay="0.4">
                <a href="/upis/" class="btn-primary mr_2">Upis</a>
                <a href="/kontakt/" class="btn-secondary ">Kontakt &rarr;</a>
                </div>
            </div>
            <div class="col-md-7">
                <img src="<?= site_url()?>/wp-content/uploads/2023/08/NOTCOMP-compressed.png" alt="Ilustracija Djaka U Školi" class="hero-img" data-animation="animate__fadeIn" data-animation-delay="0.5">
            </div>
        </div>
    </div>
</section>

<section class="signup" data-animation="animate__fadeIn" data-animation-delay="0.1">
    <div class="container">
        <p class="subheading">Upis</p>
        <h2 class="heading-sec">Sve informacije o upisu u gimnaziju</h2>
        <div class="row">
            <div class="col-lg-4">
                <img src="<?= site_url()?>/wp-content/uploads/2023/08/book_icon.png" class="signup_icon" alt="ikonica knjige - gymko">
                <h3 class="heading-ter" >Opšti Smer Srpski</h3>
                <p class="signup-desc" >Opšti smer gimnazije pruža široko obrazovanje učenika u svim oblastima. Podjednak akcenat se stavlja na proširivanje znanja jezika, prirodnih i društvenih nauka, kao i na razvijanje opšte kulture, kreativnosti i kritičkog mišljenja.</p>
            </div>
            <div class="col-lg-4">
                <img src="<?= site_url()?>/wp-content/uploads/2023/08/books-stack-of-three-2.png" class="signup_icon" alt="ikonica monitor - gymko" >
                <h3 class="heading-ter" >Opšti Smer Slovački</h3>
                <p class="signup-desc" >Všeobecný smer gymnázia zabezpečuje rovnaké možnosti pre zdokonaľovanie sa v jazykoch, prírodných a spoločenských vedách, k tomu aj rozvíjanie všeobecnej kultúry, kreativity a kritického zmýšľania. </p>
            </div>
            <div class="col-lg-4">
                <img src="<?= site_url()?>/wp-content/uploads/2023/08/monitor_icon.png" class="signup_icon" alt="ikonica knjige - gymko" >
                <h3 class="heading-ter" >IT Smer</h3>
                <p class="signup-desc no-margin-p" >U okviru svog školovanja učenici će steći praktična znanja iz oblasti modelovanja i razvijanja baza podataka, veštine održavanja i provere sigurnosti informacionih sistema i zaštite podataka.</p>
            </div>
        </div>
    </div>
    <div class="btn-signup-wrapper">
    <a href="/upis/" class="cta-signup">Upiši se u našu gimnaziju &rarr;</a>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="row"  data-animation="animate__fadeIn" data-animation-delay="0.1">
            <div class="col-md-5">
                <div class="txt_box_about">
                    <p class="subheading" >O nama</p>
                    <h2 class="heading-sec" >Pročitaj sve o gimnaziji</h2>
                    <p class="about_txt" >Srednjoškolska obrazovna ustanova koja nosi ime velikana Mihajla Idvorskog Pupina obrazuje i vaspitava generacije učenika više od pola veka. U svom šest decenijskom postojanju se naša škola transformiše prema potrebama sredine prateći najnovije standarde obrazovanja u državi. Gimnazijske smerove učenici upisuju od 1990. godine na srpskom i slovačkom jeziku, a od 2017. godine otvoren je novi smer elektrotehničar informacionih tehnologija.</p>
                    <div class="btn-wrapper-t-c">
                        <a href="/o-gimnaziji/" class="cta-about" >Pročitaj sve o našoj gimnaziji &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <img src="<?= site_url()?>/wp-content/uploads/2023/08/about_img-compressed.png" alt="Ilustracija - gymko" class="about_img" >
            </div>
        </div>
    </div>
</section>

<section class="gallery" data-animation="animate__fadeIn" data-animation-delay="0.1">
    <div class="container">
        <p class="subheading">Galerija</p>
        <h2 class="heading-sec">Pogledajte našu galeriju slika</h2>
        <div class="owl-carousel owl-theme">
          
            <div class="item">
                <img src="<?= site_url()?>/wp-content/uploads/2023/08/gallery-img-1.jpg" alt="Slika Škole Gimnazija Mihajlo Pupin Kovačica" class="gallery_img">
            </div>

            <div class="item">
                <img src="<?= site_url()?>/wp-content/uploads/2023/08/gallery-img-2.jpg" alt="Slika Fizičkog u Gimnaziji Mihajlo Pupin Kovačica" class="gallery_img">

            </div>

            <div class="item">
                <img src="<?= site_url()?>/wp-content/uploads/2023/08/gallery-img-3.jpg" alt="Slika Nastave Gimnazija Mihajlo Pupin Kovačica" class="gallery_img">
            </div>

            <div class="item">
                <img src="<?= site_url()?>/wp-content/uploads/2023/08/gallery-img-4.jpg" alt="Slika Fizičkog u Gimnaziji Mihajlo Pupin Kovačica" class="gallery_img">
            </div>

            <div class="item">
                <img src="<?= site_url()?>/wp-content/uploads/2023/08/gallery-img-5.jpg" alt="Slika Škole Gimnazija Mihajlo Pupin Kovačica" class="gallery_img">
            </div>

          </div>
          <div class="btn-gallery-wrapper">
              <a href="/galerija/" class="cta_gallery">Pogledajte našu galeriju slika &rarr;</a>
          </div>
    </div>
</section>



<section class="profesori">
    <div class="container">
        <div class="row"  data-animation="animate__fadeIn" data-animation-delay="0.1">
            <div class="col-md-5">
                <div class="txt-box-profesori">
                    <p class="subheading"  >Zaposleni</p>
                    <h2 class="heading-sec"  >Naši zaposleni</h2>
                    <p class="profesori_desc"  >Pohvale i nagrade sa raznih takmičenja, konkursa, olimpijada obasipaju rad, dajući podstrek za usavršavanje, inovativnost i otvaranje novih smerova. Kroz višedecenijsku istoriju postojanja naše škole, čuva se nacionalna različitost koja nas sve spaja, prateći nove tendencije u obrazovanju. 
                        Osim sticanja novih znanja i veština putem redovne nastave, napredovati možeš i kroz brojne saradnje i vannastavne aktivnosti koje ti omogućava naša škola.
                        </p>
                    <div class="btn-wrapper-t-c">    
                        <a href="/zaposleni/" class="profesori_cta" >Pogledajte naše zaposlene &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <img src="<?= site_url()?>/wp-content/uploads/2023/08/profesori_img.png" alt="Ilustracija - gymko" class="profesori_img">
            </div>
        </div>
    </div>
</section>

<?php
$args = array(
    'post_type' => 'post',           
    'posts_per_page' => 3,          
    'orderby' => 'date',            
    'order' => 'DESC',             
);
$latest_posts = new WP_Query($args);
?>
<section class="news" data-animation="animate__fadeIn" data-animation-delay="0.1">
<div class="container">
    <div class="row">
        <p class="subheading">Novosti</p>
        <h2 class="heading-sec">Saznaj o dešavanjima u našoj školi</h2>
        <?php
        if ($latest_posts->have_posts()) {
            while ($latest_posts->have_posts()) {
                $latest_posts->the_post();
                ?>
                <div class="col-lg-4">
                    <div class="item-wrapper">
                        <?php the_post_thumbnail('full', array('class' => 'news_img')); ?>

                        <h2 class="news_heading"><?php the_title(); ?></h2>
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
            wp_reset_postdata();
        } else {
            echo '<p class="no-news">Trenutno Nema Novosti</p>';
        }
        ?>
        <div class="btn-news-wrapper">
            <a href="/novosti" class="cta-news"  data-animation="animate__fadeIn" data-animation-delay="0.3">Pogledaj sve novosti &rarr;</a>
        </div>
    </div>
</div>
</section>
</main>

<?php
    get_footer();
?>