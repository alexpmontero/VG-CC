<?php get_header(); ?>

<main class="wrapper_main">
  <section class="wrapper_hero sm:mb-22 mb-6">
    <div class="container_main relative">
      <div class="drawer_info_welcome">
        <h6
          class="text_mini c_marin font-bold tracking-[7px] mb-6 lg:mb-18">
          <?php echo function_exists('pll__') ? pll__('WELCOME') : 'WELCOME'; ?>

        </h6>

        <?php
        $lang = pll_current_language(); // Detectar idioma actual

        // 1. Categoría traducida
        $cat_base = get_term_by('slug', 'hero-title', 'category');
        $cat_translated = pll_get_term($cat_base->term_id, $lang);
        $cat_id = $cat_translated ? $cat_translated : $cat_base->term_id;

        // 2. Tags traducidos
        $tag_slugs_base = array('main-title', 'page-home');
        $tag_slugs_translated = array();

        foreach ($tag_slugs_base as $t) {
          $tag_term = get_term_by('slug', $t, 'post_tag');
          $translated_term_id = pll_get_term($tag_term->term_id, $lang);
          $translated_term = get_term($translated_term_id);
          $tag_slugs_translated[] = $translated_term->slug;
        }

        // 3. Query
        $args = array(
          'posts_per_page' => 1,
          'cat'            => $cat_id,
          'tag_slug__in'   => $tag_slugs_translated,
        );

        $custom_query = new WP_Query($args);

        if ($custom_query->have_posts()) :
          while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <h2 class="text__welcome mb-4">
              <?php the_title(); ?>
            </h2>
            <div class="mb-9">
              <?php the_content(); ?>
            </div>
        <?php endwhile;
          wp_reset_postdata();
        endif;
        ?>

        <div class="">
          <button class="btn btn_primary trans">
            <span><?php echo function_exists('pll__') ? pll__('Our services') : 'Our services'; ?></span>
            <span class="ico_btn">
              <i class="ri-arrow-right-line"></i>
            </span>
          </button>

        </div>
      </div>
      <div
        class="drawer_hero_picture"
        id="vegas_hero"
        style="background-image: url(<?php bloginfo('template_url') ?>/imgs/bg_hero01.jpg)">

        <?php
        $args = array(
          'posts_per_page' => 1,
          'category_name'  => 'hero-message', // slug de la categoría
          'tag'            => 'page-home', // slug del tag
        );

        $custom_query = new WP_Query($args);

        if ($custom_query->have_posts()) :
          while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <h2 class="font-extrabold ttl_main">
              <?php the_title(); ?>
            </h2>
        <?php endwhile;
          wp_reset_postdata();
        endif;
        ?>


      </div>
      <div
        class="icon_rounded morado w-[140px] h-[140px] bottom-[-20px] right-[55px]">
        <img
          src="<?php bloginfo('template_url') ?>/imgs/logo-rounded.png"
          alt="Vallarta Gay + Community Center" />
      </div>
    </div>
  </section>

  <section class="wrapper_about_us sm:mb-22 mb-18">
    <div class="container_main relative">
      <div
        class="about_pt1 max-w-[980px] mb-0 pl-0 lg:pl-32 md:mb-40 relative z-1 mb-12">
        <?php
        $args = array(
          'posts_per_page' => 1,
          'category_name'  => 'about-us', // slug de la categoría
          'tag'            => 'page-home', // slug del tag
        );

        $custom_query = new WP_Query($args);

        if ($custom_query->have_posts()) :
          while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <h2 class="text_ttl font-bold mb-4">
              <?php the_title(); ?>
            </h2>
            <?php the_content(); ?>
        <?php endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
      <div
        class="about_pt2 flex flex-col md:flex-row gap-[20px] md:gap-[100px] xl:gap-[340px] md:items-end relative z-1">
        <img
          src="<?php bloginfo('template_url') ?>/imgs/bg_sala.png"
          class="object-cover w-full h-[225px] md:h-[150px] md:w-[180px] md:h-[250px] rounded-2xl"
          alt="" />
        <div class="md:max-w-[380px] mb-4">
          <p class="text_subttl font-semibold mb-4">


            <?php echo function_exists('pll__') ? pll__('Together, we’re building') : 'Together, we’re building'; ?>

          </p>
          <button class="btn btn_border trans">
            <span>

              <?php echo function_exists('pll__') ? pll__('Discover Who We Are') : 'Discover Who We Are'; ?>
            </span>
            <span class="ico_btn">
              <i class="ri-arrow-right-line"></i>
            </span>
          </button>
        </div>
      </div>
      <img
        class="bg_about_home_img object-cover w-[235px] h-[360px] rounded-2xl z-1"
        src="<?php bloginfo('template_url') ?>/imgs/about-home.png"
        alt="" />
      <h2
        class="absolute w-full font-black clr bottom-0 right-0 text-[16rem] max-w-[900px] leading-[.75] p-0 m-0 z-0 text-right hidden md:block">
        About Us
      </h2>
    </div>
  </section>

  <section class="wrapper_carousel_partners sm:mb-22 mb-18">

    <?php
    $args = array(
      'posts_per_page' => 1,
      'category_name'  => 'title-partner-slider', // slug de la categoría
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
      while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

        <h2 class="text_subttl font-semibold mb-2 text-center">
          <?php the_title(); ?>
        </h2>
    <?php endwhile;
      wp_reset_postdata();
    endif;
    ?>

    <div class="box_carousel_partners border-y-1 border-gray-300 py-8">
      <div
        class="splide carousel_partners"
        aria-label="Vallarta Gay Community Center Partners Carousel">
        <div class="splide__track">
          <ul class="splide__list">

            <?php
            $args = [
              'post_type'      => 'post',
              'category_name'  => 'partners-slider', // Slug de la categoría
            ];

            $query = new WP_Query($args);

            if ($query->have_posts()) {
              while ($query->have_posts()) {
                $query->the_post();
            ?>
                <li class="splide__slide">
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('');
                  } ?>
                </li>

            <?php
              }
              wp_reset_postdata();
            } else {
              echo '<p>No se encontraron publicaciones".</p>';
            }
            ?>


          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="wrapper_activities sm:mb-32 mb-18">
    <div class="container_main">
      <h2 class="text_ttl font-bold mb-1 text-center"><?php echo function_exists('pll__') ? pll__('Activities') : 'Activities'; ?> </h2>
      <p class="text_subttl font-semibold mb-2 text-center mb-6">
        <?php echo function_exists('pll__') ? pll__('text_activities_home') : 'text_activities_home'; ?>
      </p>
      <div class="box_carousel_activities">
        <div
          class="splide carousel_activities"
          aria-label="Carousel of activities at the Vallarta Gay Community Center">
          <div class="splide__arrows custom_arrows">
            <button class="splide__arrow splide__arrow--prev">
              <i class="ri-arrow-left-line"></i>
            </button>
            <button class="splide__arrow splide__arrow--next">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>
          <div class="splide__track">
            <ul class="splide__list item_activities">
              <?php
              $args = [
                'posts_per_page' => 6,
                'post_type'      => 'post',
                'category_name'  => 'activities-slider', // Slug de la categoría
              ];

              $query = new WP_Query($args);

              if ($query->have_posts()) {
                while ($query->have_posts()) {
                  $query->the_post();
              ?>
                  <li class="splide__slide">
                    <?php if (has_post_thumbnail()) {
                      the_post_thumbnail('');
                    } ?>
                  </li>
              <?php
                }
                wp_reset_postdata();
              } else {
                echo '<p>No se encontraron publicaciones".</p>';
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="wrapper_services_home sm:mb-22 mb-18">
    <div class="container_main">
      <h2 class="text_ttl font-bold mb-2 text-center">
        <?php echo function_exists('pll__') ? pll__('Services') : 'Services'; ?>
      </h2>
      <p
        class="text_subttl font-semibold mb-2 text-center mb-10 max-w-[820px] mx-auto">
        <?php echo function_exists('pll__') ? pll__('text_services_home') : 'text_services_home'; ?>
      </p>
      <div
        class="box_services_home grid grid-cols-1 lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 max-w-[400px]:grid-cols-2 gap-5">

        <?php
        $args = [
          'post_type'      => 'post',
          'order'          => 'ASC',
          'category_name'  => 'services', // Slug de la categoría
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
        ?>
            <?php
            // Obtener imagen destacada
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
            <div
              class="item_service_home trans h-full sm:min-h-[250px] md:min-h-[380px] lg:min-h-[450px]" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');">
              <span class="ico_service"><i class="<?php echo wp_strip_all_tags(get_the_excerpt(), true); ?>"></i></span>
              <div>
                <h2 class="font-extrabold text-2xl md:text-3xl">
                  <?php the_title(); ?>
                </h2>
                <div class="font-normal my-1"><?php the_content(); ?></div>
                <div class="">
                  <button class="btn btn_border wht trans">
                    <span><?php echo function_exists('pll__') ? pll__('Learn More') : 'Learn More'; ?></span>
                    <span class="ico_btn">
                      <i class="ri-arrow-right-line"></i>
                    </span>
                  </button>
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
  </section>

  <?php include get_template_directory() . '/donations.php'; ?>

  <section class="wrapper_press_home sm:mb-22 mb-18">
    <div class="container_main">
      <div
        class="flex mb-8 justify-between md:items-center flex-col sm:flex-row gap-5">
        <div class="">
          <h2 class="text_ttl font-bold mb-1"><?php echo function_exists('pll__') ? pll__('Press') : 'Press'; ?> </h2>
          <p class="text_subttl font-semibold max-w-[600px]">
            <?php echo function_exists('pll__') ? pll__('text_press_home') : 'text_press_home'; ?>
          </p>
        </div>
        <button class="btn btn_secundary trans bg-red-200 min-w-[160px]">
          <span><?php echo function_exists('pll__') ? pll__('Learn More') : 'Learn More'; ?></span>
          <span class="ico_btn">
            <i class="ri-arrow-right-line"></i>
          </span>
        </button>
      </div>
      <div
        class="box_items_press grid grid-cols-1 xl:grid-cols-3 lg:grid-cols-2 gap-6">
        <?php
        $args = [
          'posts_per_page' => 3,
          'post_type'      => 'post',
          'category_name'  => 'press', // Slug de la categoría
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
        ?>
            <div class="item_press">
              <div class="picture_press">
                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail('');
                } ?>
              </div>
              <div class="info_press">
                <h5 class="font-medium text-lg">
                  <?php the_title(); ?>
                </h5>
                <div class="flex items-center justify-between gap-5">
                  <div class="text-sm text-gray-400">
                    <i class="ri-calendar-line"></i> <?php echo wp_strip_all_tags(get_the_excerpt(), true); ?>
                  </div>
                  <a href="<?php echo wp_strip_all_tags(get_the_content(), true); ?>" target="_blank" class="btn_mini mini_orange trans">
                    <i class="ri-arrow-right-line"></i>
                  </a>
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
  </section>

  <section
    class="wrapper_upcoming_home sm:mb-22 mb-18 relative overflow-hidden">
    <div class="container_main relative z-1">
      <div
        class="flex mb-4 justify-between md:items-center flex-col sm:flex-row gap-5">
        <div class="">
          <h2 class="text_ttl font-bold mb-1">Upcoming Events</h2>
        </div>
        <button class="btn btn_border wht trans">
          <span>Upcoming experiences</span>
          <span class="ico_btn">
            <i class="ri-arrow-right-line"></i>
          </span>
        </button>
      </div>
      <div class="box_items_upcoming">



        <?php
        $args = [
          'posts_per_page' => 3,
          'post_type'      => 'post',
          'category_name'  => 'events', // Slug de la categoría
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
        ?>


            <div class="item_upcoming grid grid-cols-1 lg:grid-cols-2 gap-6">
              <div class="up_pt1 flex gap-3 md:gap-12 items-start">
                <div class="data_event">
                  <span>Nov</span><span class="num">28</span><span>2025</span>
                </div>
                <div>
                  <h2 class="font-semibold text-2xl">
                    <?php the_title(); ?>
                  </h2>
                  <p class="font-medium text-lg italic">
                    <span><i class="ri-map-pin-2-line"></i></span>
                    <span><?php echo wp_strip_all_tags(get_the_excerpt(), true); ?></span>
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
    <h2
      class="absolute w-full font-black clr bottom-5 opacity-6 left-0 text-[16rem] max-w-[900px] leading-[.75] p-0 m-0 z-0 text-left hidden md:block">
      Upcoming Events
    </h2>
  </section>

  <section class="wrapper_faqs sm:mb-22 mb-18">
    <div class="box_faqs">
      <h2 class="text_ttl font-bold mb-1 text-center">General Questions</h2>
      <p
        class="text_subttl font-semibold mb-2 text-center mb-5 sm:mb-12 max-w-[820px] mx-auto">
        Have questions or want to book an appointment? — we’re here for you!
      </p>
      <div
        class="faqs_contact flex flex-col sm:flex-row justify-center gap-3">
        <div class="item_faqs_contact">
          <p class="text-center font-semibold mb-2">
            Send us a message on WhatsApp
          </p>
          <button class="btn btn_border trans !font-normal mx-auto">
            <span class="font-semibold">(+52) 322 128 6793</span>
            <span class="ico_btn">
              <i class="ri-whatsapp-line"></i>
            </span>
          </button>
        </div>
        <div class="item_faqs_contact">
          <p class="text-center font-semibold mb-2">Send us an email.</p>
          <button class="btn btn_border trans !font-normal mx-auto">
            <span class="font-semibold">info@vallartagaycc.com</span>
            <span class="ico_btn">
              <i class="ri-mail-line"></i>
            </span>
          </button>
        </div>
      </div>
      <div
        id="accordion"
        class="content_accord_item_faqs w-full max-w-3xl mx-auto">
        <!-- ITEM 1 -->
        <div class="accrdn_item_faqs">
          <button
            class="accordion-header cursor-pointer w-full flex justify-between items-center py-4 text-left"
            data-index="0">
            <span class="text-lg font-semibold">What if I can’t afford the suggested donation?</span>
            <span class="icon text-2xl font-bold select-none">−</span>
          </button>

          <div
            class="accordion-content overflow-hidden max-h-[500px] transition-all duration-300">
            <div class="p-3">
              At the Vallarta Gay+ Community Center, we are committed to
              serving everyone in our community. While suggested donations
              help support our health and wellness programs, we understand
              that not everyone can contribute financially. If you’re unable
              to make a donation, please let us know. We assess each
              situation individually and will waive fees as needed to ensure
              you receive the PrEP and PEP services you need. No one is
              turned away due to inability to pay; everyone is welcome here.
              Our tests and other medications are priced at a low cost to
              make it affordable; we are not able to provide these
              completely free at this time.
            </div>
          </div>
        </div>

        <!-- ITEM 2 -->
        <div class="accrdn_item_faqs">
          <button
            class="accordion-header cursor-pointer w-full flex justify-between items-center py-4 text-left"
            data-index="1">
            <span class="text-lg font-semibold">What is the purpose of the Vallarta Gay+ Community
              Center?</span>
            <span class="icon text-2xl font-bold select-none">+</span>
          </button>

          <div
            class="accordion-content overflow-hidden max-h-0 transition-all duration-300">
            <div class="p-3">
              The Vallarta Gay+ Community Center is a nonprofit organization
              dedicated to fostering empowerment, health, and wellness
              within the LGBTQ+ community. We provide equitable access to
              healthcare, education, and support services, with focused care
              for the prevention and treatment of HIV and STIs. We advocate
              for our community’s equity and inclusion as a vital component
              of our region’s diverse society, providing a safe and
              inclusive environment to drive positive change locally and
              beyond.
            </div>
          </div>
        </div>

        <!-- ITEM 3 -->
        <div class="accrdn_item_faqs">
          <button
            class="accordion-header cursor-pointer w-full flex justify-between items-center py-4 text-left"
            data-index="2">
            <span class="text-lg font-semibold">What should I bring for my first visit?</span>
            <span class="icon text-2xl font-bold select-none">+</span>
          </button>

          <div
            class="accordion-content overflow-hidden max-h-0 transition-all duration-300">
            <div class="p-3">
              For your first visit, it’s recommended to bring a valid ID and
              any relevant medical records. If you’re seeking specific
              services like PrEP, ensure you have any necessary
              documentation or information that might assist in your
              evaluation. It’s also advisable to bring a form of payment for
              any suggested donations associated with the services you plan
              to utilize.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include get_template_directory() . '/pre-footer.php'; ?>

</main>

<?php get_footer(); ?>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    menuMovil();
    splidePartners();
    splideActivities();
    accordion();
    vegasHero();
    isDropdown();
    headerOnScroll();
    drawerInit();
  });
</script>