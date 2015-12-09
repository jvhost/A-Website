<!-- Header & Navigation Bar -->
<?php include 'includes/header.php' ?>
<title>APLUSPC - Support</title>

	<header>
	 <div class="container">
	 <div class="intro-text">
	<div>
				<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li class="active">Support</li>
				</ol>
				</div></br>
				</div>
				</div>
	</header>
	
	<div class="container">
		<div class="intro-text col-md-4">
			<img src="img/iStock/remotesupport.jpg" style="width:100%;padding-top:25px;">
             <h2 class="heading">Remote Support</h2>
			<p style="padding-bottom:30px">You don't necessarily have to bring it in. Many common problems can be fixed remotely. If your computer is turned on
			and connected to the Internet, we may be able to save you time and money. Contact us now to get started.</p>
        </div>
		<div class="intro-text col-md-4">
			<img src="img/iStock/onsitesupport.jpg" style="width:100%;padding-top:25px;">
             <h2 class="heading">Onsite Support</h2>
			<p style="padding-bottom:30px">Downtime can be costly and you can't afford to take a chance with your data. Contact us now to arrange for one of our certified
			technicians to visit your home or office and get you back up and running as quickly as possible.</p>
        </div>
		<div class="intro-text col-md-4">
			<img src="img/iStock/inshopsupport.jpg" style="width:100%;padding-top:25px;">
             <h2 class="heading">In-shop Support</h2>
			<p style="padding-bottom:30px">Bring your computer into our service department and enjoy warm beverage, sit in comfort or browse our showroom while our friendly staff work to remedy the problem. 
			No appointment necessary. We guarantee service within one business day.</p>
        </div>
	</div>

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