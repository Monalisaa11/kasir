<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Kasir</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">
				<form action="/login-cek" method="POST">
					<h3>Login Administrator</h3>
					<div class="form-holder">
						@csrf
						<span class="lnr lnr-envelope"></span>
						<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<button>
						<span>Login</span>
					</button>
				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>