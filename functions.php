<?php
register_nav_menus(array(
  'menu' => 'Menu principal',
  'menu_social' => 'Menu Redes Sociales',
));

add_theme_support('post-thumbnails');
add_image_size('principal_thumbs', 850, 450, true);
add_image_size('thumbs', 250, 150, true);
