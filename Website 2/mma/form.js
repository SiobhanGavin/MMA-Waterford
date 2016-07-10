function validateEmail()
{
	var emailID = document.queryForm.Email.value;
	atpos = emailID.indexOf("@");
	dotpos = emailID.lastIndexOf(".");
	if (atpos < 1 || ( dotpos - atpos < 2) || dotpos+2 >=emailID.length)
	{
		alert("Please enter email in the format something@mail.com")
		document.queryForm.Email.focus();
		return false;
	}
	return( true );
}

function validatemyEmail()
{
	var emailID = document.queryForm.inputEmail.value;
	atpos = emailID.indexOf("@");
	dotpos = emailID.lastIndexOf(".");
	if (atpos < 1 || ( dotpos - atpos < 2) || dotpos+2 >=emailID.length)
	{
		alert("Please enter email in the format something@mail.com")
		document.queryForm.inputEmail.focus();
		return false;
	}
	return( true );
}

function formValidate()
{
	if( document.queryForm.FirstName.value == ""){
		alert("please provide your first name!");
		document.queryForm.FirstName.focus();
		return false;
	}
	if( document.queryForm.LastName.value ==""){
		alert ( "please provide your last name!" );
		document.queryForm.LastName.focus();
		return false;
	}
	if( document.queryForm.LastName.value =="'"){
		alert ("Lastname can only accept letters and white spaces!");
		document.queryForm.LasetName.focus();
		return false;
		
	}
	if( document.queryForm.Email.value == "" ) {
		alert ( "please provide your email address");
		document.queryForm.Email.focus();
		return false;
	}
	else{
		var ret = validateEmail();
		if( ret == false )
		{
			return false;
		}
	}
	if( document.queryForm.Query.value == ""){
		alert ( "Please enter your query!");
		document.queryForm.Query.focus();
		return false;
	}
	return true;
	
}
 
 function registerValidate()
{
	if( document.queryForm.inputUsername.value == ""){
		alert("please create your username!");
		document.queryForm.inputUsername.focus();
		return false;
	}
	if( document.queryForm.inputFirstName.value ==""){
		alert ( "please provide your firstname!" );
		document.queryForm.inputFirstName.focus();
		return false;
	}
	if( document.queryForm.inputLastName.value ==""){
		alert ( "please provide your lastname!" );
		document.queryForm.inputLastName.focus();
		return false;
	}
	if( document.queryForm.inputEmail.value == "" ) {
		alert ( "please provide your email address");
		document.queryForm.inputEmail.focus();
		return false;
	}
	else{
		var ret = validatemyEmail();
		if( ret == false )
		{
			return false;
		}
	}
	if( document.queryForm.inputPassword.value == ""){
		alert ( "Please create a password!");
		document.queryForm.inputPassword.focus();
		return false;
	}
	return true;
	
}

function validateForm() {
	if( document.form1.myusername.value == ""){
		alert("Please enter your username!");
		document.form1.myusername.focus();
		return false;
	}
	if( document.form1.mypassword.value == ""){
		alert("Please enter your password!");
		document.form1.mypassword.focus();
		return false;
	}
	return true;
}

