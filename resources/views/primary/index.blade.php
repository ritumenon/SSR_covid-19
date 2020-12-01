<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<title>SSR SERVICES_ritu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>
<body>
	<!-- HEADER -->
	<div class="header">
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<a href="index.html"><img src="logo.png" width="90px"></a>
				</div>
				<nav>
					<ul id="MenuItems">
						<li><a href="index.html">Home</a></li>
						<li><a href="product.html">Products</a></li>
						<li><a href="">About</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="">Account</a></li>
					</ul>
				</nav>
				<a href="cart.html"><img src="cart1.png" width="30px"></a>	
				<img src="menu.png" width="28px" class="menu-icon" onclick="menutoggle()">	
			</div>
			<div class="row">
				<div class="col-2">
					<h1>We will win against Corona!</h1>
					<p>Let's join hands together and fight against this pandemic.</p>
					<br><br><h2>Find all Corona prevention commodities here</h2>
					<a href="product.html" class="btn">Shop Now &#10003;</a>
				</div>
				<div class="col-2">
					<!--<img src="corona1.jpg" width="100%"> -->
					<div class="carousel" data-flickity='{"autoPlay":true}'>
						<div class="carousel-cell">
							<img class="des1" src="corona2.jpg" width="450px">
						</div>
						<div class="carousel-cell">
							<img class="des2" src="corona3.jpg" width="450px">
						</div>	
						<div class="carousel-cell">
							<img id="des3" src="reduce_effects.png" width="450px">
						</div>	
					</div>				

				</div>
			</div>	
		</div>	
<!-- THREE PRODUCTS TO BE SOLD-->
	<br><br><br><br><br>
	<h2 class="title"> Products we sell</h2>
	<div class="categories">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<img src="ppe1.jpg" width="100%" height="290px">
					<h2><center>PPE Kits</center></h2>
				</div>
				<div class="col-3">
					<img src="mask3.jpg" width="100%" height="290px">
					<h2><center>Masks</center></h2>
				</div>
				<div class="col-3">
					<img src="godrej.jpg" width="100%" height="290px">
					<h2><center>Sanitizers</center></h2>
				</div>
			</div>
		</div>	
	</div>					
<!-- DONATIONS -->
	<div class="donation">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<!--<img src="donation1.jpg" class="donation-img" width=550px> -->
					<div class="carousel" data-flickity='{"autoPlay":true}'>
						<div class="carousel-cell">
							<img class="des1" src="donation1.jpg" width="500px">
						</div>
						<div class="carousel-cell">
							<img class="des2" src="donation2.jpg" width="500px" height="280px">
						</div>	
						<div class="carousel-cell">
							<img class="des3" src="donation3.jpg" width="500px" height="280px">
						</div>
					</div>
				</div>
				<div class="col-2">
					<p> The world has never faced a crisis like COVID-19. The pandemic is impacting communities everywhere.</p>
					<h1><b>Donate Now</b></h1>
					<small>Click on the DONATE NOW button below to donate to the COVID-19 Response Fund through this secure digital portal. </small>
					<br>
					<a href="donation.blade.php" class="btn">Donate Now &#10003;</a>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER-->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3> Download Our App</h3>
					<p>Download our app for Android and ios mobile</p>
					<div class="app-logo">
						<img src="foot_img1.png">
						<img src="foot_img2.png" height="35px">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="logo.png">
					<p>Do find more corona updates on our site</p>
				</div>
				<div class="footer-col-3">
					<h3> Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Blog Post</li>
						<li>Return Policy</li>
						<li>Join Affiliate</li>
					</ul>
				</div>
				<div class="footer-col-4">
					<h3> Follow us</h3>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagram</li>
						<li>YouTube</li>
					</ul>
				</div>	
			</div>	
			<hr>
			<p class="copyright">Copyright 2020- SSR Services</p>	
		</div>			
	</div>				





<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	
<!-- menu-toggle-->
<script>
var MenuItems= document.getElementbyId("MenuItems");
MenuItems.style.maxHeight = "0px";

function menutoggle(){
	if(MenuItems.style.maxHeight == "0px")
	{
		MenuItems.style.maxHeight = "200px";
	}
	else
	{
		MenuItems.style.maxHeight = "0px";
	}
}
</script>



</body>
</html>

	