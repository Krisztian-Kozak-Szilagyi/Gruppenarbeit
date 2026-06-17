<?php
/**
 * Template Name: Training
 */
get_header(); ?>

<div class="training-menu" id="trainingMenu">
    <button class="training-menu__close" id="trainingMenuClose" aria-label="Menü schließen">✕</button>
    <nav aria-label="Training Navigation">
        <ul>
            <li><a href="#" data-index="0">01 | Welpentraining</a></li>
            <li><a href="#" data-index="1">02 | Junghunde</a></li>
            <li><a href="#" data-index="2">03 | Basistraining</a></li>
            <li><a href="#" data-index="3">04 | Internationaler Begleithund</a></li>
            <li><a href="#" data-index="4">05 | Obedience</a></li>
            <li><a href="#" data-index="5">06 | Rally Obedience</a></li>
            <li><a href="#" data-index="6">07 | Dummy</a></li>
            <li><a href="#" data-index="7">08 | Spürhundtraining</a></li>
            <li><a href="#" data-index="8">09 | Hoopers</a></li>
            <li><a href="#" data-index="8">10 | Hundensport Potpourri</a></li>
            <li><a href="#" data-index="8">11 | Sonntagswalk & Alltagstauglichkeit</a></li>
        </ul>
    </nav>
</div>

<div class="training-wrapper" id="trainingWrapper">

    <?php
    $trainings = [
        ['title' => '01 | Welpentraining', 'img' => 'Welpentraining.png', 
        'desc' => 'Welpentraining Beschreibung...',   'color' => 'page1'],
        ['title' => '02 | Junghunde',      'img' => 'Junghunde.png', 
        'desc' => 'Junghunde Beschreibung...',             'color' => 'page2'],
        ['title' => '03 | Basistraining',      'img' => 'Basis-und-Begleithunde.png', 
        'desc' => 'Basistraining Beschreibung...',      'color' => 'page3'],
        ['title' => '04 | Internationaler Begleithund',        'img' => 'Internationaler Begleithund.png', 
        'desc' => 'Internationaler Begleithund Beschreibung...',        'color' => 'page4'],
        ['title' => '05 | Obedience',    'img' => 'Welpentraining.png', 
        'desc' => 'Mantrailing Beschreibung...',        'color' => 'page5'],
        ['title' => '06 | Rally Obedience',          'img' => 'Junghunde.png', 
        'desc' => 'Dummy Beschreibung...',       'color' => 'page6'],
        ['title' => '07 | Dummy',      'img' => 'Welpentraining.png', 
        'desc' => 'Großhunde Beschreibung...',            'color' => 'page7'],
        ['title' => '08 | Spürhundtraining',       'img' => 'Spürhundtraining.png', 
        'desc' => 'Spürhundtraining Beschreibung...',             'color' => 'page8'],
        ['title' => '09 | Hoopers',        'img' => 'Welpentraining.png', 
        'desc' => 'Agility Beschreibung...',          'color' => 'page9'],
        ['title' => '10 | Hundensport Potpourri',        'img' => 'Welpentraining.png', 
        'desc' => 'Agility Beschreibung...',          'color' => 'page10'],
        ['title' => '11 | Sonntagswalk & Alltagstauglichkeit',        'img' => 'Welpentraining.png', 
        'desc' => 'Agility Beschreibung...',          'color' => 'page11'],
    ];
    ?>

    <?php foreach ($trainings as $i => $training) : ?>
        <section class="training-section training-section--<?php echo $training['color']; ?>"
                 id="training-<?php echo $i; ?>"
                 aria-label="<?php echo $training['title']; ?>">

            <div class="training-paws" aria-hidden="true">
                <img class="paw paw-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-paw.png" alt="">
                <img class="paw paw-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-paw.png" alt="">
                <img class="paw paw-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-paw.png" alt="">
                <img class="paw paw-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-paw.png" alt="">
                <img class="paw paw-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-paw.png" alt="">
                <img class="paw paw-6" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-paw.png" alt="">
            </div>

            <button class="training-nav-menu-btn" aria-label="Training Menü öffnen">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu.webp" alt="Menü">
            </button>

            <button class="training-nav-btn training-nav-btn--prev"
                    data-dir="-1"
                    aria-label="Vorheriges Training"
                    <?php echo $i === 0 ? 'disabled' : ''; ?>>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-up.webp" alt="Vorheriges">
            </button>

            <div class="training-content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $training['img']; ?>"
                     alt="<?php echo $training['title']; ?>">
                <h2><?php echo $training['title']; ?></h2>
            </div>

            <button class="training-nav-btn training-nav-btn--next"
                    data-dir="1"
                    aria-label="Nächstes Training"
                    <?php echo $i === count($trainings) - 1 ? 'disabled' : ''; ?>>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down.webp" alt="Nächstes">
            </button>

            <button class="training-mehr"
                    data-desc="<?php echo esc_attr($training['desc']); ?>"
                    data-title="<?php echo esc_attr($training['title']); ?>"
                    aria-label="Mehr erfahren über <?php echo $training['title']; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mehr.webp" alt="Mehr erfahren">
                <span class="training-mehr__label">Mehr<br>erfahren</span>
            </button>

        </section>
    <?php endforeach; ?>

</div>

<nav class="training-bottom-nav" aria-label="Hauptnavigation">
    <a href="<?php echo get_permalink(get_page_by_path('aktuelles')); ?>">Aktuelles</a>
    <span aria-hidden="true">|</span>
    <a href="<?php echo get_permalink(get_page_by_path('uberuns')); ?>">Über uns</a>
    <span aria-hidden="true">|</span>
    <a href="<?php echo esc_url(home_url('/')); ?>">Homepage</a>
    <span aria-hidden="true">|</span>
    <a href="<?php echo get_permalink(get_page_by_path('galerie')); ?>">Galerie</a>
    <span aria-hidden="true">|</span>
    <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Kontakt & Anfahrt</a>
</nav>

<div class="training-detail" id="trainingDetail" aria-modal="true" role="dialog" aria-hidden="true">
    <button class="training-detail__close" id="trainingDetailClose" aria-label="Schließen">✕</button>
    <div class="training-detail__content">
        <h2 class="training-detail__title" id="trainingDetailTitle"></h2>
        <p class="training-detail__desc" id="trainingDetailDesc"></p>
    </div>
</div>

<?php get_footer(); ?>