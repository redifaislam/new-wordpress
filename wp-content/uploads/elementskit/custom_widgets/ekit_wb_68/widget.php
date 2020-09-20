<?php

namespace Elementor;

defined('ABSPATH') || exit;

class Ekit_Wb_68 extends Widget_Base {

	public function __construct($data = [], $args = null) {
		parent::__construct($data, $args);

		wp_register_script( 'ekit-wb-68-script-handle', 'http://localhost/new-wordpress/wp-content/uploads/elementskit/custom_widgets/ekit_wb_68/script.js', [ 'elementor-frontend' ], '1.0.0', true );
	}


	public function get_script_depends() {
		return [ 'ekit-wb-68-script-handle' ];
	}

	public function get_name() {
		return 'ekit_wb_68';
	}


	public function get_title() {
		return esc_html__( 'New Widget', 'elementskit' );
	}


	public function get_categories() {
		return ['basic'];
	}


	public function get_icon() {
		return 'eicon-cog';
	}


	protected function _register_controls() {
	}


	protected function render() {
	}


}
