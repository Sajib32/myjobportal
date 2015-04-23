function personal_info_validation()
{
	var NAME=document.getElementById('txtName').value //form1.txtName.value;//
	var Message=document.getElementById('labMessage');
	var GENDER=document.getElementById('cboGender').value//cboGender			
	var MSTATUS=document.getElementById('cboMStatus').value
	var NATIONALITY=document.getElementById('txtNationality').value//form1.txtNationality.value;//		
	var NATIONALID=document.getElementById('txtNationalId').value
	var PRESENT_ADD=document.getElementById('txtPresentAdd').value//form1.txtPresentAdd.value//
	var PRESENT_LOC=document.getElementById('cboPLocation').options[document.getElementById('cboPLocation').selectedIndex].value;
	
	var PHONE_O=document.getElementById('txtPhone_Off').value//form1.txtPhone_Off.value;//
	var PHONE_H=document.getElementById('txtPhone_H').value//form1.txtPhone_H.value;//
	var MOBILE=document.getElementById('txtMobile').value//form1.txtMobile.value;//
     
    var EMAIL1 =document.getElementById('txtEmail1');//form1.txtEmail1.value;//
	var EMAIL2 =document.getElementById('txtEmail2'); //form1.txtEmail2.value;//	

	var EMAIL_1 =trim_it(document.getElementById('txtEmail1').value);//form1.txtEmail1.value;//
	var EMAIL_2 =trim_it(document.getElementById('txtEmail2').value); //form1.txtEmail2.value;//
	if( NAME.trim()== "")//if( NAME1 == "")	
	{       
		alert('Name field cannot be blank!');
		document.getElementById('txtName').focus();
		return false;
	}       
          
             			
			dt = document.getElementById("txtBirthDate").value;	
			if (dt=="")
               {
					Message.innerHTML="Please enter the valid date of birth .";
					document.getElementById('txtBirthDate').style.backgroundColor="#FFFFCC";
                    
					return false
               }
			  
					
				
				 var strDateType='DOB';
				if (isDate(dt, strDateType)==false)
				{
					 
					
					 document.getElementById('txtBirthDate').style.backgroundColor="#FFFFCC";
						
					return false
				}
				//return true;

 			if (GENDER=="-1")//Gender
				{
				Message.innerHTML='Please select gender.';
				//document.getElementById('cboGender').focus();
                 document.getElementById('cboGender').style.backgroundColor="#FFFFCC";
				return false;
				}
			if (MSTATUS=="-1")//Marital Status
				{
				Message.innerHTML='Please select marital status.';
				//document.getElementById('cboMStatus').focus();
                 document.getElementById('cboMStatus').style.backgroundColor="#FFFFCC";
				return false;
				}
			if(NATIONALITY=="")	// if NATIONALITY==""
			{       
				Message.innerHTML='Check your Nationality.';
				//form1.txtNationality.focus();
				//document.getElementById('txtNationality').focus();
                 document.getElementById('txtNationality').style.backgroundColor="#FFFFCC";
				return false;
			}
            if(NATIONALID!="")	// if NATIONAL ID!=""
			{       
			
              
				if(isNaN(NATIONALID))	
				{
					Message.innerHTML='National ID NO field contain only numeric value!';
					//document.getElementById('txtNationalId').focus();
                    document.getElementById('txtNationalId').style.backgroundColor="#FFFFCC";
					return false;
				}
				else
				{
					if(NATIONALID.lenght >17)	
				{
					Message.innerHTML='National ID field should be limit of 17 characters.';
					//document.getElementById('txtNationalId').focus();
                     document.getElementById('txtNationalId').style.backgroundColor="#FFFFCC";
					return false;
				}
				}
              }
			
			
			if (PRESENT_ADD=="") // if PRESENT_ADD==""
			{
				Message.innerHTML='Present address field cannot be blank!.';
				//document.getElementById('txtPresentAdd').focus();
                document.getElementById('txtPresentAdd').style.backgroundColor="#FFFFCC";				
				
				return false;
			}
			
			if (PRESENT_LOC=="-1") // if PRESENT_LOC==""
			{
				Message.innerHTML='Please select present location.';
				//form1.cboPLocation.focus();
				document.getElementById('cboPLocation').focus();
                 document.getElementById('cboPLocation').style.backgroundColor="#FFFFCC";											
				return false;
			}
			 
			if (PHONE_O=="" && PHONE_H=="" && MOBILE=="")  // if PHONE==""
			{
				Message.innerHTML="Please give at least one contact number.";
				//form1.txtPhone_H.focus();
				//document.getElementById('txtPhone_H').focus();
                 document.getElementById('txtPhone_H').style.backgroundColor="#FFFFCC";
				return false;
			}
			
			if(EMAIL_1 == "") // if Emaol==""
			 {
				Message.innerHTML="Please give one valid e-mail address in Email field.";
				//form1.txtEmail1.focus();
				//document.getElementById('txtEmail1').focus();
                 document.getElementById('txtEmail1').style.backgroundColor="#FFFFCC";
				return false;
	
	          }
	          
			if(EMAIL_1 != "")
			 {
	         	if (CheckEmailaddress(EMAIL1)==false)
					  {
					//form1.txtEmail1.focus();
						//EMAIL1.focus();
                        Message.innerHTML=EMAIL_1+" is not a valid e-mail address! "
						EMAIL1.style.backgroundColor="#FFFFCC";
					return false
                    }
	         }
			 
			 if(EMAIL_2 != "")
			 {
	         	if (CheckEmailaddress(EMAIL2)==false)
					  {
					//form1.txtEmail1.focus();
					//EMAIL2.focus();
						 Message.innerHTML=EMAIL_2+" is not a valid e-mail address! "
                      EMAIL2.style.backgroundColor="#FFFFCC";
					return false
                    }
	         
			 }
             
			
}
function personal_validate(form1,strDateType) {
			var NAME=document.getElementById('txtName').value //form1.txtName.value;//
			var GENDER=document.getElementById('cboGender').value//cboGender			
			var MSTATUS=document.getElementById('cboMStatus').value
			var NATIONALITY=document.getElementById('bangladeshi').value//form1.txtNationality.value;//		
			var NATIONALID=document.getElementById('txtNationalId').value

			var PRESENT_ADD=document.getElementById('txtPresentAdd').value//form1.txtPresentAdd.value//
			var PRESENT_LOC=document.getElementById('cboPLocation').options[document.getElementById('cboPLocation').selectedIndex].value;
			
			var PHONE_O=document.getElementById('txtPhone_Off').value//form1.txtPhone_Off.value;//
			var PHONE_H=document.getElementById('txtPhone_H').value//form1.txtPhone_H.value;//
			var MOBILE=document.getElementById('txtMobile').value//form1.txtMobile.value;//
			var EMAILADDRESS_01=document.getElementById('txtEmail1');
            var EMAILADDRESS_02=document.getElementById('txtEmail2')

			var EMAILADDRESS_1_value =trim_it(EMAILADDRESS_01.value);//form1.txtEmail1.value;//
			var EMAILADDRESS_2_value =trim_it(EMAILADDRESS_02.value); //form1.txtEmail2.value;//
			
			var OBJ=document.getElementById('txtObjective').value//form1.txtObjective.value;//
			var PRESENT_SAL=document.getElementById('txtPresentSalary').value//form1.txtPresentSalary.value;//
			var EXPECTED_SAL=document.getElementById('txtExpectedSalary').value//form1.txtExpectedSalary.value;//
			var KEYWORD=document.getElementById('txtKeyword').value//form1.txtKeyword.value;//
			var PRE_CAT=document.getElementById("selected_Cat").value;
			
			var JOB_LOCATION=document.getElementById("selected_Dist").value;
			if( NAME.trim() == "")//if( NAME1 == "")	
			{       
				alert('Name field cannot be blank!');
				document.getElementById('txtName').focus();
				return false;
			}
             
			// if invalid birth date
			//if(BIRTH_DATE=="")	
//			{       
//				alert('Please enter your Date of Birth.');
//				//form1.txtBirthDate.focus();
//				document.getElementById('txtBirthDate').focus();
//				return false;
//			}
//			else
//			{
//			var today;
//			var birth;
//			birth=new Date(BIRTH_DATE);
//				today=new Date();
//				
//				if (today.getFullYear()-birth.getFullYear()<15 ||  today.getFullYear()-birth.getFullYear()>85)
//				{
//					
//					alert('Age must between 15 to 85 years');
//					return false;
//				}
//			}
			var dt;
		
			
             			
			dt = document.getElementById("cboBDate").value;	
					
			
			if (isDate(dt, strDateType)==false){
               
				document.getElementById('cboBDate').focus();
				return false
			}
				//return true;

 			if (GENDER=="-1")//Gender
				{
				alert('Please select gender.');
				document.getElementById('cboGender').focus();
				return false;
				}
			if (MSTATUS=="-1")//Marital Status
				{
				alert('Please select marital status.');
				document.getElementById('cboMStatus').focus();
				return false;
				}
			if(NATIONALITY.trim()=="")	// if NATIONALITY==""
			{       
				alert('Check your Nationality.');
				//form1.txtNationality.focus();
				document.getElementById('bangladeshi').focus();
				return false;
			}
			

              if(NATIONALID!="")	// if NATIONAL ID!=""
			{       
			
              
				if(isNaN(NATIONALID))	
				{
					alert('National ID NO field contain only numeric value!');
					document.getElementById('txtNationalId').focus();
					return false;
				}
				else
				{
					if(NATIONALID.lenght >17)	
				{
					alert('National ID field should be limit of 17 characters.');
					document.getElementById('txtNationalId').focus();
					return false;
				}
				}
              }
			/*if(RELIGION=="")	// if RELIGION==""
			{       
				alert('Check your Religion.');
				//form1.txtReligion.focus();
				document.getElementById('txtReligion').focus();
				return false;
			}*/
			
			if (PRESENT_ADD.trim()=="") // if PRESENT_ADD==""
			{
				alert('Present address field cannot be blank!.');
				document.getElementById('txtPresentAdd').focus();				
				
//form1.txtPresentAdd.focus();
				return false;
			}
			
			if (PRESENT_LOC=="-1") // if PRESENT_LOC==""
			{
				alert('Please select present location.');
				//form1.cboPLocation.focus();
				document.getElementById('cboPLocation').focus();											
				return false;
			}
			 
			if (PHONE_O.trim()=="" && PHONE_H.trim()=="" && MOBILE.trim()=="")  // if PHONE==""
			{
				alert("Please give at least one contact number.");
				//form1.txtPhone_H.focus();
				document.getElementById('txtPhone_H').focus();
				return false;
			}
			
			if(EMAILADDRESS_1_value.trim() == "") // if Emaol==""
			 {
				alert("Please give one valid e-mail address in Email field.");
				//form1.txtEmail1.focus();
				document.getElementById('txtEmail1').focus();
				return false;
	
	          }
	          
			//E-mail validation
			if(EMAILADDRESS_1_value.trim() != "")
			 {
	         	if(CheckEmailaddress(EMAILADDRESS_01)==false)
                  {
					 alert(EMAILADDRESS_1_value+" is not a valid e-mail address! " );
					   EMAILADDRESS_01.focus();
                       return false;
                   }
					
			}
			 
			 if(EMAILADDRESS_2_value.trim() != "")
			 {
	         	if(CheckEmailaddress(EMAILADDRESS_02)==false)
                  {
					 alert(EMAILADDRESS_2_value+" is not a valid e-mail address! " );
					   EMAILADDRESS_02.focus();
                        return false;
                   }
					  
			 }

			if(OBJ.trim()=="")
			{
				alert('Objective field cannot be blank!');
//				form1.txtObjective.focus();
				document.getElementById('txtObjective').focus();
				return false;
			}
			
						
			/*if(EXPECTED_SAL=="")
			{
				alert('Expected salary field cannot be blank!');
				form1.txtExpectedSalary.focus();
				return false;
			}*/
			
			if(PRE_CAT.trim()=="")
			{
				alert('You have to select at least one preferred category!');
//				form1.lstWorkArea.focus();
document.getElementById("FilterCat").style.backgroundColor="#FFFFCC";
				document.getElementById('lstWorkArea').scrollIntoView();
				//document.getElementById('lstWorkArea').focus();
				
				return false;
			 }
			 
			 if (form1.optJobArea[1].checked)
			 {	
			 	
				if (JOB_LOCATION.trim()=="")
					{
						alert('Please select preferred Job Location!');
						//form1.
						document.getElementById('lstJobArea').scrollIntoView();
						document.getElementById("FilterLocation").style.backgroundColor="#FFFFCC";
						//document.getElementById('lstJobArea').focus();
						return false;
					}
			 }
			
			if(KEYWORD.trim()=="")
			{
				alert('Keyword field cannot be blank!');
				//form1.
				document.getElementById('txtKeyword').focus();
				return false;
			}
// this section used only for step_01
			if(document.getElementById('txtUserName'))
				{
					var USER=document.getElementById('txtUserName').value;
					var PASS1=document.getElementById('txtPassword').value;
					var PASS2=document.getElementById('txtRetypePassword').value;

//--------------------------------------------User Name Validation--------------------------------------------------------------------------------
				if (USER.trim()=="")
					{
						alert('Please enter user name');
						form1.txtUserName.focus();
						return false;
					}
					
					if (USER.length < 5 )
					{
						alert('User name must be at least 5 characters!');
						form1.txtUserName.focus();
						return false;
					}

//dv.indexOf(';', 0) >= 0

					if (USER.indexOf('/', 0) >= 0 )
					{
						alert('User name does not allow /');
						form1.txtUserName.focus();
						return false;
					}
				// If does not work properly
					if (USER.indexOf("\\", 0) >= 0 )
					{
						alert("User name does not allow '\\'");
						form1.txtUserName.focus();
						return false;
					}

					if (USER.indexOf(';', 0) >= 0 )
					{
						alert('User name does not allow ;');
						form1.txtUserName.focus();
						return false;
					}

					if (USER.indexOf(':', 0) >= 0 )
					{
						alert('User name does not allow :');
						form1.txtUserName.focus();
						return false;
					}

					if (USER.indexOf('&', 0) >= 0 )
					{
						alert('User name does not allow & ');
						form1.txtUserName.focus();
						return false;
					}

					if (USER.indexOf('"', 0) >= 0 )
					{
						alert('User name does not allow "');
						form1.txtUserName.focus();
						return false;
					}

					if (USER.indexOf("'", 0) >= 0 )
					{
						alert("User name does not allow '");
						form1.txtUserName.focus();
						return false;
					}

					if (USER.indexOf(' ', 0) >= 0 )
					{
						alert('User Name should be only one word! No space allowed.');
						form1.txtUserName.focus();
						return false;
					}

//-------------------------------------------Password Validation-------------------------------------------------------------------------------------------			
			if(PASS1.trim()=="")
					{
						alert('Please enter your password');
						form1.txtPassword.focus();
						return false;
					}

					if (PASS1.indexOf(' ', 0) >= 0 )
					{
						alert('Password field does not allow sapce!');
						form1.txtPassword.focus();
						return false;
					}

					if (PASS1.indexOf("'", 0) >= 0 )
					{
						alert("Password field does not allow ' ");
						form1.txtPassword.focus();
						return false;
					}
                    if (PASS1.indexOf(")", 0) >= 0 )
					{
						alert("Password field does not allow ) ");
						form1.txtPassword.focus();
						return false;
					}
					if (PASS1.indexOf("(", 0) >= 0 )
					{
						alert("Password field does not allow ) ");
						form1.txtPassword.focus();
						return false;
					}
					if (PASS1.indexOf('"', 0) >= 0 )
					{
						alert('Password field does not allow "');
						form1.txtPassword.focus();
						return false;
					}
					if (PASS1.indexOf(';', 0) >= 0 )
					{
						alert('Password field does not allow ;');
						form1.txtPassword.focus();
						return false;
					}
					if (PASS1.indexOf('&', 0) >= 0 )
					{
						alert('Password field does not allow &');
						form1.txtPassword.focus();
						return false;
					}
                    if (PASS1.length<8)
					{
						alert(' Password must be 8 to 12 characters long .');
						form1.txtPassword.focus();
						return false;
					}
			
			if(PASS2.trim()=="")
					{
						alert('Please re-enter your password.');
						form1.txtRetypePassword.focus();
						return false;
					}
			
			if(PASS1!=PASS2)
					{
						alert('Please be sure of your password \n Enter same password in the fields');
						form1.txtRetypePassword.focus();
						return false;
					}
    var TermsAndCodition=document.getElementById('checkCodition').value;
    
 if (TermsAndCodition.trim()=="")
               {
                   alert("Please select terms and condition."); 
                    form1.document.getElementById('checkCodition').focus();
                   form1.document.getElementById('Continue').disabled=true;
                    
                   return false;
                }
               
//-------------------------------End Password Validation----------------------------------------------------------------------------------
				}
} // end of validate func()
function Career_Application_Validate()
{
 var OBJ=document.getElementById('txtObjective').value
	if(OBJ.trim()=="")
			{
				alert('Objective field cannot be blank!');
			
				document.getElementById('txtObjective').focus();
				return false;
			}
}
function Category_Location_Organization_Validate()
{
var PRE_CAT=document.getElementById("selected_Cat").value;
//			
var JOB_LOCATION=document.getElementById("selected_Dist").value;
var form1=document.getElementById("form1");
if(PRE_CAT=="")
{
	alert('You have to select at least one preferred category!');
//				form1.lstWorkArea.focus();
document.getElementById('lstWorkArea').scrollIntoView();
document.getElementById("FilterCat").style.backgroundColor="#FFFFCC";

	//document.getElementById('lstWorkArea').focus();
	return false;
 }
 
 if (document.getElementById("optJobArea").checked)
 {	
	
	var reLocationType=document.getElementById("optJobArea").value;
	if (reLocationType=="Selection")
	{
		if (JOB_LOCATION=="" && JOB_LOCATION==null)
			{
				alert('Please select preferred Job Location!');
				//form1.
				document.getElementById('lstJobArea').scrollIntoView();
	document.getElementById("FilterLocation").style.backgroundColor="#FFFFCC";
	
				//document.getElementById('lstJobArea').focus();
				return false;
			}
	}
 }
}
function Other_relevant_information()
{
	var KEYWORD=document.getElementById('txtKeyword').value//form1.txtKeyword.value;//
	if(KEYWORD=="")
	{
		alert('Keyword field cannot be blank!');
		//form1.
		document.getElementById('txtKeyword').focus();
		return false;
	}
}

