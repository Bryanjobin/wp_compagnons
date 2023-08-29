<?php

function files() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
} 

add_action( 'wp_enqueue_scripts', 'files' );


function my_acf_json_load_point( $paths ) {
    unset($paths[0]);

    $paths[] = get_stylesheet_directory() . '/acf-json';

    return $paths;    
}
add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' ); 


add_action( 'init', function() {
	register_post_type( 'membre-festival', array(
        'labels' => array(
            'name' => 'Membres de l&#039;équipe du festival',
            'singular_name' => 'Membre de l&#039;équipe du festival',
            'menu_name' => 'Membres de l&#039;équipe du festival',
            'all_items' => 'All cartes_employe',
            'edit_item' => 'Éditer la carte de l&#039;employé',
            'view_item' => 'Voir la carte de l&#039;employé',
            'view_items' => 'Voir les cartes des employés',
            'add_new_item' => 'Ajouter une carte d&#039;employé',
            'new_item' => 'Nouvelle carte employé',
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array(
            0 => 'title',
            1 => 'thumbnail',
            2 => 'id'
        ),
        'delete_with_user' => false,
    ) );
} );

//INSERT JAVASCRIPT IN HEADER

    function ti_custom_javascript() {
        ?>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const mobileHeaderBtns = document.querySelectorAll('.m_header_container_button_primary');
                    const mobileHeaderBtnsLists = document.querySelectorAll('.m_header_container_button_secondary');
                    const mobileHeaderMenu = document.querySelector('.m_header_container');
                    const mobileHeaderMenuBtn = document.querySelector('.m_header_top_hamburger');
                    const mobileHeaderMenuBtnIcon = document.querySelector('.m_header_top_hamburger_icon');
                    const mobileMain = document.querySelector('main');
                    //const mobileFooter = document.querySelector('footer');

                    mobileHeaderMenuBtn.addEventListener('click', () => {
                        if (mobileHeaderMenuBtnIcon.textContent === 'close') {
                            mobileHeaderMenuBtnIcon.textContent = 'menu';
                            mobileHeaderMenu.style.display = 'none';
                            mobileMain.style.display = 'block';
                            mobileFooter.style.display = 'block';
                        } else {
                            mobileHeaderMenuBtnIcon.textContent = 'close';
                            mobileHeaderMenu.style.display = 'flex';
                            mobileMain.style.display = 'none';
                           // mobileFooter.style.display = 'none';
                        }
                    })

                    mobileHeaderBtns.forEach((button, index) => {
                        button.addEventListener('click', () => {
                            const isHidden = mobileHeaderBtnsLists[index].style.display === 'none' || mobileHeaderBtnsLists[index].style.display === '';

                            if (isHidden) {
                                mobileHeaderBtnsLists[index].style.display = 'flex';
                                button.querySelector('.m_header_container_button_primary_right .material-symbols-outlined').textContent = 'expand_less';
                            } else {
                                mobileHeaderBtnsLists[index].style.display = 'none';
                                button.querySelector('.m_header_container_button_primary_right .material-symbols-outlined').textContent = 'expand_more';
                            }
                        });
                    });

                /*// ACCORDION //
                    const accordion = document.querySelector('.simpliquer_menterie_accordion');
                    const panel = document.querySelector('.simpliquer_menterie_accordion_panel');
                    const icon = document.querySelector('.material-symbols-outlined');
                    const chevronUp = "expand_less";
                    const chevronDown = "expand_more";
                    let currentIcon = chevronUp;

                    accordion.addEventListener('click', () =>{
                        if (panel.style.display === "block" && currentIcon === chevronUp){
                            panel.style.display = "none";
                            icon.innerHTML = currentIcon;
                            currentIcon = chevronDown;
                        } else{
                            panel.style.display = "block";
                            icon.innerHTML = currentIcon;
                            currentIcon = chevronUp;
                        }
                    })*/
                })
            </script>
        <?php
    }
    add_action('wp_head', 'ti_custom_javascript');
?>


