  <section class="wrapper_faqs sm:mb-22 mb-18">
    <div class="box_faqs">
      <h2 class="text_ttl font-bold mb-1 text-center"><?php echo function_exists('pll__') ? pll__('General Questions') : 'General Questions'; ?></h2>

      <p
        class="text_subttl font-semibold mb-2 text-center mb-5 sm:mb-12 max-w-[820px] mx-auto">
        <?php echo function_exists('pll__') ? pll__('Have question') : 'Have question'; ?>
      </p>
      <div
        class="faqs_contact flex flex-col sm:flex-row justify-center gap-3">
        <div class="item_faqs_contact">
          <p class="text-center font-semibold mb-2">
            <?php echo function_exists('pll__') ? pll__('Send WhatsApp') : 'Send WhatsApp'; ?>
          </p>
          <button class="btn btn_border trans !font-normal mx-auto">
            <span class="font-semibold">(+52) 322 128 6793</span>
            <span class="ico_btn">
              <i class="ri-whatsapp-line"></i>
            </span>
          </button>
        </div>
        <div class="item_faqs_contact">
          <p class="text-center font-semibold mb-2">
            <?php echo function_exists('pll__') ? pll__('Send email') : 'Send email'; ?>
          </p>
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

        <?php
        $args = [
          'post_type'      => 'post',
          'order'          => 'ASC',
          'category_name'  => 'faqs',
        ];

        $query = new WP_Query($args);

        $index = 0;

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();

            // Estado inicial
            $is_first = ($index === 0);

            // Icono
            $icon = $is_first ? '−' : '+';

            // max-height inicial
            $max_height = $is_first ? 'max-h-[500px]' : 'max-h-0';
        ?>
            <div class="accrdn_item_faqs">
              <button
                class="accordion-header cursor-pointer w-full flex justify-between items-center py-4 text-left"
                data-index="<?php echo $index; ?>">
                <span class="text-lg font-semibold"><?php the_title(); ?></span>
                <span class="icon text-2xl font-bold select-none"><?php echo $icon; ?></span>
              </button>

              <div
                class="accordion-content overflow-hidden <?php echo $max_height; ?> transition-all duration-300">
                <div class="p-3">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
        <?php
            $index++;
          }
          wp_reset_postdata();
        } else {
          echo '<p>No se encontraron publicaciones.</p>';
        }
        ?>





      </div>
    </div>
  </section>