<?php
/* Template Name: Page Our Team */
/* Template Post Type: page */

get_header();
?>
<main class="wrapper_main page_our_team">
  <section class="wrapper_hero_in_page mb-18">
    <div class="container_main relative">
      <div
        class="drawer_hero_page"
        style="background-image: url(<?php bloginfo('template_url') ?>/imgs/pages/our-team.png)">
        <div class="box_ttl_hero_page">
          <h2 class="font-extrabold text-5xl mb-6">
            The Heart Behind Our Mission.
          </h2>
          <p class="font-medium">
            We’re proud of the people who bring our mission to life — a
            diverse team united by love, empathy, and the drive to make
            change happen.
          </p>
        </div>
      </div>

      <h1 class="text_float_hero font-extrabold text-6xl mb-6">
        Our Team, Our Family
      </h1>

      <div
        class="icon_rounded green w-[115px] h-[115px] bottom-[-50px] right-[35px] sm:right-[60px]">
        <img
          src="<?php bloginfo('template_url') ?>/imgs/logo-rounded.png"
          alt="Vallarta Gay + Community Center" />
      </div>
    </div>
  </section>

  <section
    class="wrapper_descript_team max-w-[980px] px-4 mx-auto text_ttl text-center font-semibold leading-[1.95]">
    Behind every service, smile, and success story is a team of passionate
    individuals committed to equality, health, and community care. Together,
    we work every day to make a real difference for our LGBTQ+ family.
  </section>

  <section class="wrapper_ourteam mb-24">
    <div class="container_main relative">
      <h2
        class="absolute w-full t-0 l-0 font-black clr text-[18rem] overflow-hidden whitespace-nowrap leading-[.75] p-0 m-0 hidden md:block">
        Our team
      </h2>
      <div
        class="drawer_ourteam grid md:grid-cols-2 xl:grid-cols-3 relative z-1 gap-x-18 gap-y-30 md:gap-y-36 pt-[4rem] md:pt-[16rem]">
        <div class="item_team initial">
          <h2 class="text-4xl sm:text-5xl font-bold mb-1">Our team</h2>
          <p class="font-medium">
            Our dedicated team brings compassion, expertise, and heart to
            every initiative. From healthcare to education, we stand united
            to build a stronger, healthier, and more inclusive community.
          </p>
        </div>
        <div class="item_team">
          <div class="names_team">
            <h2 class="text-2xl font-bold">Pedro López</h2>
            <p class="font-medium">Executive Director</p>
          </div>
          <img class="picture_team" src="<?php bloginfo('template_url') ?>/imgs/team/01.png" alt="" />
          <button
            id="openModal"
            class="btn_mini mini_green trans absolute b-0 right-5 z-1 shadow-2xl">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>

        <div class="item_team">
          <div class="names_team">
            <h2 class="text-2xl font-bold">Ashley Hernández Castellon</h2>
            <p class="font-medium">Doctor</p>
          </div>
          <img class="picture_team" src="<?php bloginfo('template_url') ?>/imgs/team/02.png" alt="" />
          <button
            class="btn_mini mini_green trans absolute b-0 right-5 z-1 shadow-2xl">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>
        <div class="item_team">
          <div class="names_team">
            <h2 class="text-2xl font-bold">Fatima Farias Martinez</h2>
            <p class="font-medium">Nurse</p>
          </div>
          <img class="picture_team" src="<?php bloginfo('template_url') ?>/imgs/team/03.png" alt="" />
          <button
            class="btn_mini mini_green trans absolute b-0 right-5 z-1 shadow-2xl">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>
        <div class="item_team">
          <div class="names_team">
            <h2 class="text-2xl font-bold">Yesenia Cortés</h2>
            <p class="font-medium">
              Coordinator of Volunteers and Prevention
            </p>
          </div>
          <img class="picture_team" src="<?php bloginfo('template_url') ?>/imgs/team/04.png" alt="" />
          <button
            class="btn_mini mini_green trans absolute b-0 right-5 z-1 shadow-2xl">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>
        <div class="item_team">
          <div class="names_team">
            <h2 class="text-2xl font-bold">Alberto Díaz de León Jiménez</h2>
            <p class="font-medium">Mtro. Psychologist</p>
          </div>
          <img class="picture_team" src="<?php bloginfo('template_url') ?>/imgs/team/05.png" alt="" />
          <button
            class="btn_mini mini_green trans absolute b-0 right-5 z-1 shadow-2xl">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="wrapper_directors pt-22 pb-42">
    <div class="container_main relative">
      <h2
        class="absolute w-full bottom-0 l-0 font-black opacity-3 clr text-[18rem] overflow-hidden whitespace-nowrap leading-[.75] p-0 m-0 hidden md:block">
        Directors
      </h2>

      <div class="flex flex-col sm:flex-row justify-between items-center gap-x-9">
        <h2 class="text-4xl sm:text-5xl font-bold mb-1">Board of Directors</h2>
        <p class="font-medium text-center sm:text-left max-w-[400px]">
          Our Board provides vision and leadership to keep our mission
          alive, strengthening and uniting the LGBTQ+ community.
        </p>
      </div>
      <div
        class="drawer_ourteam grid md:grid-cols-2 xl:grid-cols-3 relative z-1 gap-x-18 gap-y-36 pt-[8rem]">
        <div class="item_team directors">
          <div class="names_team">
            <h2 class="text-2xl font-bold">Don Pickens</h2>
            <p class="font-medium">Board Chair</p>
          </div>
          <img class="picture_team" src="<?php bloginfo('template_url') ?>/imgs/team/06.png" alt="" />
          <button
            class="btn_mini mini_orange trans absolute b-0 right-5 z-1 shadow-2xl">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>
        <div class="item_team directors">
          <div class="names_team">
            <h2 class="text-2xl font-bold">Mike Owens</h2>
            <p class="font-medium">Secretary</p>
          </div>
          <img class="picture_team" src="<?php bloginfo('template_url') ?>/imgs/team/07.png" alt="" />
          <button
            class="btn_mini mini_orange trans absolute b-0 right-5 z-1 shadow-2xl">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>

        <div class="item_team directors">
          <div class="names_team">
            <h2 class="text-2xl font-bold">Matt Karimi</h2>
            <p class="font-medium">Doctor</p>
          </div>
          <img class="picture_team" src="<?php bloginfo('template_url') ?>/imgs/team/08.png" alt="" />
          <button
            class="btn_mini mini_orange trans absolute b-0 right-5 z-1 shadow-2xl">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>
        <div class="item_team directors">
          <div class="names_team">
            <h2 class="text-2xl font-bold">Jet De La Isla</h2>
            <p class="font-medium">Comunications</p>
          </div>
          <img class="picture_team" src="<?php bloginfo('template_url') ?>/imgs/team/09.png" alt="" />
          <button
            class="btn_mini mini_orange trans absolute b-0 right-5 z-1 shadow-2xl">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>
        <div class="item_team directors">
          <div class="names_team">
            <h2 class="text-2xl font-bold">Poncho Davalos</h2>
            <p class="font-medium">Board Member</p>
          </div>
          <img class="picture_team" src="<?php bloginfo('template_url') ?>/imgs/team/10.png" alt="" />
          <button
            class="btn_mini mini_orange trans absolute b-0 right-5 z-1 shadow-2xl">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>
        <div class="item_team directors">
          <div class="names_team">
            <h2 class="text-2xl font-bold">Luis Villavicencio</h2>
            <p class="font-medium">Adjunct Board Member</p>
          </div>
          <img class="picture_team" src="<?php bloginfo('template_url') ?>/imgs/team/11.png" alt="" />
          <button
            class="btn_mini mini_orange trans absolute b-0 right-5 z-1 shadow-2xl">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>
        <div class="item_team directors">
          <div class="names_team">
            <h2 class="text-2xl font-bold">Mitchel Kushner M.D.</h2>
            <p class="font-medium">Adjunct Board Member</p>
          </div>
          <img class="picture_team" src="<?php bloginfo('template_url') ?>/imgs/team/12.png" alt="" />
          <button
            class="btn_mini mini_orange trans absolute b-0 right-5 z-1 shadow-2xl">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>
      </div>
    </div>
  </section>

  <?php include get_template_directory() . '/pre-footer.php'; ?>

