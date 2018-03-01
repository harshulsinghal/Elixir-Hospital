function showSignupForm()
{
	
	document.getElementById("signup-form").style.display="inline-block";
	document.getElementById("login-form").style.display="none";

}

function showLoginForm()
{
	
	document.getElementById("login-form").style.display="inline-block";
	document.getElementById("signup-form").style.display="none";

}

function validateloginform()
{
	var email= document.getElementById("signup-form").value;
	var password= document.getElementById("signup-form").value;
	var atpos = x.indexOf("@");
	    var dotpos = x.lastIndexOf(".");
	    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
		{
		alert("Enter a valid e-mail address");
		return false;
	    }
	
}


