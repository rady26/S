<?php
 if ( have_properties() ) {
   //$thumbnail_dimentions = WPP_F::get_image_dimensions($wpp_query['thumbnail_size']);?>
 
 	
    <?php 
	$num = 1;
	foreach ( returned_properties('load_gallery=false') as $property) 
	{  
	?>
    	
        <div class="fl propertyItems propertyItems_<?php echo $num; ?>">
            <div class="propertyImg">
            	<?php property_overview_image(); ?>
            </div>
            <div class="propertyTitle">
                <h4>
                	<a href="<?php echo $property['permalink']; ?>">
						<?php echo $property['post_title']; ?>
                    </a>
                </h4>                
            </div>
            <div class="propertyAddress">
                <p>
                    <?php echo $property['location']; ?>
                </p>
            </div>
            <div class="propertyContact">
                <p>
                    Tel: <?php echo $property['tel']; ?>
                </p>
            </div>
            <div class="propertyPrice">
                <p>
                    Price (Sale): <span><?php echo $property['price']; ?></span>
                </p>
            </div>
            <div class="propertyDetail">
                <a href="<?php echo $property['permalink']; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/btn_detail.jpg" alt="Detail" title="Detail" class="linkimg" />
                </a>
            </div>
        </div>
        
    <?php
		$num++; 
		if($num==4){
			$num = 1;
		}
	}
	?>
 
<?php } ?>