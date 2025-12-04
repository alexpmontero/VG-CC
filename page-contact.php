<?php
/* Template Name: Page Contact */
/* Template Post Type: page */

get_header();
?>

<main class="wrapper_main page_contact">
  <section class="wrapper_hero_in_page mb-22">
    <div class="container_main relative">
      <div
        class="drawer_hero_page"
        style="background-image: url(<?php bloginfo('template_url') ?>/imgs/pages/bg_contact.png)">
        <div class="box_ttl_hero_page">
          <h2 class="font-extrabold text-5xl mb-6">Connect with Us</h2>
          <p class="font-medium">
            We’re here to listen, help, and support you. Find us at our
            locations or reach out to learn more about our services and
            programs.
          </p>
        </div>
      </div>

      <h1 class="text_float_hero font-extrabold text-6xl mb-6">
        Contact & location
      </h1>

      <div
        class="icon_rounded green w-[115px] h-[115px] bottom-[-50px] right-[35px] sm:right-[60px]">
        <img
          src="<?php bloginfo('template_url') ?>/imgs/logo-rounded.png"
          alt="Vallarta Gay + Community Center" />
      </div>
    </div>
  </section>

  <section class="container_main">
    <div class="max-w-[768px] px-4 mx-auto text-center mb-12">
      <h2 class="text_ttl font-bold mb-1">Always Here for You</h2>
      <p class="text_subttl font-semibold mb-2 max-w-[820px] mx-auto">
        Whether you’re seeking guidance, support, or simply connection,
        we’re here for you.
      </p>
    </div>

    <div
      class="drawer_contact border-t-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-[30px] 2xl:gap-[75px] lg:gap-[100px] pt-12">
      <div class="w-full mb-4">
        <h6 class="font-bold tracking-[5px] text_mini mb-4 uppercase">
          our location
        </h6>
        <p class="font-bold text-xl">
          <a href="#">Morelos #101 Local 3B Centro, Puerto Vallarta</a>
        </p>
      </div>
      <div class="w-full mb-4">
        <h6 class="font-bold tracking-[5px] text_mini mb-3 uppercase">
          WhatsApp
        </h6>
        <p class="flex items-center gap-1 text-xl font-bold">
          <span><i class="ri-whatsapp-line"></i></span><a href="#">(+52) 322 128 6793</a>
        </p>
      </div>
      <div class="w-full mb-4">
        <h6 class="font-semibold tracking-[5px] text_mini mb-3 uppercase">
          Work hours
        </h6>
        <p class="flex flex-col sm:flex-row items-center sm:gap-10 gap-1 text-xl font-bold mb-2">
          <span class="w-full">Monday - Friday</span><span class="w-full">10:00am - 8:00pm</span>
        </p>
        <p class="flex flex-col sm:flex-row items-center sm:gap-10 gap-1 text-xl font-bold">
          <span class="w-full">Saturday</span><span class="w-full">10:00am - 4:00pm</span>
        </p>
      </div>
      <div class="w-full mb-4">
        <h6 class="font-bold tracking-[5px] text_mini mb-3 uppercase">
          Email
        </h6>
        <p class="flex items-center gap-1 text-xl font-bold">
          <span><i class="ri-whatsapp-line"></i></span><a href="mailto:info@vallartagaycc.org">info@vallartagaycc.org</a>
        </p>
      </div>
      <div class="w-full mb-4">
        <h6 class="font-bold tracking-[5px] text_mini mb-3 uppercase">
          Social media
        </h6>
        <p class="flex items-center gap-1 text-xl font-bold">
          <span>Follow Us</span>
          <a
            href="http://"
            class="c_orange"
            target="_blank"
            rel="noopener noreferrer"><i class="text-3xl ri-facebook-box-fill"></i></a>
          <a
            href="http://"
            class="c_orange"
            target="_blank"
            rel="noopener noreferrer"><i class="text-3xl ri-instagram-line"></i></a>
          <a
            href="http://"
            class="c_orange"
            target="_blank"
            rel="noopener noreferrer"><i class="text-3xl ri-tiktok-fill"></i></a>
        </p>
      </div>
    </div>

    <div class="box_maps mt-8 mb-18">
      <iframe class="w-full min-h-[500px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.546841685484!2d-105.2396299240161!3d20.60655568093917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8421455bc7d8dae1%3A0x2a7940b0ecf9f61f!2sVallarta%20Gay%2B%20Community%20Center!5e0!3m2!1ses-419!2smx!4v1764046818699!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <?php include get_template_directory() . '/donations.php'; ?>

</main>

<?php get_footer(); ?>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    menuMovil();
    isDropdown();
    headerOnScroll();
    drawerInit();
  });
</script>