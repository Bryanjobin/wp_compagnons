<?php
/* Header Template */
?>
<?php
$compagnons_logo_ID= get_theme_mod("custom_logo");
$logo_src= wp_get_attachment_image_src($compagnons_logo_ID, "full");
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <title><?php wp_title("Les Compagnons - "); ?></title>
        <?php  wp_head(); ?>
    </head>
<body>
<header>
        <div class="m_header">
            <div class="m_header_top">
                <img class="m_header_top_logo" src="<?php echo $logo_src[0] ?>" alt="Logo Les Compagnons de la mise en valeur du patrimoine vivant">
                <button class="m_header_top_hamburger"><span class="material-symbols-outlined m_header_top_hamburger_icon">menu</span></button>
            </div>
            <div class="m_header_container">
                <nav class="m_header_container_nav">
                    <a href="">Événements à venir</a>
                    <a href="">Acheter des billets</a>
                    <a href="">Contact</a>
                    <a href="">À propos</a>
                    <a href="">FAQ</a>
                </nav>
                <div class="m_header_container_button">
                    <button class="m_header_container_button_primary bg_compagnons ">
                        <div class="m_header_container_button_primary_left">
                            <p>NOTRE ORGANISME</p>
                            <p class="m_header_container_button_primary_left_big">LES COMPAGNONS</p>                            
                        </div>
                        <div class="m_header_container_button_primary_right">
                            <span class="expand_icon material-symbols-outlined">
                                expand_more
                            </span>
                        </div>
                    </button>
                    <div class="m_header_container_button_secondary bg_compagnons">
                        <div class="m_header_container_button_secondary_list">
                            <a href="">Notre équipe</a>
                            <a href="">Notre mission</a>
                            <a href="">Notre histoire</a>
                            <a href="">Nos projets</a>
                            <a href="">Nos partenaires</a>
                        </div>
                    </div>
                </div>
                <div class="m_header_container_button">
                    <button class="m_header_container_button_primary bg_forge ">
                        <div class="m_header_container_button_primary_left">
                            <p>NOTRE SALLE</p>
                            <p class="m_header_container_button_primary_left_big">LA FORGE</p>                            
                        </div>
                        <div class="m_header_container_button_primary_right">
                            <span class="expand_icon material-symbols-outlined">
                                expand_more
                            </span>
                        </div>
                    </button>
                    <div class="m_header_container_button_secondary bg_forge">
                        <div class="m_header_container_button_secondary_list">
                            <a href="">Billetterie</a>
                            <a href="">La forge en action</a>
                            <a href="">Les événements à venir</a>
                        </div>
                    </div>
                </div>
                <div class="m_header_container_button">
                    <button class="m_header_container_button_primary bg_rdv ">
                        <div class="m_header_container_button_primary_left">
                            <p>NOTRE FESTIVAL</p>
                            <p class="m_header_container_button_primary_left_big">RENDEZ-VOUS DES GRANDES GUEULES</p>                            
                        </div>
                        <div class="m_header_container_button_primary_right">
                            <span class="expand_icon material-symbols-outlined">
                                expand_more
                            </span>
                        </div>
                    </button>
                    <div class="m_header_container_button_secondary bg_rdv">
                        <div class="m_header_container_button_secondary_list">
                            <a href="">Programmation 2023</a>
                            <a href="">Lieux du festival</a>
                            <a href="">Artistes</a>
                            <a href="">S'impliquer</a>
                            <div href="m_header_container_button_secondary_list_submenu">
                                <a class="m_header_container_button_secondary_list_submenu_title" href="">À propos</a>
                                <div class="m_header_container_button_secondary_list_submenu_container">
                                        <a>L'Équipe du festival</a>
                                        <a>Le prix Jocelyn Bérubé</a>
                                        <a>La Bavarde: La bière officielle</a>
                                        <a>Vers un festival responsable</a>
                                        <a>Galerie médias</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m_header_container_button">
                    <button class="m_header_container_button_primary bg_vents ">
                        <div class="m_header_container_button_primary_left">
                            <p>NOTRE PROG' ESTIVALE</p>
                            <p class="m_header_container_button_primary_left_big">VENTS DE PAROLE</p>                            
                        </div>
                    </button>

                </div>
            </div>
        </div>
        <div class="header_container">
            <div class="top_nav">
                <img class="top_nav_logo" src="<?php echo $logo_src[0] ?>" alt="Logo Les Compagnons de la mise en valeur du patrimoine vivant">
                <div class="top_nav_menu">
                    <a href="https://www.google.com/" target="_blank">Événements à venir</a>
                    <a href="https://www.google.com/" target="_blank">Acheter des billets</a>
                    <a href="https://www.google.com/" target="_blank">Contact</a>
                    <a href="https://www.google.com/" target="_blank">À propos</a>
                    <a href="https://www.google.com/" target="_blank">FAQ</a> 
                </div>
            </div>
            <div class="bottom_nav_container">
                <nav class="bottom_nav">
                    <div class="bottom_nav_menu">
                        <button class="bottom_nav_menu_btn bg_compagnons compBtn">
                            <p class="bottom_nav_menu_btn_title">NOTRE ORGANISME</p>
                            <p class="bottom_nav_menu_btn_title2">LES COMPAGNONS</p>
                        </button>
                        <div class="bottom_nav_menu_submenu">
                            <button class="bottom_nav_menu_submenu_btn bg_compagnons compBtn bottom_nav_menu_submenu_btn_toplist">Notre équipe</button>
                            <button class="bottom_nav_menu_submenu_btn bg_compagnons compBtn">Notre mission</button>
                            <button class="bottom_nav_menu_submenu_btn bg_compagnons compBtn">Notre histoire</button>
                            <button class="bottom_nav_menu_submenu_btn bg_compagnons compBtn">Nos projets</button>
                            <button class="bottom_nav_menu_submenu_btn bg_compagnons compBtn">Nos partenaires</button>
                        </div>
                    </div>

                    <div class="bottom_nav_menu">
                        <button class="bottom_nav_menu_btn bg_forge forgeBtn">
                            <p class="bottom_nav_menu_btn_title">NOTRE SALLE</p>
                            <p class="bottom_nav_menu_btn_title2">LA FORGE À BÉRUBÉ</p>
                        </button>
                        <div class="bottom_nav_menu_submenu">
                            <button class="bottom_nav_menu_submenu_btn bg_forge forgeBtn bottom_nav_menu_submenu_btn_toplist">Billetterie</button>
                            <button class="bottom_nav_menu_submenu_btn bg_forge forgeBtn">La forge en action</button>
                            <button class="bottom_nav_menu_submenu_btn bg_forge forgeBtn">Les événements à venir</button>
                        </div>
                    </div>

                    <div class="bottom_nav_menu">
                        <button class="bottom_nav_menu_btn bg_rdv rdvBtn">
                            <p class="bottom_nav_menu_btn_title">NOTRE FESTIVAL</p>
                            <p class="bottom_nav_menu_btn_title2">RENDEZ-VOUS DES GRANDES GEULES</p>
                        </button>
                        <div class="bottom_nav_menu_submenu">
                            <button class="bottom_nav_menu_submenu_btn bg_rdv rdvBtn bottom_nav_menu_submenu_btn_toplist">Programmation 2023</button>
                            <button class="bottom_nav_menu_submenu_btn bg_rdv rdvBtn">Lieux du festival</button>
                            <button class="bottom_nav_menu_submenu_btn bg_rdv rdvBtn">Artistes</button>
                            <button class="bottom_nav_menu_submenu_btn bg_rdv rdvBtn">S'impliquer</button>
                            <button class="bottom_nav_menu_submenu_btn bg_rdv rdvBtn">
                                À propos
                                <ul class="bottom_nav_menu_submenu_btn_list">
                                    <a href="">L'équipe du festival</a>
                                    <a href="">Le prix Jocelyn Bérubé</a>
                                    <a href="">La Bavarde: La bière officielle</a>
                                    <a href="">Vers un festival responsable</a>
                                    <a href="">Galerie médias</a>
                                </ul>
                            </button>
                        </div>
                    </div>

                    <div class="bottom_nav_menu">
                        <button class="bottom_nav_menu_btn bg_vents ventsBtn">
                            <p class="bottom_nav_menu_btn_title">NOTRE PROG' ESTIVALE</p>
                            <p class="bottom_nav_menu_btn_title2">VENTS DE PAROLE</p>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
</header>