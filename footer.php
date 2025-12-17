<footer class="wrapper_footer">
  <div class="container_main">
    <div
      class="box_footer grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3 2xl:gap-[175px] lg:gap-[100px] items-cenxter">
      <div class="w-full mb-4">
        <h6 class="font-semibold tracking-[5px] text_mini mb-4 uppercase">
          <?php echo function_exists('pll__') ? pll__('our_location') : 'our_location'; ?>
        </h6>
        <p>
          <a href="<?php echo company_data('direccion_url'); ?>" target="_blank"><?php echo company_data('direccion'); ?></a>
        </p>
      </div>
      <div class="w-full mb-4">
        <h6 class="font-semibold tracking-[5px] text_mini mb-3 uppercase">

          <?php echo function_exists('pll__') ? pll__('Workhours') : 'Workhours'; ?>

        </h6>
        <p class="flex items-center sm:gap-10 gap-3 mb-2">

          <span class="w-full"> <?php echo function_exists('pll__') ? pll__('L-V') : 'L-V'; ?></span><span class="w-full"><?php echo company_data("lunes_a_viernes") ?></span>
        </p>
        <p class="flex items-center sm:gap-10 gap-3">
          <span class="w-full"> <?php echo function_exists('pll__') ? pll__('S') : 'S'; ?></span><span class="w-full"><?php echo company_data("sabado") ?></span>
        </p>
      </div>
      <div class="w-full">
        <h6 class="font-semibold tracking-[5px] text_mini mb-4 uppercase">

          <?php echo function_exists('pll__') ? pll__('lets_social') : 'Lets social'; ?>
        </h6>
        <p class="text-lg">
          <a
            href="<?php echo company_data('facebook_url'); ?>"
            class="flex gap-2 items-center"
            target="_blank"
            rel="noopener noreferrer"><span><i class="text-2xl ri-facebook-box-fill"></i></span><span class="">Facebook</span></a>
        </p>
        <p class="text-lg">
          <a
            href="<?php echo company_data('instagram_url'); ?>"
            class="flex gap-2 items-center"
            target="_blank"
            rel="noopener noreferrer"><span><i class="text-2xl ri-instagram-line"></i></span><span class="">Instagram</span></a>
        </p>
      
      </div>

    </div>
    <div
      class="box_footer_bottom border-t-[2px] py-3 flex flex-col sm:flex-row gap-1 items-center justify-between text_mini">
      <p>Copyright © 2026 Vallarta Gay + Community Center.</p>
      <p class="flex gap-3">
        <a href="#"><?php echo function_exists('pll__') ? pll__('privacy_policy') : 'Privacy policy'; ?></a>
      </p>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>
<script src="http://zeptojs.com/zepto.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/vegas.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>

</html>