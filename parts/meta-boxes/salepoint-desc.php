<?php
/*
Title: Punt de venda
Post Type: salepoint
*/

piklist('field', array(
  'type' => 'text'
  ,'field' => 'sp_subtitle'
  ,'label' => __('Subtitle/Slogan', 'xarxeta-marketgardens')
  ,'description' => __('Enter a subtitle or slogan for de sale point', 'xarxeta-marketgardens')
  ,'attributes' => array(
    'class' => 'text'
  )
));

piklist('field', array(
  'type' => 'editor'
  ,'field' => 'sp_description'
  ,'label' => __('Description', 'xarxeta-marketgardens')
  ,'description' => __('Enter a description for the sale point', 'xarxeta-marketgardens')
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


?>
