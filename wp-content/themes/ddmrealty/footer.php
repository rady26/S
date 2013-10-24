<?php
	global $q_config;
	$lang_ = $q_config[ 'language' ];
	if ($lang_==='en'){
?>
<div id="footer" class="clear">
	<table class="tblFooter" cellpadding="0" cellspacing="0">
    	<tr>
        	<td class="ftd1">
            	<ul>
                	<li><a href="<?php echo get_site_url(); ?>"><span>□</span>&nbsp;HOME</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=48"><span>□</span>&nbsp;ABOUT US</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=46"><span>□</span>&nbsp;NEWS</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=2"><span>□</span>&nbsp;PROPERTIES</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=39"><span>□</span>&nbsp;CONTACT</a></li>
                </ul>
            </td>
            <td class="ftd2">
            	<ul>
                	<li class="lifirst">
                    	<a href="<?php echo get_site_url(); ?>/?page_id=50"><span>□</span>&nbsp;SERVICES</a>
                    </li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=50">Sell</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=50">Buy</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=50">Rent</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=56">Valuating Properties</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=54">Property Management</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=52">Property Consult</a></li>
                </ul>
            </td>
            <td class="ftd3">
            	<p>
                	<span>Head Office: Phnom Penh</span><br/>
                    #267, St. 7c, Phum Trea,<br/>
                    Steung Meanchey, Meanchey, Phnom Penh.<br/>
                    H/P :  (855) 23 995 538<br/>
                    Website :​ <a href="www.ddmrealty.com.kh">www.ddmrealty.com.kh</a><br/>
                    E-mail    : <a><img src="<?php echo get_template_directory_uri(); ?>/img/email-white.png" alt="Email" title="Email" /></a>
                </p>
            </td>
        </tr>
    </table>
</div>
<div id="subFooter">
   <p>
   		Copyright © 2013 DDMRealty. All rights Reserved.
   </p> 
</div>

<?php }else{ ?>
	
    <div id="footer" class="clear">
	<table class="tblFooter" cellpadding="0" cellspacing="0">
    	<tr>
        	<td class="ftd1">
            	<ul>
                	<li><a href="<?php echo get_site_url(); ?>"><span>□</span>&nbsp;ទំព័រដើម</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=48"><span>□</span>&nbsp;អំពីយើង</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=46"><span>□</span>&nbsp;ព័ត៌មាន</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=2"><span>□</span>&nbsp;អចលនទ្រព្យ</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=39"><span>□</span>&nbsp;ទំនាក់ទំនង</a></li>
                </ul>
            </td>
            <td class="ftd2">
            	<ul>
                	<li class="lifirst">
                    	<a href="<?php echo get_site_url(); ?>/?page_id=50"><span>□</span>&nbsp;សេវាកម្ម</a>
                    </li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=50">លក់</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=50">ទិញ</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=50">ជួល</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=56">ការវាយតំលៃលើអចលនទ្រព្យ</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=54">គ្រប់គ្រងអចលនទ្រព្យ</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/?page_id=52">ពិគ្រោះយោបល់ពីអចលនទ្រព្យ</a></li>
                </ul>
            </td>
            <td class="ftd3">
            	<p>
                	<span>ការិយាល័យកណ្តាល: រាជធានីភ្នំពេញ</span><br/>
                    ផ្ទះលេខ 267, ផ្លូវ 7c, ភូមិទ្រា,<br/>
                    ស្ទឹងមានជ័យ, រាជធានីភ្នំពេញ។<br/>
                    ទូរសា :  (855) 23 995 538<br/>
                    វ៉ិបសាយ :​ <a href="www.ddmrealty.com.kh">www.ddmrealty.com.kh</a><br/>
                    សារ    : <a><img src="<?php echo get_template_directory_uri(); ?>/img/email-white.png" alt="Email" title="Email" /></a>
                </p>
            </td>
        </tr>
    </table>
</div>
<div id="subFooter">
   <p>
   		រក្សាសិទ្ធគ្រប់យ៉ាង © 2013 DDMRealty.
   </p> 
</div>
	
<?php } ?>

</div>

<script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

</body>
</html>