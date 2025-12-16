<?php
/* Template Name: Page Donate MEX */
/* Template Post Type: page */

get_header();
?>

<main class="wrapper_main page_donate">
  <div class="container_main">
    <div class="content_donate">

      <?php
      // Obtener la página por su slug
      $page = get_page_by_path('donate-mex');

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
                src="<?php bloginfo('template_url') ?>/imgs/bandera-mex.png"
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
      <h2 class="text-2xl md:text-4xl font-bold mb-5"><?php echo function_exists('pll__') ? pll__('Ways to donate') : 'Ways to donate'; ?></h2>
      <div class="tabs-component" data-tabs>
        <!-- Tabs Header -->
        <div
          class="flex justify-between gap-1 bg-gray-800 border-b-3 border-gray-800">
          <button
            class="tab-btn p-4 text-xl cursor-pointer bg-white w-full"
            data-tab="1">
                <?php echo function_exists('pll__') ? pll__('Wire transfer') : 'Wire transfer'; ?>
          </button>
        </div>

        <!-- Tabs Content -->
        <div>
          <div
            class="tab-content hidden flex justify-center items-center"
            data-content="1">
            <div
              class="w-full max-w-[1240px] gap-8 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 py-12">
              <h3
                class="col-span-1 lg:col-span-2 mb-1 flex justify-center text-center flex-col">
                <span> Account name:</span>
                <span class="font-semibold c_orange text-2xl">
                  Alianza Fronteriza de Filantropía, A.C.</span>
              </h3>

              <div class="w-full">
                <h3 class="text-lg mb-1 flex gap-0 flex-col">
                  <span>Address:</span>
                  <span class="font-semibold">Ave. 20 de Noviembre #4305 Fracc. El Colegio Cd.
                    Juárez, Chihuahua C.P. 32310</span>
                </h3>
              </div>
              <div class="w-full">
                <h3
                  class="text-lg mb-1 flex gap-0 flex-col md:gap-1 md:flex-row">
                  <span>Bank:</span>
                  <span class="font-semibold">BBVA</span>
                </h3>
                <h3
                  class="text-lg mb-1 flex gap-0 flex-col md:gap-1 md:flex-row">
                  <span>Account number: </span>
                  <span class="font-semibold">0115967627</span>
                </h3>
                <h3
                  class="text-lg mb-1 flex gap-0 flex-col md:gap-1 md:flex-row">
                  <span>Standardized Bank Code:</span>
                  <span class="font-semibold">012150001159676277</span>
                </h3>
                <h3
                  class="text-lg mb-1 flex gap-0 flex-col md:gap-1 md:flex-row">
                  <span>Branch:</span>
                  <span class="font-semibold">5412 Chihuahua Plaza Monarca Location (plaza):
                    Chihuahua, Chih., México</span>
                </h3>
                <h3
                  class="text-lg mb-1 flex gap-0 flex-col md:gap-1 md:flex-row">
                  <span>SWIFT/BIC:</span>
                  <span class="font-semibold">BCMRMXMMPYM</span>
                </h3>
              </div>

              <hr class="col-span-1 lg:col-span-2 border-gray-300" />

              <p
                class="col-span-1 lg:col-span-2 text-lg md:text-2xl font-semibold mb-1 text-center">
                If the amount is in US dollars but the payment is made in
                pesos to our account in Mexico, please use the official
                exchange rate published by government sources (Diario
                Oficial / Banxico) on the day of the deposit.
              </p>
              <p class="col-span-1 lg:col-span-2 text-center c_green font-medium">
                To request your CFDI (recibo deducible del ISR), please send
                the deposit or transfer receipt along with the following
                documentation/information to matt_karimi@sbcglobal.net:
              </p>
              <div class="col-span-1 lg:col-span-2 my-5">
                <div
                  class="grid grid-cols-1 md:grid-cols-3 gap-2 md:gap-10">
                  <p
                    class="font-semibold w-full text-center border-2 p-3 rounded-xl">
                    Tax status certificate (constancia de situación fiscal)
                    – not older than two months
                  </p>
                  <p
                    class="font-semibold w-full text-center border-2 p-3 rounded-xl">
                    CFDI usage/payment method (uso de CFDI/método de pago)
                  </p>
                  <p
                    class="font-semibold w-full text-center border-2 p-3 rounded-xl">
                    Contact person’s name
                  </p>
                </div>
              </div>
              <hr class="col-span-1 lg:col-span-2 border-gray-300" />
              <p
                class="col-span-1 lg:col-span-2 text-lg md:text-2xl font-semibold mb-1 text-center">
                If you have any questions regarding payments in the U.S. or
                need more information, please contact:
              </p>

              <div class="w-full text-center col-span-1 lg:col-span-2">
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