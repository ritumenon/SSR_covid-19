<!DOCTYPE html>
<html>
<head>
	<title>Login And Registration</title>
	<link rel="stylesheet" type="text/css" href="styleregistration.css">
</head>
<style>
</style>
<body>
	<!--HEADER-->
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
						<li><a href="registration.html">Account</a></li>
					</ul>
				</nav>
				<a href="cart.html"><img src="cart1.png" width="30px"></a>
				<img src="menu.png" width="28px" class="menu-icon" onclick="menutoggle()">	
			</div>
			
		</div>	
	</div>

<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Login</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
		    
		    <form id="login" class="input-group" method='POST' action='/login'>
            @csrf
			@if($errors->has('email'))
                                        <label>{{$errors->first('email')}}</label>
                                        @endif
			
				<input type="text" class="input-field" name='email' placeholder="E-mail"required>
		    	@if($errors->has('password'))
                                        <label>{{$errors->first('password')}}</label>
                                        @endif
				
				<input type="password" class="input-field" name='password' placeholder="Enter Password"required pattern=".{8,}" title="Eight or more characters">
		    	<input type="checkbox" class="check-box"><span>Remember Password</span>
		    	<button type="submit" class="submit-btn">Login</button>
		    </form>

		    <form id="register" class="input-group" method='POST' action='/register'>
            @csrf
			@if($errors->has('name'))
                                        <label>{{$errors->first('name')}}</label>
                                        @endif
		    	<input type="text" class="input-field" name='name' placeholder="Name"required>
		    	@if($errors->has('email'))
                                        <label>{{$errors->first('email')}}</label>
                                        @endif
				<input type="email" class="input-field" name='email' placeholder="Email Id"required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                @if($errors->has('password'))
                                        <label>{{$errors->first('password')}}</label>
                                        @endif
				<input type="password" class="input-field" name='password' placeholder="Enter Password"required pattern=".{8,}" title="Eight or more characters">
		    	@if($errors->has('address'))
                                        <label>{{$errors->first('address')}}</label>
                                        @endif
				<input type="text" class="input-field"name='address' placeholder="Address"required>
		    	@if($errors->has('pincode'))
                                        <label>{{$errors->first('pincode')}}</label>
                                        @endif
				<input type="text" class="input-field" name='pincode' placeholder="Pincode"required pattern="[0-9]{6}">
		    	@if($errors->has('contact'))
                                        <label>{{$errors->first('contact')}}</label>
                                        @endif
				<input type="text" class="input-field" name='contact' placeholder="Contact Number"required pattern="[0-9]{10}">
		    	<input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
		    	<button type="submit" class="submit-btn">Register</button>
		    </form>
		</div>

    			
	</div>

	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

		function register()
		{
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}

		function login()
		{
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0px";
		}
	</script>



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


</body>
</html>