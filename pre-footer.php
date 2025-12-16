  <section class="wrapper_footer pre" style="background-image: url(<?php bloginfo('template_url') ?>/imgs/bg-prefooter.jpeg);">
    <div class="container_main">
      <div
        class="box_footer grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3 2xl:gap-[175px] lg:gap-[100px] items-center">
        <div class="w-full mb-4">
          <div>
            <img class="h-[90px]" src="<?php bloginfo('template_url') ?>/imgs/logo-vgcc-wt.png" alt="" />
          </div>
          <?php echo function_exists('pll__') ? pll__('info_small') : 'info_small'; ?>

        </div>
        <div class="w-full mb-4">
          <h6 class="font-semibold tracking-[5px] text_mini mb-4"> <?php echo function_exists('pll__') ? pll__('email_title') : 'email_title'; ?></h6>
          <p class="text-md leading-5">
            <a href="mailto: <?php echo company_data('email'); ?>"> <?php echo company_data('email'); ?></a>
          </p>
        </div>
        <div class="w-full">
          <h6 class="font-semibold tracking-[5px] text_mini mb-3 uppercase">
            WhatsApp
          </h6>
          <p class="text-2xl flex items-center gap-1 font-semibold">
            <span><i class="ri-whatsapp-line"></i></span><a target="_blank" href="<?php echo company_data('whatsapp_url'); ?>">
              <?php echo company_data('whatsapp'); ?>
            </a>
          </p>
        </div>
      </div>
    </div>
  </section>