</main>

<!-- Overlay -->
<div
  id="modalOverlay"
  class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden transition-opacity duration-300 z-99 opacity-0"></div>

<!-- Modal Wrapper -->
<div
  id="modalBox"
  class="modal__team fixed inset-0 flex items-center justify-center pointer-events-none z-99">
  <div
    id="modalContent"
    class="w-full max-w-[620px] p-4 scale-90 hidden transition-transform transition-opacity duration-300 pointer-events-auto opacity-0">
    <div
      class="item_team flex-col !items-start !justify-start !gap-0 relative">
      <button
        id="closeModal"
        class="btn_mini mini_green trans absolute t-0 right-5 z-1 shadow-2xl">
        <i class="ri-close-fill"></i>
      </button>
      <div class="relative w-full">
        <div class="names_team">
          <h2 class="text-3xl font-bold">Pedro López</h2>
          <p class="font-medium">Executive Director</p>
        </div>
        <img class="picture_team" src="<?php bloginfo('template_url') ?>/imgs/team/01.png" alt="" />
      </div>

      <div class="info_personal custom-scroll">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptatem assumenda voluptatibus veritatis accusantium, commodi
          quaerat consequuntur natus tempore. Nostrum commodi dolorum culpa
          eveniet, ipsum ex excepturi nobis illo mollitia. Repudiandae modi
          reprehenderit qui, expedita nemo non? Ab nihil, voluptas quasi
          obcaecati, ex illo ipsum quo ullam accusamus id et eum quos ad?
          Temporibus dolorem nemo cumque. Nam inventore eaque voluptas
          assumenda, sunt delectus molestiae, quod ipsa minus nemo molestias
          veniam dignissimos numquam? Corporis odit placeat, excepturi
          nesciunt id nulla iste quos dicta obcaecati cumque soluta eum ad
          eos earum, beatae quo! Vero atque error similique fuga in
          consequuntur delectus ab.
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sint
          corrupti, nihil ullam vitae aliquid et harum! Perspiciatis fugit
          eligendi ab minima reiciendis. Quidem quis quasi fugiat tempora ab
          error.
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Reiciendis inventore neque adipisci, dolores ex omnis maxime est
          error sit dolore recusandae fugiat deleniti voluptas praesentium.
          Dicta vitae eveniet dignissimos consequatur cumque non temporibus
          exercitationem voluptate, laboriosam porro at earum, eos aliquid
          neque, dolorem provident vero! Quasi debitis in hic tenetur?
        </p>
      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    menuMovil();
    isDropdown();
    headerOnScroll();
    drawerInit();
    modalTeam();
  });
</script>