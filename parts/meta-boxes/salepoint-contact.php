<?php
/*
Title: Contacte
Post Type: salepoint
Order: 20
*/
piklist('field', array(
  'type' => 'group'
  ,'label' => __('Address', 'xarxeta-marketgardens')
  ,'description' => __('The address of the point of sale', 'xarxeta-marketgardens')
  ,'fields' => array(
    array(
      'type' => 'text'
      ,'field' => 'sp_street'
      ,'label' => __('Street Address', 'xarxeta-marketgardens')
      ,'columns' => 12
    )
    ,array(
      'type' => 'text'
      ,'field' => 'sp_pobox'
      ,'label' => __('PO Box, Suite, etc.', 'xarxeta-marketgardens')
      ,'columns' => 12
    )
    ,array(
      'type' => 'text'
      ,'field' => 'sp_city'
      ,'label' => __('City', 'xarxeta-marketgardens')
      ,'columns' => 5
    )
    ,array(
      'type' => 'select'
      ,'field' => 'sp_state'
      ,'label' => __('Region', 'xarxeta-marketgardens')
      ,'columns' => 4
      ,'choices' => array(
        'Vallès, Osona i Maresme' => 'Vallès, Osona i Maresme'
        ,'Garrotxa - Empordà' => 'Garrotxa - Empordà'
        ,'Tarragona - Baix Llobregat' => 'Tarragona - Baix Llobregat'
        ,__('Another', 'xarxeta-marketgardens') => __('Another', 'xarxeta-marketgardens')
      )
    )
    ,array(
      'type' => 'text'
      ,'field' => 'sp_postalcode'
      ,'label' => __('Postal Code', 'xarxeta-marketgardens')
      ,'columns' => 3
    )
    ,array(
      'type' => 'tel'
      ,'field' => 'sp_phone'
      ,'label' => __('Phone', 'xarxeta-marketgardens')
      ,'columns' => 4
    )
    ,array(
      'type' => 'tel'
      ,'field' => 'sp_phone2'
      ,'label' => __('Secondary phone', 'xarxeta-marketgardens')
      ,'columns' => 2
    )
    ,array(
      'type' => 'tel'
      ,'field' => 'sp_mobile'
      ,'label' => __('Mobile', 'xarxeta-marketgardens')
      ,'columns' => 4
    )
  )

));
