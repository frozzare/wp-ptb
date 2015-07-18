<?php

/**
 * Unit tests covering property files.
 *
 * @package Papi
 */

class Papi_Property_Files_Test extends Papi_Property_Test_Case {

	public $slug = 'files_test';

	public function test_convert_type() {
		$this->assertEquals( 'array', $this->property->convert_type );
	}

	public function test_default_value() {
		$this->assertEquals( [], $this->property->default_value );
	}

	public function get_value() {
		return [23];
	}

	public function get_expected() {
		return [23];
	}

	public function test_property_options() {
		$this->assertEquals( 'files', $this->property->get_option( 'type' ) );
		$this->assertEquals( 'Files test', $this->property->get_option( 'title' ) );
		$this->assertEquals( 'papi_files_test', $this->property->get_option( 'slug' ) );
	}

	public function test_property_settings() {
		$this->assertTrue( $this->property->get_setting( 'multiple' ) );
	}

}
