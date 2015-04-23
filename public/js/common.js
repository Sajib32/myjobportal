
// common variable for all step [when new create]
var initialDayString;
var initialMonthString;
var monthArray=new Array(12);
monthArray[0]="January";
monthArray[1]="February";
monthArray[2]="March";
monthArray[3]="April";
monthArray[4]="May";
monthArray[5]="June";
monthArray[6]="July";
monthArray[7]="August";
monthArray[8]="September";
monthArray[9]="October";
monthArray[10]="November";
monthArray[11]="December";

//initialDayString = initialDayString + "<option value='day' selected>Day</option>";
	for (var iDay = 1; iDay <= 31; iDay++ )
		{
		initialDayString = initialDayString + "<option value='"+iDay+"'>"+iDay+"</option>";
		}
//initialMonthString = initialMonthString + "<option value='mon' selected>Mon</option>";
	for (var iMon = 0; iMon <= 11; iMon++ )
		{
		initialMonthString = initialMonthString + "<option value='"+(parseInt(iMon) +1)+"'>"+monthArray[iMon].substring(0,3)+"</option>";
		}

//: used for clear value of a object
//: parameter used "obj"- pass object ID to set value--------Naznin(21-01-06)
function SetValueNull(obj)
	{
	
	
			document.getElementById(obj).value = ""; 
	}
//: used for enable/disable of a object
//: parameter used "obj"-pass object ID--------Naznin(21-01-06)
//: parameter used "objState"- to indicate object state to be (true/false)
function EnableDisable(obj,styleName)
	{
		
		document.getElementById(obj).className =styleName;
		
	}
	function EnableDisable_old(obj,IsActive)
	{
		
		document.getElementById(obj).disabled=IsActive;
	}

	//:
	//:Parameter used "fName" name of the form to submit
	//:parameter used "fAction" action of the submitted form
function IdentifyEditSection(fName,fAction)
	{
	document.getElementById(fName).action =fAction;
	document.getElementById(fName).submit();
	}
//: used for confirmation message if press ok then delete value of a object
//: parameter used "ID"-pass record id to delete --------Naznin(21-01-06)
//: parameter used "tableName"-pass table name info to delete 
//: parameter used "uID"-pass user id for session variable 
function confirmation(ID,tableName)
{

msg="Are you sure, you want to delete this record?";
	var t=window.confirm(msg);
if (t)
 {
	 //location.href="delete.asp?id="+ID+"&tbl="+tableName+"&userID="+uID;
	 location.href="delete.asp?id="+ID+"&tbl="+tableName;
 }
else
{return false;}
}
function confirmation_Em(ID,tableName,strMessageType)
{
if (strMessageType=="Invaite")
{
msg="Are you sure, you want to reject this invitation?";
}
else
{
msg="Are you sure, you want to delete this record?";
	
}
	var t=window.confirm(msg);
if (t)
 {
	 //location.href="delete.asp?id="+ID+"&tbl="+tableName+"&userID="+uID;
	 location.href="delete.asp?id="+ID+"&tbl="+tableName;
 }
else
{return false;}
}


