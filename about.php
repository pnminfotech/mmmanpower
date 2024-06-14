<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Mane & Mutake Manpower Services Pvt ltd</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="https://ik.imagekit.io/kgrarhxkv/favicon.png" type="image/x-icon">
<link rel="icon" href="https://ik.imagekit.io/kgrarhxkv/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

	<!-- Preloader -->
	<div class="preloader"></div>

	        <!-- Main Header-->
	              <?php include 'header.php' ?>


	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(https://ik.imagekit.io/kgrarhxkv/services/manpower-supplies.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">About Us</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>About</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- About Section -->
	<section class="about-section">
		<!-- <div class="anim-icons">
			<div class="float-image wow fadeInRight"><img src="https://ik.imagekit.io/aky4ns2vh/float-img-1.png" alt=""></div>
			<span class="icon icon-dotted-map zoom-one"></span>
		</div> -->

		<div class="auto-container">
			<div class="row">
				<div class="content-column col-lg-8 col-md-12 col-sm-12 order-2 wow fadeInRight" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title" style="margin-bottom: 0px;">
							<span class="sub-title">Manpower Service Company</span>
							<h2>We provide full rang of Manpower services</h2>
							<div class="text"> Mane & Mutake Manpower Service pvt ltd is providing Manpower with various categories from Semi-skilled workers, skilled Workers, Technicians, Foreman, Engineers, Inspectors, Specialist, Consultant, etc. As such, we are able to secure human resources with the required skills swiftly when necessary; we can support your needs in various business scenes. Furthermore, Mane & Mutake Manpower Service pvt ltd takes care of various tasks such as search and select manpower, interview & assessment, medical checkup, labor contract, salary payments, insurances procedure, PPE, daily management, etc. to staffs which can alleviate your company’s personnel management burdens. It provides services such as:
							</div>
						</div>

						<div class="content-box">
							<div class="">
			
								<h6 class="title " style="color:black;">
									<span class="fa fa-check"></span>Labour Supplier<br>
									<span class="fa fa-check"></span>Job Work Contract <br>
									<span class="fa fa-check"></span> Labour Contract<br>
									<span class="fa fa-check"></span>Housekeeping<br>
									
					
						
							</div>
						</div>

					
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft">
						<figure class="image-1 wow fadeInUp"><img src="https://ik.imagekit.io/kgrarhxkv/services/about.jpg" alt=""></figure>
					
						<!-- <div class="experience bounce-y"><strong><i class="icon flaticon-global"></i> 17<br> Years</strong> Working Exprience</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd About Section -->

			<!-- Why Choose Us -->
			<section class="why-choose-us pull-up pb-6">
				<div class="bg-image" style="background-image: url(https://ik.imagekit.io/aky4ns2vh/4.jpg)"></div>
				<div class="anim-icons">
					<!-- <div class="float-image"><img src="https://ik.imagekit.io/aky4ns2vh/delivery-boy.png" alt="" /></div> -->
				</div>

				<div class="auto-container">
					<div class="row">
						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="sec-title light" style="margin-bottom:10px;">
									<span class="sub-title">Why Choose Us</span>
									<h3  class="white">We are known as a service provided organization</h3>
									<p class="white">Our strategic Business & production Development is always to innovate technology, improve quality and safety of services, save materials and fuel to lower costs and increase the competitiveness of enterprises, which will meet the increasing demands of various customers.</p>
								</div>

								<!-- Feature Block -->
								<div class="feature-block-two">
								
										
										<p style="color: #bdbdbd;"><i class=" fa fa-angle-right"></i> Cost-Effective Solutions <br>
											<i class=" fa fa-angle-right"></i> 	Flexible Rates<br>
											<i class=" fa fa-angle-right"></i> Flexible Cintracts	<br>
											<i class=" fa fa-angle-right"></i> Reliable Manpower<br>
											<i class=" fa fa-angle-right"></i> One Supplier,One Relationship<br>
											<i class=" fa fa-angle-right"></i> Industry Expertise<br>
											<i class=" fa fa-angle-right"></i> Commited to health & Safety</p>
									
								</div>
							</div>
						</div>

						<!-- form Column -->
						<div class="form-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<!-- Contact Form -->
								<div class="contact-form wow fadeInLeft">
									<!--Contact Form-->
									 <?php
                                        if(isset($_POST['enquiry-submit'])){
                                         
                                           $name       = @trim(stripslashes($_POST['name']));
                                           $email      =  @trim(stripslashes($_POST['email']));
                                           $phone      =  @trim(stripslashes($_POST['phone']));
                                           $message1  =  @trim(stripslashes($_POST['message']));
                                         
                                     //     $to = "pratikshabirdawade1996@gmail.com"; // this is your Email address
                                          $to = "tirupackindustries@gmail.com"; // this is your Email address
                                           $subject = "Contact Enquiry From Tirupack Website";
                                        
                                           $headers = "From: Contact Tirupati Packaging <noreply@tirupatipacking.com>\r\n";
                                           $headers .= "Reply-To: noreply@tirupatipacking.com\r\n";
                                           $headers .= "MIME-Version: 1.0\r\n";
                                           $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                                           $returnpath = '-f noreply@tirupatipacking.com';
                                        
                                           $message = 'Hello Sir <Br> You have received new Contact Enquiry From Tirupati Packaging Website ';
                                           $message .= '<h3>Follwing are the Contact details</h3>';
                                           $message .= '<table><tr><td>Date :</td><td>'.date("d-m-Y").'</td></tr><tr><td>Name :</td><td>'.$name.'</td></tr><tr><td>Phone :</td><td>'.$phone.'</td></tr><tr><td>Mail :</td><td>'.$email.'</td></tr>';
                                           $message .= '<tr><td>Message :</td><td>'.$message1.'</td></tr>';
                                           $message .= '</table><br><br>Thank You <br><b>This is auto Generated Email.Plase do not reply on this mail</b>';
                                           /*$success = @mail($email_to, $name, $body, 'From: <'.$email_from.'>');*/
                                           
                                         if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $message1)) {
                                        
                                        echo "<script type='text/javascript'>alert('Sorry. Try Again Letter')</script>";
                                          }
                                          else{
                                           $mail= mail($to,$subject,$message,$headers,$returnpath);
                                           if($mail == 1){
                                            echo "<script type='text/javascript'>alert('Thank You. We will contact you soon')</script>";
                                           
                                        }else{
                                            echo "<script type='text/javascript'>alert('Sorry. Try Again Letter')</script>";
                                        }
                                          }
                                         }
                                        ?>
									<form method="post" action=" " id="">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 form-group">
												<label>Your Name:</label>
												<input type="text" name="name" placeholder="" required />
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12 form-group">
												<label>Your Email:</label>
												<input type="text" name="email" placeholder="" required />
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12 form-group">
												<label>Phone No::</label>
												<input type="text" name="phone" placeholder="" required />
											</div>

                                        	<div class="col-lg-12 col-md-12 col-sm-12 form-group">
												<label>Your Massage:</label>
												<textarea name="message" placeholder="" required /></textarea>
											</div>
				
											<div class="col-lg-12 col-md-12 col-sm-12 form-group">
												<button class="theme-btn btn-style-two hvr-light" type="submit" name="enquiry-submit"><span class="btn-title">Submit Request</span></button>
											</div>
										</div>
									</form>
								</div>
								<!--End Contact Form -->
							</div>
						</div>
					</div>

	
				</div>
				
			</section>
			<!-- End Why Choose Us -->

		<div class="container pb-80">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="pricing-block">
						<div class="inner-box">
							<img src="https://ik.imagekit.io/kgrarhxkv/resource/mission.jpg" style="width:100px;    margin: 0 auto;display: block;">
							<span class="title">Our Mission</span>
							<ul class="mission">
								<li style="text-align:justify;">The Mission of the MM Manpower Services is to ensure peace, prosperity and long-term benefits for our customers, investors, employees and the community.To provide world-class employment and contract placement services, project support and training services to international clients </li>
							</ul>
							
						</div>
					</div>
				</div>

				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="pricing-block">
						<div class="inner-box">
						   <img src="https://ik.imagekit.io/kgrarhxkv/resource/vision.jpg" style="width:100px;    margin: 0 auto;display: block;">
							<span class="title">Our Vision</span>
							<ul class="mission">
								<li style="text-align:justify;">To continuously deliver unique value and innovative solutions that create tangible value for our clients and candidates in equal measure and to become the overseas manpower company of choice. Aims to become one of the top manpower Supply Companies in India.
							     
							</li>
							
							</ul>
					</div>
				</div>
			</div>


			
		</div>


		
		<div class="row">
		
        <h3 style="text-align:center">ADVANTAGES OF OUR COMPANY</h3>
        <div class="team-bloc col-lg-10 col-md-6 col-sm-12"  style="text-align:center;margin:0 auto;">
        					<div class="inner-box">
        					
        						<div class="info-box">
        						
        							<img src="https://ik.imagekit.io/kgrarhxkv/advantages_company.jpg" alt="">
        						</div>
        					</div>
        				</div>
        				
        </div>
</div>
     


				
     </div>

	 








    
	
	

<?php include 'footer.php' ?>


<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
</div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/script.js"></script>
</body>
</html>