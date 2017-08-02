<?php



return array(
	array(
		'type'      => 'group',
		'repeating' => true,
		'sortable'  => true,
		'name'      => 'rd-hover',
		'priority'  => 'high',
		'title'     => __('RD Hover Item', 'vp_textdomain'),
		'fields'    => array(
		
			 array(
				'type' => 'upload',
				'name' => 'imgup_1',
				'label' => __('Upload Image', 'vp_textdomain'),
			),
		
		 array(
			'type' => 'textbox',
			'name' => 'title',
			'label' => __('Enter your title', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'Title Here',
			),

			array(
			'type' => 'textarea',
			'name' => 'desc',
			'label' => __('Enter your description', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'Enter your Description',
			),

			array(
			'type' => 'textbox',
			'name' => 'link_title',
			'label' => __('Enter button title', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'READ MORE',
			),
			
			array(
			'type' => 'textbox',
			'name' => 'link',
			'label' => __('Enter button URL', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => '#',
			'validation' => 'url',
			),
			
			
			

		),
	),
);

/**
 * EOF
 */