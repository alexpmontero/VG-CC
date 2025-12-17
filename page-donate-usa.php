<?php
/* Template Name: Page Donate USA */
/* Template Post Type: page */

get_header();
?>
<main class="wrapper_main page_donate">
  <div class="container_main">
    <div class="content_donate">

      <?php
      // Obtener la página por su slug
      $page = get_page_by_path('donate-usa');

      if ($page) {
        // Obtener la URL de la imagen destacada
        $thumbnail_url = get_the_post_thumbnail_url($page->ID, 'full');

        if ($thumbnail_url) :
      ?>
          <div class="drawer_info_in_donate">
            <h1 class="text-3xl font-bold lg:text-4xl xl:text-6xl mb-6"> <?php the_field('page_title'); ?></h1>
            <div class="block sm:flex md:block lg:flex gap-6">
              <img
                class="h-13 rounded-md mb-2"
                src="<?php bloginfo('template_url') ?>/imgs/bandera-usa.png"
                alt="Donate in Mexico" />
              <div class="">
                <h5 class="text-2xl font-bold">
                  <?php echo function_exists('pll__') ? pll__('Payment Information') : 'Payment Information'; ?></h5>

                <?php the_field('page_subtitle'); ?>
                <div class="mt-4 font-bold">
                  <?php the_field('page_excerpt'); ?>
                </div>
                <div class="mt-4">
                  <a
                    href="http://"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn btn_border !w-fit mb-4">
                    <span>PDF for Giving Through USA - English</span>
                    <span class="ico_btn">
                      <i class="ri-arrow-right-line"></i> </span></a>

                  <a
                    href="http://"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn btn_border !w-fit mb-4">
                    <span>PDF for Giving Through USA - Spanish</span>
                    <span class="ico_btn">
                      <i class="ri-arrow-right-line"></i> </span></a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="drawer_picture_in_donate relative"
            style="background-image: url('<?php echo esc_url($thumbnail_url); ?>')">
            <div
              class="icon_rounded yellow w-[115px] h-[115px] bottom-[-50px] right-[30px]">
              <img
                src="<?php bloginfo('template_url') ?>/imgs/logo-rounded.png"
                alt="Vallarta Gay + Community Center" />
            </div>
          </div>
      <?php
        else :
          echo '<p class="text-center">No tiene imagen destacada.</p>';
        endif;
      } else {
        echo '<p>Página no encontrada.</p>';
      }
      ?>
    </div>


    <div class="content_ways_donate">
      <h2 class="text-2xl md:text-4xl font-bold mb-5">
        <!-- Ways to donate -->
        <?php echo function_exists('pll__') ? pll__('Ways to donate') : 'Ways to donate'; ?>
      </h2>
      <div class="tabs-component" data-tabs>
        <!-- Tabs Header -->
        <div
          class="flex justify-between gap-1 bg-gray-800 border-b-3 border-gray-800">
          <button
            class="tab-btn p-4 text-sm xl:text-xl cursor-pointer bg-white w-full"
            data-tab="1">
            <!-- Credit Card / Apple Pay -->
            <?php echo function_exists('pll__') ? pll__('Credit Card') : 'Credit Card'; ?>
          </button>
          <button
            class="tab-btn p-4 text-sm xl:text-xl cursor-pointer bg-white w-full"
            data-tab="2">
            <!-- Check -->
            <?php echo function_exists('pll__') ? pll__('Check') : 'Check'; ?>
          </button>
          <button
            class="tab-btn p-4 text-sm xl:text-xl cursor-pointer bg-white w-full"
            data-tab="3">
            <!-- Wire transfer -->
            <?php echo function_exists('pll__') ? pll__('Wire transfer') : 'Wire transfer'; ?>
          </button>
        </div>

        <!-- Tabs Content -->
        <div>
          <div
            class="tab-content hidden flex justify-center items-center"
            data-content="1">
            <div class="w-full max-w-[768px] text-center mx-auto">
              <h3 class="text-2xl font-semibold mb-2">
                <?php echo function_exists('pll__') ? pll__('Donate with card') : 'Donate with card'; ?>
              </h3>
              <p>
                <?php echo function_exists('pll__') ? pll__('Make your secure donation in seconds') : 'Make your secure donation in seconds'; ?>

              </p>
              <div class="flex justify-center">
                <a
                  href="#"
                  target="_blank"
                  class="btn btn_orange mt-5 mb-1">
                  <span>
                    <?php echo function_exists('pll__') ? pll__('Donate Now') : 'Donate Now'; ?>

                  </span>
                  <span class="ico_btn">
                    <i class="ri-arrow-right-line"></i>
                  </span>
                </a>
              </div>
              <p class="text_mini">Powered by flipcause</p>
            </div>
          </div>

          <div
            class="tab-content hidden flex justify-center items-center"
            data-content="2">
            <div class="w-full max-w-[768px] text-center mx-auto">
              <p class="text_mini font-semibold c_orange"><?php echo function_exists('pll__') ? pll__('payable_to') : 'payable_to'; ?>:</p>
              <h3 class="text-2xl font-semibold mb-2">
                <?php echo donate_usa_info("check_payable_to") ?>
              </h3>

              <p class="text_mini font-semibold c_orange mt-8"><?php echo function_exists('pll__') ? pll__('mail_to') : 'mail_to'; ?>:</p>
              <h3 class="text-md font-semibold mb-2">
                <?php echo donate_usa_info("check_mail_to") ?>
              </h3>
            </div>
          </div>

          <div
            class="tab-content hidden flex justify-center items-center "
            data-content="3">
            <div
              class="w-full max-w-[1240px] gap-15 grid grid-cols-1 md:grid-cols-2 py-4 md:py-14">
              <div class="w-full">
                <p class="text_mini font-semibold c_orange mb-2">
                  <?php echo function_exists('pll__') ? pll__('beneficiary_bank_information') : 'beneficiary_bank_information'; ?>
                </p>
                <h3
                  class="text-lg mb-1 flex gap-0 flex-col md:gap-1 md:flex-row">
                  <span><?php echo function_exists('pll__') ? pll__('bank_country') : 'bank_country'; ?>: </span>
                  <span class="font-semibold"> <?php echo donate_usa_info("bank_country") ?>
                  </span>
                </h3>
                <h3
                  class="text-lg mb-1 flex gap-0 flex-col md:gap-1 md:flex-row">
                  <span><?php echo function_exists('pll__') ? pll__('bank_name') : 'bank_name'; ?>:</span>
                  <span class="font-semibold"><?php echo donate_usa_info("bank_name") ?></span>
                </h3>
                <h3
                  class="text-lg mb-1 flex gap-0 flex-col md:gap-1 md:flex-row">
                  <span> <?php echo function_exists('pll__') ? pll__('address') : 'address'; ?>:</span>
                  <span class="font-semibold"><?php echo donate_usa_info("address") ?></span>
                </h3>
                <h3
                  class="text-lg mb-1 flex gap-0 flex-col md:gap-1 md:flex-row">
                  <span> <?php echo function_exists('pll__') ? pll__('aba_routing_number') : 'aba_routing_number'; ?>:</span>
                  <span class="font-semibold"><?php echo donate_usa_info("aba_routing_number") ?></span>
                </h3>
              </div>
              <div class="w-full">
                <p class="text_mini font-semibold c_orange mb-2">
                  <?php echo function_exists('pll__') ? pll__('beneficiary_information') : 'beneficiary_information'; ?>

                </p>
                <h3
                  class="text-lg mb-1 flex gap-0 flex-col md:gap-1 md:flex-row">

                  <span> <?php echo function_exists('pll__') ? pll__('account_name') : 'account_name'; ?>:</span>

                  <span class="font-semibold">
                    <?php echo donate_usa_info("account_name") ?></span>
                </h3>
                <h3
                  class="text-lg mb-1 flex gap-0 flex-col md:gap-1 md:flex-row">
                  <span> <?php echo function_exists('pll__') ? pll__('address') : 'address'; ?>:</span>
                  <span class="font-semibold"><?php echo donate_usa_info("address") ?></span>
                </h3>
                <h3
                  class="text-lg mb-1 flex gap-0 flex-col md:gap-1 md:flex-row">
                  <span> <?php echo function_exists('pll__') ? pll__('account_number') : 'account_number'; ?>:</span>
                  <span class="font-semibold"><?php echo donate_usa_info("bank_account_number_beneficiary") ?></span>
                </h3>
                <h3
                  class="text-lg mb-1 flex gap-0 flex-col md:gap-1 md:flex-row">
                  <span>SWIFT Code:</span>
                  <span class="font-semibold"><?php echo donate_usa_info("swift_code") ?></span>
                </h3>
              </div>
              <div class="w-full col-span-2">
                <p
                  class=" text-lg md:text-2xl font-semibold mb-1 text-center c_orange">
                  <?php echo function_exists('pll__') ? pll__('If you have any questions') : 'text_info_f'; ?>
                </p>

                <div class="w-full text-center ">
                  <h3 class="text-lg mb-0">
                    <span class="font-semibold">Matt Karimi</span>
                  </h3>
                  <h3 class="text-lg mb-0">
                    <span class="font-semibold">Treasurer, Board of Directors</span>
                  </h3>
                  <h3 class="text-lg mb-1">
                    <span class="font-semibold">Vallarta Gay+ Community Center</span>
                  </h3>
                  <h3 class="text-lg mb-1">
                    <span>WhatsApp:</span>
                    <span class="font-semibold">+1-818-399-4643</span>
                  </h3>
                  <h3 class="text-lg mb-1">
                    <span>Email:</span>
                    <span class="font-semibold">matt_karimi@sbcglobal.net</span>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
    tabsComponent();
  });
</script>