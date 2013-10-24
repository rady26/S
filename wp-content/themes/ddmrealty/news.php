

	<div id="sectionPageNews">
    	<div id="sectionPageNews-in">
        	<img src="<?php echo get_template_directory_uri(); ?>/img/news/banner.jpg" alt="News" title="News" />
        </div>
    </div>
    
    <div id="sectionContent">
    	
        <div id="sectionContentNews">
        	<h3><img src="<?php echo get_template_directory_uri(); ?>/img/news/news_title.png" alt="Title News" title="Title News" /></h3>
            
           <?php
				global $wp_query;
				query_posts(array(
					'post_type' => 'news'
				));
		   ?>
           <?php
           		while ( have_posts() ) : the_post(); 
		   ?>
           
           		
                <div class="sectionNewsEvent">
                    <div class="sectionNewsEventImg">
                        <?php
							the_post_thumbnail();
						?>
                    </div>
                    <div class="sectionNewsEventText">
                        <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p class="dateStart">
                        	<?php
								echo the_date('F j, Y');
							?>
                        	<!--September 25, 2013-->
                        </p>
                        
                        <?php
							global $q_config;
							$lang_ = $q_config[ 'language' ];
							if ($lang_==='en'){
						?>
                        
                        <p class="textDetail">
                        	<?php
								//echo the_content();
								echo substr(strip_tags($post->post_content), 0, 250)." [...]";
							?>
                        </p>
                        <div class="newsReadMore">
                            <a href="<?php echo get_permalink(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/news/read_more.jpg" alt="Read More" class="linkimg" />
                            </a>
                        </div>
                        
                        <?php
							}else{
						?>
                        		<p class="textDetail">
									<?php
                                        //echo the_content();
                                        echo wp_trim_words( $post->post_content, 10 )." [...]";
                                    ?>
                                    
                                </p>
                                <div class="newsReadMore">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/news/read_more.jpg" alt="Read More" class="linkimg" />
                                    </a>
                                </div>
                        <?php
							}
						?>
                        
                    </div>
                    <br class="clear" />
                </div>
                
                
			<?php endwhile; // end of the loop. ?>            
            
        </div>
        
        
        <?php
			include("social.php");
		?>
        
        
    </div>
