<!-- Header & Navigation Bar -->
<?php include 'includes/header.php' ?>
<title>TestAPLUSPC - Welcome to the Solution!</title>

    <header class="header-background">
        <div class="container">
            <div class="intro-text">
                <a href="Services.php" class="page-scroll btn btn-xl"><img src="Icons/Tools.png"></br></br>Services</a>
				<a href="Support.php" class="page-scroll btn btn-xl"><img src="Icons/Support.png"></br></br>Support</a>
				<a href="Products.php" class="page-scroll btn btn-xl"><img src="Icons/Cart.png"></br></br>Products </a>
            </div>
        </div>
    </header>
	
	<!-- Welcome Section -->
<section id="DomainRegistration">
            <div class="container">
				<div>
					<h1 class="subheading">Welcome to the solution!</h1>
					<p>Our goal at A+ Computers & Services has been to set new, higher standards in the computer service industry. Over the last 10 years our company has seen tremendous growth. This has not been the result of costly advertising campaigns -- 
					In fact, due to a steady stream of client referrals, we’ve been able to avoid those altogether. Our ongoing investment in this business has been directed towards streamlining our client service, improving efficiencies and growing our core services – 
					all of this to make your experience as good as possible. We’ve got a service team that’s second to none, a fantastic selection of high-quality hardware and a long list of complimentary services. Call us today and we’ll be glad to help you!<p>
              <!--  <div class="intro-heading">Pick One</div>-->
				</div>
                
            </div>
    </div>
</section>

	<!-- Index Testimonials Section -->
<header>
	<div style="background-color:#fff;">
            <div class="container">
				<div class="page-header">
				  <h1 class="subheading">What Our Clients Say</h1>
				</div>
				<div class="col-md-4">
				<p>
					"I would definitely recommend A+ Computers & Services because of their professionalism and for knowledge of the products they sell.
					Whenever we need them, they are very quick to respond and resolve any problems at hand. Thanks A+ you give me peace of mind."
					
					</br>
					<i>Marc J. Dubois</i></br>
					General Manager</br>
					Sound Hearing Solutions</br></br>
				<p>
				</div>
                <div class="col-md-4">
					<p>“Domo Gasoline Corporation Ltd. Has dealt with MobileTek Consulting since 2003 for supply and service of our office computers and software.  During this time, we have found their service to be very professional and their products to be of the highest standard and quality.  Their advice and recommendations on matters related to our data processing systems are always in the best interests of our company.  
					I would have no hesitation in recommending MobileTek Consulting for the supply and service of computer equipment and software.”
					</br>
					<i>Edward Braun</i></br>
					Domo Gasoline Corporation Ltd.<p></br>
				</div>
				<div class="col-md-4">
					<p>
					“I discovered Jason and his company through a referral several years ago.  He has helped me upgrade my computer to one of his machines, fixed our laptop from home, helped set me up with good antivirus protection, helped me figure out a problem that none of the techies at Manitoba Health could solve even though the problem was at their end, and is now setting me up with a new laptop. 
					He and his employees are always helpful on the phone or in person, and the work is done quickly and given back problem free.  I wouldn’t hesitate to recommend them to anyone!“
					</br>
					<i>Dr. Suzanne Stockman</i></br>
					Headingley Chiropractic<p></br>
				</div>
            </div>
    </div>
</header>

    
    <!-- Footer -->
     <?php include 'includes/footer.php' ?>


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
</body>

</html>
