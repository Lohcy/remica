<?php 
    require_once 'header.php';
?>

<!--page-->
<div id="banner">
		<div class="container intro_wrapper">
			<div class="inner_content">
				<h1>Get In Touch</h1>
					<h1 class="title">Contact Information</h1>
						<h1 class="intro">
							It's art if it can't be explained. It's <span>fashion</span> if no one asks for an <span>explanation.</span> 
							It's <span class="hue">design</span> if it doesn't need explanation. - Wouter Stokkel
						</h1>
					</div>
				</div>
			</div>
			
		<!--//GOOGLE MAP - ADD YOUR ADDRESS AT THE BOTTOM OF THE PAGE -->
			<div id="google-maps">
        		<div class="google-maps"></div>
        	</div>
        <!-- // End Google Map -->
		
		<div class="container wrapper pad10">
			<div class="inner_content">
				<div class="row pad10">
					<div class="col-sm-6 col-md-4">
					<h3>
						Do you need a website, have a question or comment? Please feel free to send us an email or fill in our handy contact form. We aim to reply within 24 hours.
					</h3>
					
					<h5>
						<span>Address</span><br>
                        Dhoraji Road, Opp. Tatkal Hanuman Temple,<br>                        
                        Jetpur - 360 370,<br>
                        Dist. Rajkot(Guj.)<br>												
					</h5>
				
					<h5>
						E-mail: <a href="mailto:siddharthshah141@gmail.com">siddharthshah141@gmail.com</a><br>
						Phone: 02823 - 222162
					</h5>
				</div>
				
				<div class="col-sm-6 col-md-8">
					<div class="contact_form">  
					<div id="note"></div>
					<div id="fields">
				<form id="contact_form" method="post" action="">
					<p class="form_info validation" style='color:red;margin-bottom: 10px;' id="name">name <span class="required">*</span></p>
						<input class="col-xs-12 col-sm-12 col-md-8" id="name_validation" type="text" name="name" value="" />
					<p class="form_info validation" id="email" style='color:red;margin-bottom: 10px;'>email <span class="required">*</span></p>
                        <input class="col-xs-12 col-sm-12 col-md-8" id="email_validation" type="text" name="email" value=""  />
                    <p class="form_info validation" id="mobile" style='color:red;margin-bottom: 10px;'>contact number <span class="required">*</span></p>
						<input class="col-xs-12 col-sm-12 col-md-8" id="mobile_validation" type="text" name="mobile_no" value=""  />
					<p class="form_info validation" id="subject" style='color:red;margin-bottom: 10px;'>subject</p>
						<input class="col-xs-12 col-sm-12 col-md-8" id="subject_validation" type="text" name="subject" value="" /><br>
					<p class="form_info validation" id="message" style='color:red;margin-bottom: 10px;'>message</p>
						<textarea name="message" id="message_validation" class="col-xs-12 col-sm-12 col-md-12" ></textarea>
						<div class="clear"></div>
			
					<input type="submit" id="form_submit" class="btn btn-primary btn-form marg-right5" value="submit" />
					<input type="reset" class="btn btn-primary btn-form" value="reset" />
				<div class="clear pad45"></div>
			</form>
		</div>
	</div>                   
	</div>                	
		</div>
			</div>
				</div>
            <!--//page-->


    
            
<?php 
    require_once 'footer.php';
?>