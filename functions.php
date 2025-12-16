<?php
register_nav_menus(array(
  'menu' => 'Menu principal',
  'menu_social' => 'Menu Redes Sociales',
));

add_theme_support('post-thumbnails');
add_image_size('principal_thumbs', 850, 450, true);
add_image_size('thumbs', 250, 150, true);

function company_data($field)
{
  // ID de página
  $page_id = 162;
  return get_field($field, $page_id);
}

function general_page($field)
{
  // ID de página
  $page_id = 196;
  return get_field($field, $page_id);
}


add_action('init', function () {
  if (function_exists('pll_register_string')) {

    // TITULOS ==
    pll_register_string('title_welcome', 'WELCOME', 'TitleVGCC');
    pll_register_string('title_activities', 'Activities', 'TitleVGCC');
    pll_register_string('title_services', 'Services', 'TitleVGCC');
    pll_register_string('title_press', 'Press', 'TitleVGCC');
    pll_register_string('title_upcoming', 'Upcoming Events', 'TitleVGCC');
    pll_register_string('title_faqs', 'General Questions', 'TitleVGCC');
    pll_register_string('title_send_wt', 'Send WhatsApp', 'TitleVGCC');
    pll_register_string('title_send_email', 'Send email', 'TitleVGCC');
    pll_register_string('email_title', 'email_title', 'TitleVGCC');
    pll_register_string('our_location', 'our_location', 'TitleVGCC');
    pll_register_string('Workhours', 'Workhours', 'TitleVGCC');
    pll_register_string('L-V', 'L-V', 'TitleVGCC');
    pll_register_string('S', 'S', 'TitleVGCC');
    pll_register_string('lets_social', 'lets_social', 'TitleVGCC');
    pll_register_string('privacy_policy', 'privacy_policy', 'TitleVGCC');
    pll_register_string('title_values', 'Values', 'title_values');
    pll_register_string('title_ourteam', 'Our Team', 'title_ourteam');
    pll_register_string('title_directors', 'Board of Directors', 'title_directors');
    pll_register_string('title_contact', 'Contact', 'title_contact');
    pll_register_string('title_follow', 'Follow Us', 'title_follow');
    pll_register_string('title_payment', 'Payment Information', 'title_payment');
    pll_register_string('title_ways_donate', 'Ways to donate', 'title_ways_donate');
    pll_register_string('title_credit_card', 'Credit Card', 'title_credit_card');
    pll_register_string('title_check', 'Check', 'title_check');
    pll_register_string('title_wire_transfer', 'Wire transfer', 'title_wire_transfer');
    pll_register_string('title_donate_card', 'Donate with card', 'title_donate_card');




    // TEXTOS ==
    pll_register_string('text_about_home', 'Together, we’re building', 'TextVGCC');
    pll_register_string('text_activities_home', 'text_activities_home', 'TextVGCC');
    pll_register_string('text_services_home', 'text_services_home', 'TextVGCC');
    pll_register_string('text_press_home', 'text_press_home', 'TextVGCC');
    pll_register_string('Have question', 'Have question', 'TextVGCC');
    pll_register_string('info_small', 'info_small', 'TextVGCC');
    pll_register_string('text_integrity', 'Integrity', 'TextVGCC');
    pll_register_string('text_respect', 'Respect', 'TextVGCC');
    pll_register_string('text_collaboration', 'Collaboration', 'TextVGCC');
    pll_register_string('text_kindness', 'Kindness', 'TextVGCC');
    pll_register_string('text_oudedicated', 'Our dedicated', 'TextVGCC');
    pll_register_string('text_board', 'Our Board provides', 'TextVGCC');
    pll_register_string('text_contact_home', 'Whether you’re seeking guidance', 'TextVGCC');
    pll_register_string('text_make_secure', 'Make your secure donation in seconds', 'TextVGCC');


    // BOTONES ==
    pll_register_string('btn_our_services', 'Our services', 'BtnsVGCC');
    pll_register_string('btn_who_we_are', 'Discover Who We Are', 'BtnsVGCC');
    pll_register_string('btn_learn_more', 'Learn More', 'BtnsVGCC');
    pll_register_string('btn_give_now', 'I Give Now', 'BtnsVGCC');
    pll_register_string('btn_upcoming', 'Donate Now', 'BtnsVGCC');
  }
});
