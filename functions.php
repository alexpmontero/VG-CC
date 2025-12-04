<?php
register_nav_menus(array(
  'menu' => 'Menu principal',
  'menu_social' => 'Menu Redes Sociales',
));

add_theme_support('post-thumbnails');
add_image_size('principal_thumbs', 850, 450, true);
add_image_size('thumbs', 250, 150, true);

add_action('init', function () {
  if (function_exists('pll_register_string')) {
    
    // TITULOS ==
    pll_register_string('title_welcome', 'WELCOME', 'TitleVGCC');
    pll_register_string('title_activities', 'Activities', 'TitleVGCC');
    pll_register_string('title_services', 'Services', 'TitleVGCC');
    pll_register_string('title_press', 'Press', 'TitleVGCC');

    
    // TEXTOS ==
    pll_register_string('text_about_home', 'Together, we’re building', 'TextVGCC');
    pll_register_string('text_activities_home', 'text_activities_home', 'TextVGCC');
    pll_register_string('text_services_home', 'text_services_home', 'TextVGCC');
    pll_register_string('text_press_home', 'text_press_home', 'TextVGCC');
    
    
    // BOTONES ==
    pll_register_string('btn_our_services', 'Our services', 'BtnsVGCC');
    pll_register_string('btn_who_we_are', 'Discover Who We Are', 'BtnsVGCC');
    pll_register_string('btn_learn_more', 'Learn More', 'BtnsVGCC');
    pll_register_string('btn_give_now', 'I Give Now', 'BtnsVGCC');

    


  }
});