function confirmation_1(ID,tableName,uID,hid)
{

msg="Are you sure, you want to delete this record?";
	var t=window.confirm(msg);

if (t)
	
 {
    		 var xmlhttp;
		
			var str_Message;
            
			 //code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=GetXmlHttpObject();
			
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{                   
					txt = xmlhttp.responseText; 
                    if (txt=="")
                     {
                       alert("System cannot deal your requests at this moment, please try after some times.");             
                     }
                    else
                    {   	
						if (txt.length<3) 
						{
										
						   
							
								uID=parseInt(uID);
								
								data=parseInt(txt);
								 
							   //alert("frist="+data);  
							   
							   
							 if(hid==1)
							  {
								uID1=document.getElementById("intcount").value;
								document.getElementById(uID).style.display="none";
								document.getElementById("intcount").value=parseInt(uID1);
							  }
							 if(hid==2)
							  { 
								uID2=document.getElementById("hTrainingCounter").value;
								document.getElementById("tr"+uID+"").style.display="none";
								document.getElementById("hTrainingCounter").value=parseInt(uID2);
							  }
							 if(hid==3)
							  {
								 uID3=document.getElementById("hPECounter").value;
								document.getElementById("proq"+uID+"").style.display="none";
								document.getElementById("hPECounter").value=parseInt(uID3);
							  }
							if(hid==4)
							  { 
								 uID4=document.getElementById("hExperienceCounter").value;
								document.getElementById("exp"+uID+"").style.display="none";
								document.getElementById("hExperienceCounter").value=parseInt(uID4);
								
							  }
							  if(hid==6)
							  { 
								  uid5=document.getElementById("divCounter").value;
								  document.getElementById("lang"+uID).style.display="none";
								  
							  }
						   
							if( data==0)
							{
							  if(hid==1)
							  {
								document.getElementById("message").style.display="inline";
								document.getElementById("message").innerHTML="<p style='margin-top: 10px;' >Currently no data exist! Please click on the following button to add your academic information.</p>";
							   }
							   if(hid==2)
							  {
							 document.getElementById("tr_message").style.display="inline"; 
							 document.getElementById("tr_message").innerHTML="<p style='margin-top: 10px;' >Currently no data exist! Please click on the following button to add your training information.</p>";
	//document.getElementById("tr_message_1").style.display="inline";
							  }
								if(hid==3)
							  {
							 document.getElementById("proq_message").style.display="inline"; 
							 document.getElementById("proq_message").innerHTML="<p style='margin-top: 10px;' >Currently no data exist! Please click on the following button to add your professional qualification.</p>";
	//document.getElementById("tr_message_1").style.display="inline";
							  }
							if(hid==4)
							{
							
							document.getElementById("exp_message").style.display="inline"; 
							document.getElementById("exp_message").innerHTML="<p style='margin-top: 10px;' >Currently no data exist! Please click on the following button to add your experience.</p>"; 
							//document.getElementById("exp_message_1").style.display="inline";
							}
							if(hid==6)
							{  
							   uid5=document.getElementById("divCounter").value;
							   document.getElementById("lang"+uID).style.display="none";
							   document.getElementById("tableLan").style.display="none";
							   document.getElementById("lang_table_1").style.display="inline";
							   document.getElementById("lang_table_1").innerHTML="<div class=\'container-fluid tab-container\'><div style='padding-left: 0px;' class=\'tab-header col-md-12 col-xs-12\'><div class=\'col-md-7 col-sm-7\'>Language</div> </div><div class=\'col-md-12 col-sm- 12 col-xs-12\'><p style='margin-top: 10px;'>Currently no data exist! Please click on the following button to add your language proficiency.</p></div><div class=\'col-md-12 col-sm- 12 col-xs-12\'> <a href='#Wrapperbox' class='fancybox'> <button onclick='openbox(0,'-6',0,'lang');' id='cmdAdd3' class=\'btn view-btn create-btn\' type='submit'> <i class=\'glyphicon glyphicon-plus-sign icon-padding\'></i>Add Language </button> </a> </div></div>";
							}
							}
							else
							 {
								if(hid==1)
								{
									document.getElementById("message").style.display="none";
								}
								if(hid==2)
								{
									document.getElementById("tr_message").style.display="none";
									//document.getElementById("tr_message_1").style.display="none";
								}
								 if(hid==3)
								{
									document.getElementById("proq_message").style.display="none";
									//document.getElementById("tr_message_1").style.display="none";
								}
								   if(hid==4)
								{
									document.getElementById("exp_message").style.display="none";
									//document.getElementById("tr_message_1").style.display="none";
								}
								 if(hid==6)
								{
									 uid5=document.getElementById("divCounter").value;
									document.getElementById("lang"+uID).style.display="none";
									//document.getElementById("tr_message_1").style.display="none";
								}
							 }
							
							
						   
						}
					}
					return true;
				}
				
								
			}
			xmlhttp.open("GET","delete_new.asp?id="+ID+"&tbl="+tableName,true);
           
			xmlhttp.send(null);
    }
