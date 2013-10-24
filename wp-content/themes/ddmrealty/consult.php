

	<div id="sectionPageConsult">
    	<ul>
        	<li>
            	<a href="<?php echo get_site_url(); ?>" class="linkimg">Home&nbsp;>&nbsp;</a>
            </li>
            <li>
            	<a href="<?php echo get_site_url(); ?>/?page_id=50" class="linkimg">Services&nbsp;>&nbsp;</a>
            </li>
            <li class="linkLast">
            	Property Consultancy
            </li>
        </ul>
    </div>
    
    <div id="sectionContent">
    	
        <div id="sectionPageConsultBanner">
            <h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/services/consult/banner.jpg" alt="Banner" title="Banner" />
            </h3>
        </div>
        
        <?php
			global $q_config;
			$lang_ = $q_config[ 'language' ];
			if ($lang_==='en'){
		?>
        
        <div id="sectionPageConsultText">
        	<h3>You can trust our services</h3>
            <p class="pd45px">
Many real estate initiatives are designed to get the immediate job done. But our commercial property consultants <br/>
deliver strategies that take a longer view. When real estate decisions align with your organization’s broader <br/>
business and financial objectives, it’s only natural that expectations are soon exceeded.
            </p>
            <p>
            	Our smart, innovative advice helps you gain a competitive advantage and win senior management support for <br/>
                your company activities.
            </p>
        </div>
        
        <?php
			}else{
		?>
        
        <div id="sectionPageConsultText">
            <h3>អ្នក អាច ជឿ ទុក ចិត្ត បាន សេវា របស់ យើង</h3>
            <p class="pd45px">
គំនិត ផ្តួចផ្តើ អចលនទ្រព្យ ជា ច្រើន ត្រូវ បាន គេ រចនា ឡើង ដើម្បី ទទួល បាន ការងារ ធ្វើ បាន ភ្លាម។ ប៉ុន្ដែ ទី ប្រឹក្សា <br/>
ផ្តល់ នូវ យុទ្ធសាស្រ្ត ដែល បាន យក ទិដ្ឋភាព យូរ ជាង នេះ។ ការ សម្រេច ចិត្ត នៅ ពេល ដែល អចលនវត្ថុ តម្រឹម ជា មួយ <br/>
អាជីវកម្ម និង ហិរញ្ញវត្ថុ គោល បំណង តែ ប៉ុណ្ណោះ វា ជា ធម្មជាតិ ដែល ថា ការ រំពឹង ទុក ត្រូវ បាន ហួស ពី ការ ឆាប់។
            </p>
            <p>
ឆ្លាត, ដំបូន្មាន របស់ យើង ច្នៃប្រឌិត ជួយ អ្នក ឱ្យ ទទួល បាន អត្ថ ប្រយោជន៍ ប្រកួត ប្រជែង និង ឈ្នះ ការ គាំទ្រ <br/>
សកម្មភាព ក្រុមហ៊ុន របស់ អ្នក។
            </p>
        </div>
        
        <?php
			}
		?>
        
        
		<?php
            include("social.php");
        ?>
        
        
    </div>