function trim_it(string_txt)
{
elem = string_txt ; ///document.getElementById(filename) ;
 while(elem.charAt(0)==' ')// Ltrim
	{
	elem = elem.substring(1,elem.length);
	}
 while(elem.charAt(elem.length - 1)==' ') // rtrim
	{
	elem = elem.substring(0,elem.length - 1);
	}
 return elem ;

}
function CheckEmailaddress(EmailAddress)
{
   //alert(EmailAddress);
   
	   var filter=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
	  //alert(filter.test(EmailAddress.value));
	  if (!filter.test(EmailAddress.value)) 
	 {
	
	
	   
		return false;
	 }
   
}
//fnc trim_it
// nationality text field disable
//$(document).ready(function(){
//	$(':checkbox #icon').click(function() {
//		
//		 if ($(this).is(':checked')) {
//         	$('input:text #nationality').attr('disabled','disabled');
//    	 } else {
//         	$('input:text #nationality').attr('disabled','disabled');
//    	 }
//	});
//	
//})
//function checkDate(dt)
//{
//	
//		var c=new Date();
//		var d_d= new Date(dt);
//		var d_y=d_d.getYear();
//		var c_y=c.getYear();
//		if ((c_y-d_y)<15||(c_y-d_y)>85)
//		{
//			alert("Invalid");
//			return false;
//		}
//	
//}

function DisableNationality()
{
		 if ($("#bangladeshi").is(':checked')) {
			 $("#otherNationality").val("Bangladeshi");
			
			$("#otherNationality").prop('disabled', true);
    	 } else {
			  $("#otherNationality").val("");
			 $(" #otherNationality").prop('disabled', false);
    	 }
}