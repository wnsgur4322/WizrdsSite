<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Wizrds LLC.</title>

		<!-- Additional CSS Files -->
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="/css/wizerd.css">
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
	</head>

	<body>
		<header class="header-area header-sticky">
			<div class="container" style="max-height: 80px;">
						<nav class="main-nav">
							<ul class="nav" style="width: 50px">
							<button class="wand" id="wand" onclick="toggleActive(this);" style="background-color: transparent; border: 0px; margin-right: 10px;">
								<img class="wand" src="/img/wand.svg" alt="logo">
							</button>
							</ul>

							<!-- ***** Menu Start ***** -->
							<ul class="nav" id="nav-bar" style="visibility: hidden; opacity: 0; transition: visibility 0s, opacity 0.2s linear;">
								<li class="scroll-to-section"><a href="#mission">Mission & Values</a></li>
								<li class="scroll-to-section"><a href="#services">Our Services</a></li>
								<li class="scroll-to-section"><a href="#contact-us">Contact Us</a></li>
								<li class="scroll-to-section"><a href="#footer">Team</a></li>
							</ul>
							<!-- ***** Menu End ***** -->
							<div class="header-logo">
							<a href="index.html" class="header-logo" style="margin: 0 auto">
								<img class="header-logo" src="/img/wizrds_logo.png" alt="logo">
							</a>
							</div>
						</nav>
			
			</div>
		</header>
		<br><br>
		
		<div class="mission-div" id="mission">
		<p class="mission">Mission & Values </p>
		<p class="dis-">The Wizrds are a highly-skilled team of programmers whose mission is to develop dreams. 
			We take pride in helping our clients make their visions a reality.</p>
		</div>
		<div class="values-Container">
			<div class="value-1">
			
				<img class="value-img-1 value-img" src="/img/values/collabrtion.v2.svg" alt="logo">
				<p class="head">Collaboration</p>
				<p class="dis">We commit to working with our clients to make their visions a reality.</p>
			
			</div>
			<div class="value-2">
				
				<img class="value-img-2 value-img" src="/img/values/Creativity.svg" alt="logo">
				<p class="head">Creativity</p>
				<p class="dis">We believe in being bold in design to manifest the dreams of our clients.</p>
			
				
			</div>
			<div class="value-3">
				
				<img class="value-img-3 value-img" src="/img/values/intgrtiyVe2.svg" alt="logo">
				<p class="head">Integrity</p>
				<p class="dis">We strive to be honest and true to the principles & practice of software development.</p>
			
				
			</div>
		</div>
		<br><br>
		<div class="scroll-down scroll-to-section"><a href="#services">
			<i type="button" class="fa fa-arrow-down fa-lg" onClick="document.getElementById('services').scrollIntoView();">
			</i></a>
		</div>

		<!-- Services section -->
		<div class="our-services" id="services">
			<p>Our Services</p>
		</div>
	
		<!-- Web Development Section -->
		<div class="web-container">
		<div class="screen-svg">
		<img class="screen-svg" src="/img/services/CompterVs2.svg" alt="svg">
		</div>
		<div class="description">
		<h2 class="header">Website Development</h2>
		<p class="price">Custom Website From Scratch $500 - $5000</p>
		<p>Conjure up a custom website for your business.</p>
		<button  class="order-butt" type="button" onclick="chooseWebdev()">Inquire</button>
		</div>
		</div>
		<div class="border"> </div>
			
		<!-- App Development Section -->
		<div class="app-container">
		<div class="phone-svg">
		<img class="phone-svg" src="/img/services/phone.svg" alt="svg">
		</div>
		<div class="app-description">
		<h2 class="header">App Development</h2>
		<p class="price">Custom App From Scratch $5000 - $50000</p>
		<p class="app-discription">Conjure up a mobile app for your business.</p>
		<button  class="order-butt" type="button" onclick="chooseAppdev()">Inquire</button>
		</div>
		</div>
		<div class="border"> </div>
			
		<!-- design Section -->
		<div class="design-container">
		<div class="laptop-svg">
		<img class="laptop-svg" src="/img/services/laptop.svg" alt="svg">
		</div>
		<div class="description">
		<h2 class="header">Design</h2>
		<p class="price">Wireframing or CSS Programming $250 - 1500$</p>
		<p>A concoction of fresh UI/UX features to make your website or app irresistible to your clients.</p>
		<button  class="order-butt" type="button" onclick="chooseDesign()">Inquire</button>
		</div>
		</div>

		<br><br>
		<br><br>
		<div class="scroll-down scroll-to-section"><a href="#contact-us">
			<i type="button" class="fa fa-arrow-down fa-lg" onClick="document.getElementById('contact-us').scrollIntoView();">
			</i></a>
		</div>

		<!-- ***** Contact Us Area Starts ***** -->
		<section class="section" id="contact-us">
			<div class="container">
				<h2 class="contact-title">Contact Wizrds</h2>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12">
				<div class="centering">
					<img class="contact-img" src="/img/Contact_Wizrd.svg" alt="logo">
				</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
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
							<option disabled selected>Choose product type *</option>
							<option value="website development">website development</option>
							<option value="app development">app development</option>
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
		</section>
		<br><br>
		<div class="scroll-down scroll-to-section"><a href="#footer">
			<i type="button" class="fa fa-arrow-down fa-lg" onClick="document.getElementById('footer').scrollIntoView();">
			</i></a>
		</div>
	
		<!-- ***** Footer Start ***** -->
		<footer id="footer">
			<div class="team-div">
				<p class="team-title">Team</p>
				<div class="grid-container">
				<p class="sub-head">Waverly Hampton III</p>
				<p class="sub-head">Caleb Bender</p>
				<p class="sub-head">Derek Jeong</p>
				<p class="sub-head">Tariq Elamin</p>
				<img src="/img/profiles/waverly_profile.jpg" alt="Avatar" class="grid-item avatar">
				<img src="/img/profiles/caleb_profile.png" alt="Avatar" class="grid-item avatar">
				<img src="/img/profiles/Derek_profile.jpg" alt="Avatar" class="grid-item avatar">
				<img src="/img/profiles/tariq_profile.jpg" alt="Avatar" class="grid-item avatar">
				<p class="dis">CEO</p>
				<p class="dis">Back-end Developer</p>
				<p class="dis">Front-end Developer</p>
				<p class="dis">UX/UI Designer</p>
				</div>
			</div>
			<div class="bottom-container">
			<div class="row">
				<div class="col-lg-6 col-xs-12">
				<div class="left-text-content">
					<div class="row">
						<div class="col-md-2 col-xs-4" id="bottom-logo-1">
						<img class="footer-logo" src="/img/wizrds_logo.png" alt="logo">
						</div>
						<div class="col-md-2 col-xs-4" id="bottom-logo-2" style="padding-right: 0;">
							<img class="MWI-logo" src="/img/MWI_logo.png" alt="logo">
							</div>
						<div class="col-md-6 col-xs-6">
						<p>Copyright &copy; <?php date_default_timezone_set("America/Los_Angeles"); echo date("Y"); ?> Wizrds LLC.</p>
						</div>
					</div>
				</div>
				</div>
				<div class="col-lg-6 col-xs-12">
				<div class="right-text-content">
					<ul class="social-icons">
						<li><p>Follow Us</p></li>
						<li><a rel="nofollow" href="https://fb.com/wizrdsLLC"><i class="fa fa-facebook"></i></a></li>
						<li><a rel="nofollow" href="https://fb.com/wizrdsLLC"><i class="fa fa-twitter"></i></a></li>
						<li><a rel="nofollow" href="https://fb.com/wizrdsLLC"><i class="fa fa-linkedin"></i></a></li>
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
		<script src="/js/index.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/5451111d9b.js"></script>
	</body>
</html>
