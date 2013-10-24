<?php
	/*
		Plugin Name: Real Estate
		Plugin URI: Free Style International (Cambodia)
		Description: Property and Real Estate Management Plugin for WordPress. Create a directory of real estate / rental properties and integrate them into you WordPress CMS.
		Author: LOK Mary
		Version: 1.0
		Author URI:
	*/
	
	//back-end	
	add_action('admin_menu','realestateplugin_admin_actions');
	function realestateplugin_admin_actions(){
		//1-Title of page, 2- name of submenu, 3-control submenu, 4-menu slug, 5-function disply page
		add_options_page('RealEstate','RealEstate','manage_options',__FILE__, 'realestateplugin_admin');
	}
	function realestateplugin_admin(){
	}
	
	//TODO add style on back-end
	add_action('admin_head','rsAddCss');
	function rsAddCss(){
		echo '<link rel="stylesheet" style="text/css" href="'.get_option('siteurl').'/wp-content/plugin/wp-realestate/wp-realestate.css"/>';
	}
	
	//TODO create function to be called in theme
	function real_estate(){
		global $wpdb;
		global $q_config;
		
		$rowsPerPage = 9;		
		// by default we show first page
		$pageNum = 1;		
		// if $_GET['page'] defined, use it as page number
		if(isset($_REQUEST['page']))
		{
			$pageNum = $_REQUEST['page'];
		}
		
		// counting the offset
		$offset = ($pageNum - 1) * $rowsPerPage;
		$data = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}posts WHERE post_type = 'property' AND post_status = 'publish' ORDER BY ID DESC LIMIT $offset, $rowsPerPage" );		
		//echo $_REQUEST['page_id'];		
		$num = 1;
		foreach($data as $row){
			$post_id = $row->ID;
			
			$post_title = qtrans_use($q_config['language'], $row->post_title, true);//$row->post_title;
			
			//todo get metadata from post
			$meta = $wpdb->get_results( "SELECT meta_id, meta_key, meta_value FROM {$wpdb->postmeta} WHERE post_id = '$post_id'" );
			//todo get image page
			$img_data = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}posts WHERE post_type = 'attachment' AND post_status = 'inherit' AND post_parent=$post_id" );
			$img_src = $img_data[0]->guid;
			
			/*$image = wpp_get_image_link( $img_src, 100, array( 'return' => 'array' ) );
			print_r($image);*/
			
			//todo assign value to array
			$property = get_property_from_meta($meta);
			//print_r($property);
			$permalink = get_permalink( $post_id );
?>
			<div class="fl propertyItems propertyItems_<?php echo $num; ?>">
	            <div class="propertyImg">
	            	<a href="<?php echo $permalink; ?>" style="width:270px;height:200px;">
                    	<img class="linkimg" src="<?php echo $img_src; ?>"​​ alt="<?php echo $post_title; ?>" width="270" height="200"​/>
                    </a>
                    
	            </div>
	            <div class="propertyTitle">
	                <h4>
	                	<a href="<?php echo $permalink; ?>">
							<?php echo $post_title; ?>
	                    </a>
	                </h4>                
	            </div>
	            <div class="propertyAddress">
	                <p>
	                    <?php echo $property['address']; ?>
	                </p>
	            </div>
	            <div class="propertyContact">
	                <p>
	                    Tel: <?php echo $property['tel']; ?>
	                </p>
	            </div>
	            <div class="propertyPrice">
	                <p>
	                    Price (Sale): <span><?php echo "$ ".$property['price']; ?></span>
	                </p>
	            </div>
	            <div class="propertyDetail">
	                <a href="<?php echo $permalink; ?>">
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
		
	}
	
	function get_property_from_meta($meta = array()){
		$res = array();
		foreach ($meta as $row){
			$res[$row->meta_key] = $row->meta_value;
		}
		return $res;
	}
	
	function real_estate_pagination(){
		global $wpdb;
		$rowsPerPage = 9;		
		$data = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}posts WHERE post_type = 'property' AND post_status = 'publish'" );		
		$numrows = count($data);
		
		$pageNum = 1;
		// if $_GET['page'] defined, use it as page number
		if(isset($_REQUEST['page']))
		{
			$pageNum = (int)$_REQUEST['page'];
		}
		// how many pages we have when using paging?
		$maxPage = ceil($numrows/$rowsPerPage);
		
		
		//$self = "paging.php";	
		
		if($maxPage>1){
			// print the link to access each page
			$self = $_SERVER['REQUEST_URI'];
			$indx = strpos($self,"?");
			if($indx > -1){
				$tmp = explode("&",$self);				
				$self = $tmp[0].'&';
				
			}else{
				$self .= '?';
			}
			
			$nav = "<ul>";
			$decrease = $pageNum-1;
			if($decrease > 0){
				$nav .= "<li><a href='".$self."page=$decrease'><img src='". get_template_directory_uri() ."/img/property/prev.jpg' alt='Previous' title='Previous' class='linkimg' /></a></li>";
			}else{
				$nav .= "<li><img src='". get_template_directory_uri() ."/img/property/prev.jpg' alt='Previous' title='Previous' class='linkimg' /></li>";
			}
			for($page = 1; $page <= $maxPage; $page++)
			{
				if ($page == $pageNum)
				{
					$nav .= "<li class='current'>$page</li>"; // no need to create a link to current page
				}
				else
				{	
					$nav .= "<li class='pageNumberLink'><a href='".$self."page=$page'>$page</a></li>";	
				}
			}
			$increase = $pageNum+1;
			if($increase <= $maxPage){
				$nav .= "<li><a href='".$self."page=$increase'><img src='". get_template_directory_uri() ."/img/property/next.jpg' alt='Next' title='Next' class='linkimg' /></a></li>";
			}else{
				$nav .= "<li><img src='". get_template_directory_uri() ."/img/property/next.jpg' alt='Next' title='Next' class='linkimg' /></li>";
			}
			$nav .= "</ul>";
			echo $nav;
		}
	}
	
	add_shortcode('real_estate', 'real_estate');
	
	
?>