<?php

get_header(); ?>
		
        <?php
			if(get_the_ID()==39){
				get_template_part( 'contact', 'page' );	
			}
			else if(get_the_ID()==42){
				get_template_part( 'check', 'page' );	
			}
			else if(get_the_ID()==44){
				get_template_part( 'thanks', 'page' );	
			}
			else if(get_the_ID()==46){
				get_template_part( 'news', 'page' );	
			}
			else if(get_the_ID()==48){
				get_template_part( 'about', 'page' );	
			}
			else if(get_the_ID()==50){
				get_template_part( 'services', 'page' );	
			}
			else if(get_the_ID()==52){
				get_template_part( 'consult', 'page' );	
			}
			else if(get_the_ID()==54){
				get_template_part( 'manegement', 'page' );	
			}
			else if(get_the_ID()==56){
				get_template_part( 'voluate', 'page' );	
			}
			else{
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
            
            
            
		<?php if ( have_posts() ) : ?>
			
            <div id="sectionPropertyNew">
            	<h3>
                <img src="<?php echo get_template_directory_uri(); ?>/img/propery_new.png" alt="Propery New" title="Propery New" />
                </h3>
            
            	<?php									
					$num = 1;
				?>
            
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<div>
					<h1><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
				</div>
				
				<div>
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->
			
			<?php else :
				// Show the default message to everyone else.
			?>
				<div>
					<h1><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</div>
			
				<div>
					<p>
					<?php 
						_e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); 
					?>
                    </p>
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>
			
            
            
        	</div>
                
		<?php endif; // end have_posts() check ?>		
	
    </div>
    		
            <div id="propertyMore">
            	<div id="subPropertyMore">
    		
            <?php real_estate_pagination(); ?>
            	
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
                        <li><a href="http://youtube.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/next.png" alt="Next" title="Next" class="linkimg" /></a></li>
                    </ul>                     
                </div>
                <div id="gototop" class="link_top">
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/gototop.png" alt="Go to top" title="Go to top" class="linkimg" /></a>
                </div>
            </div>
    
	</div>
    
    <?php } ?>
    
<?php get_footer(); ?>