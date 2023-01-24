<?php 
if(!class_exists('element_gva_progress_work_list')):
   class element_gva_progress_work_list{
      public function render_form(){
         $fields = array(
            'type'      => 'gva_progress_work_list',
            'title'  => t('Progress Work List'), 
            'fields' => array(
               array(
                  'id'     => 'title',
                  'type'   => 'text',
                  'title'  => t('Title'),
                  'admin'  => true
               ),
               array(
                  'id'     => 'el_class',
                  'type'      => 'text',
                  'title'  => t('Extra class name'),
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
         for($i=1; $i<=8; $i++){
            $fields['fields'][] = array(
               'id'     => "info_${i}",
               'type'   => 'info',
               'desc'   => "Information for item {$i}"
            );
            $fields['fields'][] = array(
               'id'        => "title_{$i}",
               'type'      => 'text',
               'title'     => t("Title {$i}")
            );
            $fields['fields'][] = array(
               'id'        => "year_{$i}",
               'type'      => 'text',
               'title'     => t("Year {$i}")
            );
            $fields['fields'][] = array(
               'id'           => "content_{$i}",
               'type'         => 'textarea',
               'title'        => t("Content {$i}")
            );
            $fields['fields'][] = array(
               'id'        => "image_{$i}",
               'type'      => 'upload',
               'title'     => t("Image {$i}")
            );
            
         }
      return $fields;
      }

      public static function render_content( $attr = array(), $content = '' ){
         global $base_url;
         $default = array(
            'title'           => '',
            'el_class'        => '',
            'animate'         => '',
            'animate_delay'   => ''
         );        
         for($i=1; $i<=6; $i++){
            $default["title_{$i}"] = '';
            $default["year_{$i}"] = '';
            $default["content_{$i}"] = '';
            $default["image_{$i}"] = '';
         }
         extract(gavias_merge_atts($default, $attr)); 

         if($animate) $class[] = 'wow ' . $animate; 

         $_id = 'workprocess-' . gavias_content_builder_makeid();
         $classes = $el_class;
         ob_start();
         ?>

         <div class="gsc-workprocess-list <?php print $classes ?>" id="<?php print $_id; ?>" <?php print gavias_content_builder_print_animate_wow('', $animate_delay) ?>>
            <ul class="service-timeline post-area">
               <?php for($i=1; $i<=6; $i++){ ?>
               <?php 
                  $title = "title_{$i}";
                  $year = "year_{$i}";
                  $image = "image_{$i}";
                  $content = "content_{$i}";
               ?>
               <?php if(!empty($$title)){ ?>
                  <li class="entry-timeline clearfix">
                     <div class="hentry skrollable skrollable-between" data-bottom-top="opacity: 0;" data-center-bottom="opacity: 1;" data-top-bottom="opacity: 0;">
                        <?php if($$year){ ?><div class="year"><span><?php print $$year ?></span></div><?php } ?>
                        <div class="icon"><i class="fas fa-circle"></i></div>
                        <div class="hentry-box clearfix">
                           <div class="content-inner">
                              <?php if($$title){ ?><h3 class="title"><?php print $$title ?></h3><?php } ?><?php if($$content){ ?><div class="desc"><?php print $$content ?></div><?php } ?>
                           </div> 
                           <?php if($$image){ ?><div class="image"><img src="<?php echo ($base_url . $$image) ?>" alt="<?php print strip_tags($$title) ?>"/></div><?php } ?> 
                       </div>
                    </div> 
                  </li>
               <?php } ?>   
               <?php } ?>   
            </ul>
         </div>
         <?php return ob_get_clean() ?>
      <?php    
      }
      
   }

endif;