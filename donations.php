<?php
$args = [
  'post_type'      => 'post',
  'category_name'  => 'donations', // Slug de la categoría
];

$query = new WP_Query($args);

if ($query->have_posts()) {
  while ($query->have_posts()) {
    $query->the_post();
?>

    <section class="wrapper_donations sm:mb-22 mb-18" style="background-image: url(<?php bloginfo('template_url') ?>/imgs/bg_donar.png);">
      <div class="box_donations">
        <div class="content_donations">
          <h2 class="text_ttl font-bold mb-4 text-center">
            <?php the_title(); ?>
          </h2>
          <div class="text_subttl font-regular mb-2 text-center mb-2">
            <?php the_content(); ?>
          </div>

          <div class="flex justify-center mt-6">
            <button class="btn btn_primary trans" data-drawer-trigger>
               <span><?php echo function_exists('pll__') ? pll__('I Give Now') : 'I Give Now'; ?></span>
              <span class="ico_btn">
                <i class="ri-arrow-right-line"></i>
              </span>
            </button>
          </div>
        </div>
      </div>
    </section>
<?php
  }
  wp_reset_postdata();
} else {
  echo '<p>No se encontraron publicaciones".</p>';
}
?>