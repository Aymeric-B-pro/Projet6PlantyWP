<?php


namespace Jet_Form_Builder\Blocks\Conditional_Block\Operators;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

class Operator_Not_Contain extends Base_Operator {

	const ID = 'not_contain';

	public function get_id(): string {
		return self::ID;
	}

	public function get_title(): string {
		return __( 'Not contain text', 'jet-form-builder' );
	}

	public function is_supported(): bool {
		return false;
	}
}
