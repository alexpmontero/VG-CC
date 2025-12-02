<?php
/* Template Name: Page Press */
/* Template Post Type: page */

get_header();
?>
<main class="wrapper_main page_press">
  <section class="wrapper_hero_in_page mb-22">
    <div class="container_main relative">
      <div
        class="drawer_hero_page in_press"
        style="background-image: url(imgs/pages/bg_press.jpg)">
        <div class="box_ttl_hero_page">
          <h3 class="font-extrabold text-xl md:text-2xl lg:text-4xl mb-4">
            370 Vaccines Given at Vallarta Gay+ Center
          </h3>
          <p class="font-medium mb-4">Oct. 18, 2025</p>
          <p>
            <a href="http://" class="btn btn_border trans w-38">
              <span>See more</span>
              <span class="ico_btn">
                <i class="ri-arrow-right-line"></i>
              </span>
            </a>
          </p>
        </div>
        <div class="box_picture_press">
          <img src="imgs/img-press.webp" alt="" />
        </div>
      </div>

      <div
        class="icon_rounded green w-[115px] h-[115px] bottom-[-50px] right-[35px] sm:right-[60px]">
        <img
          src="imgs/logo-rounded.png"
          alt="Vallarta Gay + Community Center" />
      </div>
    </div>
  </section>

  <section class="wrapper_press">
    <div class="container_main preview">
      <div class="max-w-[768px] px-4 mx-auto text-center mb-12">
        <h2 class="text_ttl font-bold mb-1">Our voice in the Press</h2>
        <p class="text_subttl font-semibold mb-2 max-w-[820px] mx-auto">
          Each mention tells part of our story. See how we’re inspiring more
          people.
        </p>
      </div>

      <div class="drawer_cat_press grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 md:gap-10">
        <div class="item__press">
          <img src="http://ximg.es/600x350/7271a8/fff" alt="" />
          <div class="info__box">
            <h4 class="text-md leading-5 font-medium">
              370 Vaccines Given at Vallarta Gay+ Center.
            </h4>
            <p class="flex justify-between items-center">
              <span>Oct 11, 2025</span><a href="#" class="btn_mini mini_orange trans shadow-2xl">
                <i class="ri-arrow-right-line"></i>
              </a>
            </p>
          </div>
        </div>
        <div class="item__press">
          <img src="http://ximg.es/600x350/7271a8/fff" alt="" />
          <div class="info__box">
            <h4 class="text-md leading-5 font-medium mb-3">
              370 Vaccines Given at Vallarta Gay+ Lorem ipsum dolor sit amet
              consectetur adipisicing elit Lorem ipsum dolor sit amet Non
              Center.
            </h4>
            <p class="flex justify-between items-center">
              <span>Oct 11, 2025</span><a href="#" class="btn_mini mini_orange trans shadow-2xl">
                <i class="ri-arrow-right-line"></i>
              </a>
            </p>
          </div>
        </div>
        <div class="item__press">
          <img src="http://ximg.es/600x350/7271a8/fff" alt="" />
          <div class="info__box">
            <h4 class="text-md leading-5 font-medium">
              370 Vaccines Given at Vallarta Gay+ Center.
            </h4>
            <p class="flex justify-between items-center">
              <span>Oct 11, 2025</span><a href="#" class="btn_mini mini_orange trans shadow-2xl">
                <i class="ri-arrow-right-line"></i>
              </a>
            </p>
          </div>
        </div>
        <div class="item__press">
          <img src="http://ximg.es/600x350/7271a8/fff" alt="" />
          <div class="info__box">
            <h4 class="text-md leading-5 font-medium">
              370 Vaccines Given at Vallarta Gay+ Center.
            </h4>
            <p class="flex justify-between items-center">
              <span>Oct 11, 2025</span><a href="#" class="btn_mini mini_orange trans shadow-2xl">
                <i class="ri-arrow-right-line"></i>
              </a>
            </p>
          </div>
        </div>
        <div class="item__press">
          <img src="http://ximg.es/600x350/7271a8/fff" alt="" />
          <div class="info__box">
            <h4 class="text-md leading-5 font-medium">
              370 Vaccines Given at Vallarta Gay+ Center.
            </h4>
            <p class="flex justify-between items-center">
              <span>Oct 11, 2025</span><a href="#" class="btn_mini mini_orange trans shadow-2xl">
                <i class="ri-arrow-right-line"></i>
              </a>
            </p>
          </div>
        </div>
        <div class="item__press">
          <img src="http://ximg.es/600x350/7271a8/fff" alt="" />
          <div class="info__box">
            <h4 class="text-md leading-5 font-medium">
              370 Vaccines Given at Vallarta Gay+ Center.
            </h4>
            <p class="flex justify-between items-center">
              <span>Oct 11, 2025</span><a href="#" class="btn_mini mini_orange trans shadow-2xl">
                <i class="ri-arrow-right-line"></i>
              </a>
            </p>
          </div>
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