<?php
/* Template Name: programmation */
?>

<?php get_header(); ?>

<main class="main">
    <div class="infos_banner">
        <div class="infos_banner_img_container">
            <img src="<?php bloginfo("template_url") ?>/images/infos_banner_img.png" alt="photo antique de la forge">
        </div>  
        <div class="infos_banner_title_container">
            <h2 class="h1">programmation</h2>
        </div>
    </div>
    <!-- Contenu du main -->
    <div class="programmation_main main_content">
            <div class="programmation ">



                <div class="programmation_filters">
                    <div class="programmation_filters_search">
                        <div class="programmation_filters_search_icon"><span class="material-symbols-outlined search-icon">search</span></div>
                        <input class="programmation_filters_search_searchBox" type="text" id="search" name="search" placeholder="Recherche par mots-clés">                        
                    </div>
                    <div class="programmation_filters_bottom">
                        <div class="programmation_filters_bottom_dateBox">
                            <input class="programmation_filters_bottom_dateBox_input" type="date" name="date_event" id="date_event">
                        </div>
                        <div class="programmation_filters_PcCheckBox">
                            <div class="checkbox-container">
                                <label class="checkbox-label" for="gratuit">Gratuit</label>
                                <input type="checkbox" id="gratuit" name="gratuit">
                            </div>
                            <div class="checkbox-container">
                                <label class="checkbox-label" for="familiale">Familiale</label>
                                <input type="checkbox" id="familiale" name="familiale">
                            </div>
                        </div>
                        <div class="programmation_filters_bottom_disciplineBox">
                            <select class="programmation_filters_bottom_disciplineBox_input" name="discipline" id="discipline">
                                <option value="all">Toutes les discipline</option>
                                <option value="conte">Conte</option>
                                <option value="musique">Musique</option>
                                <option value="poesie">Poésie</option>
                                <option value="humour">Humour</option>
                            </select>
                        </div>
                    </div>
                    <div class="programmation_filters_checkBox">
                        <div class="checkbox-container">
                            <label class="checkbox-label" for="gratuit">Gratuit</label>
                            <input type="checkbox" id="gratuit" name="gratuit">
                        </div>
                        <div class="checkbox-container">
                            <label class="checkbox-label" for="familiale">Familiale</label>
                            <input type="checkbox" id="familiale" name="familiale">
                        </div>
                    </div>
                </div>


                <div class="programmation_cardBox">

                    <?php 
                    $events = get_posts(array(
                        'post_type' => 'evenement',
                        'numberposts' => -1 
                    ));
                    ?>

                    <?php foreach($events as $event) : 
                    $title = get_field('eventtitle', $event -> ID);
                    $desc = get_field('description_de_levenement', $event -> ID);
                    $date = get_field('date_de_levenement', $event -> ID);
                    $jour = get_field('jour_de_levenement', $event -> ID);
                    $lieu = get_field('lieu', $event -> ID);
                    $heure = get_field('heure', $event -> ID);
                    $prix = get_field('prix', $event -> ID);
                    $billeterie = get_field('billeterie', $event -> ID);
                    $image = get_field('event_img', $event -> ID);

                    $image_url = esc_url($image['url']);
                    $image_alt = esc_attr($image['alt']);
                    ?>

                    <?php get_template_part('template-part/carte_evenement', null, array(
                        "title" => $title,
                        "desc" => $desc,
                        "date" => $date,
                        "jour" => $jour,
                        "lieu" => $lieu,
                        "heure" => $heure,
                        "prix" => $prix, 
                        "billeterie" => $billeterie,
                        "image" => $image,
                        "image_url" => $image_url,
                        "image_alt" => $image_alt
                    ));     
                    ?>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
</main>

<?php get_footer(); ?>