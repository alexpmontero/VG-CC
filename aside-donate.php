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
             Your support strengthens our community
           </h4>
           <p class="pb-1">
             Your donation helps us promote health, wellness, and empowerment
             within the LGBTQ+ community. We offer tax-deductible receipts in
             Mexico and the U.S. through the Border Philanthropy Partnership.
           </p>
         </div>
       </div>
       <div class="mx-auto max-w-[460px] mt-6 sm:mt-12 pl-4 pr-4">
         <h5 class="text-center text-xl mb-12 sm:mb-20 font-bold">
           Please choose the donation option that best fits your needs:
         </h5>
         <div class="box_banderas">
           <a href="donate-usa.html" class="item_bandera">
             <img
               class="pic_bandera"
               src="<?php bloginfo('template_url') ?>/imgs/bandera-usa.png"
               alt="donation in USA" />
             <div>
               <h5 class="font-bold text-2xl c_marin">USA</h5>
               <p class="text-sm">
                 I’d like to receive a U.S. tax-deductible receipt.
               </p>
             </div>
           </a>
           <a href="donate-mex.html" class="item_bandera">
             <img
               class="pic_bandera"
               src="<?php bloginfo('template_url') ?>/imgs/bandera-mex.png"
               alt="donation in USA" />
             <div>
               <h5 class="font-bold text-2xl c_marin">MEXICO</h5>
               <p class="text-sm">
                 I’d like to receive a tax-deductible receipt or invoice in
                 Mexico.
               </p>
             </div>
           </a>
         </div>

         <h5 class="text-center text-xl mt-10 sm:mt-14 font-bold">
           Thank you for being part of this movement for inclusion, health,
           and care. 💜
         </h5>
       </div>
     </div>
   </aside>