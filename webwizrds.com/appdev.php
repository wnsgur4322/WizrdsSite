<!DOCTYPE html>
<html lang="en">

	<head>
        <meta name="HandheldFriendly" content="true" />
        <meta name="MobileOptimized" content="320" />
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Wizrds.com</title>
		<link rel="shortcut icon" type="image/jpg" href="/img/favicon.ico"/>

		<!-- Additional CSS Files -->
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="/css/explore.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
		<style>
		@import url('https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap');
		</style>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Wire+One&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100&family=Wire+One&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
		<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	</head>

	<body>
		<header class="header-area header-sticky">
			<div class="container">
						<nav class="main-nav" style="margin-top: 0px; justify-content: space-between">
							<div class="header-logo">
							<a href="/" class="header-logo">
								<img class="header-logo" src="/img/wizrds_logo.png" alt="logo">
							</a>
							</div>
                
                			<!-- ***** Menu Start ***** -->
                			<ul class="nav" id="nav-bar" style="transition: visibility 0s, opacity 0.2s linear;">
                				<li class="scroll-to-section"><a href="https://webwizrds.com/#mission">Mission & Values</a></li>
                				<li class="scroll-to-section"><a href="https://webwizrds.com/#services">Our Services</a></li>
                				<li class="scroll-to-section"><a href="https://webwizrds.com/#contact-us">Contact Us</a></li>
                				<li class="scroll-to-section"><a href="https://webwizrds.com/#footer">Team</a></li>
                			</ul>
				            <!-- ***** Menu End ***** -->
						</nav>
			
			</div>
		</header>

		<!-- ***** Contact Us Area Starts ***** -->
		<section class="section" id="contact-us" data-aos="fade-up">
		    	
        	<!-- Web Development Section -->
        	<div class="web-container" data-aos="fade-up">
            	<div class="description">
            	<h2 class="header">App Development</h2>
            	<p class="price">Get your own app</p>
            	<p>We can conjure you up a one-of-a-kind app. Service includes design of wireframe, development, deployment, and life-time maintenance. Contact us, today, to schedule a consultation. <br> Price ranges from $5000 - $100000 <br> You'll never pay more!</p>
            	<div class="border"> </div>
        	    </div>
        	    <div class="screen-svg">
    			<div class="container">
    			<div class="row">
    				<div class="col-lg-12 col-md-12 col-xs-12">
    				<div class="contact-form">
    					<form id="contact" action="/" onsubmit="submitContactForm(event);">
    					<div class="row">
    					<div class="col-md-12 col-sm-12">
    					<fieldset>
    						<input name="organization" id="organization" placeholder="Organization *" required=""></input>
    					</fieldset>
    					</div>
    					<div class="col-md-6 col-sm-12">
    					<fieldset>
    						<input name="name" type="text" id="name" placeholder="Your Name *" required="">
    					</fieldset>
    					</div>
    					<div class="col-md-6 col-sm-12">
    					<fieldset>
    						<input name="email" type="email" id="email" placeholder="Your Email *" required="">
    					</fieldset>
    					</div>
    					<div class="col-md-6 col-sm-12">
    					<fieldset>
    						<select name="product" type="text" id="product" required="">
    							<option disabled>Choose product type *</option>
    							<option value="website development">website development</option>
    							<option selected value="app development">app development</option>
    							<option value="design">design</option>
    						</select>
    					</fieldset>
    					</div>
    					<div class="col-lg-12">
    					<fieldset>
    						<textarea name="message" rows="6" id="message" placeholder="Share some of your thoughts with us..."></textarea>
    					</fieldset>
    					</div>
    					<div class="col-md-12" style="margin: 0 auto; text-align: center;">
    					<p id="contact-form-message"></p>
    					<fieldset style="margin: 0 auto; text-align: center;">
    						<button type="submit" id="form-submit" class="main-button-icon">Submit <i class="fa fa-arrow-right"></i></button>
    					</fieldset>
    					</div>
    					</div>
    					</form>
    				</div>
    				</div>
    			</div>
    			</div>
        	</div>
        	</div>
		</section>
	
		<!-- ***** Footer Start ***** -->
		<footer id="footer">
			<div class="bottom-container">
			<div class="row">
				<div class="col-lg-6 col-xs-12">
				<div class="left-text-content">
					<div class="row">
						<div class="col-md-2 col-xs-4" id="bottom-logo-1">
						<img class="footer-logo" src="/img/wizrds_logo.png" alt="logo">
						</div>
						<!--<div class="col-md-2 col-xs-4" id="bottom-logo-2" style="padding-right: 0;">-->
						<!--	<img class="MWI-logo" src="/img/MWI_logo.png" alt="logo">-->
						<!--	</div>-->
						<div class="col-md-6 col-xs-6">
						<p>&copy; <?php date_default_timezone_set("America/Los_Angeles"); echo date("Y"); ?> Copyright Wizrds LLC. <br> A Mister Waverly Company</p>
						</div>
						<div class="col-md-4 col-xs-6" style="text-align: right;">
						    <p>Dream Developers.</p>
						</div>
					</div>
				</div>
				</div>
				<div class="col-lg-6 col-xs-12">
				<div class="right-text-content">
					<ul class="social-icons">
						<li><p>Follow Us</p></li>
						<li class="media-icons"><a rel="nofollow" href="https://www.facebook.com/webwizrds" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li class="media-icons"><a rel="nofollow" href="https://twitter.com/WebWizrds" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li class="media-icons"><a rel="nofollow" href="https://www.linkedin.com/company/wizrds-llc" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				</div>
			</div>
			</div>
		</footer>
		<!-- submits the form to the server -->
		<script type="text/javascript">
        async function submitContactForm(event) {
            try {
                // prevent the browser from refreshing 
                event.preventDefault();
                const p = document.getElementById("contact-form-message");
                p.innerHTML = "<span style='color: white;'>Sending your information now...</span>";
                const elements = event.srcElement;
                const formData = new FormData();
                formData.append("organization", elements[1].value);
                formData.append("name", elements[3].value);
                formData.append("email", elements[5].value);
                formData.append("productType", elements[7].value);
                formData.append("message", elements[9].value);
                const data = await fetch("/submit-wizrds-contact-form.php", {
                    method: "POST",
                    body: formData
                });
                let resData = await data.body.getReader().read();
                const text = [];
                resData.value.forEach(charCode => text.push(String.fromCharCode(charCode)));
				if (data.status >= 200 && data.status < 300) {
					p.innerHTML = `<span style='color: white;'>${text.join("")}</span>`;
				} else {
					p.innerHTML = `<span style='color: white;'>${text.join("")}</span>`;
				}
            } catch (err) {
                p.innerHTML = `<span style='color: white;'>${err.message}</span>`;
            }
        }
    </script>

		<!-- Plugins -->
		<script src="/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/5451111d9b.js"></script>
		<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"> </script>
		<script>
			AOS.init({
				offset: 300,
				duration: 2000
			});
		</script>
	</body>
</html>
