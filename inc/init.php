<?php
if (!defined('ABSPATH')) {
	return;
}

class cct_Theme_Include {
	private static $initialized	= false;

	public static function init()
    {
        if (self::$initialized) {
            return;
        } else {
            self::$initialized = true;
        }

        require_once get_template_directory() . '/inc/libs/class-html-compression.php';
        require_once get_template_directory() . '/inc/helpers/autoloader.php';
        require_once get_template_directory() . '/inc/helpers/template-tags.php';
        require_once get_template_directory() . '/inc/helpers/acf-config.php';
        require_once get_template_directory() . '/inc/helpers/resize.php';
        require_once get_template_directory() . '/inc/helpers/components.php';
        require_once CTWP_DIget_template_directory() . '/inc/helpers/nav.php';
    }
	public static function _action_enqueue_scripts() {
		// Load library & class
		require_once get_template_directory() . '/inc/static.php';
	}
}

cct_Theme_Include::init();
