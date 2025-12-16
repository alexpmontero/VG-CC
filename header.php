<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta
    name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/imgs/ico-vgcc.png" />
  <title>Vallarta Gay + Community Center</title>
  <meta name="author" content="By Alex P. Montero" />
  <meta
    name="application-name"
    content="Sitio web oficial Vallarta Gay + Community Center" />
  <meta name="description" content="" />

  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css"
    rel="stylesheet" />

  <link
    href="
    https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
    "
    rel="stylesheet" />
  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/vegas.min.css" />
  <link rel="stylesheet" href="<?php bloginfo("stylesheet_url") ?>" />
</head>

<body>
  <header class="wrapper_header trans">
    <div class="h_top font-regular">
      <div class="contain_t flex justify-between items-center">

        <?php
        if (function_exists('pll_the_languages')) {

          $languages = pll_the_languages(array(
            'show_flags' => 0,
            'show_names' => 0,
            'display_names_as' => 'slug',
            'raw' => 1 // Importantísimo para personalizar
          ));

          if (!empty($languages)) {
            echo '<ul class="controls_lang">';
            foreach ($languages as $lang) {

              $active_class = $lang['current_lang'] ? 'active' : '';

              echo '<li class="' . $active_class . '">
              <a href="' . esc_url($lang['url']) . '">' . esc_html($lang['slug']) . '</a>
            </li>';
            }
            echo '</ul>';
          }
        }
        ?>

        <div class="flex gap-5">
          <span class="flex gap-1 items-center"><i class="text-lg ri-mail-fill"></i>
            <a href="mailto:info@vallartagaycc.org">info@vallartagaycc.org</a></span>
          <span class="flex gap-3">
            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="text-lg ri-facebook-box-fill"></i></a>
            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="text-lg ri-instagram-line"></i></a>
            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="text-lg ri-tiktok-fill"></i></a>
          </span>
        </div>
      </div>
    </div>
    <div class="h_bottom">
      <div class="contain_b">
        <div class="box_brand">
          <img class="trans" src="<?php bloginfo('template_url') ?>/imgs/logo-vgcc.png" alt="" />
        </div>
        <nav
          class="box_nav select-none flex gap-2 lg:gap-[8px] xl:gap-[20px]">
          <a href="#" class="item_dropdown">Home</a>
          <div class="item_dropdown relative dropdown">
            <button class="dropdown-btn flex items-center gap-1 transition">
              <span>About</span>
              <svg
                class="w-4 h-4 transition-transform"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>

            <div
              class="dropdown-menu absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-xl opacity-0 invisible scale-95 transition-all duration-200 origin-top">
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">Opción 1</a>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">Opción 2</a>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">Opción 3</a>
            </div>
          </div>
          <div class="item_dropdown relative dropdown">
            <button class="dropdown-btn flex items-center gap-1 transition">
              <span>Services</span>
              <svg
                class="w-4 h-4 transition-transform"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>

            <div
              class="dropdown-menu absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-xl opacity-0 invisible scale-95 transition-all duration-200 origin-top">
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">Opción 1</a>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">Opción 2</a>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">Opción 3</a>
            </div>
          </div>
          <div class="item_dropdown relative dropdown">
            <button class="dropdown-btn flex items-center gap-1 transition">
              <span>Community</span>
              <svg
                class="w-4 h-4 transition-transform"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>

            <div
              class="dropdown-menu absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-xl opacity-0 invisible scale-95 transition-all duration-200 origin-top">
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">Opción 1</a>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">Opción 2</a>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">Opción 3</a>
            </div>
          </div>
          <a href="#" class="">Activities</a>
        </nav>
        <div class="links flex gap-2">
          <a href="#" class="btn btn_border trans !pr-3">
            <span>Connect with Us</span>
          </a>
          <button class="btn btn_orange trans" data-drawer-trigger>
            <span>I Give Now</span>
            <span class="ico_btn">
              <i class="ri-arrow-right-line"></i>
            </span>
          </button>
          <button
            class="btn_movil btn_mini mini_primary trans !h-[2.76rem] !w-[2.75rem]">
            <i class="icon_open block text-xl ri-menu-3-line"></i>
            <span class="icon_close hidden"><i class="ri-close-line"></i></span>
          </button>
        </div>
      </div>
    </div>

 

  <?php include get_template_directory() . '/aside-donate.php'; ?>
      
  </header>