<?php 
//menu function.php

//add theme menu here
function new_theme_menus(){
    register_nav_menus(array(
        'main_menu' => 'main menu',
        'footer_menu' => 'Footer menu'
    ));
}
add_action('init','new_theme_menus');


function new_theme_defult_menu(){
    echo '<ul class="nav navbar-nav">';
		if ('page' != get_option('show_on_front')) {
			echo '<li><a href="'. home_url() . '/">Home</a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
    
}
//header.php

 <?php wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'menu_class' => 'nav navbar-nav',
                        'fallback_cb' => 'new_theme_defult_menu'
    
                    ));?>