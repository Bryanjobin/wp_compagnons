<?php
/* Template Name: accueil */
?>

<?php get_header(); ?>

<main class="main accueil_main">
        <div class="liens_filiere">
            <a href="<?php echo get_home_url(); ?>/compagnons_accueil" class="filiere_banner_compagnons">
                <div class="compagnons_filiere_filter"></div>
                <div class="filiere_banner_compagnons_titles_container">
                    <p class="prior_title">NOTRE ORGANISME</p>
                    <h2 class="h2 filiere_title">LES COMPAGNONS</h2>
                    <p class="after_title">DE LA MISE EN VALEUR DU PATRIMOINE VIVANT DE TROIS-PISTOLES</p>
                </div>
            </a>
            <a href='' class="filiere_banner_forge">
                <div class="forge_filiere_filter"></div>
                <div class="filiere_banner_forge_titles_container">
                    <p class="prior_title">NOTRE SALLE</p>
                    <h2 class="h2 filiere_title">LA FORGE À BÉRUBÉ</h2>
                </div>
            </a>
            <a href="<?php echo get_home_url(); ?>/accueil-rendez-vous" class="filiere_banner_rdv">
                <div class="rdv_filiere_filter"></div>
                <div class="filiere_banner_rdv_titles_container">
                    <p class="prior_title">NOTRE FESTIVAL</p>
                    <h2 class="h2 filiere_title">RENDEZ-VOUS DES GRANDES GEULES</h2>
                </div>
            </a>
            <a href="#" class="filiere_banner_vents">
                <div class="vents_filiere_filter"></div>
                <div class="filiere_banner_vents_titles_container">
                    <p class="prior_title">NOTRE PROGRAMMATION ESTIVALE</p>
                    <h2 class="h2 filiere_title">VENTS DE PAROLE</h2>
                </div>
            </a>
        </div>
        <div class="liens_baniere">
            <a href="<?php echo get_home_url(); ?>/compagnons_accueil" class="link_banner_compagnons">
                <div class="link_banner_titles_container">
                    <p class="prior_title">NOTRE ORGANISME</p>
                    <h2 class="h2 filiere_title">LES COMPAGNONS</h2>
                    <p class="after_title">DE LA MISE EN VALEUR DU PATRIMOINE VIVANT DE TROIS-PISTOLES</p>
                </div>
            </a>
            <a href="#" class="link_banner_forge">
                <div class="link_banner_titles_container">
                    <p class="prior_title">NOTRE SALLE</p>
                    <h2 class="h2 filiere_title">LA FORGE À BÉRUBÉ</h2>
                </div>
            </a>
            <a href="<?php echo get_home_url(); ?>/accueil-rendez-vous" class="link_banner_rdv">
                <div class="link_banner_titles_container">
                    <p class="prior_title">NOTRE FESTIVAL</p>
                    <h2 class="h2 filiere_title">RENDEZ-VOUS DES GRANDES GEULES</h2>
                </div>
            </a>
            <a href="#" class="link_banner_vents">
                <div class="link_banner_titles_container">
                    <p class="prior_title">NOTRE PROGRAMMATION ESTIVALE</p>
                    <h2 class="h2 filiere_title">VENTS DE PAROLE</h2>
                </div>
            </a>
        </div>
        <section class="accueil_section_video">
            <div class="accueil_video_black_banner">
                <h4 class="h4">RENDEZ-VOUS DES GRANDES GUEULES</h4>
                <p class="textblock"><time datetime="2023">2023</time>, la 27e édition!</p>
            </div>
            <div class="accueil_video_container">
            <video class="video_accueil" controls preload="auto">
                    <source src="<?php bloginfo("template_url") ?>/images/video_rvgg_long.mp4">
            </video>
        </section>
        <div class="derniere_edition_imgs">
            <p class="les_meilleurs_moments">Les meilleurs moments de notre dernière édition</p>
            <div class="images_container">
                <?php echo do_shortcode('[smartslider3 slider="2"]'); ?> 
            </div>
            <a href="#" class="galerie-link">Voir la galerie ➔</a>
        </div>
    </main>

    <?php get_footer(); ?>