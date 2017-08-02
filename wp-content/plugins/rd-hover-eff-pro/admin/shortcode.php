<?php


// Register Shortcode
function rd_hover_effects_shortcode($atts){
	extract( shortcode_atts( array(

		'category' => '',	
		'style' => '',
		'effects' => '',
		'link_open' => '',	
		'google_font' => '',
		'item_width' => '',		
		'item_height' => '',		
		'item_space_right' => '',		
		'full_space_bottom' => '',		
		'hover_full_left' => '',		
		'item_border' => '',		
		'border_color' => '',		
		'title_font_style' => '',		
		'title_font_size' => '',		
		'title_color' => '',	
		'desc_font_size' => '',	
		'desc_color' => '',	
		'desc_font_style' => '',	
		'button_font_size' => '',	
		'button_color' => '',	
		'button_font_style' => '',	
		'circle_margin_right' => '',
		'circle_animation' => '',
		
	), $atts) );
	
	
	    $q = new WP_Query(
        array('posts_per_page' => -1, 'post_type' => 'rd-hover', 'hover_cat' => $category)
        );
	
		while($q->have_posts()) : $q->the_post();
		$id = get_the_ID();	
		
	
		$rdmeta = vp_metabox('rdmeta.rd-hover', false);
		
	$i = 0;


		$output = '
	<style type="text/css">
		#style1 ul, #style2 ul, #style3 ul, #style4 ul, #style5 ul, #style6 ul, #style7 ul, #style8 ul, #style9 ul, #style10  ul, #style11 ul, #style12 ul, #style13 ul, #style14 ul, #style15  ul, #style16  ul, #style17 ul, #style18 ul, #style19 ul, #style20 ul, #style21 ul, #style22 ul, #style23 ul, #style24 ul, #style25 ul, #style26 ul, #style27 ul, #style28 ul, #style29 ul, #style30 ul, #style31 ul, #style32 ul {
			  margin-left: '.$hover_full_left.'px!important;
			  margin-bottom: '.$full_space_bottom.'px!important;
			  overflow: hidden;
			}
			</style>
		<div id="'.$style.'"><ul>';
		
		foreach ($rdmeta as $info) {	

		if ($effects=="square" && $style=="style1") {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-first {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}				
					.rakib-dev-first .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-first">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h2>
								<p style="font-style:'.$text_style.'; font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div> 
				';
		}
		if ($effects=="square" && $style=="style2") {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-second {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-second .mask {
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
		<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-second">
                    <img src="'.$info['imgup_1'].'" />
                    <div class="mask"></div>
                    <div class="rd_content">
                        <h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h2>
                        <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                        <a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
                    </div>
                </div>
				';
		}
		if ($effects=="square" && $style=="style3") {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-third {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-third .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-third">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h2>
								<p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div>  
				';
		}
		if ($effects=="square" && $style=="style4") {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-fourth {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-fourth .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-fourth">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h2>
								<p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div>  
				';
		}
		if ($effects=="square" && $style=="style5") {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-fifth {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-fifth .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-fifth">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h2>
								<p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div>  
				';
		}
		if ($effects=="square" && $style=="style6") {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-sixth {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-sixth .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>

				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-sixth">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h2>
								<p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div>  
				';
		}
		if ($effects=="square" && $style=="style7") {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-seventh {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-seventh .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-seventh">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h2>
								<p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div>  
				';
		}
		if ($effects=="square" && $style=="style8") {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-eighth {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-eighth .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-eighth">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h2>
								<p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div>  
				';
		}
		if ($effects=="square" && $style=="style9") {
			
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-ninth {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-ninth .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
		          <div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-ninth">
                    <img src="'.$info['imgup_1'].'" />
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="rd_content">
                        <h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h2>
						<p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
                    </div>
                </div>
				';
		}
		if ($effects=="square" && $style=="style10") {
			
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-tenth {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-tenth .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-tenth">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h2>
								<p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div>
				';
		}
		
		if ($effects=="square" && $style=="style11") {
			
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				#style11 figure {
				  height: '.$item_height.'px !important;
				  width: '.$item_width.'px !important;
				}
			</style>
			
			<li style=" margin-right: '.$item_space_right.'px !important;" >
		<figure class="mar-rig">
			<img src="'.$info['imgup_1'].'">
			<figcaption>
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
					<p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
				<p><a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a></p>
			</figcaption>
		</figure>
		</li>
				';
		}
		if ($effects=="square" && $style=="style12") {
			
		$output .= '
		

			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				.mar-rig.rd-item.square.effect10.top_to_bottom {
				 height: '.$item_height.'px !important;
				 width: '.$item_width.'px !important;
				}
			</style>
			<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect10 top_to_bottom">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>		
		';
		}
		
		if ($effects=="square" && $style=="style13") {
			
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				#style13 figure {
				  height: '.$item_height.'px !important;
				  width: '.$item_width.'px !important;
				}
			</style>
			
			<li style=" margin-right: '.$item_space_right.'px !important;">
		<figure class="mar-rig">
			<img src="'.$info['imgup_1'].'">
			<figcaption>
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
					<p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
				<p><a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a></p>
			</figcaption>
		</figure>
		</li>
		
		
		
		<li style=" margin-right: '.$item_space_right.'px !important;">
		';
		}
		if ($effects=="square" && $style=="style14") {
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				#style14 figure {
				  height: '.$item_height.'px !important;
				  width: '.$item_width.'px !important;
				}
			</style>
			
			<li style=" margin-right: '.$item_space_right.'px !important;">
		<figure class="mar-rig">
			<img src="'.$info['imgup_1'].'">
			<figcaption>
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
					<p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
				<p><a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a></p>
			</figcaption>
		</figure>
		</li>
		<li>
		';
		}
		if ($effects=="square" && $style=="style15") {
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			</style>
			
	<div style="height: '.$item_height.'px !important; width: '.$item_width.'px !important; margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect5 left_to_right ">
        <div class="img">
			<img src="'.$info['imgup_1'].'">
		</div>
					<div class="info">
							<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
							<p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
					<div class="effect_button">
						<a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
			</div>
		</div>
	</div>
	';
		}
		if ($effects=="square" && $style=="style16") {
		$output .= '
					<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			</style>
			
	<div style="height: '.$item_height.'px !important; width: '.$item_width.'px !important; margin-right: '.$item_space_right.'px !important;" class="rd-item square effect6 from_top_and_bottom">
        <div class="img">
			<img src="'.$info['imgup_1'].'">
		</div>
					<div class="info">
							<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
							<p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
					<div class="effect_button">
						<a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
			</div>
		</div>
	</div>
	';
		}
		
		if ($effects=="square" && $style=="style17") {
		$output .= '
					<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			</style>
			
	<div style="height: '.$item_height.'px !important; width: '.$item_width.'px !important; margin-right: '.$item_space_right.'px !important;" class="rd-item square colored effect6 from_top_and_bottom">
        <div class="img">
			<img src="'.$info['imgup_1'].'">
		</div>
					<div class="info">
							<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
							<p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
					<div class="effect_button">
						<a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
			</div>
		</div>
	</div>
			
	';
		}
		if ($effects=="square" && $style=="style18") {
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			</style>
			<div style="height: '.$item_height.'px !important; width: '.$item_width.'px !important; margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect2">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>
			
	';
		}
		
		if ($effects=="square" && $style=="style19") {
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			</style>
			<div style="height: '.$item_height.'px !important; width: '.$item_width.'px !important; margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect7">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>
			
	';
		}
		if ($effects=="square" && $style=="style20") {
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			</style>
			<div style="height: '.$item_height.'px !important; width: '.$item_width.'px !important; margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect8 scale_up">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>
			
	';
		}
		
		if ($effects=="square" && $style==style21) {
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			</style>
			<div style="height: '.$item_height.'px !important; width: '.$item_width.'px !important; margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect8 scale_down">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>
			
	';
		}
	
		if ($effects=="square" && $style==style22) {
		$output .= '

			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			</style>
			<div style="height: '.$item_height.'px !important; width: '.$item_width.'px !important; margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect9 bottom_to_top">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>
			
	';
		}
		
		if ($effects=="square" && $style==style23) {
		$output .= '

			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			</style>
			<div style="height: '.$item_height.'px !important; width: '.$item_width.'px !important; margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect9 left_to_right">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>
			
	';
	}
		if ($effects=="square" && $style==style24) {
		$output .= '
<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				#style24 figure {
				  height: '.$item_height.'px !important;
				  width: '.$item_width.'px !important;
				}
			</style>
			
			<li style=" margin-right: '.$item_space_right.'px !important;" >
		<figure class="mar-rig">
			<img src="'.$info['imgup_1'].'">
			<figcaption>
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
					<p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
				<p><a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a></p>
			</figcaption>
		</figure>
		</li>
		
		<li>	
		

	';
		}
		if ($effects=="square" && $style==style25) {
		$output .= '

			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				.mar-rig.rd-item.square.effect9.top_to_bottom {
				 height: '.$item_height.'px !important;
				 width: '.$item_width.'px !important;
				}
			</style>
			<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect9 top_to_bottom">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; font-size:'.$button_font_size.'px; color:'.$button_color.'; font-style:'.$button_font_style.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>
			
			
	';
		}
		
	// START Carcle STYLE //	
		
		if ($effects=="circle" && $style=="style1") {
		
		$output .= '
				<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
		        <div class="item-hover circle effect1"><a target="'.$link_open.'" href="'.$info['link'].'">
                      <div class="spinner"></div>
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                          <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                        </div>
               </div></a></div>
			   </li>
				';
		}
		if ($effects=="circle" && $style=="style2") {
				
				$output .= '
						<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
						  <div class="item-hover circle effect2 '.$circle_animation.'"><a target="'.$link_open.'" href="'.$info['link'].'">
							  <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
							  <div class="info">
								 <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
							  </div></a></div>
					   </li>
						';
				}
		if ($effects=="circle" && $style=="style3") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                     <div class="item-hover circle effect3 '.$circle_animation.'"><a target="'.$link_open.'" href="'.$info['link'].'">
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                        <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                      </div></a></div>
					   </li>
						';
				}
			if ($effects=="circle" && $style=="style4") {
				
				$output .= '
						<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect4 '.$circle_animation.'"><a target="'.$link_open.'" href="'.$info['link'].'">
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                         <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                      </div></a></div>
					   </li>
						';
				}
				if ($effects=="circle" && $style=="style5") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect5"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                        </div>
                      </div></a></div>
					   </li>
						';
				}
				if ($effects=="circle" && $style=="style6") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect6 scale_up"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                        </div>
                      </div></a></div>
					   </li>
						';
				}
				if ($effects=="circle" && $style=="style7") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect6 scale_down_up"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                        </div>
                      </div></a></div>
					   </li>
						';
				}
				if ($effects=="circle" && $style=="style8") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect7 '.$circle_animation.'"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                        </div>
                      </div></a></div>
					   </li>
						';
				}
				if ($effects=="circle" && $style=="style9") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect8 '.$circle_animation.'"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img-container">
                        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      </div>
                      <div class="info-container">
                        <div class="info">
                          <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                        </div>
                      </div></a></div>
					   </li>
						';
				}
				if ($effects=="circle" && $style=="style10") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect9 '.$circle_animation.'"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                        </div>
                      </div></a></div>
					   </li>
						';
				}
				if ($effects=="circle" && $style=="style11") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect10 '.$circle_animation.'"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                        </div>
                      </div></a></div>
					   </li>
						';
				}
				if ($effects=="circle" && $style=="style12") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect11 '.$circle_animation.'"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                        </div>
                      </div></a></div>
					   </li>
						';
				}
				if ($effects=="circle" && $style=="style13") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect12 '.$circle_animation.'"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                      </div></a></div>
					   </li>
						';
				}
				if ($effects=="circle" && $style=="style14") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect13 '.$circle_animation.'"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                        </div>
                      </div></a></div>
					   </li>
						';
				}
				
				if ($effects=="circle" && $style=="style15") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect14 '.$circle_animation.'"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                      </div></a></div>
					   </li>
						';
				}
				
				if ($effects=="circle" && $style=="style16") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect15 left_to_right"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                      </div></a></div>
					   </li>
						';
				}
				
				if ($effects=="circle" && $style=="style17") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect16 '.$circle_animation.'"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                      </div></a></div>
					   </li>
						';
				}
				
				if ($effects=="circle" && $style=="style18") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect17"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                      </div></a></div>
					   </li>
						';
				}
				
				if ($effects=="circle" && $style=="style19") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect18 '.$circle_animation.'"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
					   <div class="info-back">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
						  </div>
                      </div></a></div>
					   </li>
						';
				}
				
								
				if ($effects=="circle" && $style=="style20") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect19"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                      </div></a></div>
					   </li>
						';
				}
				
				
				if ($effects=="circle" && $style=="style21") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect20  bottom_to_top"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
					   <div class="info-back">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
						  </div>
                      </div></a></div>
					   </li>
						';
				}	
		
				
				if ($effects=="circle" && $style=="style22") {
				
				$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle effect20 top_to_bottom"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
					   <div class="info-back">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
						  </div>
                      </div></a></div>
					   </li>
						';
				}	
						
		if ($effects=="circle" && $style=="style23") {
		
		$output .= '
				<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
		        <div class="item-hover circle effect1 counterclockwise"><a target="'.$link_open.'" href="'.$info['link'].'">
                      <div class="spinner"></div>
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                          <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                        </div>
               </div></a></div>
			   </li>
				';
		}	
		if ($effects=="circle" && $style=="style24") {
		
		$output .= '
					<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
                  <div class="item-hover circle colored effect14 '.$circle_animation.'"><a target="'.$link_open.'" href="'.$info['link'].'"> 
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                           <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
                      </div></a></div>
					   </li>
				';
		}	
		if ($effects=="circle" && $style=="style25") {
		
		$output .= '
				<li style="margin:50px '.$circle_margin_right.'px 50px!important;" class="circle_single">
		        <div class="item-hover circle colored effect7 left_to_right"><a target="'.$link_open.'" href="'.$info['link'].'">
                      <div class="spinner"></div>
                      <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
                      <div class="info">
                          <h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; font-size:'.$title_font_size.'px; color:'.$title_color.'; font-style:'.$title_font_style.';">'.$info['title'].'</h3>
                          <p style="font-family:'.$google_font.'; font-size:'.$desc_font_size.'px; color:'.$desc_color.'; font-style:'.$desc_font_style.';">'.$info['desc'].'</p>
               </div></a></div>
			   </li>
				';
		}
		
		$i++;
	}
	
	endwhile;
	$output .='</div></ul>';
	wp_reset_query();
	return $output;
}

add_shortcode('hover', 'rd_hover_effects_shortcode');

?>