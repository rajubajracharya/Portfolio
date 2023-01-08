
function checkFormFields()
{
	var errormsg = "";
	if (document.getElementById('mail').value == ""){
		errormsg += "Enter your full name \n";
		document.getElementById('mail').style.bordercolor = "red";
		}	
		
	if (document.getElementById('phone-number').value == ""){
		errormsg += "Enter your phone number \n";
		document.getElementById('phone-number').style.bordercolor = "red";
		}
		
	if (document.getElementById('homepageadd').value == ""){
		errormsg += "Enter your home page \n";
		document.getElementById('homepageadd').style.bordercolor = "red";
		}
		
	if (document.getElementById('feedback').value == ""){
		errormsg += "Enter your feedback \n";
		document.getElementById('feedback').style.bordercolor = "red";
		}
		
		if (errormsg != ''){
		alert(errormsg);
		return false;
		}
}