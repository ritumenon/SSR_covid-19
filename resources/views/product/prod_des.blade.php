<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<title>Product_desc- SSR</title>
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

	<!-- product description(single) -->
	
	<div class="small-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="masks/mask1.jpg" width="100%">
			</div>
			<div class="col-2">
				<p>{{$product->name}}</p>
				<h1>N95 Mask</h1>
				<h4>$20.00</h4>
				<select>
					<option>Select size</option>
					<option>Small</option>
					<option>Medium</option>
					<option>Large</option>
				</select>
				<input type="number" value="1">
				<a href="/add_to_cart/{{$product->id}}" class="btn">Add To Cart</a>
				<h3>Product Details <i class="fa fa-chevron-circle-right"></i></h3><br>
				<p>An N95 respirator is a respiratory protective device designed to achieve a very close facial fit and very efficient filtration of airborne particles. Note that the edges of the respirator are designed to form a seal around the nose and mouth.</p>
			</div>	
		</div>
	</div>

	<!-- related and view more option -->
	<div class="small-container">
		<div class="row row-2">
			<h2>Related Products</h2>
			<a href="product.html"><p>View More</p></a>
		</div>
	</div>	

	<!-- all products-->
	<div class="small-container">	
		

		<div class="row">
			<div class="col-4">
				<img src="masks/mask1.jpg">
				<h4>Mask 1</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p> $20.00</p>
			</div>	
			<div class="col-4">
				<img src="masks/mask1.jpg">
				<h4>Mask 2</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p> $20.00</p>
			</div>
			<div class="col-4">
				<img src="masks/mask2.jpg">
				<h4>Mask 3</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p> $20.00</p>
			</div>
			<div class="col-4">
				<img src="masks/mask3.jpg">
				<h4>Mask 4</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p> $20.00</p>
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
