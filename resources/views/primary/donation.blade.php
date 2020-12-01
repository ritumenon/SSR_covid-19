<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<title>Donation- SSR</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- HEADER -->
	
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
						<li><a href="">Contact</a></li>
						<li><a href="">Account</a></li>
					</ul>
				</nav>
				<a href="cart.html"><img src="cart1.png" width="30px"></a>	
				<img src="menu.png" width="28px" class="menu-icon" onclick="menutoggle()">	
			</div>
			
		</div>	

		


		<!-- Donation -->
		<div class="container">
			<img src="virus.jpg" class="virus-img" > 
			<h1 class="heading-1">COVID-19 SOLIDARITY</h1> 
			<h1 class="heading-2">RESPONSE FUND </h1>
			<h2 class="heading-3">Help Fight COVID-19</h2>
		</div>	
		


		<!-- blocks for donation and updates-->
	<div class="card">
		<div class="card-text">
			<h1>DONATE NOW</h2>			
			<h2>COVID-19 Solidarity Fund</h2>
			<h3>Click here</h3>
		</div>
	</div>
	<!--<div class="card">
		<a href="https://www.mygov.in/covid-19"><div class="card-text">	</a>		
			<a href="https://www.mygov.in/covid-19"><h1>COVID-19 Updates</h1></a>
		</div>
	</div> -->


	<!-- content-->
	<div class="container">
		<div class="row">
			<div class="col-1 cont-text">
				<p>The world is facing an unprecedented challenge with communities and economies everywhere affected by the growing COVID-19 pandemic. The world is coming together to combat the COVID-19 pandemic bringing governments, organizations from across industries and sectors and individuals together to help respond to this global outbreak. The outpouring of global solidarity and support sparked by this shared challenge has been phenomenal.</p> <br><br>
				<p>SSR Services is leading and contributing, supporting to prevent, detect, and respond to the pandemic.</p>
				<br> <br>

				<h1>How is India responding to COVID-19?</h1>
				<hr>
				<br>
				<h2>Learn about what India is doing to help combat COVID-19.</h2>
				<div class="row">
					<div class="col-2">
						<video width="420" height="400" controls='controls'>
							<source src="Human Origins.mp4" type="video/mp4">	
						</video>
					</div>
					<div class="col-2">
						<img src="corona1.jpg" width="500px" height="400px">
					</div>
				</div>	
			</div>
		</div>
	</div>


	<!-- Latest COVID news-->
	<div class="news">
		<br><br><br><br>
		<h1>COVID-19 news</h1>
		<hr>
		<div class="row">
			<div class="card">
				<div class="img">
					<img src="front.jpg">
				</div>
				<div class="top-text">
					<div class="name">1 September 2020</div>
					<p>Departmental News</p> <br>
					<div class="text">New research helps to increase understanding of the impact of COVID-19 for pregnant women and their babies</div>
					<div class="btn">
						<a href="#">Read more</a>
					</div>	
				</div>
			</div>

			<div class="card">
				<div class="img">
					<img src="front.jpg">
				</div>
				<div class="top-text">
					<div class="name">24 August 2020</div>
					<p>News Release </p><br>
					<div class="text">172 countries and multiple candidate vaccines engaged in COVID-19 vaccine Global Access Facility</div>
					<div class="btn">
						<a href="#">Read more</a>
					</div>	
				</div>
			</div>

			

			<div class="card">
				<div class="img">
					<img src="front.jpg">
				</div>
				<div class="top-text">
					<div class="name">5 April 2020</div>
					<p>Speech</p><br>
					<div class="text">Who Director- General's opening remarks at the media briefing on COVID-19</div>
					<div class="btn">
						<a href="#">Read more</a>
					</div> 	
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






<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js">
	
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
