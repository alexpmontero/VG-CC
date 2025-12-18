<?php get_header(); ?>

<main class="wrapper_main page_single">
  <section class="wrapper_single md:mb-16 ">
    <div class="container px-4 mx-auto">
      <div
        class="drawer_single flex flex-col md:flex-row gap-15 lg:gap-[50px] xl:gap-[200px]">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="w-full">
              <h1 class="text-2xl sm:text-4xl font-extrabold mb-2">
                <?php the_title(); ?>
              </h1>
              <p class="font-medium">
                <?php echo get_the_excerpt(); ?>
              </p>
              <div class="box_picture_single mt-6 relative">
                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail();
                } ?>
                <div
                  class="icon_rounded yellow w-[115px] h-[115px] bottom-[-50px] right-4 lg:right-[20px] xl:right-[60px]">
                  <img
                    src="<?php bloginfo('template_url') ?>/imgs/logo-rounded.png"
                    alt="Vallarta Gay + Community Center" />
                </div>
              </div>
              <div class="content_single mt-16 lg:mt-24 md:text-lg">
                <?php the_content(); ?>
              </div>
            </div>

        <?php endwhile;
        endif; ?>

        <aside class="wrapper_aside hiddenxx md:block w-full max-w-[100%] md:max-w-[295px] xl:max-w-[325px]">
          <h4 class="text-center font-semibold text-lg mb-2">
            <?php echo function_exists('pll__') ? pll__('More service') : 'title_more_service'; ?>
          </h4>
          <div class="box_links_services">
           <?php
        $args = [
          // 'posts_per_page' => 3,
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
            $thumbnail_image = get_field('thumbnail_image');
            ?>
           
            <a href="<?php echo get_permalink(); ?>" class="item_link_services">
              <img
                class="picture_service"
                src="<?= esc_url($thumbnail_image['url']); ?>"
                alt="" />
              <h6>
                <span><?php the_title(); ?></span><i class="ri-arrow-right-s-line"></i>
              </h6>
            </a>
        <?php
          }
          wp_reset_postdata();
        } else {
          echo '<p>No se encontraron publicaciones".</p>';
        }
        ?>







           
          </div>
          <div class="box_contact_quikly">
            <img
              src="<?php bloginfo('template_url') ?>/imgs/bg_contact_quikly.png"
              class="object-cover w-full h-[125px]"
              alt="" />
            <div class="p-4 text-center">
              <h5 class="text-2xl font-bold leading-[28px]">
                
                <?php echo function_exists('pll__') ? pll__('Ready to book your appointment?') : 'title_ready_book'; ?>
              </h5>

              <div class="item_faqs_contact mt-6">
                <p class="text-center text-sm font-medium mb-2">
                  <?php echo function_exists('pll__') ? pll__('Send WhatsApp') : 'Send WhatsApp'; ?>
                </p>

                <a href="<?php echo company_data('whatsapp_url'); ?>" target="_blank" class="btn btn_border wht trans !font-normal mx-auto w-fit">
                  <span class="font-semibold"><?php echo company_data('whatsapp'); ?></span>
                  <span class="ico_btn">
                    <i class="ri-whatsapp-line"></i>
                  </span>
                </a>
              </div>

              <div class="item_faqs_contact mt-6">
                <p class="text-center text-sm font-medium mb-2">
                  <?php echo function_exists('pll__') ? pll__('Send email') : 'Send email'; ?>
                </p>

                <a href="mailto:<?php echo company_data('email'); ?>" class="btn btn_border wht trans !font-normal mx-auto">
                  <span class="font-semibold"><?php echo company_data('email'); ?></span>
                  <span class="ico_btn">
                    <i class="ri-mail-line"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>

  <?php include get_template_directory() . '/donations.php'; ?>

  <?php include get_template_directory() . '/pre-footer.php'; ?>

</main>

<?php get_footer(); ?>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    isDropdown();
    headerOnScroll();
  });
</script>