
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #4e4e4e;
	background: #e2e2e2;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	background: #f2f2f2;
	font-size: 16px;
	border-color: transparent;
	box-shadow: none !important;
}
.form-control:focus {
	border-color: #91d5a8;
	background: #e9f5ee;
}
.form-control, .btn {        
	border-radius: 2px;
}
.login-form {
	width: 380px;
	margin: 0 auto;
}
.login-form h2 {
	margin: 0;
	padding: 30px 0;
	font-size: 34px;
}
.login-form .avatar {
	margin: 0 auto 30px;
	width: 100px;
	height: 100px;
	border-radius: 50%;
	z-index: 9;
	background: #4aba70;
	padding: 15px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.login-form .avatar img {
	width: 100%;
}
.login-form form {
	color: #7a7a7a;
	border-radius: 4px;
	margin-bottom: 20px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;		
}
.login-form .btn, .login-form .btn:active {
	font-size: 16px;
	line-height: 26px;
	min-width: 120px;
	font-weight: bold;
	background: #4aba70 !important;
	border: none;		
}
.login-form .btn:hover, .login-form .btn:focus{
	background: #40aa65 !important;
}
.form-check-label {
	margin-top: 9px;
}
.form-check-label input {
	margin-top: 3px;
}
.login-form a {
	color: #4aba70;
}	
.login-form a:hover {
	text-decoration: underline;
}
.hint-text {
	color: #999;
	text-align: center;
	padding-bottom: 15px;
}
</style>
</head>
<body>

<div class="login-form">
	
    <form action="login_submit.php" method="post">
        <div>
        <h2>Login</h2>
		<p>Please fill to login!</p>
		<hr> 
    </div> 
        <div class="form-group">
        	<input type="email" class="form-control input-lg" name="email" placeholder="Email" required="required">	
        </div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
			<a href="#">Forgot_Password?</a>
        </div>        
        <div class="form-group clearfix">
			<label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <button type="submit" class="btn btn-primary btn-lg float-right">Sign in</button>
        </div>
        <div class="hint-text">Don't have an account? <a href="signup.php">Sign up here</a></div>		
    </form>
	
</div>
</body>
</html>