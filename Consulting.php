<!-- Header & Navigation Bar -->
<?php include 'includes/header.php' ?>
<title>APLUSPC - Consulting</title>
	
	<header>
	 <div class="container">
	 <div class="intro-text">
	<div>
				<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li> <a href="Services.php">Services</a></li>
					  <li class="active">Consulting</li>
				</ol>
				</div></br>
				</div>
				</div>
	</header>
			 <section id="Consulting">
        <div class="container">
			<h1 class="subheading">Consulting</h1>
				<p>
				As much as we value technology, the introduction of new technologies to an existing business rarely goes off without a hitch. 
				In particular, as in so many cases, these new technologies must integrate with the old.
				</p>
				<h3 class="heading">Who sees THE BIG PICTURE in your organization?</h3>
				<p>
				Many businesses utilize a variety of technologies; For instance, it is common to find many, if not all, of these technologies in a single business:
				</p>
				<p style="text-align: center;padding-bottom:10px">
				• Computer and Network Systems</br>
				• Internet Service</br>
				• Web Solutions</br>
				• Custom Software</br>
				• Database Applications</br>
				• Point of Sale</br>
				• Security Systems</br>
				• Mobile Devices</br>
				• Digital Sound</br>
				• Client Loyalty Programs</br>
				• Electronic Payment Processing</br></p>
				<p>Although most of these service providers possess expert knowledge of their own technology, we have found that in many cases there is no single individual that sees THE BIG PICTURE.
				Now, if you have an IT department, perhaps this may fall under their purview. But do they really have a clear understanding of how these many technologies function together? 
				Do they have the time to liaise with your service providers to coordinate field testing, new installations and repairs?
				A+ Consulting Services has the experience you require. With a wide range of knowledge including many of the technologies you use in your business today, we can help you plan, field test, install and troubleshoot the technologies you need tomorrow.
				</P>
				<h5>“I don’t know what’s causing the problem, but it’s not OUR system.”</h5>
				<p>Sound familiar?</p>
				<p>We are often asked to troubleshoot in situations where there is a significant question or responsibility or general lack of communication. Sometimes too many experts is a bad thing. It is often advantageous to have somebody experienced steer the ship.</p>
				<p>The scope of our consulting services range widely. Please contact us today for a free consultation.</p>
			</div>
			</section>
			
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