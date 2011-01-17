<?php

  # Sanity check.
  if ( !class_exists( 'wordpress_960' ) ) {

    class wordpress_960 {

      public $header_menu = array(
        'container'       => 'div',
        'container_class' => 'grid_12'
      );

      public $footer_menu = array(
        'container'       => 'div',
        'container_class' => 'grid_12'
      );

      # PHP 4 Constructor
      function wordpress_960() {

      } # End Constructor

    }

  } # Does the class exist?

  if ( class_exists( 'wordpress_960' ) and !isset( $wordpress_960 ) ) {
    $wordpress_960 = new wordpress_960();
  }

?>
