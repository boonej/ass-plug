<?php
/**
 * Admin specific functionality.
 *
 * @since 0.0.1
 *
 * @package ass-plug
 * @subpackage ass-plug/public
 */

class ASSPlug_Public {

  private $plugin_name;
  private $version;

  public function __construct( $plugin_name, $version ) {

    $this->plugin_name = $plugin_name;
    $this->version = $version;

  }

  public function enqueue_styles() {

    wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ )  
      . 'css/ass-plug-public.css', array(), $this->version, 'all' );

  }

  public function enqueue_scripts() {

    wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ )
      . 'js/ass-plug-public.js', array( 'jquery'), $this->version, false );

  }

}

?>
