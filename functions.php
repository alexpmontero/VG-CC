<?php
register_nav_menus(array(
  'menu' => 'Menu principal',
));

add_theme_support('post-thumbnails');

class Tailwind_Dropdown_Walker extends Walker_Nav_Menu
{

  // Submenu wrapper
  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $output .= '
      <div class="dropdown-menu absolute p-2 left-0 mt-2 w-54 bg-white shadow-lg rounded-xl opacity-0 invisible scale-95 transition-all duration-200 origin-top">
    ';
  }

  function end_lvl(&$output, $depth = 0, $args = null)
  {
    $output .= '</div>';
  }

  // Item
  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {

    $has_children = in_array('menu-item-has-children', $item->classes);

    // 🔹 Clases personalizadas desde el admin
    $item_classes = implode(' ', $item->classes);

    // 🔹 NIVEL 0 — ITEM PRINCIPAL CON DROPDOWN
    if ($depth === 0 && $has_children) {

      $output .= '
      <div class="item_dropdown relative dropdown ' . esc_attr($item_classes) . '">
        <button class="dropdown-btn flex items-center gap-1 transition">
          <span>' . esc_html($item->title) . '</span>
          <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
      ';
    }
    // 🔹 NIVEL 0 — LINK NORMAL
    elseif ($depth === 0) {

      $output .= '
        <a href="' . esc_url($item->url) . '" class="item_dropdown ' . esc_attr($item_classes) . '">
          ' . esc_html($item->title) . '
        </a>
      ';
    }
    // 🔹 SUBMENÚ (depth >= 1)
    else {

      $output .= '
        <a href="' . esc_url($item->url) . '" class="block px-4 py-2 hover:bg-gray-200 rounded-xl ' . esc_attr($item_classes) . '">
          ' . esc_html($item->title) . '
        </a>
      ';
    }
  }

  function end_el(&$output, $item, $depth = 0, $args = null)
  {
    if ($depth === 0 && in_array('menu-item-has-children', $item->classes)) {
      $output .= '</div>';
    }
  }
}


function company_data($field)
{
  $page_id = 162;
  return get_field($field, $page_id);
}

function donate_mex_info($field)
{
  $page_id = 341;
  return get_field($field, $page_id);
}

function donate_usa_info($field)
{
  $page_id = 361;
  return get_field($field, $page_id);
}

add_action('init', function () {
  if (function_exists('pll_register_string')) {

    // TITULOS ==
    pll_register_string('title_welcome', 'WELCOME', 'TitleVGCC');
    pll_register_string('title_ready_book', 'Ready to book your appointment?', 'TitleVGCC');
    pll_register_string('title_more_service', 'More service', 'TitleVGCC');
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
    pll_register_string('title_values', 'Values', 'TitleVGCC');
    pll_register_string('title_ourteam', 'Our Team', 'TitleVGCC');
    pll_register_string('title_directors', 'Board of Directors', 'TitleVGCC');
    pll_register_string('title_contact', 'Contact', 'TitleVGCC');
    pll_register_string('title_follow', 'Follow Us', 'TitleVGCC');
    pll_register_string('title_payment', 'Payment Information', 'TitleVGCC');
    pll_register_string('title_ways_donate', 'Ways to donate', 'TitleVGCC');
    pll_register_string('title_credit_card', 'Credit Card', 'TitleVGCC');
    pll_register_string('title_check', 'Check', 'TitleVGCC');
    pll_register_string('title_wire_transfer', 'Wire transfer', 'TitleVGCC');
    pll_register_string('title_donate_card', 'Donate with card', 'TitleVGCC');
    pll_register_string('title_address', 'address', 'TitleVGCC');
    pll_register_string('title_bank', 'bank', 'TitleVGCC');
    pll_register_string('title_account_number', 'account_number', 'TitleVGCC');
    pll_register_string('title_standardized_bank_code', 'standardized_bank_code', 'TitleVGCC');
    pll_register_string('title_branch', 'branch', 'TitleVGCC');
    pll_register_string('title_swift_bic', 'swift_bic', 'TitleVGCC');
    pll_register_string('title_payable_to', 'payable_to', 'TitleVGCC');
    pll_register_string('title_mail_to', 'mail_to', 'TitleVGCC');
    pll_register_string('title_aside_donate', 'Your support strengthens our community', 'TitleVGCC');
    pll_register_string('title_beneficiary_bank_information', 'beneficiary_bank_information', 'TitleVGCC');
    pll_register_string('title_bank_country', 'bank_country', 'TitleVGCC');
    pll_register_string('title_bank_name', 'bank_name', 'TitleVGCC');
    pll_register_string('title_aba_routing_number', 'aba_routing_number', 'TitleVGCC');
    pll_register_string('title_beneficiary_information', 'beneficiary_information', 'TitleVGCC');
    pll_register_string('title_account_name', 'account_name', 'TitleVGCC');
    pll_register_string('title_branch', 'branch', 'TitleVGCC');
    pll_register_string('title_branch', 'branch', 'TitleVGCC');
    pll_register_string('title_branch', 'branch', 'TitleVGCC');


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
    pll_register_string('text_info_a', 'If the amount is in US', 'TextVGCC');
    pll_register_string('text_info_b', 'To request your CFDI', 'TextVGCC');
    pll_register_string('text_info_c', 'Tax status certificate', 'TextVGCC');
    pll_register_string('text_info_d', 'CFDI usage/payment', 'TextVGCC');
    pll_register_string('text_info_e', 'Contact person’s name', 'TextVGCC');
    pll_register_string('text_info_f', 'If you have any questions', 'TextVGCC');
    pll_register_string('title_aside_a', 'Your donation helps us promote health', 'TitleVGCC');
    pll_register_string('title_aside_b', 'Please choose the donation option', 'TitleVGCC');
    pll_register_string('title_aside_usa', 'USA', 'TitleVGCC');
    pll_register_string('title_aside_mex', 'MEX', 'TitleVGCC');
    pll_register_string('title_aside_c', 'I’d like to receive a U.S. tax-deductible receipt.', 'TextVGCC');
    pll_register_string('title_aside_d', 'like to receive', 'TextVGCC');
    pll_register_string('title_aside_e', 'Thank you for being', 'TextVGCC');


    // BOTONES ==
    pll_register_string('btn_our_services', 'Our services', 'BtnsVGCC');
    pll_register_string('btn_who_we_are', 'Discover Who We Are', 'BtnsVGCC');
    pll_register_string('btn_learn_more', 'Learn More', 'BtnsVGCC');
    pll_register_string('btn_give_now', 'I Give Now', 'BtnsVGCC');
    pll_register_string('btn_upcoming', 'Donate Now', 'BtnsVGCC');
    pll_register_string('btn_upcoming', 'Donate Now', 'BtnsVGCC');
    pll_register_string('btn_connect_with_us', 'Connect with Us', 'BtnsVGCC');
    pll_register_string('btn_meet_team', 'Meet our team', 'BtnsVGCC');
  }
});
