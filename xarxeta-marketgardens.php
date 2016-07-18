<?php

/*
 * Plugin Name: Xarxeta Marketgardens
 * Plugin URI: http://fcojgodoy.github.io/web
 * Description: Create listings for market gardens or farms.
 * Version: 0.1
 * Author: Fco. J. Godoy
 * Author URI: http://fcojgodoy.github.io/web
 * License: GPLv2 or later
 * Text Domain: xarxeta-marketgardens
 * Domain Path: /languages
 * Plugin Type: Piklist
*/

/*
 * Call to Piklist Checker
 *
 */
add_action('init', 'my_init_function');
function my_init_function(){
  if(is_admin()){
   include_once('piklist-checker/class-piklist-checker.php');

   if (!piklist_checker::check(__FILE__)){
     return;
   }
  }
}


function xm_load_plugin_textdomain() {
    load_plugin_textdomain( 'xarxeta-marketgardens', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'xm_load_plugin_textdomain' );

/*
 * Registering Marketgarden CPT
 *
 */
 add_filter('piklist_post_types', 'marketgarden_post_type');
 function marketgarden_post_type($post_types)
 {
  $post_types['marketgarden'] = array(
    'label' => __('Market gardens', 'xarxeta-marketgardens')
    ,'public' => true
    ,'has_archive' => true
    ,'rewrite' => array(
      'slug' => 'hortes' // FIXME: poner en inglés y ver cómo traducir: https://wordpress.org/support/topic/translate-custom-post-type-slug || Polylang con plugin con estrella en Github
    )
    ,'menu_icon' => 'dashicons-carrot'
    ,'supports' => array(
      'title'
      ,'author'
      ,'revisions'
      ,'thumbnail'
    )
    ,'hide_meta_box' => array(
      'slug'
      ,'author'
      ,'revisions'
      ,'comments'
      ,'commentstatus'
    )
  );
return $post_types;
}

/*
 * Registering Salepoint CPT
 *
 */
 add_filter('piklist_post_types', 'salepoint_post_type');
 function salepoint_post_type($post_types)
 {
  $post_types['salepoint'] = array(
    'label' => __('Sale points', 'xarxeta-marketgardens')
    ,'public' => true
    ,'has_archive' => true
    ,'rewrite' => array(
      'slug' => 'punts-de-venda'
    )
    ,'menu_icon' => 'dashicons-store'
    ,'supports' => array(
      'title'
      ,'author'
      ,'revisions'
    )
    ,'hide_meta_box' => array(
      'slug'
      ,'author'
      ,'comments'
      ,'commentstatus'
    )
  );
return $post_types;
}


/*
 * Registering Products taxonomy
 *
 */
//  add_filter('piklist_taxonomies', 'products_tax');
//  function products_tax($taxonomies)
//  {
//    $taxonomies[] = array(
//       'post_type' => 'marketgarden'
//       ,'name' => 'products_tax'
//       ,'configuration' => array(
//         'labels' => piklist('taxonomy_labels', 'Product')
//         ,'hide_meta_box' => true
//         ,'query_var' => true
//         ,'rewrite' => array(
//           'slug' => 'productes'
//         )
//       )
//     );
// return $taxonomies;
// }


?>
