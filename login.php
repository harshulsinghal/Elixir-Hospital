<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" >
        <link rel="stylesheet" href="login.css">
	<script src="fun.js"></script>
        <title>LogIn</title>
    </head>
    <body>
        <div id="fullpage">
            <div id="header" >
                <center><span></span></center>
            </div>
            <div class="form" id="signup-form">
                <form method="POST" action="registernew.php">
                    <input type="email" name="email" placeholder="email">
                    <input type="password" name="password" placeholder="password">
                    
		    <input type="text" name="name" placeholder="name" >
		    <input type="text" name="address"  placeholder="address">
			<input class="submit" type="submit" value="SUBMIT">
                </form>
                <span >
                     have an account? <span class="signup" onclick="showLoginForm()"> Login Up</span> 
                </span>
            </div>
		<div class="form" id="login-form">
			
			<input type="email" name="email" placeholder="email">
                    <input type="password" name="password" placeholder="password">
			<span >
                    Don't have an account? <span class="signup" onclick="showSignupForm()"> Sign Up</span> 
                </span>
		</div>
	 
        </div>
    </body>
</html>
