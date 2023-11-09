<?php
/*
Template Name: Dokumenti Template
*/
get_header();
$dokumenti = get_field('dokumenti');
?>
<section class="hero-section">
    <h2 class="section_heading"><?php the_title(); ?></h2>
    <p class="section_desc"><?php echo esc_html(get_field('section_description')); ?></p>
</section>

<section class="documents-section">
    <div class="container">
        <div id="accordionExample" class="accordion">
            <?php 
            if ($dokumenti) {
                foreach ($dokumenti as $key => $dokument) {
                    $isFirst = ($key === 0);
                    $collapseId = $isFirst ? "One" : $key;
                    $collapseClass = $isFirst ? "show" : "";
            ?>
                    <div class="accordion-item">
                        <h2 id="heading<?= $collapseId; ?>" class="accordion-header">
                            <button class="accordion-button <?= $isFirst ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $collapseId; ?>" aria-expanded="<?= $isFirst ? 'true' : 'false'; ?>" aria-controls="collapse<?= $collapseId; ?>">
                                <img src="<?= esc_url($dokument["ikonica"])?>" alt="">
                                <?= esc_html($dokument["vrsta_dokumenta"]); ?>
                            </button>
                        </h2>
                        <div id="collapse<?= $collapseId; ?>" class="accordion-collapse collapse <?= $collapseClass; ?>" aria-labelledby="heading<?= $collapseId; ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php
                                foreach ($dokument['upload_dokumenta'] as $idx => $doc) {
                                ?>
                                    <div class="<?= $idx !== count($dokument['upload_dokumenta']) - 1 ? 'item-wrapper' : 'item-wrapper-last'; ?>">
                                        <p><?= esc_html($doc['naziv_dokumenta']); ?></p>
                                        <?php if($doc['dokument']['url']) { ?>
                                            <a href="<?= esc_url($doc['dokument']['url']); ?>">Preuzmite Sadržaj</a>
                                        <?php }else { ?>
                                            <p>Link trenutno nije dostupan</p>
                                        <?php }?>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>
