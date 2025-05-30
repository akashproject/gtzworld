<?php defined( 'ABSPATH' ) || die( 'Cheatin\' uh?' );

class ABH_Controllers_Menu extends ABH_Classes_FrontController {

	/** @var array snippet */
	public $options = array();
	private $_keys = array();

	//
	function init() {

	}

	function upgradeRedirect() {
		// Bail if no activation redirect
		if ( ! get_transient( 'abh_upgrade' ) ) {
			return;
		}

		// Delete the redirect transient
		delete_transient( 'abh_upgrade' );
		ABH_Classes_Tools::emptyCache();

		wp_safe_redirect( admin_url( 'admin.php?page=abh_settings' ) );
		exit();
	}

	/*
	 * Creates the Setting menu in WordPress
	 */

	public function hookMenu() {

		$this->upgradeRedirect();

		/* add the plugin menu in admin */
		if ( current_user_can( 'administrator' ) ) {
			$this->model->addSubmenu( array(
				'options-general.php',
				esc_attr__( 'StarBox Settings', _ABH_PLUGIN_NAME_ ),
				esc_attr__( 'StarBox', _ABH_PLUGIN_NAME_ ),
				'edit_posts',
				'abh_settings',
				array( $this, 'showMenu' )
			) );
		}
		add_action( 'edit_user_profile', array(
			ABH_Classes_ObjController::getBlock( 'ABH_Core_UserSettings' ),
			'init'
		) );
		add_action( 'show_user_profile', array(
			ABH_Classes_ObjController::getBlock( 'ABH_Core_UserSettings' ),
			'init'
		) );

		add_action( 'personal_options_update', array(
			ABH_Classes_ObjController::getBlock( 'ABH_Core_UserSettings' ),
			'action'
		) );
		add_action( 'edit_user_profile_update', array(
			ABH_Classes_ObjController::getBlock( 'ABH_Core_UserSettings' ),
			'action'
		) );
	}

	public function showMenu() {
		/* Force call of error display */
		ABH_Classes_ObjController::getController( 'ABH_Classes_Error' )->hookNotices();

		parent::init();
	}

	/**
	 * Called when Post action is triggered
	 *
	 * @return void
	 */
	public function action() {

		parent::action();
		switch ( ABH_Classes_Tools::getValue( 'action' ) ) {

			case 'abh_settings_update':
				if ( ! current_user_can( 'edit_users' ) ) {
					return;
				}

				$this->saveValues( $_POST );

				ABH_Classes_Tools::emptyCache();
				break;
			case 'abh_settings_subscribe':
				if ( ! current_user_can( 'edit_users' ) ) {
					return;
				}

				ABH_Classes_Tools::saveOptions( 'abh_subscribe', 1 );
				break;
			case 'abh_powered_by':
				if ( ! current_user_can( 'edit_users' ) ) {
					return;
				}

				ABH_Classes_Tools::saveOptions( 'abh_powered_by', ABH_Classes_Tools::getValue( 'abh_powered_by' ) );
				break;
		}
	}

	private function saveValues( $params ) {
		$this->_keys = array(
			'abh_inposts'       => 'integer',
			'abh_inpages'       => 'integer',
			'abh_ineachpost'    => 'integer',
			'abh_showopengraph' => 'integer',
			'abh_shortcode'     => 'integer',
			'abh_strictposts'   => 'integer',
			'abh_position'      => 'string',
			'abh_theme'         => 'string',
			'abh_titlefontsize' => 'string',
			'abh_descfontsize'  => 'string',
			'abh_achposttheme'  => 'string',
		);

		if ( ! empty( $params ) ) {
			foreach ( $params as $key => $value ) {
				if ( in_array( $key, array_keys( $this->_keys ) ) ) {
					if ( $this->_keys[ $key ] == 'integer' ) {
						ABH_Classes_Tools::saveOptions( $key, (int) $value );
					}
					if ( $this->_keys[ $key ] == 'string' ) {
						$value =  preg_replace( "/[^1-9a-zA-Z-]/", "", $value );
						ABH_Classes_Tools::saveOptions( $key, sanitize_text_field( $value ) );
					}
				}

			}

			if ( ! isset( $params['abh_strictposts'] ) ) {
				ABH_Classes_Tools::saveOptions( 'abh_strictposts', 0 );
			}
		}
	}

}