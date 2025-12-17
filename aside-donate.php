   <div
     id="drawer-overlay"
     class="fixed inset-0 bg-black/40 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 z-[998]"></div>
   <aside
     id="drawer"
     class="wrapper_drawer fixed top-0 right-0 h-full w-full max-w-[600px] bg-white shadow-2xl translate-x-full transition-transform duration-300 z-[999]">
     <div class="drawer-content">
       <div
         class="bg_hero_drawer w-full min-h-[215px] sm:min-h-[300px]"
         style="background-image: url(<?php bloginfo('template_url') ?>/imgs/bg_contact_quikly.png)">
         <button
           id="drawer-close"
           class="btn_mini mini_orange trans shadow-2xl absolute top-4 right-4 z-1">
           <i class="ri-arrow-right-line"></i>
         </button>
         <div
           class="relative z-1 text-center w-full max-w-[480px] mx-auto text-white">
           <h4 class="text-xl sm:text-3xl font-bold mb-2">
             <!-- Your support strengthens our community -->
             <?php echo function_exists('pll__') ? pll__('Your support strengthens our community') : 'title_aside_donate'; ?>
           </h4>
           <p class="pb-1">
             <!-- Your donation helps us promote health, wellness, and empowerment
             within the LGBTQ+ community. We offer tax-deductible receipts in
             Mexico and the U.S. through the Border Philanthropy Partnership. -->

             <?php echo function_exists('pll__') ? pll__('Your donation helps us promote health') : 'title_aside_a'; ?>
           </p>
         </div>
       </div>
       <div class="mx-auto max-w-[460px] mt-6 sm:mt-12 pl-4 pr-4">
         <h5 class="text-center text-xl mb-12 sm:mb-20 font-bold">
           <!-- Please choose the donation option that best fits your needs: -->
           <?php echo function_exists('pll__') ? pll__('Please choose the donation option') : 'title_aside_b'; ?>
         </h5>
         <div class="box_banderas">


           <?php
            $page_id = pll_get_post(23); // ID base
            ?>
           <a href="<?php echo get_permalink($page_id); ?>" class="item_bandera">
             <img
               class="pic_bandera"
               src="<?php bloginfo('template_url') ?>/imgs/bandera-usa.png"
               alt="donation in USA" />
             <div>
               <h5 class="font-bold text-2xl c_marin">
                 <?php echo function_exists('pll__') ? pll__('USA') : 'title_aside_usa'; ?>
               </h5>
               <p class="text-sm leading-4">

                 <?php echo function_exists('pll__') ? pll__('I’d like to receive a U.S. tax-deductible receipt.') : 'title_aside_c'; ?>
               </p>
             </div>
           </a>

           <?php
            $page_id = pll_get_post(25); // ID base
            ?>
           <a href="<?php echo get_permalink($page_id); ?>" class="item_bandera">
             <img
               class="pic_bandera"
               src="<?php bloginfo('template_url') ?>/imgs/bandera-mex.png"
               alt="donation in USA" />
             <div>
               <h5 class="font-bold text-2xl c_marin"><?php echo function_exists('pll__') ? pll__('MEX') : 'title_aside_mex'; ?></h5>
               <p class="text-sm leading-4">
                 <?php echo function_exists('pll__') ? pll__('like to receive') : 'title_aside_d'; ?>
               </p>
             </div>
           </a>

         </div>

         <h5 class="text-center text-xl mt-10 sm:mt-14 font-bold">

           <?php echo function_exists('pll__') ? pll__('Thank you for being') : 'title_aside_e'; ?>
           💜
         </h5>
       </div>
     </div>
   </aside>