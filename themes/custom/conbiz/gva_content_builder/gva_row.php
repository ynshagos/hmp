<?php
class element_gva_row{
	public function render_form(){
		return array(
			'title'	=> t('Row'),
			'fields'	=> array(
				array(
		        'id'        => 'row_name',
		        'type'      => 'text',
		        'title'     => ('Row Name'),
		      ),
				array(
		        'id'        => 'info',
		        'type'      => 'info',
		        'title'      => 'Setting background for row'
		      ),
		      array(
		        'id'       => 'bg_image',
		        'type'     => 'upload',
		        'title'    => ('Background Image'),
		      ),
		      array(
		        'id'          => 'bg_color',
		        'type'        => 'text',
		        'title'       => ('Background Color'),
		        'desc'        => ('Use color name (eg. "gray") or hex (eg. "#808080").'),
		        'std'         => '',
		        'class'		 => 'width-1-2'
		      ),
		      array(
		        'id'         => 'bg_position',
		        'type'       => 'select',
		        'title'      => t('Background Position'),
		        'class'       => 'width-1-4 clear-both',
		        'options'    => array(
		          'center top' => 'center top',
		          'center right' => 'center right',
		          'center bottom' => 'center bottom',
		          'center center' => 'center center',
		          'left top' => 'left top',
		          'left center' => 'left center',
		          'left bottom' => 'left bottom',
		          'right top' => 'right top',
		          'right center' => 'right center',
		          'right bottom' => 'right bottom',
		        )
		      ),
		      array(
		        'id'         => 'bg_repeat',
		        'type'       => 'select',
		        'title'      => t('Background Position'),
		        'class'       => 'width-1-4',
		        'options'    => array(
		          'no-repeat' => 'no-repeat',
		          'repeat' => 'repeat',
		          'repeat-x' => 'repeat-x',
		          'repeat-y' => 'repeat-y',
		          )
		      ),
		      array(
		        'id'         => 'bg_attachment',
		        'type'       => 'select',
		        'title'      => t('Background Attachment'),
		        'class'       => 'width-1-4',
		        'options'    => array(
		          'scroll' 		=> 'Scroll',
		          'fixed'  		=> 'Parallax',
		          'bg-fixed'  	=> 'Fixed',
		          ),
		        'std'         => 'scroll'
		      ),

		      array(
		        'id'         => 'bg_size',
		        'type'       => 'select',
		        'title'      => t('Background Size'),
		        'class'       => 'width-1-4',
		        'options'    => array(
		            'cover'      => 'cover',
		            'contain'    => 'contain',
		            'default'    => 'default',
		            'width-100'  => 'Width 100%',
		          ),
		        'std'         => 'cover'
		      ),

		      array(
		        'id'          => 'bg_video',
		        'type'        => 'text',
		        'title'       => ('Background video (url video)'),
		        'desc'        => ('Use video youtube.'),
		        'std'         => '',
		      ),

		      array(
		        'id'        => 'info',
		        'type'      => 'info',
		        'title'      => 'Setting padding for row'
		      ),
		      array(
		        'id'        => 'style_space',
		        'type'      => 'select',
		        'title'     => 'Style Space',
		        'options'   => array(
		          	'default'       => 'Default',
		          	'remove_padding_row' => 'Remove padding of row',
		          	'remove_padding_col'=> 'Remove padding of column',
		        )
		      ),

		      // Padding Row
		      array(
		        'id'        => 'padding_top',
		        'type'      => 'number',
		        'title'     => t('Padding Top'),
		        'class'     => 'width-1-4',
		        'default'   => ''
		      ),
		      array(
		        'id'          => 'padding_right',
		        'type'        => 'number',
		        'title'       => t('Padding Right'),
		        'class'     	 => 'width-1-4',
		        'default'   	 => ''
		      ),
		      array(
		        'id'          => 'padding_bottom',
		        'type'        => 'number',
		        'title'       => t('Padding Bottom'),
		        'class'       => 'width-1-4',
		        'default'     => ''
		      ),
		      array(
		        'id'          => 'padding_left',
		        'type'        => 'number',
		        'title'       => ('Padding Left'),
		        'class'       => 'width-1-4',
		        'default'     => ''
		      ),

		      // == Padding LG
		      array(
		        'id'        => 'padding_top_lg',
		        'type'      => 'number',
		        'title'     => t('Tablet | Padding Top'),
		        'class'     => 'width-1-4',
		        'default'   => ''
		      ),
		      array(
		        'id'          => 'padding_right_lg',
		        'type'        => 'number',
		        'title'       => t('Tablet | Padding Right'),
		        'class'       => 'width-1-4',
		        'default'     => ''
		      ),
		      array(
		        'id'          => 'padding_bottom_lg',
		        'type'        => 'number',
		        'title'       => t('Tablet | Padding Bottom'),
		        'class'       => 'width-1-4',
		        'default'     => ''
		      ),
		      array(
		        'id'          => 'padding_left_lg',
		        'type'        => 'number',
		        'title'       => t('Tablet | Padding Left'),
		        'class'       => 'width-1-4',
		        'default'     => ''
		      ),

		   	// == Padding MD
		      array(
		        'id'        => 'padding_top_md',
		        'type'      => 'number',
		        'title'     => t('Mobile | Padding Top'),
		        'desc'      => t('Padding Top for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'desc'        => ('Example: 30'),
		        'default'   => ''
		      ),
		      array(
		        'id'          => 'padding_right_md',
		        'type'        => 'number',
		        'title'       => t('Mobile | Padding Right'),
		        'class'       => 'width-1-4',
		        'desc'        => ('Example: 30'),
		        'default'     => ''
		      ),
		      array(
		        'id'          => 'padding_bottom_md',
		        'type'        => 'number',
		        'title'       => t('Mobile | Padding Bottom'),
		        'class'     	 => 'width-1-4',
		        'desc'        => ('Example: 30'),
		        'default'     => ''
		      ),
		      array(
		        'id'          => 'padding_left_md',
		        'type'        => 'number',
		        'title'       => ('Mobile | Padding Left'),
		        'desc'        => ('Example: 30'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),

		      // Margin Row
		      array(
		        'id'        => 'info',
		        'type'      => 'info',
		        'title'      => 'Setting margin for row'
		      ),
		      // Padding Row
		      array(
		        'id'        => 'margin_top',
		        'type'      => 'number',
		        'title'     => t('Margin Top'),
		        'class'     => 'width-1-4',
		        'default'   => ''
		      ),
		      array(
		        'id'          => 'margin_right',
		        'type'        => 'number',
		        'title'       => t('Margin Right'),
		        'class'     	 => 'width-1-4',
		        'default'   	 => ''
		      ),
		      array(
		        'id'          => 'margin_bottom',
		        'type'        => 'number',
		        'title'       => t('Margin Bottom'),
		        'class'       => 'width-1-4',
		        'default'     => ''
		      ),
		      array(
		        'id'          => 'margin_left',
		        'type'        => 'number',
		        'title'       => ('Margin Left'),
		        'class'       => 'width-1-4',
		        'default'     => ''
		      ),
		      
		      // == Margin LG
		      array(
		        'id'        => 'margin_top_lg',
		        'type'      => 'number',
		        'title'     => t('Tablet | Margin Top'),
		        'class'     => 'width-1-4',
		        'default'   => ''
		      ),
		      array(
		        'id'          => 'margin_right_lg',
		        'type'        => 'number',
		        'title'       => t('Tablet | Margin Right'),
		        'class'       => 'width-1-4',
		        'default'     => ''
		      ),
		      array(
		        'id'          => 'margin_bottom_lg',
		        'type'        => 'number',
		        'title'       => t('Tablet | Margin Bottom'),
		        'class'       => 'width-1-4',
		        'default'     => ''
		      ),
		      array(
		        'id'          => 'margin_left_lg',
		        'type'        => 'number',
		        'title'       => t('Tablet | Margin Left'),
		        'class'       => 'width-1-4',
		        'default'     => ''
		      ),

		   	// == Margin MD
		      array(
		        'id'        => 'margin_top_md',
		        'type'      => 'number',
		        'title'     => t('Mobile | Margin Top'),
		        'desc'      => t('Padding Top for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'desc'        => ('Example: 30'),
		        'default'   => ''
		      ),
		      array(
		        'id'          => 'margin_right_md',
		        'type'        => 'number',
		        'title'       => t('Mobile | Margin Right'),
		        'class'       => 'width-1-4',
		        'desc'        => ('Example: 30'),
		        'default'     => ''
		      ),
		      array(
		        'id'          => 'margin_bottom_md',
		        'type'        => 'number',
		        'title'       => t('Mobile | Margin Bottom'),
		        'class'     	 => 'width-1-4',
		        'desc'        => ('Example: 30'),
		        'default'     => ''
		      ),
		      array(
		        'id'          => 'margin_left_md',
		        'type'        => 'number',
		        'title'       => ('Mobile | Margin Left'),
		        'desc'        => ('Example: 30'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),

		      array(
		        'id'        => 'info',
		        'type'      => 'info',
		        'title'      => 'Setting layout, style for row',
		      ),
		      array(
		        'id'            => 'layout',
		        'type'          => 'select',
		        'title'         => 'Layout',
		        'options'       => array( 
		        		'container' => 'Box',
		        		'container-fw' => 'Full Width',
		        		'full-screen' => 'Full Screen',
		        		'container container-large'=> 'Box Large',
		        		'container container-biglarge'=> 'Box Big Large' 
		        	)
		      ),

		      array(
		        'id'        => 'info',
		        'type'      => 'info',
		        'title'      => 'Setting style, class, id for row'
		      ),
		      
		     array(
		        'id'    => 'icon',
		        'type'    => 'text',
		        'title'   => ('Icon for row'),
		        'desc'     => t('Use class icon font <a target="_blank" href="https://fontawesome.com/v4.7.0/icons/">Icon Awesome</a>'),
		      ),
		     
		      array(
		        'id'    => 'class',
		        'type'    => 'text',
		        'title'   => ('Custom CSS classes'),
		        'desc'    => ('Multiple classes should be separated with SPACE.<br />'),
		      ),
		      
		      array(
		        'id'    => 'row_id',
		        'type'    => 'text',
		        'title'   => ('Custom ID'),
		        'desc'    => ('Use this option to create One Page sites.<br/>For example: Your Custom ID is <strong>offer</strong> and you want to open this section, please use link: <strong>your-url/#offer-2</strong>'),
		        'class'   => 'small-text',
		      )
		   )
		);
	}

	public function render_content( $settings = array(), $content = '' ) {
		global $base_url, $base_path;
         extract(gavias_merge_atts(array(
            'bg_image'           	=> '',
            'bg_color'           	=> '',
            'bg_particles'				=> '',
            'bg_position'        	=> '',
            'bg_repeat'    			=> '',
            'bg_attachment'      	=> '',
            'bg_size'          		=> '',
            'bg_video'           	=> '',
            'style_space'         	=> '',
            'layout'						=> 'container',
            'icon'						=> '',
            'class'						=> '',
            'row_id'						=> '',
            'bg_row'						=> '',
            'class_css'					=> ''
         ), $settings));

         $array_class = array();
         $array_style = array();

         $array_class[]	= $class;
			$array_class[]   = 'gbb-row';
			$array_class[] = $bg_row;

			
			if($bg_color) $array_style[] 	= 'background-color:'. $bg_color;

			if( $bg_image){
				$array_style[] 	= 'background-image:url(\''. substr($base_path, 0, -1) . $bg_image .'\')';
				$array_style[] 	= 'background-repeat:' . $bg_repeat;
				$array_style[] 	= 'background-position:' . $bg_position;
				if($bg_size == 'width-100'){
					$array_style[]  = 'background-size: 100%';
				}
				if($bg_attachment=='fixed'){
					$array_class[] = 'gva-parallax-background ';
				}
				if($bg_attachment=='bg-fixed'){
					$array_class[] = 'gva-fixed-background ';
				}
			}
			
			$row_bg_size = 'bg-size-cover';
			if($bg_size){
				$row_bg_size = 'bg-size-' . $bg_size;
			}
			$array_class[] = $row_bg_size;

			$data_bg_video = "";
			if($bg_video){
				$array_class[] = 'youtube-bg';
				$data_bg_video ="data-property=\"{videoURL: '{$bg_video}',
			      containment: 'self', startAt: 0,  stopAt: 0, autoPlay: true, loop: true, mute: true, showControls: false, 
			      showYTLogo: false, realfullscreen: true, addRaster: false, optimizeDisplay: true, stopMovieOnBlur: true}\"";
			}
			$array_class[] = $class_css; 
			$row_class = implode(' ', $array_class);
			$row_style 	= implode('; ', $array_style);
			ob_start();
		?>

		<div class="gbb-row-wrapper">
		  	<?php if($icon){ ?><span class="icon-row <?php print $icon ?>"></span><?php } ?>
		  	<div class="<?php print $row_class ?> <?php print ($bg_particles=='on') ? ' row-background-particles-js' : ''; ?>" <?php if($row_id) print 'id="'.$row_id.'"' ?> style="<?php print $row_style ?>" <?php if($data_bg_video) print $data_bg_video; ?>>
		    	<div class="bb-inner <?php if($style_space) print $style_space; ?>">  
		      	<div class="bb-container <?php print $layout ?>">
			        	<div class="row row-wrapper">
							<?php print $content ?>
	     	 			</div>
    				</div>
  				</div>  
			  	<?php if( $bg_attachment == 'fixed' ){ 
			  		$data_parallax = 'data-bottom-top="top: -60%;" data-top-bottom="top: 0%;"';
			  		if($bg_position == 'center top'){
			  			$data_parallax = 'data-bottom-top="top: -40%;" data-top-bottom="top: 20%;"';
			  		}
			  	?>
			    <div style="background-repeat: <?php print $bg_repeat; ?>;background-position:<?php print $bg_position ?>;<?php print ($bg_size=='width-100'?'background-size: 100%;':'')?>" class="gva-parallax-inner skrollable skrollable-between <?php print $row_bg_size ?>" <?php print $data_parallax ?>></div>
			  <?php } ?>
			</div>  
		</div>
		<?php return ob_get_clean();
	}

	public function render_style( $settings = array() ) {
		extract(gavias_merge_atts(array(
         'padding_top'          	=> '',
         'padding_right'         => '',
         'padding_bottom'        => '',
         'padding_left'          => '',
         'padding_top_lg'        => '',
         'padding_right_lg'      => '',
         'padding_bottom_lg'     => '',
         'padding_left_lg'       => '',
         'padding_top_md'        => '',
         'padding_right_md'      => '',
         'padding_bottom_md'     => '',
         'padding_left_md'       => '',

         'margin_top'            => '',
         'margin_right'          => '',
         'margin_bottom'         => '',
         'margin_left'           => '',
         'margin_top_lg'        	=> '',
         'margin_right_lg'      	=> '',
         'margin_bottom_lg'     	=> '',
         'margin_left_lg'       	=> '',
         'margin_top_md'        	=> '',
         'margin_right_md'      	=> '',
         'margin_bottom_md'     	=> '',
         'margin_left_md'       	=> '',
         'class_css'					=> ''
      ), $settings));
		
		$css = '';

      // Default
      $tmp_css = array();
      strlen($padding_top) ? 			$tmp_css[] = 'padding-top:' . intval($padding_top) .'px' : false;
      strlen($padding_right) ? 		$tmp_css[] = 'padding-right:' . intval($padding_right) .'px' : false;
      strlen($padding_bottom) ?		$tmp_css[] = 'padding-bottom:' . intval($padding_bottom) .'px': false;
      strlen($padding_left) ?			$tmp_css[] = 'padding-left:' . intval($padding_left) .'px': false;

      strlen($margin_top) ?			$tmp_css[] = 'margin-top:' . intval($margin_top) .'px': false;
      strlen($margin_right) ? 		$tmp_css[] = 'margin-right:' . intval($margin_right) .'px': false;
      strlen($margin_bottom) ?		$tmp_css[] = 'margin-bottom:' . intval($margin_bottom) .'px': false;
      strlen($margin_left) ?			$tmp_css[] = 'margin-left:' . intval($margin_left) .'px': false;
      $css .= gavias_render_css("xl", ".{$class_css} > .bb-inner", $tmp_css);

       // Default LG
      $tmp_css = array();
      strlen($padding_top_lg) ? 			$tmp_css[] = 'padding-top:' . intval($padding_top_lg) .'px': false;
      strlen($padding_right_lg) ? 		$tmp_css[] = 'padding-right:' . intval($padding_right_lg) .'px': false;
      strlen($padding_bottom_lg) ? 		$tmp_css[] = 'padding-bottom:' . intval($padding_bottom_lg) .'px': false;
      strlen($padding_left_lg) ?			$tmp_css[] = 'padding-left:' . intval($padding_left_lg) .'px': false;

      strlen($margin_top_lg) ? 			$tmp_css[] = 'margin-top:' . intval($margin_top_lg) .'px': false;
      strlen($margin_right_lg) ? 		$tmp_css[] = 'margin-right:' . intval($margin_right_lg) .'px': false;
      strlen($margin_bottom_lg) ? 		$tmp_css[] = 'margin-bottom:' . intval($margin_bottom_lg) .'px': false;
      strlen($margin_left_lg) ? 			$tmp_css[] = 'margin-left:' . intval($margin_left_lg) .'px': false;
      $css .= gavias_render_css("lg", ".{$class_css} > .bb-inner", $tmp_css);

       // Default MD 
      $tmp_css = array();
      strlen($padding_top_md) ? 			$tmp_css[] = 'padding-top:' . intval($padding_top_md) .'px': false;
      strlen($padding_right_md) ? 		$tmp_css[] = 'padding-right:' . intval($padding_right_md) .'px': false;
      strlen($padding_bottom_md) ?	 	$tmp_css[] = 'padding-bottom:' . intval($padding_bottom_md) .'px': false;
      strlen($padding_left_md) ? 		$tmp_css[] = 'padding-left:' . intval($padding_left_md) .'px': false;

      strlen($margin_top_md) ? 			$tmp_css[] = 'margin-top:' . intval($margin_top_md) .'px': false;
      strlen($margin_right_md) ? 		$tmp_css[] = 'margin-right:' . intval($margin_right_md) .'px': false;
      strlen($margin_bottom_md) ? 		$tmp_css[] = 'margin-bottom:' . intval($margin_bottom_md) .'px': false;
      strlen($margin_left_md) ? 			$tmp_css[] = 'margin-left:' . intval($margin_left_md) .'px': false;
      $css .= gavias_render_css("md", ".{$class_css} > .bb-inner", $tmp_css);
		
		return $css;
	}

}