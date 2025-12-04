<?php
/* Template Name: Page About */
/* Template Post Type: page */

get_header();
?>

<main class="wrapper_main page_about">
  <section class="wrapper_hero_in_page lg:mb-22 mb-10">
    <div class="container_main relative">
      <div
        class="drawer_hero_page"
        style="background-image: url(<?php bloginfo('template_url') ?>/imgs/pages/bg_about.jpg)">
        <div class="box_ttl_hero_page">
          <h2 class="font-extrabold text-5xl mb-6">
            Building Community. Changing Lives.
          </h2>
          <p class="font-medium">
            The Vallarta Gay+ Community Center is a nonprofit organization
            dedicated to fostering empowerment, wellness, and inclusivity
            within the LGBTQ+ community.
          </p>
        </div>
      </div>

      <h1 class="text_float_hero font-extrabold text-6xl mb-6">About Us</h1>

      <div
        class="icon_rounded green w-[115px] h-[115px] bottom-[-50px] right-[35px] sm:right-[60px]">
        <img
          src="<?php bloginfo('template_url') ?>/imgs/logo-rounded.png"
          alt="Vallarta Gay + Community Center" />
      </div>
    </div>
  </section>

  <section class="wrapper_about">
    <div class="drawer_about lg:mb-24 mb-14">
      <div
        class="content_about flex flex-col-reverse justify-center lg:flex-row gap-x-5 md:gap-x-18">
        <img
          src="<?php bloginfo('template_url') ?>/imgs/bg_hero03.webp"
          class="rounded-2xl rounded-bl-[1rem] lg:rounded-bl-[8rem] md:object-cover w-full lg:w-[325px] h-full sm:h-[350px] lg:h-[500px]"
          alt="" />
        <div class="py-12">
          <h2 class="text_ttl font-bold mb-8 leading-[1.95]">
            We are officially recognized as a nonprofit organization in
            Mexico and can issue facturas for donations made within Mexico.
            In the USA, we currently provide tax receipts through our
            partnership with the U.S.-Mexico Border Philanthropy Partnership
            (EIN: 26-2946180).
          </h2>
          <p>
            <span class="font-semibold">We are also in the process of obtaining our own 501(c)(3)
              nonprofit status in the U.S., which we expect to be finalized
              by the summer of 2026.</span>
            At this time, we are unable to provide tax receipts for
            donations made from Canada.
          </p>
        </div>
      </div>
    </div>
    <div class="drawer_mission lg:mb-24 mb-14">
      <div
        class="content_about flex flex-col justify-center lg:flex-row gap-x-5 md:gap-x-18">
        <div class="py-8">
          <h2 class="text_ttl font-bold mb-6 leading-[1.95] c_marin">
            Mision
          </h2>
          <h2 class="text_ttl font-semibold mb-4 leading-[1.95]">
            Our mission is to promote health, empowerment, and wellness in
            the LGBTQ+ community through equal access to healthcare,
            education, and HIV/STI prevention and care.
          </h2>
          <p class="mb-8">
            We fiercely advocate for our community’s equity and inclusion as
            a vital component of our region’s diverse society, providing a
            safe and inclusive environment to drive positive change locally
            and beyond.
          </p>
          <button class="btn btn_primary trans">
            <span>Learn about our Team</span>
            <span class="ico_btn">
              <i class="ri-arrow-right-line"></i>
            </span>
          </button>
        </div>
        <img
          src="<?php bloginfo('template_url') ?>/imgs/bg_mission.jpg"
          class="rounded-2xl rounded-bl-[1rem] hidden lg:block lg:rounded-bl-[8rem] md:object-cover w-full lg:w-[325px] h-full sm:h-[350px] lg:h-[500px]"
          alt="" />
      </div>
    </div>
    <div class="drawer_mission lg:mb-24 mb-8">
      <div
        class="content_about flex flex-col justify-center lg:flex-row gap-x-5 md:gap-x-18">
        <img
          src="<?php bloginfo('template_url') ?>/imgs/bg_vission.png"
          class="rounded-2xl rounded-bl-[1rem] lg:rounded-bl-[8rem] md:object-cover w-full lg:w-[325px] h-full sm:h-[350px] lg:h-[500px]"
          alt="" />
        <div class="py-8">
          <h2 class="text_ttl font-bold mb-6 leading-[1.95] c_marin">
            Vision
          </h2>
          <h2 class="text_ttl font-semibold mb-4 leading-[1.95]">
            Our vision is to build a vibrant, inclusive LGBTQ+ community
            center that serves as a dynamic regional hub, harnessing the
            diverse strengths of our community to uplift and support our
            diverse members.
          </h2>
        </div>
      </div>
    </div>
    <div class="drawer_values lg:mb-24 mb-18">
      <h2 class="text_ttl text-center font-bold mb-6 leading-[1.95]">
        Values
      </h2>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 justify-between">
        <div
          class="text-center font-semibold rounded-2xl text-lg py-6 px-2">
          Integrity
        </div>
        <div
          class="text-center font-semibold rounded-2xl text-lg py-6 px-2">
          Respect
        </div>
        <div
          class="text-center font-semibold rounded-2xl text-lg py-6 px-2">
          Collaboration
        </div>
        <div
          class="text-center font-semibold rounded-2xl text-lg py-6 px-2">
          Kidness
        </div>
      </div>
    </div>
  </section>

  <?php include get_template_directory() . '/donations.php'; ?>
  
  <section class="wrapper_faqs mb-24">
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
    accordion();
    isDropdown();
    headerOnScroll();
    drawerInit();
  });
</script>