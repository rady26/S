<div>
	<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
    <div class="featured-post">
        <?php _e( 'Featured post', 'twentytwelve' ); ?>
    </div>
    <?php endif; ?>
    
    
    <div>
    	<?php the_post_thumbnail(); ?>
		<?php if ( is_single() ) : ?>
        	<h1 class="entry-title"><?php the_title(); ?></h1>
        
        <?php else : ?>
            <!--<h1 class="entry-title">
                <a href="<?php //the_permalink(); ?>" rel="bookmark"><?php //the_title(); ?></a>
            </h1>-->
        <?php endif; // is_single() ?>
        <?php if ( comments_open() ) : ?>
            <!--<div class="comments-link">
                <?php //comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
            </div>--><!-- .comments-link -->
        <?php endif; // comments_open() ?>
    </div>
    
    
    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
    <?php else : ?>
    
    	<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
        <?php //wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
    
    <?php endif; ?>
    
</div>
