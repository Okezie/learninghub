<!DOCTYPE>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<title> Learninghub </title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/slide2.css">
    <link rel="stylesheet" href="css/simple-slideshow-styles.css">
</head>
<body>
	<?php include('form_process2.php'); ?>
		<div class = "body">
	       <div class = "header">
	       						<div class = "wrapper">
	       						
											 <div class = "left">
											 	<a href ="http://pac-center.com/#/ms-23/1">
											 			<img src = "images/learninghub.png" width = "406" height = "75" alt" The learninghub and paccenter logo ">
											 	</a>
											 </div>	
											 
											 
									
									
									        
									      <div class = "right">
									      	
									      	<img src = "images/call.png" width = "15" height = "15" alt " call icon ">
									      	<div class = "today">
										      	 <small>Call us today</small></br> 
										      	 <strong>09-2921465</strong>
										    </div>
										  </div>
									      <div class = "right_2">
									      	
									      	     <img src = "images/location.png" width = "10" height = "15" alt " location icon">
									      	   
											      <div class = " right_1">
											      	<a href = "https://www.google.com.ng/maps">
											            <small>Suite 1, Capital Hub Mall, Plot 272 Ahmadu Bello Way</small></br>
											            <strong> Along Wuse-Gwarinpa-Next Express Way, F.C.T Abuja.</strong></small>
											        </a>
											      </div>
											

											      
									      </div>
									      
									 
								</div>


				 </div>


				      

						            <nav>
		       						        <label for="drop" class="toggle">Menu</label>
								        <input type="checkbox" id="drop" />
								            <ul class="menu">
								                <li><a href="index.php">Home</a></li>
								                
								                <li>
								                    <!-- First Tier Drop Down -->
								                    <label for="drop-1" class="toggle">About Us +</label>
								                    <a href="#">About Us</a>
								                    <input type="checkbox" id="drop-1"/>
								                    <ul>
								                    	<li><a href="About us.html">About Us</a></li>
								                        <li><a href="methodology.html">Methodology</a></li>
								                        
								                    </ul>  

								                </li>
								                <li><a href="service.html">Services</a></li>
								                <li>

								                <!-- First Tier Drop Down -->
								                <label for="drop-2" class="toggle">List of Courses +</label>
								                <a href="#">List of Courses</a>
								                <input type="checkbox" id="drop-2"/>
								                <ul>
								                    <li><a href="administration.html">Administration</a></li>
								                    <li><a href="agriculture.html">Agriculture</a></li>
								                   
								                    
								                </ul>
								                </li>
								                <li>

								                <!-- First Tier Drop Down -->
								                <label for="drop-2" class="toggle">Ongoing Courses +</label>
								                <a href="#">Ongoing Courses</a>
								                <input type="checkbox" id="drop-2"/>
								                <ul>
								                   
								                   
								                    <li><a href="creative.html">Creative</a></li>
								                     <li><a href="enterprise.html">Enterprise</a></li>
								                    <li><a href="excel.html">Microsoft Excel</a></li>
								                    <li><a href="Hardware.html">Hardware</a></li>
								                     <li><a href="management.html">MIS</a></li>
								                    <li><a href="microsoft_office.html">Microsoft Office</a></li>
								                    <li><a href="networking.html">Networking</a></li>
								                     <li><a href="webdesign.html">Web Design</a></li>
								                    <li><a href="webdev.html">Web Development</a></li>
								                   
								                    
								                </ul>
								                </li>
								                <li><a href="gallery.html">Gallery</a></li>
								                <li><a href="events.html">Events</a></li>
								                <li><a href="contact.php">Contact</a></li>

								                <li><a href="https://www.facebook.com/TheLearningHubNG/"><img src="images/soc/facebook1.png" height="32" width="32"></a></li>
												<li><a href="https://twitter.com/LearningHubNG"><img src="images/soc/twitter1.png" height="32" width="32"></a></li>
												<li><a href="https://www.instagram.com/thelearninghub_ng/"><img src="images/soc/instagram1.png" height="32" width="34"></a></li>
								            </ul>
								        </nav>

                      
		                      

		                      <div class="bss-slides num1" tabindex="1" autofocus="autofocus">
					            

					            

					            <figure>
							      <img src="images/slider/3.jpg" width="100%"  alt" Conference hall "/> 
					            </figure>

					            <figure>
							      <img src="images/slider/4.jpg" width="100%"  alt" Conference hall "/> 
					            </figure>

					            

					            

					           
					            
			                   </div> <!-- // bss-slides -->  



                                                                
				
				                    
							<header class = "section">
									<h2><center>WANT TO TAKE OUR COURSES WITH YOU ?</center></h2>
									
							</header>
                            <div class = "section1">
								<content>
									<h3><center> We have a wide selection of courses just for you get your free bochure today.</center></h3>
							    </content>
							</div>
						    <div class = "section2">
						    	<center><a href="images/trainingbrochure.pdf" download="Training brochure" class = "button">Download</a></center>
						    </div>

						    <div class = "line">
			                </div>


			            <div class = "item1">
			            	<header><h2><center> NEWSLETTER </center></h2></header>
			            </div>
			            <div class = "item2">
			            	<footer><P><center> BE THE FIRST TO GET THE LATEST NEWS </center></P></footer>
			            </div>
						<div>

			                        <div id = "get_email"><center>
									    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
									  	<br>
									  	<fieldset>    
                                          <input type="text" placeholder="Your Email Address" type="email" name="email" required maxlength="50">
                                          
                                        </fieldset>
									  	
									  	<br>
									  	<fieldset>
                                          <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                                        </fieldset>
                                        <div class="success"><?= $success ?></div>
										</form></center>
								    </div> 

						</div>
	            
				
				<div class = "bk">
					<footer>
						   <div class = "footer_left">
						   	<a>
						  	    <footer><p> &copy 2017 thelearningHub </p></footer>
						  	</a>
						   </div>
					         <div class = "mobile_footer">
					         	    <div class = "footer_right">
									  		<footer><p> We are social </p></footer>
								    </div>
							       <div class = "footer_social">        
							        <a href="https://www.facebook.com/TheLearningHubNG/"target="new" title="Facebook"> 
							            <img class="socialicon" src="images/soc/facebook1.png" height="15" width="15"> 
							        </a> 
							        <a href="https://twitter.com/LearningHubNG" target="new" title="Twitter"> 
							            <img class="socialicon" src="images/soc/twitter1.png" height="15" width="15">
							        </a> 
							        <a href="https://www.instagram.com/thelearninghub_ng/" target="new" title="Instagram"> 
							            <img class="socialicon" src="images/soc/instagram1.png" height="15" width="15"> 
							        </a>
								    </div> 
								    
						     </div>
				    </footer>
					
				</div>

			</div>

			<script src="js/hammer.min.js"></script><!-- for swipe support on touch interfaces -->
	<script src="js/better-simple-slideshow.min.js"></script>
	<script>
	var opts = {
	    auto : {
	        speed : 3500, 
	        pauseOnHover : true
	    },
	    fullScreen : false, 
	    swipe : true
	};
	makeBSS('.num1', opts);

	var opts2 = {
	    auto : false,
	    fullScreen : true,
	    swipe : true
	};
	makeBSS('.num2', opts2);
	</script>



	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59f98a77198bd56b8c038ddd/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	 
</body>