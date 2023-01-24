<?php 

if(!class_exists('element_gva_image_content')):
   class element_gva_image_content{
      public function render_form(){
         return array(
           'type'          => 'gsc_image_content',
            'title'        => t('Image content'),
            'fields' => array(
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => t('Title'),
                  'admin'     => true
               ),
               array(
                  'id'        => 'sub_title',
                  'type'      => 'text',
                  'title'     => t('Sub Title'),
                  'admin'     => true
               ),
               array(
                  'id'        => 'background',
                  'type'      => 'upload',
                  'title'     => t('Images')
               ),
               array(
                  'id'        => 'content',
                  'type'      => 'textarea',
                  'title'     => t('Content'),
                  'desc'      => t('Some HTML tags allowed'),
               ),
               array(
                  'id'        => 'icon',
                  'type'      => 'text',
                  'title'     => t('Icon class'),
                  'default'   => 'ion-social-html5-outline',
                  'desc'     => t('Use class icon font <a target="_blank" href="http://fontawesome.io/icons/">Icon Awesome</a> or <a target="_blank" href="http://gaviasthemes.com/icons/icons-2/">Custom icon</a>'),
               ),
               array(
                  'id'        => 'link',
                  'type'      => 'text',
                  'title'     => t('Link'),
               ),

               array(
                  'id'        => 'text_link',
                  'type'      => 'text',
                  'title'     => t('Text Link'),
               ),

               array(
                  'id'        => 'target',
                  'type'      => 'select',
                  'title'     => t('Open in new window'),
                  'desc'      => t('Adds a target="_blank" attribute to the link'),
                  'options'   => array( 'off' => 'No', 'on' => 'Yes' ),
                  'std'       => 'on'
               ),

               array(
                  'id'        => 'skin',
                  'type'      => 'select',
                  'title'     => t('Skin'),
                  'options'   => array( 
                     'skin-v1' => t('Skin 1'), 
                     'skin-v2' => t('Skin 2'), 
                     'skin-v3' => t('Skin 3'), 
                  ),
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
                  'options'   => gavias_content_builder_delay_aos(),
                  'desc'      => '0 = default',
                  'class'     => 'width-1-2'
               ), 
         
            ),                                     
         );
      }

      public static function render_content( $attr = array(), $content = '' ){
         global $base_url;
         extract(gavias_merge_atts(array(
            'title'              => '',
            'sub_title'          => '',
            'content'            => '',
            'background'         => '',
            'icon'               => '',
            'link'               => '',
            'text_link'          => 'Read more',
            'target'             => '',
            'skin'               => 'skin-v1',
            'el_class'           => '',
            'animate'            => '',
            'animate_delay'      => ''
         ), $attr));

         // target
         if( $target =='on' ){
            $target = 'target="_blank"';
         } else {
            $target = false;
         }
         
         if($background) $background = $base_url . $background; 

         if($skin) $el_class .= ' ' . $skin;
         if($animate) $el_class .= ' wow ' . $animate;
         $title_html = $link ? "<a {$target} href=\"{$link}\">{$title}</a>" : $title;
         ob_start();
         ?>

         <?php if($skin == 'skin-v1'){ ?>
             <div class="gsc-image-content <?php print $el_class; ?>" <?php print gavias_content_builder_print_animate_wow('', $animate_delay) ?>>
               <div class="image"><?php if($link){ ?><a <?php print $target ?> href="<?php print $link ?>"><?php } ?><img src="<?php print $background ?>" alt="<?php print strip_tags($title) ?>" /><?php if($link){ ?></a><?php } ?></div>
               <div class="box-content">
                  
                  <?php if($title_html){ ?>
                     <h2 class="title"><?php print $title_html ?></h2>
                  <?php } ?>
                  <?php if($content){ ?>
                  <div class="desc"><?php print $content; ?></div>
                  <?php } ?>
                  <?php if($sub_title){ ?>
                     <h5 class="sub-title"><span><?php print $sub_title ?></span></h5>
                  <?php } ?>
                  <?php if($link){ ?>
                     <div class="read-more"><a class="btn-inline" <?php print $target ?> href="<?php print $link ?>"><?php print $text_link ?></a></div>
                  <?php } ?>
               </div>  
            </div>
            
         <?php } ?>   

         <?php if($skin == 'skin-v2'){ ?>
           <div class="gsc-image-content <?php print $el_class; ?>" <?php print gavias_content_builder_print_animate_wow('', $animate_delay) ?>>
               <div class="image"><?php if($link){ ?><a <?php print $target ?> href="<?php print $link ?>"><?php } ?><img src="<?php print $background ?>" alt="<?php print strip_tags($title) ?>" /><?php if($link){ ?></a><?php } ?></div>
               <div class="box-content">
                  <?php if($icon){ ?>
                     <div class="icon"><i class="<?php print $icon ?>"></i></div>
                  <?php } ?>
                     
                  <?php if($title_html){ ?>
                     <h2 class="title"><?php print $title_html ?></h2>
                  <?php } ?>
                  <?php if($sub_title){ ?>
                     <h5 class="sub-title"><?php print $sub_title ?></h5>
                  <?php } ?>

                  <?php if($content){ ?>
                  <div class="desc"><?php print $content; ?></div>
                  <?php } ?>

                  <?php if($link){ ?>
                     <div class="read-more"><a class="btn-inline" <?php print $target ?> href="<?php print $link ?>"><?php print $text_link ?></a></div>
                  <?php } ?>

               </div>  
            </div>
         <?php } ?> 

         <?php if($skin == 'skin-v3'){ ?>
            <div class="gsc-image-content <?php print $el_class; ?>" <?php print gavias_content_builder_print_animate_wow('', $animate_delay) ?>>
               <div class="image">
                  <img src="<?php print $background ?>" alt="<?php print strip_tags($title) ?>" />
                  <div class="content-inner"><div class="inner">
                  <?php if($title_html){ ?>
                     <h2 class="title"><?php print $title_html ?></h2>
                  <?php } ?>
                  <?php if($link){ ?>
                     <div class="read-more"><a class="btn-outline" <?php print $target ?> href="<?php print $link ?>"><span><?php print $text_link ?></span></a></div>
                  <?php } ?>
                  </div>
               </div></div>
               <div class="box-content">
                  <?php if($sub_title){ ?>
                     <h5 class="title"><?php print $sub_title ?></h5>
                  <?php } ?>

                  <?php if($content){ ?>
                  <div class="desc"><?php print $content; ?></div>
                  <?php } ?>
               </div>  
            </div>
         <?php } ?> 

         <?php return ob_get_clean() ?>
        <?php            
      } 

   }
endif;   
