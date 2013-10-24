<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DDM</title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.3.js">
</script>

<style type="text/css">
	iframe.goog-te-banner-frame{ display: none !important;}
</style>

</head>

<body>
<div id="sectionPage">
    <div id="sectionHeader">
        <div id="header">
            <div class="fl" id="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" title="" />
            </div>
			<div style="display:none;">
				<?php //echo do_shortcode('[google-translator]'); ?>
			</div>
            <div class="fl" id="contactDetail">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact_1.png" alt="" title="" />
                <div id="contactDetailSub">
                    <div class="fl contactDetailText">
                        <img src = "<?php echo get_template_directory_uri(); ?>/img/support.png" alt="" title=""/>
                    </div>
                    
                    <div class="fl">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/contact_2.png" alt="" title="" />
                    </div>
                </div>        
            </div>
            
            <div id="sidebar">
                <?php					
					global $q_config;
					$uri_ = $_SERVER['REQUEST_URI'];
					//todo find ? and return the index number
					$indx = strpos($uri_,"?");					
					if($indx > -1){
						$tmp = explode("&",$uri_);						
						$link = "";
						foreach($tmp as $data){
							if(!$data.strpos($data,"lang")>-1){
								$link .= $data.'&';
							}
						}
						$uri_ = $link;						
					}else{
						$uri_ .= '?';
					}
					
				?>			
				<ul>
                    <li class="lang-kh <?php echo ($q_config[ 'language' ]=='kh'?'lang-color':''); ?>">
						<a href="<?php echo $uri_.'lang=kh'?>" data-lang="Khmer" id="km">Khmer</a>
					</li>
                    <li class="lang-en <?php echo ($q_config[ 'language' ]=='en'?'lang-color':''); ?>">
						<a href="<?php echo $uri_.'lang=en'?>" data-lang="English" id="en">English</a>
					</li>
                </ul>
            </div>
			
            <?php
                //get_sidebar();
            ?>
            <div class="clear"></div>
        </div>
    </div>
    <?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'gNavi' ) ); ?>
    <div class="gNavi">
        <?php
            include("menu.php");
        ?>
    </div>
			