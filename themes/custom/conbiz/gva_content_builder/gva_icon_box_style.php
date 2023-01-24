<?php 
if(!class_exists('element_gva_icon_box_style')):
   class element_gva_icon_box_style{
      public function render_form(){
         $fields = array(
            'type' => 'gsc_icon_box_style',
            'title' => ('Icon Box Style'), 
            'fields' => array(
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => t('Title'),
                  'admin'     => true,
                  'default'   => 'Mobile Application'
               ),
               array(
                  'id'        => 'content',
                  'type'      => 'textarea',
                  'title'     => t('Content'),
                  'desc'      => t('Some Shortcodes and HTML tags allowed'),
               ),
               array(
                  'id'            => 'hidden_content',
                  'type'          => 'select',
                  'options'       => array(
                     ''                      => t('Always Display'),
                     'hidden-xs hidden-sm'   => t('Hidden Small & Extra Small Screen (hidden-sm & hidden-xs)'), 
                     'hidden-sm'             => t('Hidden Small Screen (hidden-sm)'), 
                     'hidden-xs'             => t('hidden Extra Small Screen (hidden-xs)'), 
                  ),
                  'title'  => t('Hidden Content in Small Screen'),
               ),
               array(
                  'id'        => 'icon',
                  'type'      => 'text',
                  'title'     => t('Icon class'),
                  'default'   => 'ion-social-html5-outline',
                  'desc'     => t('Use class icon font <a target="_blank" href="http://fontawesome.io/icons/">Icon Awesome</a> or <a target="_blank" href="http://gaviasthemes.com/icons/icons-2/">Custom icon</a>'),
               ),
               array(
                  'id'        => 'image',
                  'type'      => 'upload',
                  'title'     => t('Image Icon'),
                  'desc'      => t('Use image icon instead of icon class'),
               ),
               array(
                  'id'        => 'link',
                  'type'      => 'text',
                  'title'     => t('Link'),
                  'desc'      => t('Link for text')
               ),
               array(
                  'id'        => 'skin_text',
                  'type'      => 'select',
                  'title'     => 'Skin Text for box',
                  'options'   => array(
                     'text-dark'  => t('Text Dark'), 
                     'text-light' => t('Text Light')
                  ) 
               ),
               array(
                  'id'        => 'target',
                  'type'      => 'select',
                  'options'   => array( 'off' => 'Off', 'on' => 'On' ),
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
                  'options'   => gavias_content_builder_delay_aos(),
                  'desc'      => '0 = default',
                  'class'     => 'width-1-2'
               ), 
               
               array(
                  'id'     => 'el_class',
                  'type'      => 'text',
                  'title'  => t('Extra class name'),
                  'desc'      => t('Style particular content element differently - add a class name and refer to it in custom CSS.'),
               ),

            ),                                       
         );
         return $fields;
      }

      public static function render_content( $attr = array(), $content = '' ){
         global $base_url;
         extract(gavias_merge_atts(array(
            'title'              => '',
            'content'            => '',
            'hidden_content'     => '',
            'icon'               => '',
            'image'              => '',
            'link'               => '',
            'skin_text'          => '',
            'target'             => 'on',
            'animate'            => '',
            'animate_delay'      => '',
            'min_height'         => '',
            'el_class'           => ''
         ), $attr));
         
         if($image) $image = $base_url . $image; 

         // target
         if( $target =='on' ){
            $target = 'target="_blank"';
         } else {
            $target = false;
         }

         $class = array();
         $class[] = $skin_text;
         if($el_class) $class[] = $el_class;
         
         $css = array(); 
         if($min_height) $css[] = "min-height:{$min_height};";
         
         if($animate) $class[] = 'wow ' . $animate;

         ob_start();
         ?>
         
       
            <div class="widget gsc-icon-box-new <?php if(count($class)>0) print implode(' ', $class) ?>" <?php if(count($css) > 0) print 'style="'.implode(';', $css).'"' ?> <?php print gavias_content_builder_print_animate_wow('', $animate_delay) ?>>
               <?php if($icon || $image){ ?>
                  <div class="icon-inner">
                     <?php if($link){ ?><a <?php print $target; ?> href="<?php print $link ?>"> <?php } ?>
                        <?php if($icon){ ?><span class="icon <?php print $icon ?>"></span> <?php } ?>
                        <?php if($image){ ?><span class="icon"><img src="<?php print $image ?>" alt="<?php print strip_tags($title) ?>"/> </span> <?php } ?>
                     <?php if($link){ ?> </a> <?php } ?>
                  </div>
               <?php } ?>
               <div class="content-inner">
                  <h3 class="title"><?php print $title; ?></h3>
                  <?php if($content){ ?><div class="desc <?php print $hidden_content ?>"><?php print $content; ?></div><?php } ?>   
               </div>
            </div> 

         <?php return ob_get_clean() ?>
       <?php
      }

   } 
endif;   
