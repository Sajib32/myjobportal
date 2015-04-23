
var numberOfCheckbox=0;


function getChkValue(id,strElementName,strAddTagName,intCount,strHiddenCount,strCheckBoxName)
{
	
	isChecked=document.getElementById(id+strCheckBoxName).checked;
	if (document.getElementById(strHiddenCount)==null)
	{
		var strCount=0;
	}
	else
	{
		var strCount=document.getElementById(strHiddenCount).value;
	}
	
	if(isChecked)
	{
	  if (intCount!=0)
	  {
		if(strCount>=parseInt(intCount))
		{
			if (parseInt(intCount)==2)
			{
				mess="You cannot add more than 2 working sector!";
			}
			else if (parseInt(intCount)==3)
			{
				mess="You cannot add more than 3 area of experience!";
			}
			else if (parseInt(intCount)==12)
			{
				mess="You cannot add more than 12 organization!";
			}
			else if (parseInt(intCount)==15)
			{
				mess="You cannot add more than 15 districts!";
			}
			else if(parseInt(intCount)==10)
			{
				if (strAddTagName=="FilterLocation")
				{
					mess="You cannot add more than 10 countries!";
				}
				else if(strAddTagName=="FilterItems")
				{
					mess="You cannot add more than 10 Companies!";
				}
				else if (strAddTagName=="FilterOverseas")
				{
					mess="You cannot add more than 10 Country!";
				}
				else
				{
					mess="You cannot add more than 10 Skills!";

				}
				
			}
			alert(mess);
			document.getElementById(id+strCheckBoxName).checked=false;
			return false;
		}
	  }
		
		for(i = 0 ; i < strCount ; i++)// find duplicate
				{
					//alert(document.getElementById("Hid"+strCheckBoxName+i+""));
					if (document.getElementById("Hid"+strCheckBoxName+i+"")=="" || document.getElementById("Hid"+strCheckBoxName+i+"")==null )
					{
						
						i=i+1;
						var strHidValue=document.getElementById("Hid"+strCheckBoxName+i+"");
						
						//addDiv(id,strAddTagName,strElementName,strHiddenCount,strCheckBoxName);
						
					}
					else
					{
						var strHidValue=document.getElementById("Hid"+strCheckBoxName+i+"")	

					}
					if(strHidValue!=null)
					{
						if (id==strHidValue.value) 
							{
								alert("Already exist!");
								document.getElementById(id+strCheckBoxName).checked=false;
								
								return false;
							}
					}
				
					
				}//en
		
		
			addDiv(id,strAddTagName,strElementName,strHiddenCount,strCheckBoxName);
				var strCompanyId=document.getElementById(strElementName);
           
			strCompanyId.value=addValue(id,strElementName,strCompanyId.value);
		
		
	}
	else
	{
		removeDiv(id,1,strElementName,strHiddenCount,strCheckBoxName);
		//strCompanyId.value=addValue(id,strElementName);
		
	}
}
function getChkValueBn(id,strElementName,strAddTagName,intCount,strHiddenCount,strCheckBoxName)
{
	
	isChecked=document.getElementById(id+strCheckBoxName).checked;
	if (document.getElementById(strHiddenCount)==null)
	{
		var strCount=0;
	}
	else
	{
		var strCount=document.getElementById(strHiddenCount).value;
	}
	
	if(isChecked)
	{
	  if (intCount!=0)
	  {
		if(strCount>=parseInt(intCount))
		{
			if (parseInt(intCount)==2)
			{
				mess="আপনি ২ এর অধিক কাজের সেক্টর যোগ করতে পারবেন না!";
			}
			else if (parseInt(intCount)==3)
			{
				mess="আপনি ৩ এর অধিক অভিজ্ঞতা যোগ করতে পারবেন না!";
			}
			else if (parseInt(intCount)==12)
			{
				mess="আপনি ১২ এর অধিক প্রতিষ্� ান যুক্ত করতে পারবেন না!";
			}
			else if (parseInt(intCount)==15)
			{
				mess="আপনি ১৫ এর অধিক জেলা যুক্ত করতে পারবেন না!";
			}
			else if(parseInt(intCount)==10)
			{
				if (strAddTagName=="FilterLocation")
				{
					mess="আপনি ১০ এর অধিক দেশ যুক্ত করতে পারবেন না!";
				}
				
				else if(strAddTagName=="FilterItems")
				{
					mess="আপনি ১০ এর অধিক কোম্পানি যুক্ত করতে পারবেন না!";
				}
				else if (strAddTagName=="FilterOverseas")
				{
					mess="আপনি ১০ এর অধিক দেশ যুক্ত করতে পারবেন না!";
				}
				else
				{
					mess="আপনি ১০ এর অধিক দক্ষতা যুক্ত করতে পারবেন না!";
				}
			}
			alert(mess);
			document.getElementById(id+strCheckBoxName).checked=false;
			return false;
		}
	  }
		
		for(i = 0 ; i < strCount ; i++)// find duplicate
				{
					//alert(document.getElementById("Hid"+strCheckBoxName+i+""));
					if (document.getElementById("Hid"+strCheckBoxName+i+"")=="" || document.getElementById("Hid"+strCheckBoxName+i+"")==null )
					{
						
						i=i+1;
						var strHidValue=document.getElementById("Hid"+strCheckBoxName+i+"");
						
						//addDiv(id,strAddTagName,strElementName,strHiddenCount,strCheckBoxName);
						
					}
					else
					{
						var strHidValue=document.getElementById("Hid"+strCheckBoxName+i+"")	

					}
					
					if (id==strHidValue.value) 
						{
							alert("ইতিমধ্যে বিদ্যমান!");
							document.getElementById(id+strCheckBoxName).checked=false;
							
							return false;
						}
					
				}//en
		
		
			addDiv(id,strAddTagName,strElementName,strHiddenCount,strCheckBoxName);
				var strCompanyId=document.getElementById(strElementName);
           
			strCompanyId.value=addValue(id,strElementName,strCompanyId.value);
		
		
	}
	else
	{
		removeDiv(id,1,strElementName,strHiddenCount,strCheckBoxName);
		//strCompanyId.value=addValue(id,strElementName);
		
	}
}

