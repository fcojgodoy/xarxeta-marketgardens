<?php
/*
Title: Productes
Post Type: salepoint
Order: 4
*/

piklist('field', array(
  'type' => 'checkbox'
  ,'scope' => 'taxonomy'
  ,'field' => 'sp-product-tax'
  ,'label' =>  __('Products', 'xarxeta-marketgardens')
  ,'description' =>  __('Select the products that can be found in this salepoint', 'xarxeta-marketgardens')
  ,'choices' => array(
      // '' =>  __('Select products', 'xarxeta-marketgardens')
    )
    + piklist(get_terms(array(
      'taxonomy' => 'sp-product-tax'
      ,'hide_empty' => false
    ))
    ,array(
      'term_id'
      ,'name'
    )
  )
));

 ?>
