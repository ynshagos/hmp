<?php 

if(!class_exists('element_gva_box_hover')):
   class element_gva_box_hover{
      
      public function render_form(){
         $fields = array(
            'type'            => 'gsc_box_hover',
            'title'           => t('Box Hover'),
            'fields' => array(
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => 'Title for box',
                  'admin'     => true
               ),
               array(
                  'id'        => 'content',
                  'type'      => 'textarea',
                  'title'     => t('Content for Frontend'),
               ),
               array(
                  'id'        => 'content_backend',
                  'type'      => 'textarea',
                  'title'     => t('Content for Backend'),
               ),
               array(
                  'id'        => 'image',
                  'type'      => 'upload',
                  'title'     => t('Background Image'),
                  'std'       => '',
               ),
               array(
                  'id'        => 'link',
                  'type'      => 'text',
                  'title'     => t('Link'),
               ),
               array(
                  'id'        => 'target',
                  'type'      => 'select',
                  'title'     => t('Open in new window'),
                  'desc'      => t('Adds a target="_blank" attribute to the link'),
                  'options'   => array( 'off' => 'No', 'on' => 'Yes' ),
               ),
               array(
                  'id'        => 'el_class',
                  'type'      => 'text',
                  'title'     => t('Extra class name'),
                  'desc'      => t('Style particular content element differently - add a class name and refer to it in custom CSS.'),
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
            )                                    
         );
         return $fields;
      }

      public static function render_content( $attr = array(), $content = '' ){
         extract(gavias_merge_atts(array(
            'icon'               => '',
            'title'              => '',
            'content'            => '',
            'content_backend'    => '',
            'link'               => '',
            'image'              => '',
            'target'             => '',
            'el_class'           => '',
            'animate'            => '',
            'animate_delay'      => ''
         ), $attr));
         if($image) $image = substr(base_path(), 0, -1) . $image; 
         
         // target
         if( $target ){
            $target = 'target="_blank"';
         } else {
            $target = false;
         }
         
         if($animate) $el_class .= ' wow ' . $animate; 

         ob_start();
         ?>
         <div class="widget gsc-box-hover clearfix <?php print $el_class; ?>" <?php print gavias_content_builder_print_animate_wow('', $animate_delay) ?>>
            <div class="box-content">
               <div class="frontend">
                  <?php if($image){ ?><div class="image"><img src="<?php print $image ?>" alt="<?php print $title ?>"/></div><?php } ?>
                  <div class="frontend-content">
                     <div class="box-inner">
                        <div class="box-title">
                           <?php print $title ?>       
                        </div>
                        <?php if($content){ ?>
                           <div class="be-desc"><?php print $content ?></div>
                        <?php } ?>
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                     </div>
                     <div class="backend">
                        <div class="box-title">
                           <?php print $title ?>
                        </div>
                        <div class="be-desc"><?php print $content_backend ?></div>
                        <?php if($link){ ?><a class="btn-white" href="<?php print $link ?>" <?php print $target ?>><i class="fa fa-angle-double-right" aria-hidden="true"></i></a><?php } ?>
                     </div>
                  </div>   
               </div>
               <?php if($link){ ?>
                  <a class="link-overlay" href="<?php print $link ?>" <?php print $target ?>></a>
               <?php } ?>
            </div>
         </div>  
         <?php return ob_get_clean() ?>
         <?php
      }
   }
endif;   



