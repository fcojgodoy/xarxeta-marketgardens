<?php
/*
Title: Contacte
Post Type: marketgarden
Order: 20
*/
piklist('field', array(
  'type' => 'group'
  ,'label' => __('Address', 'xarxeta-marketgardens')
  ,'description' => __('Enter your address', 'xarxeta-marketgardens')
  ,'fields' => array(
    array(
      'type' => 'text'
      ,'field' => 'mg_street'
      ,'label' => __('Street Address', 'xarxeta-marketgardens')
      ,'columns' => 12
    )
    ,array(
      'type' => 'text'
      ,'field' => 'mg_pobox'
      ,'label' => __('PO Box, Suite, etc.', 'xarxeta-marketgardens')
      ,'columns' => 12
    )
    ,array(
      'type' => 'text'
      ,'field' => 'mg_city'
      ,'label' => __('City', 'xarxeta-marketgardens')
      ,'columns' => 5
    )
    ,array(
      'type' => 'select'
      ,'field' => 'mg_state'
      ,'label' => __('Region', 'xarxeta-marketgardens')
      ,'columns' => 4
      ,'choices' => array(
        'Vallès, Osona i Maresme' => 'Vallès, Osona i Maresme'
        ,'Garrotxa - Empordà' => 'Garrotxa - Empordà'
        ,'Tarragona - Baix Llobregat' => 'Tarragona - Baix Llobregat'
      )
    )
    ,array(
      'type' => 'text'
      ,'field' => 'mg_postalcode'
      ,'label' => __('Postal Code', 'xarxeta-marketgardens')
      ,'columns' => 3
    )
    ,array(
      'type' => 'tel'
      ,'field' => 'mg_phone'
      ,'label' => __('Phone', 'xarxeta-marketgardens')
      ,'columns' => 4
    )
    ,array(
      'type' => 'tel'
      ,'field' => 'mg_phone2'
      ,'label' => __('Secondary phone', 'xarxeta-marketgardens')
      ,'columns' => 4
    )
    ,array(
      'type' => 'tel'
      ,'field' => 'mg_mobile'
      ,'label' => __('Mobile', 'xarxeta-marketgardens')
      ,'columns' => 4
    )
    ,array(
      'type' => 'url'
      ,'field' => 'mg_web'
      ,'label' => __('Web', 'xarxeta-marketgardens')
      ,'columns' => 12
    )
  )

));
