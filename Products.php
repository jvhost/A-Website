<!-- Header & Navigation Bar -->
<?php include 'includes/header.php' ?>
<title>APLUSPC - Products</title>

  <header class="header-background">
        <div class="container">
            <div class="intro-text">
				<div>
				<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li class="active">Products</li>
				</ol>
				</div></br>
                <h1 class="heading">Products</h1>
				<!-- <a href="http://localhost:81/opencart/" class="page-scroll btn btn-xl"><p class="ButtonPadding">EStore</p></a> -->
                <a href="#team" class="page-scroll btn btn-xl"><img src="Icons/Notebook.png"></br></br>Computers</a>
				<a href="#CompanyProfile" class="page-scroll btn btn-xl"><img src="Icons/Printer.png"></br>Printers & </br>Supplies</a>
				<a href="#Partners" class="page-scroll btn btn-xl"><img src="Icons/Software.png"></br></br>Software</a
				
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