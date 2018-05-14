<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5af6f62a6271e',
	'title' => 'Content',
	'fields' => array(
		array(
			'key' => 'field_5af6f67074a5f',
			'label' => 'Content',
			'name' => 'content',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'5af6f6772373e' => array(
					'key' => '5af6f6772373e',
					'name' => 'paragraph',
					'label' => 'Paragraph',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5af6f6b074a60',
							'label' => 'Text',
							'name' => 'text',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'visual',
							'toolbar' => 'basic',
							'media_upload' => 0,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'5af6fc247aa83' => array(
					'key' => '5af6fc247aa83',
					'name' => 'single_image',
					'label' => 'Single Image',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5af6fc497aa84',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
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
							'max_size' => '0.75',
							'mime_types' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => 'Add Row',
			'min' => '',
			'max' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'default',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => 1,
	'description' => '',
));

endif;