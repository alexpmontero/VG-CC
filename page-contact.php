<?php
/* Template Name: Page Contact */
/* Template Post Type: page */

get_header();
?>

<main class="wrapper_main page_contact">
  <?php
  // Obtener la página por su slug
  $page = get_page_by_path('contact');

  if ($page) {
    // Obtener la URL de la imagen destacada
    $thumbnail_url = get_the_post_thumbnail_url($page->ID, 'full');

    if ($thumbnail_url) :
  ?>
      <section class="wrapper_hero_in_page lg:mb-22 mb-10">
        <div class="container_main relative">
          <div
            class="drawer_hero_page"
            style="background-image: url('<?php echo esc_url($thumbnail_url); ?>')">

            <div class="box_ttl_hero_page">
              <h2 class="font-extrabold text-5xl mb-6">
                <?php the_field('page_title'); ?>
              </h2>
              <p class="font-medium">
                <?php the_field('page_excerpt'); ?>
              </p>
            </div>
          </div>

          <h1 class="text_float_hero font-extrabold text-6xl mb-6"><?php the_field('page_subtitle'); ?></h1>

          <div
            class="icon_rounded green w-[115px] h-[115px] bottom-[-50px] right-[35px] sm:right-[60px]">
            <img
              src="<?php bloginfo('template_url') ?>/imgs/logo-rounded.png"
              alt="Vallarta Gay + Community Center" />
          </div>
        </div>
      </section>
  <?php
    else :
      echo '<p class="text-center">No tiene imagen destacada.</p>';
    endif;
  } else {
    echo '<p>Página no encontrada.</p>';
  }
  ?>

  <section class="container_main">
    <div class="max-w-[768px] px-4 mx-auto text-center mb-12">
      <h2 class="text_ttl font-bold mb-1"><?php echo function_exists('pll__') ? pll__('Contact') : 'Contact'; ?> </h2>
      <p class="ext_subttl font-semibold mb-2 max-w-[820px] mx-auto">
        <?php echo function_exists('pll__') ? pll__('Whether you’re seeking guidance') : 'Whether you’re seeking guidance'; ?>
      </p>
    </div>

    <div
      class="drawer_contact border-t-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-[30px] 2xl:gap-[75px] lg:gap-[100px] pt-12">
      <div class="w-full mb-4">
        <h6 class="font-bold tracking-[5px] text_mini mb-4 uppercase">
          <?php echo function_exists('pll__') ? pll__('our_location') : 'our_location'; ?>
        </h6>

        <p class="font-bold text-xl">
          <a href="<?php echo company_data('direccion_url'); ?>" target="_blank"><?php echo company_data('direccion'); ?></a>
        </p>
        </p>
      </div>
      <div class="w-full mb-4">
        <h6 class="font-bold tracking-[5px] text_mini mb-3 uppercase">
          WhatsApp
        </h6>
        <p class="flex items-center gap-1 text-xl font-bold">
          <span><i class="ri-whatsapp-line"></i></span><a target="_blank" href="<?php echo company_data('whatsapp_url'); ?>">
              <?php echo company_data('whatsapp'); ?>
            </a>
        </p>
      </div>
      <div class="w-full mb-4">
        <h6 class="font-bold tracking-[5px] text_mini mb-3 uppercase">
          <?php echo function_exists('pll__') ? pll__('Workhours') : 'Workhours'; ?>
        </h6>
        <p class="flex items-center sm:gap-10 gap-3 mb-2  text-xl font-bold">

          <span class="w-full"> <?php echo function_exists('pll__') ? pll__('L-V') : 'L-V'; ?></span><span class="w-full"><?php echo company_data("lunes_a_viernes") ?></span>
        </p>
        <p class="flex items-center sm:gap-10 gap-3 text-xl font-bold">
          <span class="w-full"> <?php echo function_exists('pll__') ? pll__('S') : 'S'; ?></span><span class="w-full"><?php echo company_data("sabado") ?></span>
        </p>

      </div>
      <div class="w-full mb-4">
        <h6 class="font-bold tracking-[5px] text_mini mb-3 uppercase">
          <?php echo function_exists('pll__') ? pll__('email_title') : 'email_title'; ?>
        </h6>
        <p class="flex items-center gap-1 text-xl font-bold">
          <a href="mailto: <?php echo company_data('email'); ?>"> <?php echo company_data('email'); ?></a>
        </p>
      </div>
      <div class="w-full mb-4">
        <h6 class="font-bold tracking-[5px] text_mini mb-3 uppercase">
          <?php echo function_exists('pll__') ? pll__('lets_social') : 'Lets social'; ?>
        </h6>
        <p class="flex items-center gap-1 text-xl font-bold">
          <span> <?php echo function_exists('pll__') ? pll__('Follow Us') : 'Follow Us'; ?></span>
          <a
            href="<?php echo company_data('facebook_url'); ?>"
            class="flex gap-2 items-center c_orange"
            target="_blank"
            rel="noopener noreferrer"><span><i class="text-3xl ri-facebook-box-fill"></i></span></a>
          <a
            href="<?php echo company_data('instagram_url'); ?>"
            class="flex gap-2 items-center c_orange"
            target="_blank"
            rel="noopener noreferrer"><span><i class="text-3xl ri-instagram-line"></i></span></a>
        </p>
      </div>
    </div>

    <div class="box_maps mt-8 mb-18">
      <iframe class="w-full min-h-[500px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.546841685484!2d-105.2396299240161!3d20.60655568093917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8421455bc7d8dae1%3A0x2a7940b0ecf9f61f!2sVallarta%20Gay%2B%20Community%20Center!5e0!3m2!1ses-419!2smx!4v1764046818699!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <?php include get_template_directory() . '/donations.php'; ?>

</main>

<?php get_footer(); ?>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    menuMovil();
    isDropdown();
    headerOnScroll();
    drawerInit();
  });
</script>