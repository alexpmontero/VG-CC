<?php
/* Template Name: Page Events */
/* Template Post Type: page */

get_header();
?>
<main class="wrapper_main page_events">

  <?php
  // Obtener la página por su slug
  $page = get_page_by_path('events');

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

  <section class="wrapper_events">
    <div class="container_main preview">
      <div class="">
        <h2 class="text-3xl sm:text-4xl font-bold mb-3"><?php echo function_exists('pll__') ? pll__('Upcoming Events') : 'Upcoming Events'; ?></h2>
      </div>
      <div class="box_items_upcoming">
        <?php

        $paged = get_query_var('paged') ? get_query_var('paged') : 1;

        $args = [
          'post_type'      => 'post',
          'posts_per_page' => 10,
          'paged'          => $paged,
          'category_name'  => 'events',
          'meta_key'       => 'fecha_de_evento',
          'orderby'        => 'meta_value',
          'order'          => 'ASC',
          'meta_query'     => [
            [
              'key'     => 'fecha_de_evento',
              'value'   => date('Ymd'),
              'compare' => '>=',
              'type'    => 'NUMERIC',
            ],
          ],
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
        ?>

            <?php
            $fecha = get_field('fecha_de_evento');

            if ($fecha) {
              $date = DateTime::createFromFormat('Ymd', $fecha);

              $dia  = $date->format('d');
              $mes  = $date->format('M');
              $anio = $date->format('Y');
            }
            ?>

            <div class="item_upcoming grid grid-cols-1 lg:grid-cols-2 gap-6">
              <div class="up_pt1 flex gap-3 md:gap-12 items-start">
                <div class="data_event">
                  <span><?php echo esc_html($mes); ?></span>
                  <span class="num"><?php echo esc_html($dia); ?></span>
                  <span><?php echo esc_html($anio); ?></span>
                </div>

                <div>
                  <h2 class="font-semibold text-2xl">
                    <?php the_title(); ?>
                  </h2>
                  <p class="font-medium text-lg italic">
                    <span><i class="ri-map-pin-2-line"></i></span>
                    <span> <?php the_field('address'); ?></span>
                  </p>
                </div>
              </div>
              <div class="up_pt2 flex gap-3 md:gap-12 items-start">
                <div>
                  <div class="font-regular mb-4">
                    <?php the_content(); ?>
                  </div>
                  <p>
                    <button class="btn btn_secundary trans">
                      <span><?php echo function_exists('pll__') ? pll__('Learn More') : 'Learn More'; ?></span>
                      <span class="ico_btn">
                        <i class="ri-arrow-right-line"></i>
                      </span>
                    </button>
                  </p>
                </div>
                <div class="picture_up">
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('');
                  } ?>
                </div>
              </div>
            </div>

        <?php
          }
          wp_reset_postdata();
        } else {
          echo '<p>No se encontraron publicaciones".</p>';
        }
        ?>

        <?php if ($query->max_num_pages > 1) : ?>
          <div class="flex justify-center items-center gap-2 my-16">
            <?php
            echo paginate_links([
              'total'     => $query->max_num_pages,
              'current'   => $paged,
              'prev_text' => '<span class="flex items-center gap-2 btn_mini mini_primary transition">
                        <i class="ri-arrow-left-line"></i>
                      </span>',
              'next_text' => '<span class="flex items-center gap-2 btn_mini mini_primary transition">
                        <i class="ri-arrow-right-line"></i>
                      </span>',
            ]);
            ?>
          </div>
        <?php endif; ?>

      </div>
    </div>

    <div class="last">
      <div class="container_main">
        <div class="">
          <h2 class="text-3xl sm:text-4xl font-bold mb-3">Past Events</h2>
        </div>
        <div class="box_items_upcoming">
          <?php
          $args = [
            'posts_per_page' => 5,
            'post_type'      => 'post',
            'category_name'  => 'events',
            'meta_key'       => 'fecha_de_evento',
            'orderby'        => 'meta_value',
            'order'          => 'DESC',
            'meta_query'     => [
              [
                'key'     => 'fecha_de_evento',
                'value'   => date('Ymd'),
                'compare' => '<',
                'type'    => 'NUMERIC',
              ],
            ],
          ];


          $query = new WP_Query($args);

          if ($query->have_posts()) {
            while ($query->have_posts()) {
              $query->the_post();
          ?>

              <?php
              $fecha = get_field('fecha_de_evento');

              if ($fecha) {
                $date = DateTime::createFromFormat('Ymd', $fecha);

                $dia  = $date->format('d');
                $mes  = $date->format('M');
                $anio = $date->format('Y');
              }
              ?>

              <div class="item_upcoming grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="up_pt1 flex gap-3 md:gap-12 items-start">
                  <div class="data_event">
                    <span><?php echo esc_html($mes); ?></span>
                    <span class="num"><?php echo esc_html($dia); ?></span>
                    <span><?php echo esc_html($anio); ?></span>
                  </div>

                  <div>
                    <h2 class="font-semibold text-2xl">
                      <?php the_title(); ?>
                    </h2>
                    <p class="font-medium text-lg italic">
                      <span><i class="ri-map-pin-2-line"></i></span>
                      <span> <?php the_field('address'); ?></span>
                    </p>
                  </div>
                </div>
                <div class="up_pt2 flex gap-3 md:gap-12 items-start">
                  <div>
                    <div class="font-regular mb-4">
                      <?php the_content(); ?>
                    </div>
                    <p>
                      <button class="btn btn_secundary trans">
                        <span><?php echo function_exists('pll__') ? pll__('Learn More') : 'Learn More'; ?></span>
                        <span class="ico_btn">
                          <i class="ri-arrow-right-line"></i>
                        </span>
                      </button>
                    </p>
                  </div>
                  <div class="picture_up">
                    <?php if (has_post_thumbnail()) {
                      the_post_thumbnail('');
                    } ?>
                  </div>
                </div>
              </div>

          <?php
            }
            wp_reset_postdata();
          } else {
            echo '<p>No se encontraron publicaciones".</p>';
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  <?php include get_template_directory() . '/donations.php'; ?>

  <?php include get_template_directory() . '/pre-footer.php'; ?>


</main>
<?php
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