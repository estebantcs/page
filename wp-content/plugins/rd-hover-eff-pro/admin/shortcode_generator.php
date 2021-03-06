<?php

return array(
// menus
'RD Hover' => array(
	// shortcodes collection in this menu
	'elements' => array(

			// shortcode with attribute
			'acb1' => array(
			'title' => __('RD Hover Shortcode Settings', 'qualia_td'),
			'code' => '[hover]',
			'attributes' => array(
					array(
						'type'  => 'textbox',
						'name'  => 'category',
						'label' => __('Category Name', 'vp_textdomain'),


					),
					
					
					// ADD EFFECTS CIRCLE & SQure //
					
					
			array(
				'type' => 'radiobutton',
				'name' => 'effects',
				'label' => __('Select Hover Type', 'vp_textdomain'),
				'items' => array(
					array(
						'value' => 'square',
						'label' => __('Square', 'vp_textdomain'),
					),
					array(
						'value' => 'circle',
						'label' => __('Circle', 'vp_textdomain'),
					),					
				),
				'default' => array(
					'square',
				),
			),	
					
					
					// Select Style from generator
					array(
					'type' => 'select',
					'name' => 'style',
					'label' => __('Select Hover Style', 'vp_textdomain'),
					'default' => array(
								'{{first}}',
								),
					'items' => array(	
						array(
							'value' => 'style1',
							'label' => 'Style 1',
						),	
						array(
							'value' => 'style2',
							'label' => 'Style 2',
						),		
						array(
							'value' => 'style3',
							'label' => 'Style 3',
						),		
						array(
							'value' => 'style4',
							'label' => 'Style 4',
						),		
						array(
							'value' => 'style5',
							'label' => 'Style 5',
						),		
						array(
							'value' => 'style6',
							'label' => 'Style 6',
						),	
						array(
							'value' => 'style7',
							'label' => 'Style 7',
						),	
						array(
							'value' => 'style8',
							'label' => 'Style 8',
						),	
						array(
							'value' => 'style9',
							'label' => 'Style 9',
						),
						array(
							'value' => 'style10',
							'label' => 'Style 10',
						),
						array(
							'value' => 'style11',
							'label' => 'Style 11',
						),
						array(
							'value' => 'style12',
							'label' => 'Style 12',
						),
						array(
							'value' => 'style13',
							'label' => 'Style 13',
						),
						array(
							'value' => 'style14',
							'label' => 'Style 14',
						),
						array(
							'value' => 'style15',
							'label' => 'Style 15',
						),
						array(
							'value' => 'style16',
							'label' => 'Style 16',
						),
						array(
							'value' => 'style17',
							'label' => 'Style 17',
						),
						array(
							'value' => 'style18',
							'label' => 'Style 18',
						),
						array(
							'value' => 'style19',
							'label' => 'Style 19',
						),
						array(
							'value' => 'style20',
							'label' => 'Style 20',
						),
						array(
							'value' => 'style21',
							'label' => 'Style 21',
						),
						array(
							'value' => 'style22',
							'label' => 'Style 22',
						),
						array(
							'value' => 'style23',
							'label' => 'Style 23',
						),
						array(
							'value' => 'style24',
							'label' => 'Style 24',
						),
						array(
							'value' => 'style25',
							'label' => 'Style 25',
						),		
	
				),	),	

				 array(
						'type' => 'slider',
						'name' => 'circle_margin_right',
						'label' => __('Circle Margin Right <p style="font-size: 10px; color: #005990; margin: 0;">work with circle</p>', 'vp_textdomain'),
						//'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'vp_textdomain'),
						'min' => '10',
						'max' => '500',
						'step' => '1',
						'default' => '32',
						),	
						
						
											
			array(
					'type' => 'select',
					'name' => 'circle_animation',
					'label' => __('Circle Animation <p style="font-size: 10px; color: #005990; margin: 0;">work with circle</p>', 'vp_textdomain'),
					'default' => array(
								'{{first}}',
								),
					'items' => array(
						array(
							'value' => 'left_to_right',
							'label' => 'Left to right',
						),
						array(
							'value' => 'right_to_left',
							'label' => 'Right to left',
						),
						array(
							'value' => 'top_to_bottom',
							'label' => 'Top to bottom',
						),
						array(
							'value' => 'bottom_to_top',
							'label' => 'Bottom to top',
						),		
	
				),	),						
			

					array(
						'type' => 'select',
						'name' => 'google_font',
						'label' => __('Text Font', 'vp_textdomain'),
						'description' => __('Select Font', 'vp_textdomain'),
						'default' => 'Roboto',
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value' => 'vp_get_gwf_family',
								),
							),
						),
					),
					
			// TITLE FONT SIZE 
				 array(
						'type' => 'slider',
						'name' => 'title_font_size',
						'label' => __('Title Font Size', 'vp_textdomain'),
						//'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'vp_textdomain'),
						'min' => '5',
						'max' => '50',
						'step' => '1',
						'default' => '18',
						),
						
			// TITLE COLOR
						
				array(
						'type'  => 'color',
						'name'  => 'title_color',
						'label' => __('Title Color', 'vp_textdomain'),
						'default' => '#ffffff',
					),
					
			// TITLE FONT STYLE
			array(
				'type' => 'radiobutton',
				'name' => 'title_font_style',
				'label' => __('Title Font Style', 'vp_textdomain'),
				'items' => array(
					array(
						'value' => 'normal',
						'label' => __('Normal', 'vp_textdomain'),
					),
					array(
						'value' => 'italic',
						'label' => __('Italic', 'vp_textdomain'),
					),
				),
				'default' => array(
					'normal',
				),
			),
							
			// Description FONT SIZE 
				 array(
						'type' => 'slider',
						'name' => 'desc_font_size',
						'label' => __('Description Font Size', 'vp_textdomain'),
						//'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'vp_textdomain'),
						'min' => '5',
						'max' => '50',
						'step' => '1',
						'default' => '13',
						),
						
			// Description COLOR
						
				array(
						'type'  => 'color',
						'name'  => 'desc_color',
						'label' => __('Description Color', 'vp_textdomain'),
						'default' => '#ffffff',
					),
					
			// Description FONT STYLE
			array(
				'type' => 'radiobutton',
				'name' => 'desc_font_style',
				'label' => __('Description Font Style', 'vp_textdomain'),
				'items' => array(
					array(
						'value' => 'normal',
						'label' => __('Normal', 'vp_textdomain'),
					),
					array(
						'value' => 'italic',
						'label' => __('Italic', 'vp_textdomain'),
					),
				),
				'default' => array(
					'normal',
				),
			),	

			
			// BUTTON FONT SIZE 
				 array(
						'type' => 'slider',
						'name' => 'button_font_size',
						'label' => __('Button Font Size', 'vp_textdomain'),
						//'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'vp_textdomain'),
						'min' => '5',
						'max' => '50',
						'step' => '1',
						'default' => '15',
						),
						
			// Button COLOR
						
				array(
						'type'  => 'color',
						'name'  => 'button_color',
						'label' => __('Button Color', 'vp_textdomain'),
						'default' => '#ffffff',
					),
					
			// READMORE FONT STYLE
			array(
				'type' => 'radiobutton',
				'name' => 'button_font_style',
				'label' => __('Button Font Style', 'vp_textdomain'),
				'items' => array(
					array(
						'value' => 'normal',
						'label' => __('Normal', 'vp_textdomain'),
					),
					array(
						'value' => 'italic',
						'label' => __('Italic', 'vp_textdomain'),
					),
				),
				'default' => array(
					'normal',
				),
			),
					
// CUSTOM END 					
					
					 array(
						'type' => 'slider',
						'name' => 'item_width',
						'label' => __('Image item Width <p style="font-size: 10px; color: #005990; margin: 0;">work with square</p>', 'vp_textdomain'),
						//'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'vp_textdomain'),
						'min' => '200',
						'max' => '1000',
						'step' => '1',
						'default' => '300',
						),
						
					 array(
						'type' => 'slider',
						'name' => 'item_height',
						'label' => __('Image item Height <p style="font-size: 10px; color: #005990; margin: 0;">work with square</p>', 'vp_textdomain'),
						//'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'vp_textdomain'),
						'min' => '185',
						'max' => '800',
						'step' => '1',
						'default' => '200',
						),	
						
					 array(
						'type' => 'slider',
						'name' => 'item_space_right',
						'label' => __('Item margin Right <p style="font-size: 10px; color: #005990; margin: 0;">work with square</p>', 'vp_textdomain'),
						//'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'vp_textdomain'),
						'min' => '1',
						'max' => '200',
						'step' => '1',
						'default' => '5',
						),

					 array(
						'type' => 'slider',
						'name' => 'full_space_bottom',
						'label' => __('Full Margin Bottom', 'vp_textdomain'),
						//'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'vp_textdomain'),
						'min' => '1',
						'max' => '500',
						'step' => '1',
						'default' => '5',
						),
						
						array(
						'type' => 'slider',
						'name' => 'hover_full_left',
						'label' => __('Full Margin Left', 'vp_textdomain'),
						//'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'vp_textdomain'),
						'min' => '1',
						'max' => '1000',
						'step' => '1',
						'default' => '1',
						),
						
						
					array(
						'type' => 'checkbox',
						'name' => 'item_border',
						'label' => __('show border', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => '1px solid',
							),
						),
					),
					
					array(
						'type'  => 'color',
						'name'  => 'border_color',
						'label' => __('Border Color', 'vp_textdomain'),
						'default' => '#ffffff',
					),
						
					array(
						'type' => 'checkbox',
						'name' => 'link_open',
						'label' => __('Open In New Tab?', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => '_blank',
							),
						),
					),
					


				
				),
			),
		// ... more elements
		
		),
	),	
	
	
// ... more menus
);

?>
?>