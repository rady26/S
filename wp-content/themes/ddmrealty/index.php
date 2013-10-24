<?php get_header(); ?>

	<div id="sectionSlide">
		<?php
            include("slide.php");
        ?>
    <!--sectionSlide--></div>
    
    <div id="sectionContent">
        
        <?php
			global $q_config;
			$lang_ = $q_config[ 'language' ];
			if ($lang_==='en'){
		?>
        
        <div id="sectionNews">
            <h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/whatnew.png" alt="What's New" title="What's New" />
            </h3>
            <p>
                Phnom Penh is the busiest city in Cambodia, and your problem of finding a house in <br/>
orderto stay here as an expat or a local is now just a click away.<br/>
We have lawyer who can help you with all the document that to buy,sell and rent. 
            </p>
            <br class="clear" />
        <!--sectionNews--></div>
        
        <?php 
			}else{
		?>
        		<div id="sectionNews">
                <h3 class="khclasstitle">
                <img src="<?php echo get_template_directory_uri(); ?>/img/kh/title_news.png" alt="What's New" title="What's New" />
                </h3>
                <p class="khtextnew">
                    រាជធានីភ្នំពេញគឺជាទីក្រុងដ៏រវល់បំផុតនៅក្នុងប្រទេសកម្ពុជាហើយបញ្ហារបស់អ្នកនៃការស្វែងរកផ្ទះសំរាប់ស្នាក់នៅ<br/>
                    ទីនេះគឺជាវេបសាយរបស់យើង លោកអ្នកគ្រាន់តែចូលមកកាន់ជាការស្រេច<br/>
					យើងនឹងមានមេធាវីដែលអាចជួយសំរួលឯកសារលើកាទិញ លក់ និង ជួល គ្រប់ប្រភេទ។
                </p>
                <br class="clear" />
            <!--sectionNews--></div>
        <?php
			}
		?>
        
        
        
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
        <!--sectionPropertySearch--></div>
        
        
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
        
    <!--sectionContent--></div>
    
    <div id="propertyMore">
        <div id="subPropertyMore">
            <a href="<?php echo get_site_url(); ?>/?page_id=2">MORE</a>
        </div>
    <!--propertyMore--></div>


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
    <!--sectionLink--></div>


<?php get_footer(); ?>