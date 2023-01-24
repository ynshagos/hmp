<?php 
if(!class_exists('element_gva_progress_work')):
   class element_gva_progress_work{
      public function render_form(){
         $fields = array(
            'type' => 'element_gva_progress_work',
            'title' => ('Progress Work Box'), 
            'fields' => array(
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => t('Title'),
                  'admin'     => true
               ),
               array(
                  'id'        => 'content',
                  'type'      => 'textarea',
                  'title'     => t('Content'),
                  'desc'      => t('Some Shortcodes and HTML tags allowed'),
               ),
               array(
                  'id'        => 'step_number',
                  'type'      => 'text',
                  'title'     => t('Step Progress'),
                  'default'   => '1'
               ),
               array(
                  'id'        => 'step_text',
                  'type'      => 'text',
                  'title'     => t('Step Text'),
                  'default'   => ''
               ),
               array(
                  'id'        => 'icon',
                  'type'      => 'text',
                  'title'     => t('Icon class'),
                  'std'       => '',
                  'desc'     => t('Use class icon font <a target="_blank" href="http://fontawesome.io/icons/">Icon Awesome</a> or <a target="_blank" href="http://gaviasthemes.com/icons/">Custom icon</a>'),
                  'class'     => 'width-1-2',
               ),
               array(
                  'id'        => 'icon_width',
                  'type'      => 'select',
                  'title'     => t('Icon Width'),
                  'options'   => array(
                     'fa-3x'  => t('Fa 3x'),
                     'fa-5x'  => t('Fa 5x'),
                  ),
                  'desc'      => t('e.g: fa-2x'),
                  'class'     => 'width-1-2',
               ),
               array(
                  'id'        => 'icon_color',
                  'type'      => 'text',
                  'title'     => 'Custom Color Icon',
                  'desc'      => t('e.g: #f5f5f5'),
                  'class'     => 'width-1-2',
               ),
               
               array(
                  'id'        => 'icon_background',
                  'type'      => 'text',
                  'title'     => 'Custom Background Icon',
                  'desc'      => t('e.g: #f5f5f5'),
                  'class'     => 'width-1-2',
               ),
               
               array(
                  'id'        => 'image',
                  'type'      => 'upload',
                  'title'     => t('Image Background'),
                  'desc'      => t('Use image icon instead of icon class'),
               ),
               array(
                  'id'        => 'style',
                  'type'      => 'select',
                  'title'     => t('Layout Style'),
                  'options'   => array(
                     'style-1'         => 'Style 1',
                     'style-2'         => 'Style 2'
                  ),
                  'class'     => 'width-1-2',
               ),
               array(
                  'id'     => 'el_class',
                  'type'      => 'text',
                  'title'  => t('Extra class name'),
                  'class'     => 'width-1-2',
               ),
               array(
                  'id'        => 'link',
                  'type'      => 'text',
                  'title'     => t('Link'),
                  'desc'      => t('Link for text')
               ),
               array(
                  'id'        => 'target',
                  'type'      => 'select',
                  'options'   => array( 'off' => 'No', 'on' => 'Yes' ),
                  'title'     => t('Open in new window'),
                  'desc'      => t('Adds a target="_blank" attribute to the link.'),
               ),
               
               array(
                  'id'        => 'animate',
                  'type'      => 'select',
                  'title'     => t('Animation'),
                  'desc'      => t('Entrance animation for element'),
                  'options'   => gavias_content_builder_animate(),
                  'class'     => 'width-1-2'
               ), 
               array(
                  'id'        => 'animate_delay',
                  'type'      => 'select',
                  'title'     => t('Animation Delay'),
                  'options'   => gavias_content_builder_delay_wow(),
                  'desc'      => '0 = default',
                  'class'     => 'width-1-2'
               ), 
               
               

            ),                                       
         );
         return $fields;
      }

      public static function render_content( $attr = array(), $content = '' ){
         global $base_url;
         extract(gavias_merge_atts(array(
            'title'                       => '',
            'content'                     => '',
            'step_number'                 => '1',
            'step_text'                   => '',
            'icon'                        => '',
            'icon_width'                  => 'fa-2x',
            'icon_background'             => '',
            'icon_color'                  => '',
            'image'                       => '',
            'style'                       => '',
            'link'                        => '',
            'target'                      => '',
            'animate'                     => '',
            'animate_delay'               => '',
            'el_class'                    => ''
         ), $attr));
         
         if($image) $image = $base_url . $image; 
         // target
         if( $target =='on' ){
            $target = 'target="_blank"';
         } else {
            $target = false;
         }

         $class = array();

                  
         $style_icon = ''; // Style icon
         if($icon_background) $style_icon .= "background: {$icon_background};";
         if($icon_color) $style_icon .= "color: {$icon_color};";
         if($style_icon) $style_icon = "style=\"{$style_icon}\"";

        
         if($el_class) $class[] = $el_class;
         if($animate) $class[] = 'wow ' . $animate;
         ob_start();
         ?>
         <div class="widget gsc-progress-box <?php print $style ?> <?php if(count($class)>0) print implode(' ', $class) ?>"  <?php print gavias_content_builder_print_animate_wow('', $animate_delay) ?>>
            <div class="box-content">
               <div class="progress-inner">
                  <?php if($image){?>
                     <div class="image-icon"><img src="<?php print $image ?>" alt="<?php print strip_tags($title) ?>"/> </div>
                  <?php }  ?>

                  <?php if($icon){ ?>
                     <div class="icon-inner <?php print $icon_width ?>">
                        <span class="box-icon" <?php print $style_icon ?>><i aria-hidden="true" class="<?php print $icon ?>"></i></span> 
                     </div>
                  <?php } ?>
               
                  <?php if($step_number){ ?>
                  <div class="step-number number-<?php print $step_number; ?>"><?php print $step_number; ?></div>
                  <?php } ?>
               </div>
            </div>
            <?php if($title){ ?>
            <h3 class="title"><?php print $title ?></h3>
            <?php } ?>
            <?php if($step_text){ ?>
            <div class="step-text"><?php print $step_text; ?></div>
            <?php } ?>
            <?php if($content){ ?>
               <div class="desc"><?php print $content; ?></div>
            <?php } ?>
         </div> 

         <?php return ob_get_clean() ?>
       <?php
      }

   } 
endif;   
