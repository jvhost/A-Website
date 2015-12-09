<!-- Header & Navigation Bar -->
<?php include 'includes/header.php' ?>
<title>APLUSPC - Graphics Design</title>
	
	<header class="header-background">
        <div class="container">
            <div class="intro-text">
			<div>
				<ol class="breadcrumb">
					 <li><a href="index.php">Home</a></li>
					 <li><a href="Services.php">Services</a></li>
					 <li class="active">Graphics Design</li>
				</ol>
			</div></br>
                <h1 class="heading">Graphics Design</h1>
                <a href="#Logos" class="page-scroll btn btn-xl"><img src="Icons/MockLogo.png"></br></br>Logos</a>
				<a href="#BusinessCards" class="page-scroll btn btn-xl"><img src="Icons/Business-Card.png"></br></br>Business Cards</a>
				<a href="#Brochures" class="page-scroll btn btn-xl"><img src="Icons/Brochure.png"></br></br>Brochures</a>
				<a href="#WebSites" class="page-scroll btn btn-xl"><img src="Icons/Web-Design.png"></br></br>WebSites</a>
        </div>
		</div>
    </header>
	
	<section id="Logos">
        <div class="container">
                <h1 class="subheading">Logos</h1>
				<h3>Coming Soon<h3>
              
        </div>
    </section>
	
	<section id="BusinessCards">
	<div class="container">
            <div class="intro-text">
                <h1 class="subheading">Business Cards</h1>
				<h3>Coming Soon<h3>
              
        </div>
	</section>
	<section id="Brochures">
	<div class="container">
            <div class="intro-text">
                <h1 class="subheading">Brochures</h1>
				<h3>Coming Soon<h3>
              
        </div>
	</section>
	<section id="WebSites">
	<div class="container">
            <div class="intro-text">
                <h1 class="subheading">WebSites</h1>
				<h3>Coming Soon<h3>
              
        </div>
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