<?php
/*
Title: Els nostres punts de venda
Post Type: marketgarden
Order: 10
Priority: default
Context: side
*/
piklist('field', array(
    'type' => 'post-relate'
    ,'scope' => 'salepoint'
    ,'template' => 'field'
    ,'label' => __('Sale point', 'xarxeta-marketgardens')
    ,'description' => __('Enter the sale points of your market garden', 'xarxeta-marketgardens')
  ));

?>