else
{
return false;}
}
function GetXmlHttpObject()
{
	  var xmlHttp=null;
    try
      {
        // Firefox, Opera 8.0+, Safari
        xmlHttp=new XMLHttpRequest();
      }
    catch (e)
      {
        // Internet Explorer
        try
          {
            xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
          }
        catch (e)
          {
            xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
      }
    return xmlHttp;
}

function PassUserID(str1) 
	{
	document.getElementById('hPS').value=str1;
	document.getElementById('formPS_View').submit();
	 }
function SetUpdateableFlag(cntrl)
	{
	document.getElementById(cntrl).value=1;
	}
function CompareDateIsInValid(cBigDate,cSmallDate)
	{

	var bDay;
	var bMon;
	var bYear;
	
	var sDay;
	var sMon;
	var sYear;
//	alert('Into validation');
	//var listArray = stringList.split(",");
	var bArray = cBigDate.split("/");
	var sArray = cSmallDate.split("/");
	
	 bMon=bArray[0];
	 bDay=bArray[1];
	 bYear=bArray[2];
	
	 sMon=sArray[0];
	 sDay=sArray[1];
	 sYear=sArray[2];
	
	if (parseInt(sYear) > parseInt(bYear))
		{
		return true;
		}
	else if(parseInt(sYear) < parseInt(bYear))
		{
			return false;			
		}
	else if(parseInt(sYear) == parseInt(bYear))
		{
			if (parseInt(sMon) > parseInt(bMon))
				{
				return true;
				}
			else if(parseInt(sMon) < parseInt(bMon))
				{
				return false;
				}
			else if(parseInt(sMon) == parseInt(bMon))
				{
					if (parseInt(sDay) > parseInt(bDay))
						{
							return true;
						}
					else
						{
							return false;
						}


				}


		}


	}
	
	
	/*-----Bangla-----------------------------------------*/
function confirmation_BN(ID,tableName)
{

msg="আপনি কি নিশ্চিত, আপনি এই রেকর্ড মুছে ফেলতে চান?";
	var t=window.confirm(msg);
if (t)
 {
	 //location.href="delete.asp?id="+ID+"&tbl="+tableName+"&userID="+uID;
	 location.href="deletebn.asp?id="+ID+"&tbl="+tableName;
 }
else
{return false;}
}

function confirmation_1BN(ID,tableName,uID,hid)
{

msg="আপনি কি নিশ্চিত, আপনি এই রেকর্ড মুছে ফেলতে চান?";
	var t=window.confirm(msg);

if (t)
	
 {
    		 var xmlhttp;
		
			var str_Message;
            
			 //code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=GetXmlHttpObject();
			
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{                   
					txt = xmlhttp.responseText; 
                    if (txt=="")
                     {
                       alert("এই মুহুর্তে সিস্টেম আপনার অনুরোধটি গ্রহণ করতে পারছেনা। অনুগ্রহপূর্বক কিছুক্ষণ পরে আবার চেষ্টা করুন।");             
                     }
                    else
                    {   	
						if (txt.length<3) 
						{
										
						   
							
								uID=parseInt(uID);
								
								data=parseInt(txt);
								 
							   //alert("frist="+data);  
							   
							   
							 if(hid==1)
							  {
								uID1=document.getElementById("intcount").value;
								document.getElementById(uID).style.display="none";
								document.getElementById("intcount").value=parseInt(uID1);
							  }
							 if(hid==2)
							  { 
								uID2=document.getElementById("hTrainingCounter").value;
								document.getElementById("tr"+uID+"").style.display="none";
								document.getElementById("hTrainingCounter").value=parseInt(uID2);
							  }
							 if(hid==3)
							  {
								 uID3=document.getElementById("hPECounter").value;
								document.getElementById("proq"+uID+"").style.display="none";
								document.getElementById("hPECounter").value=parseInt(uID3);
							  }
							if(hid==4)
							  { 
								 uID4=document.getElementById("hExperienceCounter").value;
								document.getElementById("exp"+uID+"").style.display="none";
								document.getElementById("hExperienceCounter").value=parseInt(uID4);
								
							  }
							  if(hid==6)
							  { 
								   document.getElementById("lang"+uID+"").style.display="none";
								  
							  }
						   
							if( data==0)
							{
							  if(hid==1)
							  {
								document.getElementById("message").style.display="inline";
	document.getElementById("message").innerHTML="<tr><td  width='100%'  height='29' bgcolor='#e9ece9' class='BDJLebels_b' ><font color='#2D428D' >বর্তমানে কোন তথ্য বিদ্যমান নেই! আপনার শিক্ষাগত যোগ্যতা যোগ করার জন্য নিচের বাটনে ক্লিক করুন।.</font></td></tr>";
							   }
							   if(hid==2)
							  {
							 document.getElementById("tr_message").style.display="inline"; 
							 document.getElementById("tr_message").innerHTML="<tr><td  width='100%'  height='29' bgcolor='#e9ece9' class='BDJLebels_b' ><font  color='#2D428D'বর্তমানে কোন তথ্য বিদ্যমান নেই! আপনার প্রশিক্ষণের তথ্য যোগ করার জন্য নিচের বাটনে ক্লিক করুন।</font></td></tr>";
	//document.getElementById("tr_message_1").style.display="inline";
							  }
								if(hid==3)
							  {
							 document.getElementById("proq_message").style.display="inline"; 
							 document.getElementById("proq_message").innerHTML="<tr><td  width='100%'  height='29' bgcolor='#e9ece9' class='BDJLebels_b' ><font  color='#2D428D' >বর্তমানে কোন তথ্য বিদ্যমান নেই! আপনার পেশাগত যোগ্যতা যোগ করতে নিচের বাটনে ক্লিক করুন।</font></td></tr>";
	//document.getElementById("tr_message_1").style.display="inline";
							  }
							if(hid==4)
							{
							
							document.getElementById("exp_message").style.display="inline"; 
							document.getElementById("exp_message").innerHTML="<tr><td width='100%' height='29' bgcolor='#e9ece9' class='BDJLebels_b' ><font  color='#2D428D'>বর্তমানে কোন তথ্য বিদ্যমান নেই! আপনার অভিজ্ঞতা যোগ করতে নিচের বাটনে ক্লিক করুন।</font></td></tr>"; 
							//document.getElementById("exp_message_1").style.display="inline";
							}
							if(hid==6)
							{  
							   
							   document.getElementById("lang").style.display="none";
							   document.getElementById("Language").style.display="none";
							   document.getElementById("lang_table").style.display="INLINE";
							   document.getElementById("lang_table").innerHTML="<table width=100% border=0 cellspacing=1 cellpadding=0><tr><td width=100%  bgcolor=#dadce1 class=BDJFormTitle_b>ভাষা<span class=style_SubSectionHeadLine><u></u></span></td></tr></table></td></tr><tr><td id=lan_message colspan=3 height=29 bgcolor=#e9ece9 class=BDJLebels_b ><font  color=#2D428D >বর্তমানে কোন তথ্য বিদ্যমান নেই! আপনার ভাষা দক্ষতা যুক্ত করতে নিচের বাটনে ক্লিক করুন।</font></td></tr><tr><td height=29 bgcolor=#e9ece9 class=BDJLebels_b colspan=3  ><INPUT name=cmdAdd3 type=button class=BDJButton3_b id=cmdAdd3 onClick=openbox(0,-6,1,lang) value=ভাষা যুক্ত করুন style=width:220px;></td></tr></table>";
							}
							}
							else
							 {
								if(hid==1)
								{
									document.getElementById("message").style.display="none";
								}
								if(hid==2)
								{
									document.getElementById("tr_message").style.display="none";
									//document.getElementById("tr_message_1").style.display="none";
								}
								 if(hid==3)
								{
									document.getElementById("proq_message").style.display="none";
									//document.getElementById("tr_message_1").style.display="none";
								}
								   if(hid==4)
								{
									document.getElementById("exp_message").style.display="none";
									//document.getElementById("tr_message_1").style.display="none";
								}
								 if(hid==6)
								{
									document.getElementById("lang_table").style.display="none";
									//document.getElementById("tr_message_1").style.display="none";
								}
							 }
							
							
						   
						}
					}
					return true;
				}
				
								
			}
			xmlhttp.open("GET","delete_newbn.asp?id="+ID+"&tbl="+tableName,true);
           
			xmlhttp.send(null);
    }
else
{
return false;}
}

function confirmation_Em_Bn(ID,tableName,strMessageType)
{
if (strMessageType=="Invaite")
{
msg="আপনি কি নিশ্চিত, আপনি এই আমন্ত্রণ প্রত্যাখ্যান করতে চান?";
}
else
{
msg="আপনি কি নিশ্চিত, আপনি এই রেকর্ড মুছে ফেলতে চান?";
	
}
	var t=window.confirm(msg);
if (t)
 {
	 //location.href="delete.asp?id="+ID+"&tbl="+tableName+"&userID="+uID;
	 location.href="deletebn.asp?id="+ID+"&tbl="+tableName;
 }
else
{return false;}
}


