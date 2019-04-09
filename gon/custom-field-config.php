<?php

//add options pages
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
			'page_title' 	=> 'GON Theme Settings',
			'menu_title'	=> 'GON Theme Settings',
			'menu_slug' 	=> 'site-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));	
	acf_add_options_sub_page( array(
			'page_title' 	=> 'Contact Information',
			'menu_title' 	=> 'Contact Information',
			'menu_slug' 	=> 'contact-info',
			'capability' 	=> 'edit_posts', 
			'parent_slug' 	=> 'site-settings',
		) );
	acf_add_options_sub_page( array(
			'page_title' 	=> 'Advanced Settings',
			'menu_title' 	=> 'Advanced Settings',
			'menu_slug' 	=> 'adv-settings',
			'capability' 	=> 'edit_posts', 
			'parent_slug' 	=> 'site-settings',
		) );
}



if( function_exists('acf_add_local_field_group') ):
//design settings group
acf_add_local_field_group(array (
	'key' => 'group_57be462ddaf6e',
	'title' => 'Site Settings',
	'fields' => array (
		array (
			'key' => 'field_57be466827378',
			'label' => 'Site Logo',
			'name' => 'site-logo',
			'type' => 'image',
			'instructions' => 'Upload your company logo, .png around 250px wide.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'grey1',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		// array (
		// 	'key' => 'field_57be46e127379',
		// 	'label' => 'Tagline',
		// 	'name' => 'tagline',
		// 	'type' => 'text',
		// 	'instructions' => 'Edit your company\'s tagline / main header text.',
		// 	'required' => 0,
		// 	'conditional_logic' => 0,
		// 	'wrapper' => array (
		// 		'width' => '',
		// 		'class' => '',
		// 		'id' => '',
		// 	),
		// 	'default_value' => '',
		// 	'placeholder' => '',
		// 	'prepend' => '',
		// 	'append' => '',
		// 	'maxlength' => '',
		// 	'readonly' => 0,
		// 	'disabled' => 0,
		// ),
		array (
			'key' => 'field_57be47452737a',
			'label' => 'Social Media',
			'name' => 'repeatable-social',
			'type' => 'repeater',
			'instructions' => 'Select social network & paste link.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_57be47ac2737b',
			'min' => '',
			'max' => '',
			'layout' => 'row',
			'button_label' => 'Add New Social Link',
			'sub_fields' => array (
				array (
					'key' => 'field_57be47ac2737b',
					'label' => 'Social Select',
					'name' => 'social-select',
					'type' => 'select',
					'instructions' => 'Select social network.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'Facebook' => 'Facebook',
						'Twitter' => 'Twitter',
						'LinkedIn' => 'LinkedIn',
						'Instagram' => 'Instagram',
						'Yelp' => 'Yelp',
						'TripAdvisor' => 'TripAdvisor',
						'Google-plus' => 'Google-plus',
						'YouTube' => 'YouTube',
						'Pinterest' => 'Pinterest',
						'Houzz' => 'Houzz',
						'BetterBusinessBureau' => 'BetterBusinessBureau',
					),
					'default_value' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),
				array (
					'key' => 'field_57be486a2737c',
					'label' => 'Social Link',
					'name' => 'social-link',
					'type' => 'text',
					'instructions' => 'Paste link in this field, don\'t forget the https://',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
		array (
			'key' => 'field_57be49172737d',
			'label' => 'Header Button',
			'name' => 'button-cta',
			'type' => 'text',
			'instructions' => 'If set, shortcode will display button between social media and navigation',
			'required' => '',
			'conditional_logic' => '',
			'wrapper' => array (
				'width' => '50',
				'class' => 'grey1',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_57be46e1273791',
			'label' => 'Google Fonts',
			'name' => 'google-fonts',
			'type' => 'text',
			'instructions' => 'Add whole google fonts link here. <br/>If you\'re not sure what editing this field will do, it\'s probably better if you leave it',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => 'grey3',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_57be4668273781',
			'label' => 'Site Background Image',
			'name' => 'site-background',
			'type' => 'image',
			'instructions' => 'Upload tileable image, small is best.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => 'grey3',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_57be49172737d1',
			'label' => 'Default Header Image',
			'name' => 'default-header-image',
			'type' => 'image',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => 'grey1',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'site-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5a94495212900',
	'title' => 'Single Page Header Image',
	'fields' => array(
		array(
			'key' => 'field_5a94496e0b054',
			'label' => 'Single Page Header Image',
			'name' => 'single_page_header_image',
			'type' => 'image',
			'instructions' => 'Adding an image here will over-ride the site wide header image for this specific page or post. Minimum resolution = 200px x 1400px',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '!=',
				'value' => 'page-home.php',
			),
			array(
				'param' => 'post_type',
				'operator' => '!=',
				'value' => 'post',
			),
		),
		array(
			array(
				'param' => 'page_template',
				'operator' => '!=',
				'value' => 'page-home.php',
			),
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));
//contact information menu fields
acf_add_local_field_group(array(
	'key' => 'g5343512c570b5',
	'title' => 'Contact Information',
	'fields' => array(
		array(
			'key' => 'field_5a0b113d081b6',
			'label' => 'Primary Location',
			'name' => 'primary_location',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_5a0b114d081b7',
					'label' => 'Primary Phone Number',
					'name' => 'primary_phone',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5a0b116e081b8',
					'label' => 'Fax',
					'name' => 'fax',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5a0b11e2081b9',
					'label' => 'Street Address',
					'name' => 'address',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => 3,
					'new_lines' => '',
				),
				array(
					'key' => 'field_5a0b17e6c1075',
					'label' => 'City',
					'name' => 'city',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '33',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5a0b1213081ba',
					'label' => 'State',
					'name' => 'state',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '33',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5a0b1224081bb',
					'label' => 'ZIP Code',
					'name' => 'zip_code',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '34',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5a0b1250081bd',
					'label' => 'Google Maps iFrame',
					'name' => 'google_maps_iframe',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
				),
				array(
					'key' => 'field_5a0b126f081be',
					'label' => 'Office Photo',
					'name' => 'office_photo',
					'type' => 'image',
					'instructions' => 'minimum image size: 550 x 200px',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
		array(
			'key' => 'field_5a0b1313081bf',
			'label' => 'Other Locations',
			'name' => 'other_locations',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5a0c5e11820c5',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5a0c5e11820c5',
					'label' => 'Location Name',
					'name' => 'location_name',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5a0c5d96820c4',
					'label' => 'Location Handle',
					'name' => 'handle',
					'type' => 'text',
					'instructions' => 'Use this field to set a unique reference for this location so that you can reference it using shortcode. ( Example: [gon-location location="baton-rouge"] )',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5a0b1341081c7',
					'label' => 'Phone Number',
					'name' => 'phone_number',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5a0b1353081c8',
					'label' => 'Fax',
					'name' => 'fax',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5a0b137a081ca',
					'label' => 'Street Address',
					'name' => 'address',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => 3,
					'new_lines' => '',
				),
				array(
					'key' => 'field_5a0b1817c1076',
					'label' => 'City',
					'name' => 'city',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '33',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5a0b1390081cb',
					'label' => 'State',
					'name' => 'state',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '33',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5a0b139c081cc',
					'label' => 'ZIP Code',
					'name' => 'zip_code',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '34',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5a0b13a5081cd',
					'label' => 'Google Maps iFrame',
					'name' => 'google_maps_iframe',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
				),
				array(
					'key' => 'field_5a0b13ba081ce',
					'label' => 'Office Photo',
					'name' => 'office_photo',
					'type' => 'image',
					'instructions' => 'minimum image size: 550 x 200px',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'contact-info',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));
//contact page fields
acf_add_local_field_group(array(
	'key' => 'group_5a0b1ddfa07fe',
	'title' => 'Contact Page Text',
	'fields' => array(
		array(
			'key' => 'field_5a0b1e67a4184',
			'label' => 'Instructions',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Paste these shortcodes to include info from the <a href=\'admin.php?page=contact-info\' target=\'_blank\'>"Contact Information"</a> section:
<strong>[gon-address] [gon-phone] [gon-office-photo] [gon-google-iframe]. </strong>
Use location="handle" to get contact information from a secondary location ( example <strong>[gon-office-photo location="baton-rouge"]</strong> )
To access your contact form shortcode, visit the <a href=\'admin.php?page=wpcf7\' target=\'_blank\'>Contact Form</a> plugin.',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5a0b1df7d7a42',
			'label' => 'Left Column',
			'name' => 'left_column',
			'type' => 'wysiwyg',
			'instructions' => 'Text will display above google maps iFrame',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5a0b1e1dd7a43',
			'label' => 'Right Column',
			'name' => 'right_column',
			'type' => 'wysiwyg',
			'instructions' => 'Text will display above contact form',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-contact.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5b631c8cc0ace',
	'title' => 'Reference Links',
	'fields' => array(
		array(
			'key' => 'field_5b631cb669b28',
			'label' => 'Reference Links',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '<p>The link below will take you to a list of all available utility classes. These classes are useful on home page settings, or if your site uses the page builder plugin.</p>
<br>
<a href="https://assets.getonlinenola.com/css/utility-classes.css" target="_blank">Utility Class Reference Sheet</a>',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'adv-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));



endif;