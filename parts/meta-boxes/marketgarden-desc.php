<?php
/*
Title: La nostra horta
Post Type: marketgarden
Order: 0
*/

piklist('field', array(
  'type' => 'text'
  ,'field' => 'mg_subtitle'
  ,'label' => __('Subtitle/slogan', 'Subtítulo/eslogan')
  ,'description' => __('Enter a subtitle or slogan of the market garden', 'xarxeta-marketgardens')
  ,'attributes' => array(
    'class' => 'text'
  )
));

piklist('field', array(
  'type' => 'editor'
  ,'field' => 'mg_who'
  ,'label' => __('Who we are', 'xarxeta-marketgardens')
  ,'description' => __('Enter a text about the people from the market garden', 'xarxeta-marketgardens')
  ,'options' => array (
    // 'wpautop' => true
    'media_buttons' => false
    // ,'tabindex' => ''
    // ,'editor_css' => ''
    // ,'editor_class' => ''
    ,'teeny' => true
    // ,'dfw' => false
    // ,'tinymce' => true
    // ,'quicktags' => true
  )
));

piklist('field', array(
  'type' => 'editor'
  ,'field' => 'mg_where_and_when'
  ,'label' => __('Where and since when?', 'xarxeta-marketgardens')
  ,'description' => __('Enter a text about the place and the beginning of the market garden', 'xarxeta-marketgardens')
  ,'options' => array (
    // 'wpautop' => true
    'media_buttons' => false
    // ,'tabindex' => ''
    // ,'editor_css' => ''
    // ,'editor_class' => ''
    ,'teeny' => true
    // ,'dfw' => false
    // ,'tinymce' => true
    // ,'quicktags' => true
  )
));

piklist('field', array(
  'type' => 'editor'
  ,'field' => 'mg_description'
  ,'label' => __('Description of the land', 'xarxeta-marketgardens')
  ,'description' => __('Enter a description for the market garden', 'xarxeta-marketgardens')
  ,'options' => array (
    // 'wpautop' => true
    'media_buttons' => false
    // ,'tabindex' => ''
    // ,'editor_css' => ''
    // ,'editor_class' => ''
    ,'teeny' => true
    // ,'dfw' => false
    // ,'tinymce' => true
    // ,'quicktags' => true
  )
));

piklist('field', array(
  'type' => 'editor'
  ,'field' => 'mg_sales'
  ,'label' => __('Type of sales', 'xarxeta-marketgardens')
  ,'description' => __('Enter a description of the type of sales of the market garden', 'xarxeta-marketgardens')
  ,'options' => array (
    // 'wpautop' => true
    'media_buttons' => false
    // ,'tabindex' => ''
    // ,'editor_css' => ''
    // ,'editor_class' => ''
    ,'teeny' => true
    // ,'dfw' => false
    // ,'tinymce' => true
    // ,'quicktags' => true
  )
));

piklist('field', array(
  'type' => 'editor'
  ,'field' => 'mg_peculiarities'
  ,'label' => __('Peculiarities', 'xarxeta-marketgardens')
  ,'description' => __('Enter the peculiarities for the market garden', 'xarxeta-marketgardens')
  ,'options' => array (
    // 'wpautop' => true
    'media_buttons' => false
    // ,'tabindex' => ''
    // ,'editor_css' => ''
    // ,'editor_class' => ''
    ,'teeny' => true
    // ,'dfw' => false
    // ,'tinymce' => true
    // ,'quicktags' => true
  )
));


// piklist('field', array(
//   'type' => 'checkbox'
//   ,'field' => 'mg_products'
//   // ,'add_more' => true
//   ,'label' => __('Products', 'xarxeta-marketgardens')
//   ,'description' => __('Enter the products are selling in your market garden', 'xarxeta-marketgardens')
//   ,'attributes' => array(
//       'class' => 'text'
//     )
//   ,'choices' => piklist(get_terms( array(
//       'taxonomy' => 'products_tax'
//       ,'hide_empty' => false
//     ))
//     ,array(
//       'term_id'
//       ,'name'
//     )
//   )
// ));


?>
