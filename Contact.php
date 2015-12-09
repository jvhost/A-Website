<!-- Header & Navigation Bar -->
<? php include 'includes/header.php' ?>
<title>APLUSPC - Contact</title>

<header>
	<div class="container"  style="background-color:#e5e5e4; padding-bottom: 25px;padding-top: 90px;">
	<div style="padding-top:30px;">
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Contact</li>
		</ol>
	</div>
	<h1 class="heading">A+ Computers & Services</h1>
            <div class="container">
				<div class="col-md-5">
				<h4 class="service-heading">A+ COMPUTERS & SERVICES INC.</h4>
					<p>3050 Portage Ave, Unit K</p>
					<p>Winnipeg, Manitoba, Canada</p>
					<p>R3K 0Y1</p>
					<p>info@apluspc.ca</p>
					<p>204.APL.USPC | 204-275-8772</p>
				</div>
                
				<div class="col-lg-6">
                    <h4 class="section-heading">Contact Us</h4>
                     <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number." required>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message." required></textarea>
                                    <p class="help-block text-danger"></p>
									<div id="success" style="6px"></div>									
                                </div>
								<div class="form-group">
									<body onLoad="ChangeCaptcha()">
										<input type="text" id="randomfield" disabled>	
										<input id="CaptchaEnter" class="form-control" size="20" maxlength="6" placeholder="Enter Captcha" required data-validation-required-message="Please enter Captcha." required/>										
									</body>			
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary" onclick="check()">Send Message</button>
								</div>
                            </div>
                        </div>
                    </form>
                </div>
				<div class="col-md-12">
					<h3 class="section-heading">Hours of Operation </h3>
										<h5>Weekdays 9:00am - 9:00pm
										Saturday	10:00 AM - 2:00 PM
										Sunday	Closed</h5>
				</div>
            </div>
    </div>
</header>
    
			<!-- Contact Map Section -->

<div class="jumbotron">
	<div class="container"> 
		<!-- Redirection Button to Google Maps -->
		<a class="btn btn-primary" target="_blank" href="https://www.google.com/maps/dir/current+location/3050+Portage+Ave+Unit+K,+Winnipeg+Manitoba,+R3K0Y1,+Canada/">Get Directions</a>
	</div>
</div>
	
	
		<!-- Contact Content Section -->

	
	
</head>
<!-- Contact Section -->


   <footer class="footer-background">
        <div class="container">
            <div class="row">
                 
             
               <div class="col-md-12">
                    
                    <h4 class="service-heading">Follow Us </h4>
                    <p class="text-muted"> <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/apluspc_ca" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/APLUSPC/" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
                    </ul>
					<span class="copyright">Copyright &copy; A+ Computers & Services</span></p>
                </div>
            </div>
        </div>
		<a href="#" class="scrollToTop"></a>
    </footer>
	
	
	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
	
	
	<!-- Script for Back To Top Button -->
	<script>
		$(document).ready(function(){
		
		//Check to see if the window is top if not then display button
		$(window).scroll(function(){
			if ($(this).scrollTop() > 100) {
				$('.scrollToTop').fadeIn();
			} else {
				$('.scrollToTop').fadeOut();
			}
		});
		
		//Click event to scroll to top
		$('.scrollToTop').click(function(){
			$('html, body').animate({scrollTop : 0},"slow");
			return false;
		});
		
	});
	</script>
	
	
	<!--Script for Captcha -->
	<script>
		function ChangeCaptcha() {
			var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
			var string_length = 6;
			var ChangeCaptcha = '';
			for (var i=0; i<string_length; i++) {
				var rnum = Math.floor(Math.random() * chars.length);
				ChangeCaptcha += chars.substring(rnum,rnum+1);
			}
			document.getElementById('randomfield').value = ChangeCaptcha;
		}
		function check() {
		if(document.getElementById('CaptchaEnter').value == document.getElementById('randomfield').value ) {
		window.open('','_self');
		}
		else {
		/* alert('Please re-check the captcha');  */
		} 
		}
	</script>