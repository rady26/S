
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/index.css" />
		
        <?php
        $your_name = "";
        $telephone = "";
        $address = "";
        $email = "";
        $content = "";
        if(isset($_POST['submitted'])) {
        	$textError = "*Please check again";
        	
        	$your_name = trim($_POST['your_name']);
        	$address = trim($_POST['address']);
        	$telephone = trim($_POST['telephone']);
        	$email = trim($_POST['email']);
        	$content = stripslashes(trim($_POST['content']));
        	        	
        	if(trim($_POST['your_name']) === '') {
        		$nameError = $textError;
        		$hasError = true;
        	}
        
        	if($telephone === '')  {
        		$telephoneError = $textError;
        		$hasError = true;
        	}else if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/", $telephone)){
        		$telephoneError = "You entered an invalid telephone.";
        		$hasError = true;
        	}
        	
        	if($email === '')  {
        		$emailError = $textError;
        		$hasError = true;
        	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", $email)) {        		
        		$emailError = 'You entered an invalid e-mail.';
        		$hasError = true;
        	}
        
        	if($content === '') {
        		$contentError = $textError;
        		$hasError = true;
        	}        	
        	
        	//TODO send mail
        	if(!isset($hasError)) {
        		$emailTo = get_option('admin_email');
        		$subject = 'From '.$your_name;
        		$body = "Name: $your_name \n\nTelephone: $telephone\n\nEmail: $email \n\nMessage: $content";
        		$headers = 'From: '.$your_name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
        		
        		$emailSent = wp_mail($emailTo, $subject, $body, $headers);        		        		
        	}       	      	
        	
        }   
        ?>
       
        <div id="sectionContent">   
        	
        	<div class="banner"><img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" /></div>
			<div class="title"><img src="<?php echo get_template_directory_uri(); ?>/img/img_title.png" /></div>
			
			<?php if(isset($emailSent) && $emailSent == true) { ?>
        		<div id="message">
					<p class="textOrang">Send mail was completed.</p>
					<p class="mb-40">I received an content, thank you very much.</p>
					<p class="mb-70">After confirmation, we will contact you from here later.</br >
	If there is no connection,please contact us from mail form again.</p>
					<div id="backTop">
						<a href="index.html"><img src="img/thanks/back_top.jpg" class="linkimg" /></a>
					</div>	
				</div>
        	<?php } else {?>			
				<div class="box">
					<div class="boxIn">
						<div class="form">						
							<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
								<table class="formInput" cellpadding="0" cellspacing="0">
									<tr>
										<td class="tdLeft"><p class="desc">NAME<font>*</font></p></td>
										<td class="tdRight">
											<label>
												<input type="text" name="your_name" class="text" value="<?php echo $your_name; ?>" />
												<?php 
													if($nameError != '') {
														echo "<br /><font class='error'>$nameError</font>";	 
													}
												?>
											</label>
											
										</td>
									</tr>
									<tr>
										<td class="tdLeft"><p class="desc">TELEPHONE<font>*</font></p></td>
										<td class="tdRight">
											<label>
												<input type="text" name="telephone" class="text" value="<?php echo $telephone; ?>" />
												<?php 
													if($telephoneError != '') {
														echo "<br /><font class='error'>$telephoneError</font>";	 
													}
												?>
											</label>
											
										</td>
									</tr>
									<tr>
										<td class="tdLeft"><p class="desc">ADDRESS</p></td>
										<td class="tdRight">
											<label><input type="text" name="address" class="text" value="<?php echo $address; ?>" /></label>
										</td>
									</tr>
									<tr>
										<td class="tdLeft"><p class="desc">E-MAIL<font>*</font></p></td>
										<td class="tdRight">
											<label>
												<input type="text" name="email" class="text" value="<?php echo $email; ?>" />
												<?php 
													if($emailError != '') {
														echo "<br /><font class='error'>$emailError</font>";	 
													}
												?>
											</label>
											
										</td>
									</tr>
								</table>
								<p class="desc last">MESSAGE<font>*</font></p>
								<label>
									<textarea class="area" name="content"><?php echo $content; ?></textarea>
									<?php 
										if($contentError != '') {
											echo "<br /><font class='error'>$contentError</font>";	 
										}
									?>
								</label>
								
								<div class="control">
									<!--button type="submit">
										<img src="<?php echo get_template_directory_uri(); ?>/img/send.png" name="submit" alt=""  class="linkimg" />									
									</button-->
									<input type="image" src="<?php echo get_template_directory_uri(); ?>/img/send.png" name="submitcontact" class="linkimg" />
									<input type="hidden" name="submitted" id="submitted" value="true" />
								</div>
							</form>
						</div>
						<div class="info">
							<div class="address">
								<p class="infoTitle">OUR OFFICE</p>
								<p class="infoDetail">#267, St. 7c, Phum Trea,<br />
		Steung Meanchey, Meanchey,<br />
		Phnom Penh.<p>
							</div>
							<div class="contact">
								<p class="infoTitle">CONTACT METHODS</p>
								<table class="contact" cellpadding="0" cellspacing="0">
									<tr><td>Tel         </td><td>:  (855) 23 995 538</td></tr>
									<tr><td>Fax        </td><td>:  (855) 23 995 528</td></tr>
									<tr><td>Website </td><td>:​  <font>www.ddmrealty.com.kh</font></td></tr>
									<tr><td>E-mail    </td><td>:  <font>vorleakdi168@gmail.com</font></td></tr>
								</table>
								<p>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="bottom">
					<?php
				        $fname = "";
				        $lname = "";
				        $subEmail = "";
				        
				        if(isset($_POST['submitsubscribe'])) {
				        	$textError = "*Please check again";
				        	
				        	$fname = trim($_POST['fname']);
				        	$lname = trim($_POST['lname']);				        	
				        	$subEmail = trim($_POST['subemail']);
				        	        	
				        	if($fname === '') {
				        		$fnameError = $textError;
				        		$hasSubError = true;
				        	}

				        	if($lname === '') {
				        		$lnameError = $textError;
				        		$hasSubError = true;
				        	}
				        	
				        	if($subEmail === '')  {
				        		$subEmailError = $textError;
				        		$hasSubError = true;
				        	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", $subEmail)) {        		
				        		$subEmailError = 'You entered an invalid e-mail.';
				        		$hasSubError = true;
				        	}
				        	
				        	//TODO send mail
				        	if(!isset($hasSubError)) {
								global $wpdb;
								$tbl = "{$wpdb->prefix}newsletter";
								$res = $wpdb->get_results("SELECT * FROM $tbl WHERE n_email='$subEmail'");
								$num = count($res);
								if($num==0){
					        		$data = array('first_name'=>$fname,'last_name'=>$lname,'n_email'=>$subEmail);
									if($wpdb->insert($tbl,$data)){
										$fullName = "$fname $lname";
										$emailTo = get_option('admin_email');
						        		$subject = "Subscribe from $fullName";
						        		$body = "This user '$fullName' has been subscribed your website.\nEmail: $subEmail\n\n\nThanks,\n$fullName.";
						        		//$headers = 'From: '.$fullName.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $subEmail;
						        		$headers = 'Reply-To: ' . $subEmail;
						        		//todo send mail subscribe
						        		$subemailSent = wp_mail($emailTo, $subject, $body, $headers);
						        		//todo clear form
						        		$fname = '';
						        		$lname = '';
						        		$subEmail = '';
					        		}
				        		}else{
									$existsMail = true;
								}        		        		
				        	}       	      	
				        	
				        }   
				    ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/bottom.png" />					
					<div class="subscribe">
						<?php if(isset($subemailSent) && $subemailSent == true) { ?>
						<div class="success">Thank you for subscribing your email.</div>
						<?php }else if(isset($existsMail) && $existsMail == true) { ?>
						<div class="exists">Your email '<?php echo $subEmail; ?>' is already subscribe.</div>
						<?php } ?>
						<form action="<?php the_permalink(); ?>" method="POST">
							<div class="block1">
								<label>
									<font>Fist Name :</font><input type="text" class="text1" name="fname" value="<?php echo $fname; ?>" />
									<?php 
										if($fnameError != '') {
											echo "<br /><font class='error'>$fnameError</font>";	 
										}
									?>
								</label>
							</div>
							<div class="block1">
								<label>
									<font>Last Name :</font><input type="text" class="text1" name="lname" value="<?php echo $lname; ?>" />
									<?php 
										if($lnameError != '') {
											echo "<br /><font class='error'>$lnameError</font>";	 
										}
									?>
								</label>
							</div>
							<div class="block1">
								<label>
									<font>E-Mail :</font><input type="text" class="text1" name="subemail" value="<?php echo $subEmail; ?>" />
									<?php 
										if($subEmailError != '') {
											echo "<br /><font class='error'>$subEmailError</font>";	 
										}
									?>
								</label>
							</div>
							<input type="image" src="<?php echo get_template_directory_uri(); ?>/img/send.png" name="submit" class="linkimg" />
							<input type="hidden" name="submitsubscribe" id="submitsubscribe" value="true" />
						</form>
						<div class="clear"></div>
					</div>
				</div>
			
			<?php } ?>
			
            
			<?php
				include("social.php");
			?>
            
        </div>        
