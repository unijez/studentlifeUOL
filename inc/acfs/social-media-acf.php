<?php

	
	/**
	 * Enable ACF Social Media Site Wide Links
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	
	acf_add_local_field_group(array(
		'key' => 'group_5605d61f566b0',
		'title' => 'Social Media Links',
		'fields' => array(
			array(
				'key' => 'field_55f5daf820595',
				'label' => 'Social Media Choices',
				'name' => 'social_media_repeater',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => 'Add Social Media',
				'sub_fields' => array(
					array(
						'key' => 'field_55f5db1a20596',
						'label' => 'Social Media Type',
						'name' => 'social_media_type',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'twitter' => 'Twitter',
							'facebook' => 'Facebook',
							'linkedin' => 'LinkedIn',
							'pinterest' => 'Pinterest',
							'rss' => 'RSS Feed',
							'youtube' => 'YouTube',
							'google-plus' => 'Google Plus',
							'vimeo' => 'Vimeo',
							'instagram' => 'Instagram',
							'envelope' => 'Email',
						),
						'default_value' => array(
						),
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 1,
						'ajax' => 1,
						'return_format' => 'value',
						'placeholder' => '',
					),
					array(
						'key' => 'field_55f5db2520597',
						'label' => 'Social Media Link',
						'name' => 'social_media_link',
						'type' => 'text',
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
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'social-media-settings',
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
	
	