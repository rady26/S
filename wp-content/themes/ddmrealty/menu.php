<?php
	global $q_config;
	$lang_ = $q_config[ 'language' ];
	if ($lang_==='en'){
?>
<ul>
	<li class="current_page"><a href="<?php echo get_site_url(); ?>">
    	<img src="<?php echo get_template_directory_uri(); ?>/img/home.jpg" alt="Home" class="linkimg" />
    </a></li>
    
    <li><a href="<?php echo get_site_url(); ?>/?page_id=48">
    <img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="About" class="linkimg" />
    </a></li>
    
    <li><a href="<?php echo get_site_url(); ?>/?page_id=46">
    <img src="<?php echo get_template_directory_uri(); ?>/img/news.jpg" alt="News" class="linkimg" />
    </a></li>
    
    <li><a href="<?php echo get_site_url(); ?>/?page_id=50">
    <img src="<?php echo get_template_directory_uri(); ?>/img/service.jpg" alt="Service" class="linkimg" />
    </a></li>
    
    <li><a href="<?php echo get_site_url(); ?>/?page_id=2">
    <img src="<?php echo get_template_directory_uri(); ?>/img/property.jpg" alt="Property" class="linkimg" />
    </a></li>
    
    <li><a href="<?php echo get_site_url(); ?>/?page_id=39">
    <img src="<?php echo get_template_directory_uri(); ?>/img/contact.jpg" alt="Contact" class="linkimg" />
    </a></li>
    
    <br class="clear" />
</ul>
<?php }else{ ?>

<ul>
	<li><a href="<?php echo get_site_url(); ?>">
    	<img src="<?php echo get_template_directory_uri(); ?>/img/kh/home.jpg" alt="Home" class="linkimg" />
    </a></li>
    
    <li><a href="<?php echo get_site_url(); ?>/?page_id=48">
    <img src="<?php echo get_template_directory_uri(); ?>/img/kh/about.jpg" alt="About" class="linkimg" />
    </a></li>
    
    <li><a href="<?php echo get_site_url(); ?>/?page_id=46">
    <img src="<?php echo get_template_directory_uri(); ?>/img/kh/news.jpg" alt="News" class="linkimg" />
    </a></li>
    
    <li><a href="<?php echo get_site_url(); ?>/?page_id=50">
    <img src="<?php echo get_template_directory_uri(); ?>/img/kh/services.jpg" alt="Service" class="linkimg" />
    </a></li>
    
    <li><a href="<?php echo get_site_url(); ?>/?page_id=2">
    <img src="<?php echo get_template_directory_uri(); ?>/img/kh/property.jpg" alt="Property" class="linkimg" />
    </a></li>
    
    <li><a href="<?php echo get_site_url(); ?>/?page_id=39">
    <img src="<?php echo get_template_directory_uri(); ?>/img/kh/contact.jpg" alt="Contact" class="linkimg" />
    </a></li>
    
    <br class="clear" />
</ul>

<?php } ?>