//function removeComapnyId(id)
//{
//	var strCompanyId=document.getElementById("block_cp_id");
//	strCompanyId.value=removeValue(id);
//	
//}
function addValue(id,strTagName,hid)
{
	//var hid=document.getElementById(strTagName).value;
	
	var str="";
	
	
		if( hid!="")
		{
			//hid=hid.replace(",","");
		  if (hid.length==0)
		  {
			str=","+id+",";
		  }
		  else
		  {
			  str=hid+id+",";
		  }
			
		}
		else
		{
			str=id;
			str=","+str + ",";
		}
	
	//str=","+str + ",";
	return str;
}
function removeValue(id,str_TagName)
{
	
	var hid=document.getElementById(""+str_TagName+"").value;
	
	
	var str="";
	if( hid!="")
	{
		var hid_1=String(hid).substr(1,hid.lenght);
		
		var iLen = String(hid_1).length;
		var len= String(hid_1).substring(-iLen, iLen - 1);
	
		var temp = new Array();
		temp = len.split(",");
		
	
		if (temp.indexOf(""+id+"")>-1)
		{
		temp[temp.indexOf(""+id+"")]="";
			for (i in temp)
			{
				if (temp[i]!="" )
				{
				 str=str+temp[i]+",";
				}
				
			}
			
			if (str!="")
			{
			str=","+str;
			}
			else
			{
				str="";
			}
			
		}
		
	}
	else
	{
		str="";
	}
	
	return str;

}


