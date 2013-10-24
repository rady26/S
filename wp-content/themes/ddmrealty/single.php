<?php get_header(); ?>
	
    <div id="sectionPageNews">
    	<div id="sectionPageNews-in">
        	<img src="<?php echo get_template_directory_uri(); ?>/img/news/banner.jpg" alt="News" title="News" />
        </div>
    </div>
    
    <div id="sectionContent">
    	
        <div id="sectionNewsSingle">
        	<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
    
                <div class="nav-single">
                    <span class="nav-previous">
                        <?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?>
                    </span>
                    <span class="nav-next">
                        <?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?>
                    </span>
                </div><!-- .nav-single -->
    
                <?php comments_template( '', true ); ?>
    
            <?php endwhile; // end of the loop. ?>
        </div>
        
        
        <?php
			include("social.php");
		?>
        
    </div>    
<?php get_footer(); ?>