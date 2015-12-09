<!-- Header & Navigation Bar -->
<?php include 'includes/header.php' ?>
<title>APLUSPC - Data & Disaster Recovery</title>
	
	
	 <header>
	 
        <div class="container">
            <div class="intro-text">
				<div>
					<ol class="breadcrumb">
						 <li><a href="index.php">Home</a></li>
						 <li><a href="Services.php">Services</a></li>
						 <li class="active">Data & Disaster Recovery</li>
					</ol>
				</div></br>
				</div>
				</div>
				</header>
				<section>
        <div class="container">
                <h1 class="subheading">Data & Disaster Recovery</h1>
				<p>So here’s a familiar story…</p>
				<p>Your computer has stopped responding.  You're not sure if it's due to a virus, hardware failure or corrupted system files but you have critical information including e-mails, addresses and documents that you need to access right away.  
				In a panic, you bring it in to the local computer shop and they tell you that they have to erase everything to fix the problem.
				</p>
				<h3 class="heading">
				STOP!
				</h3>
				<p>
				We can help!  First of all, there is a very good chance that your data can be salvaged.  
				Secondly, in most situations, we can bring your computer back to life without losing all of your installed applications and settings.
				</p>
				<p>
				Why do we have a higher rate of success than other repair shops?  It’s an easy-out to perform a system restore or a Windows reinstallation , 
				but it takes an expert to accurately assess the situation and recover from a major meltdown.  
				At A+ Computers and Services, our experienced technicians and advanced diagnostic processes will give you the best possible chance of a clean, hassle free recovery.  
				This means that you could save time and money as you pick up from where you left off.
				</p>
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