<?php
	/**
	 * Activate Add-ons
	 * Here you can enter your activation codes to unlock Add-ons to use in your theme.
	 * Since all activation codes are multi-site licenses, you are allowed to include your key in premium themes.
	 */
	function my_acf_settings( $options )
	{
	    // activate add-ons
	    $options["activation_codes"]["repeater"] = "";
	    $options["activation_codes"]["options_page"] = "";
	    $options["activation_codes"]["flexible_content"] = "";
	    $options["activation_codes"]["gallery"] = "";

	    // setup other options (http://www.advancedcustomfields.com/docs/filters/acf_settings/)

	    return $options;

	}
	add_filter("acf_settings", "my_acf_settings");
	
	/**
	 * Register field groups
	 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
	 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
	 * This code must run every time the functions.php file is read
	 */
	if(function_exists("register_field_group"))
	{
		register_field_group(array(
		'id' => 'acf_einstellungen',
		'title' => 'Einstellungen',
		'fields' => 
		array(
			0 => 
			array(
				'key' => 'field_521c649c18d55',
				'label' => 'Firmenname',
				'name' => 'company',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			1 => 
			array(
				'key' => 'field_521c660552b34',
				'label' => 'Inhaber',
				'name' => 'contactperson',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			2 => 
			array(
				'key' => 'field_521c65b547487',
				'label' => 'Straße',
				'name' => 'street',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			3 => 
			array(
				'key' => 'field_521c65c547488',
				'label' => 'PLZ',
				'name' => 'zip',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			4 => 
			array(
				'key' => 'field_521c65cd47489',
				'label' => 'Stadt',
				'name' => 'city',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			5 => 
			array(
				'key' => 'field_521c65d44748a',
				'label' => 'Telefonnummer',
				'name' => 'phone',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			6 => 
			array(
				'key' => 'field_523a15ea6209d',
				'label' => 'Fax',
				'name' => 'fax',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			7 => 
			array(
				'key' => 'field_521c65ff52b33',
				'label' => 'E-Mail',
				'name' => 'email',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			8 => 
			array(
				'key' => 'field_523abbf643bc8',
				'label' => 'Amtsgericht',
				'name' => 'amtsgericht',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			9 => 
			array(
				'key' => 'field_523abc2043bc9',
				'label' => 'Umsatzsteuer-Identifikationsnummer',
				'name' => 'ustid',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => 
		array(
			0 => 
			array(
				0 => 
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => 
		array(
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => 
			array(
			),
		),
		'menu_order' => 0,
	)); 
		register_field_group(array(
		'id' => 'acf_flexible-content',
		'title' => 'Flexible Content',
		'fields' => 
		array(
			0 => 
			array(
				'key' => 'field_521be1d024284',
				'label' => 'Content',
				'name' => 'content',
				'type' => 'flexible_content',
				'layouts' => 
				array(
					0 => 
					array(
						'label' => '50/50',
						'name' => '50/50',
						'display' => 'row',
						'sub_fields' => 
						array(
							0 => 
							array(
								'key' => 'field_521be33b0a87b',
								'label' => 'Left',
								'name' => 'left',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							1 => 
							array(
								'key' => 'field_521be3410a87c',
								'label' => 'Right',
								'name' => 'right',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
						),
					),
				),
				'button_label' => 'Add Row',
			),
		),
		'location' => 
		array(
			0 => 
			array(
				0 => 
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => 
		array(
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => 
			array(
			),
		),
		'menu_order' => 0,
	)); 
	}
	