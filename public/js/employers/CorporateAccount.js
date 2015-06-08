// JavaScript Document

function IsPageValid()
{
	//|-->
	if(document.getElementById("cboCity") != null )
	{
		if(document.getElementById("txtPageType").value == "Insert" )
		{
			document.getElementById("txtCity1").value = document.getElementById("cboCity").value;
		}
	}
	else
	{
		if(document.getElementById("txtPageType").value == "Insert" )
		{
			document.getElementById("txtCity1").value = document.getElementById("txtCity").value;
		}
	}
	
	if(document.getElementById("cboArea") != null)
	{
		if(document.getElementById("txtPageType").value == "Insert" )
		{
			document.getElementById("txtArea1").value = document.getElementById("cboArea").value;
		}
	}		
	//<--|
	
	if(document.getElementById("txtPageType").value == "Insert")
	{
		//USER NAME:
		if (document.getElementById("txtUserName").value.trim() == "")
		{
			alert("User Name field is blank! Please type User Name properly.");
			document.getElementById("txtUserName").focus();
			return false;
		}
	
		//PASSWORD:
		if (document.getElementById("txtPassword").value.trim() == "")
		{
			alert("Password field is blank! Please type your Password properly.");
			document.getElementById("txtPassword").focus();
			return false;
		}
	
		//CONFIRM PASSWORD:
		if (document.getElementById("txtConfirmPassword").value.trim() == "")
		{
			alert("Confirm Password field is blank! Please retype your password.");
			document.getElementById("txtConfirmPassword").focus();
			return false;
		}
	
		//PASSWORD AND CONFIRM PASSWORD MATCHING:
		if (document.getElementById("txtPassword").value.trim() != document.getElementById("txtConfirmPassword").value.trim())
		{
			alert("Your retyped password does not match! Please confirm your password.");
			document.getElementById("txtConfirmPassword").focus();
			return false;
		}
	}
	
    //COMPANY NAME:
	if (document.getElementById("txtCompanyName").value.trim() == "")
	{
		alert("Company Name field is blank! Please type your Company Name properly.");
		document.getElementById("txtCompanyName").focus();
		return false;
	}
    //CONTACT PERSON:
	if(document.getElementById("txtPageType").value == "Insert" )
	{
		if (document.getElementById("txtContactPerson").value.trim() == "")
		{
			alert("Contact Person's name field is blank! Please type Contact Person's name properly.");
			document.getElementById("txtContactPerson").focus();
			return false;
		}
	}
	else
	{
		if (document.getElementById("txtBillingContact").value.trim() == "")
		{
			alert("Contact Person's name field is blank! Please type Contact Person's name properly.");
			document.getElementById("txtBillingContact").focus();
			return false;
		}
	}
    //CONTACT PERSON'S DESIGNATION:
	if (document.getElementById("txtDesignation").value.trim() == "")
	{
		alert("Contact Person's Designation field is blank! Please type Contact Person's Designation properly.");
		document.getElementById("txtDesignation").focus();
		return false;
	}
	//BUSINESS TYPES:
	
	if (numberOfCheckbox<=0)
	{
		alert("Please select at least one industry type");
		//document.getElementById("cboBusinessType").focus();
		return false;
	}
	//COMPANY ADDRESS:
	if (document.getElementById("txtCompanyAddress").value.trim() == "")
	{
		alert("Company Address field is blank! Please type your Company Address properly.");
		document.getElementById("txtCompanyAddress").focus();
		return false;
	}
	
	//COUNTRY:
	if (document.getElementById("cboCountry").value == "-1")
	{
		alert("Country name field is blank! Please select your Country name properly.");
		document.getElementById("cboCountry").focus();
		return false;
	}

	//CITY:
	if(document.getElementById("cboCountry").value == "Bangladesh")
	{
		if (document.getElementById("cboCity").value == "-1" || document.getElementById("cboCity").value == "")
		{
			alert("City field is blank! Please select your City properly.");
			document.getElementById("cboCity").focus();
			return false;
		}
		else
		{
			if(document.getElementById("cboCity").value == "Dhaka" || document.getElementById("cboCity").value == "Narayangonj" || document.getElementById("cboCity").value == "Gazipur")
			{
				if (document.getElementById("cboArea").value == "" || document.getElementById("cboArea").value == "-1")
				{
					alert("Area field is not selected.");
					document.getElementById("cboArea").focus();
					return false;					
				}
			}
		}
	}
	else	
	{
		if(document.getElementById("txtCity").value.trim() == "")
		{
			alert("City field is blank! Please type your City properly.");
			document.getElementById("txtCity").focus();
			return false;			
		}
	}
	
	//BILLING ADDRESS:
	if (document.getElementById("txtBillingAddress").value.trim() == "")
	{
		alert("Billing Address field is blank! Please type your Billing Address properly.");
		document.getElementById("txtBillingAddress").focus();
		return false;
	}
	//CONTACT PHONE:
	if (document.getElementById("txtContactPhone").value.trim() == "")
	{
		alert("Contact Phone field is blank! Please type your Contact Phone properly.");
		document.getElementById("txtContactPhone").focus();
		return false;
	}
	
	//var IsEmailValid = validate_email(document.getElementById("txtEmail").value)
	//return IsEmailValid;
	
	/* Rony Start*/
	var objEmail, strEmail;
	objEmail = document.getElementById("txtEmail");
	strEmail = objEmail.value.trim();
	
	if(strEmail == "")
	{
		alert("EMail Address field is blank! Please type your EMail Address properly.");
		objEmail.focus();
		return false;
	}
	
	if(validate_email(strEmail) == false)
	{
		alert("Invalid Email address! Please type your Email address properly.");
		objEmail.focus();
		return false;
	}
	/* Rony End*/
	
}

function validate_email(dv)  // e-mail validation
{
	if((dv.indexOf('www.', 0) >= 0) ||(dv.indexOf(':', 0) >= 0) || (dv.indexOf(';', 0) >= 0) ||(dv.indexOf('<', 0) >= 0) ||(dv.indexOf('>', 0) >= 0) ||(dv.indexOf('\\', 0) >= 0) ||(dv.indexOf(',', 0) >= 0) ||(dv.indexOf(' ', 0) >= 0) ||(dv.indexOf('/', 0) >= 0) ||(dv.indexOf('@', 0) == -1) || (dv.indexOf('.', 0) == -1)) 
	{
		//alert("Invalid E-Mail Address! Please type your E-Mail Address properly.");
		return false;
	}
	
	apos=dv.indexOf("@")
	dotpos=dv.lastIndexOf(".")

	if (apos<1||dotpos-apos<3 || dotpos+2>=dv.length) 
	{
		//alert("Invalid E-Mail Address! Please type your E-Mail Address properly.");
		return false;
	}
		
	/*apos2=dv.lastIndexOf("@")
	if (apos !=apos2) 
	{
		//alert("Invalid E-Mail Address! Please type your E-Mail Address properly.");
		return false;
	}
	*/
	
	
	/*if (dotpos<2)
	{
		return false
	}
	else 
	{
		return true
	}*/
}

function RestrictKeyword(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
	//alert(charCode);
	if (charCode == 32 || charCode == 39) {
        return false;
    }
	else
	{
		return true;
	}
	
	
}