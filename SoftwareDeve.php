<!-- Header & Navigation Bar -->
<?php include 'includes/header.php' ?>
<title>APLUSPC - Software Development</title>

	<header>
	 <div class="container">
	 <div class="intro-text">
	<div>
				<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li> <a href="Services.php">Services</a></li>
					  <li class="active">Software Development</li>
				</ol>
				</div></br>
				</div>
				</div>
	</header>
	<section id="ComputerRepairs">
        <div class="container">
                <h1 class="subheading">Software Development</h1>
				<p>There are several types of prepackaged solutions, such as CRM or ERP, that provide an incredible collection of tools for organizing our time, our resources, and our teams.
				They don't come cheap but when the right tools are used effectively, they may well be worth the money.
				</p>
				<p>
				In order to make these packages appealing to the masses, however, certain compromises are often made. While simplicity is preferred, for example, it is not always possible in a system that has been designed to work for "everyone". 
				Additionally, complicated software typically requires more training and, 
				if your business processes are at all unique, you may be forced to adapt if they wish to get the most out of your investment. 
				</p>
				<p>
				If you'd rather avoid the complexity and cost associated with one-size-fits-all software, or you'd like to learn how purpose-built software will more closely align with your needs and bring unparallelled efficiency and organization to your business, 
				it's time to give the A+ Development Team a call.
				</p>
				</br>
				<h5>
				The best solution is not necessarily the most expensive one. 
				</h5>
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