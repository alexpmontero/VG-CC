<?php
/* Template Name: Page Our Team */
/* Template Post Type: page */

get_header();
?>

<main class="wrapper_main page_our_team">

  <?php
  // Obtener la página por su slug
  $page = get_page_by_path('our-team');

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

  <?php
  $args = array(
    'posts_per_page' => 1,
    'category_name'  => 'our-team', // slug de la categoría
    'tag'            => 'page-our-team', // slug del tag
  );

  $custom_query = new WP_Query($args);

  if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

      <section
        class="wrapper_descript_team max-w-[980px] px-4 mx-auto text_ttl text-center font-semibold leading-[1.95]">
        <?php the_content() ?>
      </section>

  <?php endwhile;
    wp_reset_postdata();
  endif;
  ?>

  <section class="wrapper_ourteam mb-24">
    <div class="container_main relative">
      <h2
        class="absolute w-full t-0 l-0 font-black clr text-[18rem] overflow-hidden whitespace-nowrap leading-[.75] p-0 m-0 hidden md:block">
        Our team
      </h2>
      <div
        class="drawer_ourteam grid md:grid-cols-2 xl:grid-cols-3 relative z-1 gap-x-18 gap-y-30 md:gap-y-36 pt-[4rem] md:pt-[16rem]">


        <div class="item_team initial">
          <h2 class="text-4xl sm:text-5xl font-bold mb-2">
            <?php echo function_exists('pll__') ? pll__('Our Team') : 'Our Team'; ?>
          </h2>
          <div class="font-medium">
            <?php echo function_exists('pll__') ? pll__('Our dedicated') : 'Our dedicated'; ?>
          </div>
        </div>

        <?php
        $args = array(
          'category_name'  => 'team', // slug de la categoría
          'tag'            => 'team-general', // slug del tag
          'order'          => 'ASC',
        );

        $custom_query = new WP_Query($args);

        if ($custom_query->have_posts()) :
          while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

            <div class="item_team">
              <div class="names_team">
                <h2 class="text-2xl font-bold"><?php the_title(); ?></h2>
                <div class="font-medium"><?php the_excerpt(); ?></div>
              </div>

              <div class="picture_team">
                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail('medium', ['class' => 'team-img']);
                } ?>
              </div>

              <button
                class="btn_mini mini_green trans absolute b-0 right-5 z-1 shadow-2xl openModal"
                data-name="<?php echo esc_attr(get_the_title()); ?>"
                data-role="<?php echo esc_attr(get_the_excerpt()); ?>"
                data-image="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>"
                data-content="<?php echo esc_attr(wp_kses_post(apply_filters('the_content', get_the_content()))); ?>">
                <i class="ri-arrow-right-line"></i>
              </button>
            </div>



        <?php endwhile;
          wp_reset_postdata();
        endif;
        ?>


      </div>
    </div>
  </section>

  <section class="wrapper_directors pt-22 pb-42">
    <div class="container_main relative">
      <h2
        class="absolute w-full bottom-0 l-0 font-black opacity-3 clr text-[18rem] overflow-hidden whitespace-nowrap leading-[.75] p-0 m-0 hidden md:block">
        Directors
      </h2>

      <div class="flex flex-col sm:flex-row justify-between items-center gap-x-9">
        <h2 class="text-4xl sm:text-5xl font-bold mb-1">

          <?php echo function_exists('pll__') ? pll__('Board of Directors') : 'Board of Directors'; ?>
        </h2>
        <div class="font-medium text-center sm:text-left max-w-[400px]">
          <?php echo function_exists('pll__') ? pll__('Our Board provides') : 'Our Board provides'; ?>

        </div>
      </div>
      <div
        class="drawer_ourteam grid md:grid-cols-2 xl:grid-cols-3 relative z-1 gap-x-18 gap-y-36 pt-[8rem]">



        <?php
        $args = array(
          'category_name'  => 'team', // slug de la categoría
          'tag'            => 'team-executives', // slug del tag
          // 'order'          => 'ASC',
        );

        $custom_query = new WP_Query($args);

        if ($custom_query->have_posts()) :
          while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

            <div class="item_team directors">
              <div class="names_team">
                <h2 class="text-2xl font-bold"><?php the_title(); ?></h2>
                <div class="font-medium"><?php the_excerpt(); ?></div>
              </div>

              <div class="picture_team">
                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail('medium', ['class' => 'team-img']);
                } ?>
              </div>

              <button
                class="btn_mini mini_green trans absolute b-0 right-5 z-1 shadow-2xl openModal"
                data-name="<?php echo esc_attr(get_the_title()); ?>"
                data-role="<?php echo esc_attr(get_the_excerpt()); ?>"
                data-image="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>"
                data-content="<?php echo esc_attr(wp_kses_post(apply_filters('the_content', get_the_content()))); ?>">
                <i class="ri-arrow-right-line"></i>
              </button>
            </div>

        <?php endwhile;
          wp_reset_postdata();
        endif;
        ?>

      </div>
    </div>
  </section>

  <?php include get_template_directory() . '/pre-footer.php'; ?>

</main>

<!-- Overlay -->
<div
  id="modalOverlay"
  class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden transition-opacity duration-300 z-99 opacity-0"></div>

<!-- Modal Wrapper -->
<div
  id="modalBox"
  class="modal__team fixed inset-0 flex items-center justify-center pointer-events-none z-99">
  <div
    id="modalContent"
    class="w-full max-w-[620px] p-4 scale-90 hidden transition-transform transition-opacity duration-300 pointer-events-auto opacity-0">
    <div
      class="item_team flex-col !items-start !justify-start !gap-0 relative">
      <button
        id="closeModal"
        class="btn_mini mini_green trans absolute t-0 right-5 z-1 shadow-2xl">
        <i class="ri-close-fill"></i>
      </button>
      <div class="relative w-full">
        <div class="names_team">
          <h2 id="modalName" class="text-3xl font-bold"></h2>
          <p id="modalRole" class="font-medium"></p>
        </div>
        <img id="modalImage" class="picture_team_img" src="" alt="" />
      </div>

      <div id="modalBody" class="info_personal custom-scroll">
      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    menuMovil();
    isDropdown();
    headerOnScroll();
    drawerInit();
    modalTeam();
  });
</script>