<!DOCTYPE html>

    <head>
        <meta charset="UTF-8" >
        <link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="main.css">
	<script src="register.js"></script>
        <title>LogIn</title>
	<script>
	function validateloginform()
	{
		var x = document.getElementById("login-form").email.value;
		var password= document.getElementById("login-form").password.value;
		var atpos = x.indexOf("@");
	    var dotpos = x.lastIndexOf(".");
	var flag=0;
	    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
		{
		alert("Enter a valid e-mail address");
		flag=1;
		}
	  if(password="")
		{
		alert("Enter a Password");
		flag=1;
		}
	if(flag)
		return false;
	}
	
			
	</script>
    </head>
    <body>
	
	 <nav class="sidenav deep-purple border large" style="width:10%" >
	  <a href="test.htm" class="hover-yellow"><img src="images/icons/home.png" style="width:50%" ><br>Home<br></a>
	  <a href="main.php" class="hover-yellow"><img src="images/icons/medicines-fill.svg" style="width:50%" ><br>Search<br></a>
	  <a href="register.php" class="hover-yellow"><img src="images/icons/articles-fill.svg" style="width:50%" ><br>Login<br></a>
	  <a href="main.php" class="hover-yellow"><img src="images/icons/doctors-fill.svg" style="width:50%" ><br>Medicines<br></a>
	</nav>
        <div id="fullpage">
 
            <div class="form" id="signup-form">
                <form method="POST" action="registernew.php" onsubmit="return validatesignform()">
			EMAIL<br>
                    <input type="email" name="email" placeholder="email" class="form2"><br><br>
			PASSWORD<br>
                    <input type="password" name="password" placeholder="password" class="form2"><br><br>
                    NAME<br>
		    <input type="text" name="name" placeholder="name" class="form2"><br><br>
			ADDRESS<br>
		    <input type="text" name="address"  placeholder="address" class="form2"><br><br>
			<input class="submit btn" type="submit" value="SUBMIT" >
                </form>
                <span >
                    Already have an account? <span class="signup btn" onclick="showLoginForm()"> Login</span> 
                </span>
            </div>
		<div class="form" id="login-form" >
		<form method="POST" onsubmit="return validateloginform()" action="log.php">	
			EMAIL<br>			
			<input type="email" name="email" placeholder="email" class="form2"><br><br>
			PASSWORD<br>
                    <input type="password" name="password" placeholder="password" class="form2"><br><br>
			<input class="submit btn" type="submit" value="SUBMIT" >
			<span >
                    <br>Don't have an account? <span class="signup btn " onclick="showSignupForm()"> Sign Up</span> 
		</form>
                </span>
		</div>
		
	 
        </div>
    </body>
</html>
