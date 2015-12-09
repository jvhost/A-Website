<!-- Header & Navigation Bar -->
<?php include 'includes/header.php' ?>
<title>APLUSPC - Services</title>
	
	  <header class="header-background">
        <div class="container">
            <div class="intro-text">
				<div>
				<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li class="active">Services</li>
				</ol>
				</div></br>
                <h1 class="heading">Services</h1>
                <a href="Consulting.php" class="page-scroll btn btn-xl"><img src="Icons/Consulting.png"></br></br>Consulting</a>
				<a href="SoftwareDeve.php" class="page-scroll btn btn-xl"><img src="Icons/Software.png"></br>Software</br> Development</a>
				<a href="#" class="page-scroll btn btn-xl"><img src="Icons/Database.png"></br>Database </br>Services </p></a>
				<a href="WebEmailServices.php" class="page-scroll btn btn-xl"><img src="Icons/WWW.png"></br>Web & Email</br> Services</a>
				<a href="Repairs&Maintenance.php" class="page-scroll btn btn-xl"><img src="Icons/Repairs3.png"></br>Repairs & </br>Maintenance</a>
				<a href="GraphicsDesign.php" class="page-scroll btn btn-xl"><img src="Icons/Design.png"></br>Graphics </br>Design</a>
				<a href="DataDisaster.php" class="page-scroll btn btn-xl"><img src="Icons/Database2.png"></br>Data & Disaster</br> Recovery</a>
			 </div>
        </div>
			</header>
	<section id="message">
        <div class="container">
			<h1 class="subheading">A message from the owner...</h1>				
			 <p>You may notice that our showroom isn’t wrapped up in SALES signs or packed to the brim with “BLOWOUTS”. It’s not because we ran out.</p>
			  <p>You may be surprised to find that when you walk through the doors you feel relaxed and comfortable. But this isn’t an accident either.</p>
			  <p>We won’t get in your face or convince you to buy something that you don’t need. And you won’t have to have cash in your hand to get our attention.</p>
			  <p>We believe in serving people, not “selling products”, and we won’t deviate from our sales philosophy. We'll be glad to provide advice, solutions and services, but we won’t push them on you.</p>
			  <p>We understand that you may have a few questions and that you may need some time to do your homework before you buy.</p>
			  <p>I believe that once you’ve met us, you’ll find value in the way we do business. And when it’s time to make a decision, we want you to do what’s best for you.</p>
			  <p>I invite you to stop in for a visit. See for yourself why, after 10 years, we’re still here. You'll be glad you did.</p>
			  <h5>-Jason Houghton<h5>
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