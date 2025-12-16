<?php
/* Template Name: Page Press */
/* Template Post Type: page */

get_header();

// Paginación
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// TOTAL por página de posts
$posts_per_page = 17;
?>

<main class="wrapper_main page_press">

  <?php
  /**
   * ==========================
   * POST DESTACADO (ÚLTIMO)
   * ==========================
   */
  $featured_args = [
    'post_type'      => 'post',
    'category_name'  => 'press',
    'posts_per_page' => 1,
    'orderby'        => 'date',
    'order'          => 'DESC',
  ];

  $featured_query = new WP_Query($featured_args);

  if ($featured_query->have_posts()) :
    while ($featured_query->have_posts()) : $featured_query->the_post();
      $featured_id = get_the_ID();
  ?>

      <section class="wrapper_hero_in_page mb-22">
        <div class="container_main relative">
          <div
            class="drawer_hero_page in_press"
            style="background-image: url(<?php bloginfo('template_url') ?>/imgs/pages/bg_press.jpg)">

            <div class="box_ttl_hero_page">
              <h3 class="font-extrabold text-xl md:text-2xl lg:text-3xl mb-4">
                <?php the_title(); ?>
              </h3>
              <div class="font-medium mb-4">
                <?php echo get_the_content(); ?>
              </div>
              <p>
                <a href="<?php echo esc_url(wp_strip_all_tags(get_the_excerpt(), true)); ?>" target="_blank" class="btn btn_border trans w-42">
                  <span><?php echo function_exists('pll__') ? pll__('Learn More') : 'Learn More'; ?></span>
                  <span class="ico_btn">
                    <i class="ri-arrow-right-line"></i>
                  </span>
                </a>
              </p>
            </div>

            <div class="box_picture_press">
              <?php the_post_thumbnail('full'); ?>
            </div>
          </div>

          <div class="icon_rounded green w-[115px] h-[115px] bottom-[-50px] right-[35px] sm:right-[60px]">
            <img src="<?php bloginfo('template_url') ?>/imgs/logo-rounded.png" alt="Vallarta Gay + Community Center" />
          </div>
        </div>
      </section>

  <?php
    endwhile;
    wp_reset_postdata();
  endif;
  ?>

  <?php
  /**
   * ==========================
   *TOTAL POSTS + PAGINADO
   * ==========================
   */
  $press_args = [
    'post_type'      => 'post',
    'category_name'  => 'press',
    'posts_per_page' => $posts_per_page - 1,
    'paged'          => $paged,
    'post__not_in'   => isset($featured_id) ? [$featured_id] : [],
    'orderby'        => 'date',
    'order'          => 'DESC',
  ];

  $press_query = new WP_Query($press_args);
  ?>

  <section class="wrapper_press">
    <div class="container_main preview">

      <div class="max-w-[768px] px-4 mx-auto text-center mb-12">
        <h2 class="text_ttl font-bold mb-1"><?php echo function_exists('pll__') ? pll__('Press') : 'Press'; ?> </h2>
        <p class="ext_subttl font-semibold mb-2 max-w-[820px] mx-auto">
          <?php echo function_exists('pll__') ? pll__('text_press_home') : 'text_press_home'; ?>
        </p>
      </div>

      <div class="drawer_cat_press grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 md:gap-10">

        <?php if ($press_query->have_posts()) : ?>
          <?php while ($press_query->have_posts()) : $press_query->the_post(); ?>

            <div class="item__press">
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail('medium');
              } ?>

              <div class="info__box">
                <h4 class="text-md leading-5 font-semibold">
                  <?php the_title(); ?>
                </h4>

                <div class="flex items-center justify-between gap-5">
                  <div class="text-sm text-gray-800 flex justify-between items-center gap-2">
                    <i class="ri-calendar-line"></i>
                    <?php echo get_the_content(); ?>
                  </div>

                  <a
                    href="<?php echo esc_url(wp_strip_all_tags(get_the_excerpt(), true)); ?>"
                    target="_blank"
                    class="btn_mini mini_orange trans shadow-2xl">
                    <i class="ri-arrow-right-line"></i>
                  </a>
                </div>
              </div>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>

      <!-- PAGINADO -->
      <div class="flex justify-center items-center gap-2 my-16">
        <?php
        echo paginate_links([
          'total'     => $press_query->max_num_pages,
          'current'   => $paged,
          'prev_text' => '<span class="flex items-center gap-2 btn_mini mini_primary  transition">
                            <i class="ri-arrow-left-line"></i>
                          </span>',
          'next_text' => '<span class="flex items-center gap-2 btn_mini mini_primary  transition">
                            <i class="ri-arrow-right-line"></i>
                          </span>',
        ]);
        ?>
      </div>

    </div>
  </section>

  <?php include get_template_directory() . '/donations.php'; ?>
  <?php include get_template_directory() . '/pre-footer.php'; ?>

</main>

<?php
wp_reset_postdata();
get_footer();
?>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    menuMovil();
    isDropdown();
    headerOnScroll();
    drawerInit();
  });
</script>