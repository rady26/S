<?php
/**
 * WP-Property Overview Template
 *
 * To customize this file, copy it into your theme directory, and the plugin will
 * automatically load your version.
 *
 * You can also customize it based on property type.  For example, to create a custom
 * overview page for 'building' property type, create a file called property-overview-building.php
 * into your theme directory.
 *
 *
 * Settings passed via shortcode:
 * $properties: either array of properties or false
 * $show_children: default true
 * $thumbnail_size: slug of thumbnail to use for overview page
 * $thumbnail_sizes: array of image dimensions for the thumbnail_size type
 * $fancybox_preview: default loaded from configuration
 * $child_properties_title: default "Floor plans at location:"
 *
 *
 *
 * @version 1.4
 * @author Andy Potanin <andy.potnain@twincitiestech.com>
 * @package WP-Property
*/?>
<?php
 if ( have_properties() ) {

   $thumbnail_dimentions = WPP_F::get_image_dimensions($wpp_query['thumbnail_size']);

?>

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
 				<div class="propertyItems">
 	
    <?php foreach ( returned_properties('load_gallery=false') as $property) {  ?>
                        
                        	<div class="sectionDetail01">            
				                <div class="imgItemSmall">
                                	<?php property_overview_image(); ?>
                                </div>
                                <div class="imgThum">
                                	<h3>
										<?php
											global $q_config;
											$post_title = qtrans_use($q_config['language'], $property['post_title'], true);
										?>
                                    	<a href="<?php echo $property['permalink']; ?>">
										<?php echo $post_title; ?>
                                        </a>
                                    </h3>
                                    
									<?php if($property['location']): ?>
                                        <div><?php echo $property['location']; ?></div>
                                    <?php endif; ?>
                                    
                                    <?php if($property['property_type']): ?>
                                        <div><?php echo $property['property_type']; ?></div>
                                    <?php endif; ?>
                                    
                                    <?php if($property['price']): ?>
                                        <div><?php echo $property['price']; ?></div>
                                    <?php endif; ?>
                                    
                                    
                                </div>
                                <br class="clear" />
                            </div>
                        
                        
                
                	
    
     <?php } /** end of the propertyloop. */ ?>
			     <br class="clear" />
    		</div>
        </div>
    </div>    
    
    
    <div id="propertyMore" style="height:40px;">&nbsp;</div>

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
            <a href="">
    <img src="<?php echo get_template_directory_uri(); ?>/img/gototop.png" alt="Go to top" title="Go to top" class="linkimg" />
            </a>
        </div>
    </div>
    
    
</div>
 
<?php } else {  ?>
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
        
        <div class="notfound">
           
           <p><?php echo sprintf(__('Sorry, no properties found - try expanding your search, or ','wpp'), site_url().'/'.$wp_properties['configuration']['base_slug']); ?><a href="<?php echo get_site_url(); ?>">view all.</a></p>
           
        </div>
        
        
        <div id="propertyMore" style="height:40px;">&nbsp;</div>
    
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
                <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/img/gototop.png" alt="Go to top" title="Go to top" class="linkimg" />
                </a>
            </div>
        </div>
            
    </div>
    
<?php } ?>