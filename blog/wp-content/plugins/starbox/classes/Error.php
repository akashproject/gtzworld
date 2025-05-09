<?php defined( 'ABSPATH' ) || die( 'Cheatin\' uh?' );


class ABH_Classes_Error extends ABH_Classes_FrontController {

	/** @var array */
	private static $errors, $switch_off;

	/**
	 * Show version error
	 */
	public function phpVersionError() {
		echo '<div class="update-nag"><span style="color:red; font-weight:bold;">' . esc_html__( 'For StarBox to work, the PHP version has to be equal or greater then 5.1', _ABH_PLUGIN_NAME_ ) . '</span></div>';
	}

	/**
	 * Show the error in WordPress
	 *
	 * @param string $error
	 * @param boolean $stop
	 *
	 * @return void;
	 */
	public static function setError( $error = '', $type = 'notice', $id = '' ) {
		self::$errors[] = array(
			'id'   => $id,
			'type' => $type,
			'text' => $error
		);
	}

	/**
	 * This hook will show the error in WP header
	 */
	function hookNotices() {
		if ( is_array( self::$errors ) ) {
			foreach ( self::$errors as $error ) {

				switch ( $error['type'] ) {
					case 'fatal':
						self::showError( ucfirst( _ABH_PLUGIN_NAME_ . " " . $error['type'] ) . ': ' . $error['text'], $error['id'] );
						die();
					case 'settings':
						/* switch off option for notifications */
						self::$switch_off = "<a href=\"javascript:void(0);\" onclick=\"jQuery.post( ajaxurl, {action: 'abh_warnings_off', abh_nonce: '" . wp_create_nonce( 'abh_none' ) . "'}, function(data) { if (data) { jQuery('#abh_ignore_warn').attr('checked', true); jQuery('.abh_message').hide(); jQuery('#toplevel_page_abh .awaiting-mod').fadeOut('slow'); } });\" >" . __( "Turn off warnings!", _ABH_PLUGIN_NAME_ ) . "</a>";
						self::showError( ucfirst( _ABH_PLUGIN_NAME_ ) . " " . __( 'Notice: ', _ABH_PLUGIN_NAME_ ) . $error['text'] . " " . self::$switch_off, $error['id'] );
						break;
					default:

						self::showError( ucfirst( _ABH_PLUGIN_NAME_ ) . " " . __( 'Note: ', _ABH_PLUGIN_NAME_ ) . $error['text'], $error['id'] );
				}
			}
		}
		self::$errors = array();
	}

	/**
	 * Show the notices to WP
	 *
	 * @return void
	 */
	public static function showError( $message, $id = '' ) {
		$type = 'abh_error';

		if ( file_exists( _ABH_THEME_DIR_ . 'Notices.php' ) ) {
			include( _ABH_THEME_DIR_ . 'Notices.php' );
		} else {
			echo $message;
		}
	}

}