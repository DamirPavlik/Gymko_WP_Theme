<?php
/*
Template Name: Zaposleni Template
*/
    get_header(); 
    get_template_part('template-parts/content', 'hero');
?>

<section class="profesori-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-animation="animate__fadeIn" data-animation-delay="0.2">

                    <div class="profesori-text-box">
                        <h2 class="heading-profesori">Naši profesori</h2>
                        <p class="subheading-profesori">Svakom učeniku u našoj školi su dostupni iskusni i posvećeni profesori koji će im pomoći da postignu svoje ciljeve i razviju svoj puni potencijal. Naši nastavnici su stručnjaci u svojim oblastima i pružaju vrhunsko obrazovanje koje ce pripremiti naše učenike za izazove koje ih čekaju u budućnosti.</p>
                    </div>

                    <div class="portofolio-select-wrapper">
                        <select class="select-predmet" >
                            <option value="sve" disabled selected>Spisak zaposlenih</option>
                            <!-- <option value="sve">Svi Profesori</option> -->
                            <option value="srpski">Sprski Jezik</option>
                            <option value="engleski">Engleski Jezik</option>
                            <option value="slovacki">Slovački Jezik</option>
                            <option value="nemacki">Nemački Jezik</option>
                            <option value="latinski">Latinski Jezik</option>
                            <option value="istorija">Istorija</option>
                            <option value="geografija">Geografija</option>
                            <option value="biologija">Biologija</option>
                            <option value="matematika">Matematika</option>
                            <option value="fizika">Fizika</option>
                            <option value="hemija">Hemija</option>
                            <option value="muzicko">Muzička Kultura</option>
                            <option value="likovno">Likovna Kultura</option>
                            <option value="racunarstvo">Računarstvo i Informatika</option>
                            <option value="programiranje">Programiranje</option>
                            <option value="fizicko">Fizičko Vaspitanje</option>
                            <option value="filozofija">Filozofija</option>
                            <option value="sociologija">Sociologija</option>
                            <option value="sociologijasapravimagradana">Sociologija sa pravima građana</option>
                            <option value="jezik">Jezik, mediji i kultura</option>
                            <option value="gradansko">Građansko vaspitanje</option>
                            <option value="primenjene">Primenjene Nauke</option>
                            <option value="verska">Verska Nastava</option>
                            <option value="pojedinac">Pojedinac, Grupa i Društvo</option>
                            <option value="psihologija">Psihologija</option>
                            <option value="multimedija">Računarska grafika i multimedija</option>
                            <option value="elektrotehnika">Osnovi Elektrotehnike</option>
                            <option value="prakticna">Praktična Nastava</option>
                            <option value="elektronika">Elektronika</option>
                            <option value="vebdizajn">Veb Dizajn</option>
                            <option value="racunarski">Računarski Sistemi</option>
                            <option value="baze">Baze Podataka</option>
                            <option value="web">Veb Programiranje</option>
                            <option value="zastita">Zaštita Informacionih Sistema</option>
                            <option value="poslovne">Poslovne Komunikacije</option>
                            <option value="metodologija">Metodologija Naučnog Istraživanja</option>
                            <option value="upravljanje">Upravljanje Projektima</option>
                            <option value="preduzetnistvo">Preduzetništvo</option>
                            <option value="servisi">Računarske Mreže i Internet Servisi</option>
                            <option value="pit">Primenjene informacione Tehnologije</option>
                        </select>
                    </div>
                    
                    <div class="portofolio-items-wrapper">
                    <!-- START -->
                    <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                $portofolio_items = get_field('portofolio_items');
                                if ($portofolio_items) {
                                    foreach ($portofolio_items as $item) {
                                        $name = esc_html($item['profesor']);
                                        $data_predmet = esc_attr($item['predmet']);
                                        ?>
                                        <div class="single-portofolio-item" data-predmet="<?php echo $data_predmet; ?>">
                                            <h5><?php echo $name; ?></h5>
                                        </div>
                                        <?php
                                    }
                                }
                            }
                        }
                    ?>
                    </div>
                </div>

            <div class="col-lg-6" data-animation="animate__fadeIn" data-animation-delay="0.2">
                <div class="profesori-img-wrapper">
                    <img src="<?= site_url()?>/wp-content/uploads/2023/08/first_zaposleni-compressed.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="rukovodstvo-section">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">

            <div class="col-lg-6" data-animation="animate__fadeIn" data-animation-delay="0.2">

                <div class="rukovodstvo-img">
                    <img src="<?= site_url()?>/wp-content/uploads/2023/08/second_zaposleni-compressed2.png" alt="">
                </div>

            </div>

            <div class="col-lg-6" data-animation="animate__fadeIn" data-animation-delay="0.2">

                <div class="rukovodstvo-text-box">
                    <h2 class="heading-rukovdstvo">Naše rukovodstvo</h2>
                    <p class="subheading-rukovdstvo">Naše rukovodstvo čine stručnjaci iz različitih oblasti, uključujući sekretara, računovodju, psihologa, školski odbor i savet roditelja. Oni su posvećeni stvaranju obrazovne sredine koja će pomoći našim učenicima da ostvare svoje potencijale i pripreme se za uspeh u svom životu.</p>
                </div>

                <div class="portofolio-select-wrapper-rukovodstvo">
                    <select class="select-rukovodstvo" >
                        <option disabled selected>Spisak Rukovdstvo</option>
                        <option value="sekretar">Sekretar</option>
                        <option value="racunovodja">Računovođa</option>
                        <option value="psiholog">Stručni Saradnik i Školski Psiholog</option>
                        <option value="skolski-odbor">Školski Odbor</option>
                        <option value="clanovi">Članovi</option>
                        <option value="savet-roditelja">Savet Roditelja</option>
                    </select>
                </div>

                <div class="portofolio-items-wrapper-rukovodstvo">
                    <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                $portofolio_items_rukovodstvo = get_field('portofolio_items_rukovodstvo');
                                if ($portofolio_items_rukovodstvo) {
                                    foreach ($portofolio_items_rukovodstvo as $item) {
                                        $data_rukovodstvo = esc_attr($item['rukovodstvo']);
                                        $zaposlen = esc_html($item['zaposlen']);
                                        ?>
                                            <div class="single-portofolio-item-rukovodstvo" data-rukovodstvo="<?php echo $data_rukovodstvo; ?>">
                                                <h5><?php echo $zaposlen; ?></h5>
                                            </div>
                                        <?php
                                    }
                                }
                            }
                        }
                    ?>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>