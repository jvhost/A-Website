<!-- Header & Navigation Bar -->
<?php include 'includes/header.php' ?>
<title>APLUSPC - Testimonials</title>
	
	<header class="header-background">
        <div class="container">
            <div class="intro-text">
				<div>
					<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="Services.php">Services</a></li>
					  <li class="active">Web & Email Services</li>
					</ol>
				</div></br>
                <h1 class="heading">Web & Email Services</h1>
              <!--  <div class="intro-heading">Pick One</div>-->
                <a href="#DomainRegistration" class="page-scroll btn btn-xl"><img src="Icons/Domain.png"></br>Domain</br> Registration</a>
				<a href="#WebsiteDevelopment" class="page-scroll btn btn-xl"><img src="Icons/Website.png"></br>Website</br> Development</a>
				<a href="#WebEmailHosting" class="page-scroll btn btn-xl"><img src="Icons/Email.png"></br>Web & Email </br>Hosting</a>
				<a href="#HostedExchange" class="page-scroll btn btn-xl"><img src="Icons/Hosted.png"></br>Hosted </br>Exchange</a>
        </div>
    </header>
	<section id="DomainRegistration">
        <div class="container">
                <h1 class="subheading">Domain Registration</h1>
				<p>
				Registering your own Internet domain name will allow you to be found on the Internet more easily.  Once you've registered a domain name, you can direct your target audience to your website 
				(ie: www.yourbusiness.com) and provide your team with much more professional and memorable email addresses (ie: users@yourbusiness.com).
				</p>
				<p>
				When choosing a domain name, you'll want to take into account the name of your organization, industry, location, branding, key words and quite possibly some other factors.
				</p>
				<p>
				It's a good idea to choose 2 or 3 preferred domains initially -- since there are over 5 billion domain names registered already, you may not get your first choice. 
				</p>
				<p>
				The domain extension is the bit at the end. It is the ".com" in "mybusiness.com". If the domain name you are hoping to obtain has already been reserved, it may be available with a different extension. 
				You may want to considering registering multiple domains to ensure that you, and nobody else, has access to them in the future.
				</p>
				<h3>Common Domain Extensions</h3>
				<p>
				".com" - most popular, open to all, but least available</br>
				".ca" - exclusively for Canadian organizations</br>
				". org" - exclusively for nonprofits and charities</br>
				".info" - open to all</br>
				</p>
				<p>
				A+ Computers & Services can manage all aspects of your online presence including domain registration, DNS, hosting and email. We can do so cost effectively and with better service and support. 
				Call us now to get started! 
				</p>
        </div>
    </section>
	
	<section id="WebsiteDevelopment">
	<div class="container">
            <div class="intro-text">
                <h1 class="subheading">Website Development</h1>
				<h3>Coming Soon<h3>
              
        </div>
	</section>
	<section id="WebEmailHosting">
	<div class="container">
            <div class="intro-text">
                <h1 class="subheading">Web & Email Hosting</h1>
				<h3>Coming Soon<h3>
              
        </div>
	</section>
	<section id="HostedExchange">
	<div class="container">
            <div class="intro-text">
                <h1 class="subheading">Hosted Exchange</h1>
				<h3>Coming Soon<h3>
              
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

	<!-- Script for Back to Top Button -->
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