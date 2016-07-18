<?php
/*
Title: L'horari
Post Type: salepoint
Order: 30
*/

piklist('field', array(
  'type' => 'time'
  ,'field' => 'sp_timestart'
  ,'label' => __('Enter the start time', 'xarxeta-marketgardens')
));
piklist('field', array(
  'type' => 'time'
  ,'field' => 'sp_timeend'
  ,'label' => __('Enter the end time', 'xarxeta-marketgardens')
));

piklist('field', array(
  'type' => 'checkbox'
  ,'field' => 'sp_days'
  ,'label' => __('Days of the week', 'xarxeta-marketgardens')
  ,'columns' => 4
  ,'choices' =>
    array(
      'monday' => __('Monday', 'xarxeta-marketgardens')
      ,'tuesday' => __('Tuesday', 'xarxeta-marketgardens')
      ,'wednesday' => __('Wednesday', 'xarxeta-marketgardens')
      ,'thursday' => __('Thursday', 'xarxeta-marketgardens')
      ,'friday' => __('Friday', 'xarxeta-marketgardens')
      ,'saturday' => __('Saturday', 'xarxeta-marketgardens')
      ,'sunday' => __('Sunday', 'xarxeta-marketgardens')
      )
  ));

  piklist('field', array(
    'type' => 'editor'
    ,'field' => 'sp_comment'
    ,'label' => __('Comment', 'xarxeta-marketgardens')
    ,'description' => __('Add any comment to the timetable.', 'xarxeta-marketgardens')
    ,'options' => array(
      'media_buttons' => false
      ,'teeny' => true
    )
  ));

 ?>
