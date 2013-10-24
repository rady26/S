

	<div id="sectionPageConsult">
    	<ul>
        	<li>
            	<a href="<?php echo get_site_url(); ?>" class="linkimg">Home&nbsp;>&nbsp;</a>
            </li>
            <li>
            	<a href="<?php echo get_site_url(); ?>/?page_id=50" class="linkimg">Services&nbsp;>&nbsp;</a>
            </li>
            <li class="linkLast">
            	Property Management
            </li>
        </ul>
    </div>
    
    <div id="sectionContent">
    	
        <div id="sectionPageConsultBanner">
            <h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/services/manegement/banner.jpg" alt="Banner" title="Banner" />
            </h3>
        </div>
        
        <?php
			global $q_config;
			$lang_ = $q_config[ 'language' ];
			if ($lang_==='en'){
		?>
        
        <div id="sectionPageConsultText">
        	<h3>
            	Insight, interpretation and analysis tailored to your needs from our real estate <br/>
                research services.
            </h3>
            <p class="pd45px">
            	Timely and informed research and analysis is an accepted prerequisite to successful decision making. <br/>
Den Dey Meas realty Co,Ltd,  our extensive market coverage, innovative analysis and prescient forecasting is <br/>
backed by the market knowledge and commercial acumen of real estate’s most experienced research team.
            </p>
            <p>
Our local, regional and global researchers are dedicated to providing a seamless research service from local data <br/>
sourcing and single assignment analysis through to the construction of global investment, development and <br/>
locational strategies. 
            </p>
        </div>
        
        
        <?php
			}else{
		?>
        
        <div id="sectionPageConsultText">
        	<h3>
            	ការ យល់ ដឹង ទូលំទូលាយ ពី ការ បកស្រាយ, និង ការ វិភាគ  tailored ទៅ នឹង តម្រូវ ការ<br/>
                អចលនវត្ថុ របស់ យើង
            </h3>
            <p class="pd45px">
            	ការ ស្រាវជ្រាវ បាន ទាន់ ពេល វេលា និង ពត៌ មាន និង ការ វិភាគ គឺ ជា prerequisite បាន យល់ ព្រម ទៅ នឹង ការ ធ្វើ <br/>
ឌិន ដី ហុយ មាស រៀល ធី សហ អិល ធី ឌី, គ្រប ដណ្តប់ ទីផ្សារ របស់ យើង ទូលំទូលាយ ការ វិភាគ ប្រកប ដោយ ភាព ច្នៃប្រឌិត <br/>
គាំ ទ្រ ដោយ ចំនេះ ដឹង ទី ផ្សារ និង acumen ពាណិជ្ជកម្ម នៃ ក្រុម ការ ស្រាវជ្រាវ អចលនទ្រព្យ របស់ លោក មាន បទ ពិសោធ
            </p>
            <p>
អ្នក ស្រាវជ្រាវ មូល ដ្ឋាន ក្នុង តំបន់ និង លើ ពិភព លោក របស់ យើង ត្រូវ បាន ឧទ្ទិស ទៅ ផ្តល់ ជូន នូវ សេវា ើរវវ មួយ<br/>
ប្រភព និង ការ វិភាគ ពី ការងារ តែ មួយ តាម រយៈ ការ សាង សង់ ដើម្បី នៃ ការ វិនិយោគ ជា សកល, ការ អភិវឌ និង<br/>
យុទ្ធសាស្រ្ត បណ្តាញ ប្រតិបត្តិ ការ។
            </p>
        </div>
        
        <?php
			}
		?>
        
		<?php
            include("social.php");
        ?>
        
        
    </div>

