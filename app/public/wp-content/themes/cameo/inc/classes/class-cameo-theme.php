<?php
/**
 * Bootstraps the theme.
 * 
 * @Pacakage Cameo
 */

 namespace CAMEO_THEME\Inc;

use CAMEO_THEME\Inc\Traits\Singleton;

 class CAMEO_THEME {
    use Singleton;

    protected function __construct() {
        //load class

        Assets::get_instance();
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /**
         * Actions
         */

         do_action( 'after_setup_theme', [ $this, 'setup_theme' ] );

        }
        public function setup_theme() {
            add_theme_support( 'title-tag' );

            function setup_the() {
                $defaults = [
                    'height'               => 100,
                    'width'                => 400,
                    'flex-height'          => true,
                    'flex-width'           => true,
                    'header-text'          => array( 'site-title', 'site-description' ),
                    'unlink-homepage-logo' => true, 
                ];
                add_theme_support( 'custom-logo', $defaults );
            }
           
        }

 }