function addDiv(id,strAddTagName,strHidIdTag,strHiddenCount,strCheckBoxName)
{
	var stringValue=document.getElementById("Value"+strCheckBoxName+id).innerHTML;
	checkboxId=document.getElementById(id);
	var str_hidCount="";
	if (document.getElementById(strHiddenCount)==null ||document.getElementById(strHiddenCount).value=="")
	{
		var strValue=0;
		str_hidCount="<input id='"+strHiddenCount+"' name='"+strHiddenCount+"' type='hidden' value=''>";
	}
	else
	{
 	 var strValue=document.getElementById(strHiddenCount).value;
	 str_hidCount="";
	}
	 if (document.getElementById("Hid"+strCheckBoxName+strValue+"")==""||document.getElementById("Hid"+strCheckBoxName+strValue+"")==null )
	 {
		 var i=strValue;
	 }
	 else
	 {
		 
		
		 
		  var i=strValue+1;
		 
	 }
	 
	
	div="<div id='"+strCheckBoxName+"DIV"+id+"' class ='well well-sm'>"+stringValue+"<a href=javascript:removeDiv("+id+",0,'"+strHidIdTag+"','"+strHiddenCount+"','"+strCheckBoxName+"');><div class='business_type_close' >X</div></a><input type='hidden' id='Hid"+strCheckBoxName+i+"' name='Hid"+strCheckBoxName+i+"' value="+id+">"+str_hidCount+"</div>"
	
	numberOfCheckbox=$("input[name='chkBolckCM']").filter(':checked').length;
	
	selectedIdHTML=document.getElementById(strAddTagName);

	selectedIdHTML.innerHTML=selectedIdHTML.innerHTML+div;
	
		strValue=parseInt(strValue)+1;
	 
    document.getElementById(strHiddenCount).value=strValue;
	
		
	//if(numberOfCheckbox>0)
//	{
//		document.getElementById("strHeader").style.display="";
//	}
//	else
//	{
//		document.getElementById("strHeader").style.display="none";
//	}
	//alert(value);
}

function removeDiv(id,hasChkBoxExit,strTag,strHidCount,strCheckBoxName)
{
	
	selectedId=document.getElementById(strCheckBoxName+"DIV"+id);
	
	
	if(selectedId!=null)
	{
		
		document.getElementById(strCheckBoxName+"DIV"+id).outerHTML="";
	}
	if (parseInt(hasChkBoxExit)==1)
	{
		checkboxId=document.getElementById(id+strCheckBoxName);
		if(checkboxId.checked)
		{
			checkboxId.checked=false;
		}
		numberOfCheckbox=$("input[name='chkBolckCM']").filter(':checked').length;
		var strValue=removeValue(id,strTag);
		var strValue_1=document.getElementById(strHidCount).value;
		strValue_1=parseInt(strValue_1)-1;
		document.getElementById(strHidCount).value=strValue_1;
		var strCompanyId=document.getElementById(strTag);
		document.getElementById(id+strCheckBoxName).checked=false;
		strCompanyId.value=strValue;
		
	}
	else
	{
		var strCompanyId=document.getElementById(strTag);
		  strCompanyId.value=removeValue(id,strTag);
		
		var strValue_1=document.getElementById(strHidCount).value;
		strValue_1=parseInt(strValue_1)-1;
		document.getElementById(strHidCount).value=strValue_1;
		
		
		document.getElementById(id+strCheckBoxName).checked=false;
		//strCompanyId.value=strValue;
		
	}
	
	
	
	
	
}

function removeDivBn(id,hasChkBoxExit,strTag,strHidCount,strCheckBoxName)
{
	
	selectedId=document.getElementById(strCheckBoxName+"DIV"+id);
	
	
	if(selectedId!=null)
	{
		
		document.getElementById(strCheckBoxName+"DIV"+id).outerHTML="";
	}
	if (parseInt(hasChkBoxExit)==1)
	{
		checkboxId=document.getElementById(id+strCheckBoxName);
		if(checkboxId.checked)
		{
			checkboxId.checked=false;
		}
		numberOfCheckbox=$("input[name='chkBolckCM']").filter(':checked').length;
		var strValue=removeValue(id,strTag);
		var strValue_1=document.getElementById(strHidCount).value;
		strValue_1=parseInt(strValue_1)-1;
		document.getElementById(strHidCount).value=strValue_1;
		var strCompanyId=document.getElementById(strTag);
		document.getElementById(id+strCheckBoxName).checked=false;
		strCompanyId.value=strValue;
		
	}
	else
	{
		var strValue=removeValue(id,strTag);
		var strCompanyId=document.getElementById(strTag);
		var strValue_1=document.getElementById(strHidCount).value;
		strValue_1=parseInt(strValue_1)-1;
		document.getElementById(strHidCount).value=strValue_1;
		
		
		document.getElementById(id+strCheckBoxName).checked=false;
		strCompanyId.value=strValue;
		
	}
	
	
	
	
	
}