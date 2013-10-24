<?php get_header(); ?>
<?php the_post(); ?>

    <script type="text/javascript">
    var map;
    var marker;
    var infowindow;

    jQuery(document).ready(function() {

      if(typeof jQuery.fn.fancybox == 'function') {
        jQuery("a.fancybox_image, .gallery-item a").fancybox({
          'transitionIn'  :  'elastic',
          'transitionOut'  :  'elastic',
          'speedIn'    :  600,
          'speedOut'    :  200,
          'overlayShow'  :  false
        });
      }

      if(typeof google == 'object') {
        initialize_this_map();
      } else {
        jQuery("#property_map").hide();
      }

    });


  function initialize_this_map() {
    <?php if($coords = WPP_F::get_coordinates()): ?>
    var myLatlng = new google.maps.LatLng(<?php echo $coords['latitude']; ?>,<?php echo $coords['longitude']; ?>);
    var myOptions = {
      zoom: <?php echo (!empty($wp_properties['configuration']['gm_zoom_level']) ? $wp_properties['configuration']['gm_zoom_level'] : 13); ?>,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    map = new google.maps.Map(document.getElementById("property_map"), myOptions);

    infowindow = new google.maps.InfoWindow({
      content: '<?php echo WPP_F::google_maps_infobox($post); ?>',
      maxWidth: 500
    });

     marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: '<?php echo addslashes($post->post_title); ?>',
      icon: '<?php echo apply_filters('wpp_supermap_marker', '', $post->ID); ?>'
    });

    google.maps.event.addListener(infowindow, 'domready', function() {
    document.getElementById('infowindow').parentNode.style.overflow='hidden';
    document.getElementById('infowindow').parentNode.parentNode.style.overflow='hidden';
   });

   setTimeout("infowindow.open(map,marker);",1000);

    <?php endif; ?>
  }

  </script>


	<div id="sectionContent">
    	
        <div id="sectionPropertySearch">
            <div id="subPropertySearch">
                <h3>
<img src="<?php echo get_template_directory_uri(); ?>/img/propery_search.png" alt="Search Property" title="Search Property" />
                </h3>
                <div id="searchForm">
                    <?php
                        get_sidebar();
                    ?>
                </div>
            </div>
        </div>
  

	<div id="sectionPropertyDetailWrapp">
            	<div id="sectionPropertyDetail">
    
  <div id="container" class="<?php wpp_css('property::container', array((!empty($post->property_type) ? $post->property_type . "_container" : ""))); ?>">
    <div id="content" class="<?php wpp_css('property::content', "property_content"); ?>" role="main">
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


      <div class="<?php wpp_css('property::title', "building_title_wrapper"); ?>">
        <h1 class="property-title entry-title"><?php //the_title(); ?></h1>
        <h3><img src="<?php echo get_template_directory_uri(); ?>/img/property_detail/property_detail.png" alt="Propery Detail" title="Propery Detail" /></h3>
        <h4 class="entry-subtitle"><?php //the_tagline(); ?></h4>
      </div>

		
        <div class="propertyItems">
        	<h3>Description</h3>
        	<div><?php echo strip_images(@the_content()); ?></div>
        
        	<div class="sectionDetail">            
            
                <div class="imgItemSmall">
                    <ul>
                    	<?php echo getImage(); ?>
                    </ul>
                </div>
            	<div class="imgThum">
                	<?php the_post_thumbnail('property_detail'); ?>
                        
            <table class="tblDetail <?php wpp_css('property::entry_content', "entry-content"); ?>" cellpadding="0" cellspacing="0">            	

				<?php if ( empty($wp_properties['property_groups']) || $wp_properties['configuration']['property_overview']['sort_stats_by_groups'] != 'true' ) : ?>
                	<div id="property_stats" class="<?php wpp_css('property::property_stats', "property_stats overview_stats list"); ?>">
                		<?php @draw_stats("display=list&make_link=true"); ?>
                	</div>
                <?php else: ?>
                	<?php @draw_stats("display=list&make_link=true"); ?>
                <?php endif; ?>

				<?php if(!empty($wp_properties['taxonomies'])) 
						foreach($wp_properties['taxonomies'] as $tax_slug => $tax_data): ?>
							<?php if(get_features("type={$tax_slug}&format=count")):  ?>
                                <div class="<?php echo $tax_slug; ?>_list">
                                	<h2><?php echo $tax_data['label']; ?></h2>
                                    <div class="clearfix">
                                    	<?php get_features("type={$tax_slug}&format=list&links=true"); ?>
                                    </div>
                                </div>
                        	<?php endif; ?>
                        <?php endforeach; ?>

				<?php if(is_array($wp_properties['property_meta'])): ?>
                	<?php foreach($wp_properties['property_meta'] as $meta_slug => $meta_title):
                		if(empty($post->$meta_slug) || $meta_slug == 'tagline')
                			continue;
                		?>
                		<tr>
                        	<td class="td1 last">
                            	<?php echo $meta_title; ?>
                            </td>
                            <td class="last">
                            	<a href="<?php echo "http://".do_shortcode(html_entity_decode($post->$meta_slug)); ?>">
									<?php echo do_shortcode(html_entity_decode($post->$meta_slug)); ?>
                                </a>
                            </td>
                        </tr>
                	<?php endforeach; ?>
                <?php endif; ?>


				<?php if(WPP_F::get_coordinates()): ?>
                    <div id="property_map" class="<?php wpp_css('property::property_map'); ?>" style="width:100%; height:450px">
                    </div>
                <?php endif; ?>
                
                <?php if($post->post_parent): ?>
                    <a href="<?php echo $post->parent_link; ?>" class="<?php wpp_css('btn', "btn btn-return"); ?>">
                        <?php _e('Return to building page.','wpp') ?>
                    </a>
                <?php endif; ?>

			</table><!-- .entry-content -->
            <!--imgThum --></div>
            <br class="clear" />
            
            <!--end sectionDetail --></div>    
            
            
	</div>
      
      
    </div><!-- #post-## -->

    </div><!-- #content -->
  </div><!-- #container -->
  
      		</div>
      </div>

	
    <div id="propertyMore">
            <div id="subPropertyMore">
                <a href="<?php echo get_site_url(); ?>/?page_id=2">MORE</a>
            </div>
        </div>
		
        <div id="sectionLink">
            <div id="linkSocial">
                <ul>
                    <li><a href="https://facebook.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png" alt="Face Book" title="Face Book" class="linkimg" /></a></li>
                    <li><a href="https://plus.google.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/gp.png" alt="GPlus" title="GPlus" class="linkimg" /></a></li>
                    <li>
                        <a href="https://twitter.com/login">
        <img src="<?php echo get_template_directory_uri(); ?>/img/twis.png" alt="Twister" title="Twister" class="linkimg" />
                        </a>
                    </li>
                    <li><a href="http://youtube.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/next.png" alt="Youtube" title="Youtube" class="linkimg" /></a></li>
                </ul>                 
            </div>
            <div id="gototop" class="link_top">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/gototop.png" alt="Go to top" title="Go to top" class="linkimg" /></a>
            </div>
        </div>


</div>

 <?php get_footer(); ?>