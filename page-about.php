<?php
/* Template Name: Page About */
/* Template Post Type: page */

get_header();
?>

<main class="wrapper_main page_about">

  <?php
  // Obtener la página por su slug
  $page = get_page_by_path('about');

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

  <section class="wrapper_about">
    <div class="drawer_about lg:mb-24 mb-14">
      <div
        class="content_about flex flex-col-reverse justify-center lg:flex-row gap-x-5 md:gap-x-18">
        <?php
        $args = array(
          'posts_per_page' => 1,
          'category_name'  => 'about-us', // slug de la categoría
          'tag'            => 'page-home', // slug del tag
        );

        $custom_query = new WP_Query($args);

        if ($custom_query->have_posts()) :
          while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <?php
            // Obtener imagen destacada
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>

            <div style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');"
              class="picture_about rounded-2xl  md:object-cover w-full  h-full sm:h-[350px] lg:h-[500px] min-w-[350px] bg-cover bg-center"></div>
            <div class="py-12">
              <h2 class="text_ttl font-bold mb-8 leading-[1.95]">
                <?php the_title(); ?>
              </h2>
              <div class="font-medium">
                <?php the_excerpt(); ?>
              </div>
            </div>

        <?php endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>

    <div class="drawer_mission lg:mb-24 mb-14">
      <div
        class="content_about flex justify-center lg:flex-row gap-x-5 md:gap-x-18">

        <?php
        $args = array(
          'posts_per_page' => 1,
          'category_name'  => 'about-us', // slug de la categoría
          'tag'            => 'mision', // slug del tag
        );

        $custom_query = new WP_Query($args);

        if ($custom_query->have_posts()) :
          while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

            <?php
            // Obtener imagen destacada
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
            <div class="py-12">
              <h2 class="text_ttl font-bold mb-8 leading-[1.95] c_marin">
                <?php the_title(); ?>
              </h2>
              <h2 class="text_ttl font-bold mb-8 leading-[1.95]">
                <?php the_content(); ?>
              </h2>
              <div class="font-medium mb-6">
                <?php the_excerpt(); ?>
              </div>
              <button class="btn btn_primary trans">
                <span>Let's talk</span>
                <span class="ico_btn">
                  <i class="ri-arrow-right-line"></i>
                </span>
              </button>
            </div>

            <div style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');"
              class="picture_about rounded-2xl rounded-bl-[1rem] lg:rounded-bl-[8rem] md:object-cover w-full  h-full sm:h-[350px] lg:h-[500px] min-w-[325px] bg-cover bg-center"></div>

        <?php endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>

    <div class="drawer_vision lg:mb-24 mb-14">
      <div
        class="content_about flex flex-col-reverse justify-center lg:flex-row gap-x-5 md:gap-x-18">

        <?php
        $args = array(
          'posts_per_page' => 1,
          'category_name'  => 'about-us', // slug de la categoría
          'tag'            => 'vision', // slug del tag
        );

        $custom_query = new WP_Query($args);

        if ($custom_query->have_posts()) :
          while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

            <?php
            // Obtener imagen destacada
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>

            <div style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');"
              class="picture_about rounded-2xl rounded-tr-[1rem] lg:rounded-tr-[8rem] md:object-cover w-full  h-full sm:h-[350px] lg:h-[500px] min-w-[325px] bg-cover bg-center"></div>
            <div class="py-12">
              <h2 class="text_ttl font-bold mb-8 leading-[1.95] c_marin">
                <?php the_title(); ?>
              </h2>
              <h2 class="text_ttl font-bold mb-8 leading-[1.95]">
                <?php the_excerpt(); ?>
              </h2>
            </div>
        <?php endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>

    <div class="drawer_values lg:mb-24 mb-18">
      <h2 class="text_ttl text-center font-bold mb-6 leading-[1.95]">
        <?php echo function_exists('pll__') ? pll__('Values') : 'Values'; ?>
      </h2>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 justify-between">
        <div
          class="text-center font-semibold rounded-2xl text-lg py-6 px-2">
          <?php echo function_exists('pll__') ? pll__('Integrity') : 'Integrity'; ?>
        </div>
        <div
          class="text-center font-semibold rounded-2xl text-lg py-6 px-2">
          <?php echo function_exists('pll__') ? pll__('Respect') : 'Respect'; ?>
        </div>
        <div
          class="text-center font-semibold rounded-2xl text-lg py-6 px-2">
          <?php echo function_exists('pll__') ? pll__('Collaboration') : 'Collaboration'; ?>
        </div>
        <div
          class="text-center font-semibold rounded-2xl text-lg py-6 px-2">
          <?php echo function_exists('pll__') ? pll__('Kindness') : 'Kindness'; ?>
        </div>
      </div>
    </div>
  </section>

  <?php include get_template_directory() . '/donations.php'; ?>

  <?php include get_template_directory() . '/faqs.php'; ?>

  <?php include get_template_directory() . '/pre-footer.php'; ?>

</main>

<?php get_footer(); ?>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    menuMovil();
    accordion();
    isDropdown();
    headerOnScroll();
    drawerInit();
  });
</script>