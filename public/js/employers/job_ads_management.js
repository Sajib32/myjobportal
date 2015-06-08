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

function SetArchievJobs()
{
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null)
	{
		//alert ("Your browser does not support AJAX!");
		window.location.href=gURL;
	  	return;
	} 

	TCheckBox = document.getElementById("TCheckBox").value;
	
	if(TCheckBox<0)
	{
		alert("You must select at least one checkbox from the right side.");
		return false;
	}
	else
	{
		var SelectedIds="";
		var SelectedRows="";
		var CheckBoxNo="";
		var tmpValue;
		
		//Get Applicant IDs to execute action and Row numbers to set backcolor after executing the action
		for(i=1; i<=TCheckBox; i++)
		{
			if(document.getElementById("selectApplicantID"+i).checked && !(document.getElementById("selectApplicantID"+i).disabled))
			{
				var arrValue;
				tmpValue = document.getElementById("selectApplicantID"+i).value;
				//alert(tmpValue);
				arrValue=tmpValue.split("/");
				
				if(SelectedIds=="")
				{
					
					SelectedIds=arrValue[0];	//Applicant's ID
					SelectedRows=arrValue[1];	//Row number
					CheckBoxNo=""+i;
				}
				else
				{
					SelectedIds=SelectedIds+","+arrValue[0]; 	//Applicant's ID
					SelectedRows=SelectedRows+","+arrValue[1]; 	//Row number
					CheckBoxNo=CheckBoxNo+","+i
				}
			}
		}		

		if (SelectedIds=="")
		{
			alert("You must select at least one checkbox from the right side.");
			return false;
		}
		url="archivejob.asp?id="+SelectedIds;	
		//alert(SelectedIds);
		LoadType = "Action"
		
		xmlHttp.onreadystatechange=stateChanged;
		xmlHttp.open("GET",url,true);
		xmlHttp.setRequestHeader("Content-length", url.length); //This line is required for Firefox, only when using POST method
		xmlHttp.send(url);
		//xmlHttp.send(null);
		
		//setRowBackColor(ActionType, ActionValue, SelectedRows, CheckBoxNo);
	}
}

function SetArchievJob(IntID,SelectedRow)
{
	tmpConfirm = confirm("Do you want to archive this job?")
	
	if (tmpConfirm)
	{
		xmlHttp=GetXmlHttpObject()
		if (xmlHttp==null)
		{
			//alert ("Your browser does not support AJAX!");
			window.location.href=gURL;
			return;
		} 
	
		
		url="archivejob.asp?id="+IntID;	
		//alert(IntID);
		
		LoadType = "Action";
		LoadStatus(LoadType);
		ActionRow = SelectedRow;
		xmlHttp.onreadystatechange=stateChanged;
		xmlHttp.open("GET",url,true);
		xmlHttp.setRequestHeader("Content-length", url.length); //This line is required for Firefox, only when using POST method
		xmlHttp.send(url);
	}
		
	
}

function setReloadJobBoard (spg,pagetype)
{
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null)
	{
		//alert ("Your browser does not support AJAX!");
		window.location.href=gURL;
	  	return;
	}
	
	//alert(cprpp)
	url="Corporate_joblist_common_init.asp?rpp="+cprpp+"&pg="+spg+"&pt="+pagetype;
	//alert(url);
	//alert(IntID);
	LoadType = "JobManagement"
	LoadStatus(LoadType);
	xmlHttp.onreadystatechange=stateChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.setRequestHeader("Content-length", url.length); //This line is required for Firefox, only when using POST method
	xmlHttp.send(url);
	//setCorpGraph();
	
}

function JAMGoPage (spg,pagetype)
{
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null)
	{
		//alert ("Your browser does not support AJAX!");
		window.location.href=gURL;
	  	return;
	}
	
	//alert(cprpp)
	url="Job_Ad_Management_common_init.asp?rpp="+cprpp+"&pg="+spg+"&pt="+pagetype;
	//alert(url);
	//alert(IntID);
	LoadType = "JobManagement"
	LoadStatus(LoadType);
	xmlHttp.onreadystatechange=stateChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.setRequestHeader("Content-length", url.length); //This line is required for Firefox, only when using POST method
	xmlHttp.send(url);
	//setCorpGraph();
	
}

function stateChanged() 
{ 
	var strResponseText;
	if (xmlHttp.readyState==4)
	{ 
		if(xmlHttp.status == 200)
		{
			if(LoadType=="Action")
			{				
				strResponseText=xmlHttp.responseText
				if(strResponseText.indexOf("checkbox")>0)
				{
					alert("You have to select a checkbox");
				}
				else
				{				
					//alert("Action has been completed successfully.");
					//document.getElementById("ActionResult").innerHTML=strResponseText;	
					if (strResponseText.indexOf("archived") == -1)
					{
						strType = "failuer"
					}
					else
					{
						strType = "success"
					}
					CreateMessageBox (strType, strResponseText, "TmpMessage", 375,-1,"")
					
					fnActionRow (ActionRow)
					ACount = parseInt(document.getElementById("AJA").innerHTML);
					document.getElementById("AJA").innerHTML = ACount+1
					LCount = parseInt(document.getElementById("LJA").innerHTML)
					document.getElementById("LJA").innerHTML = LCount-1
				}
			}
			else if (LoadType=="Job")
			{
				strResponseText=xmlHttp.responseText
				//document.getElementById("Corporate_job_Panel").innerHTML=strResponseText;
				//document.getElementById("ActionResult").innerHTML=xmlHttp.responseText;				
				if (strResponseText.indexOf("Operation") == -1)
				{
					strType = "failuer"
				}
				else
				{
					strType = "success"
				}
				CreateMessageBox (strType, strResponseText, "TmpMessage", 375,-1,"")
				fnActionRow (ActionRow)
				
				if (ActType == 1)
				{
					LCount = parseInt(document.getElementById("LJA").innerHTML)
					DCount = parseInt(document.getElementById("DJA").innerHTML)
					document.getElementById("LJA").innerHTML = LCount-1
					document.getElementById("DJA").innerHTML = DCount+1
				}
				else
				{
					LCount = parseInt(document.getElementById("LJA").innerHTML)
					DCount = parseInt(document.getElementById("DJA").innerHTML)
					document.getElementById("LJA").innerHTML = LCount+1
					document.getElementById("DJA").innerHTML = DCount-1
				}
				
			}
			else if (LoadType=="DJob")
			{
				strResponseText=xmlHttp.responseText
				
				if (strResponseText.indexOf("deleted") == -1)
				{
					strType = "failuer"
				}
				else
				{
					strType = "success"
				}
				CreateMessageBox (strType, strResponseText, "TmpMessage", 375,-1,"")
				//document.getElementById("Corporate_job_Panel").innerHTML=strResponseText;
				//document.getElementById("ActionResult").innerHTML=xmlHttp.responseText;				
				fnActionRow (ActionRow)
				DCount = parseInt(document.getElementById("DJA").innerHTML)
				document.getElementById("DJA").innerHTML = DCount-1
				
				
			}
			else if (LoadType=="CorpGraph")
			{
				strResponseText=xmlHttp.responseText
				//document.getElementById("Corporate_job_Panel").innerHTML=strResponseText;
				document.getElementById("CorporateGraph").innerHTML=xmlHttp.responseText;				
				
				//fnActionRow (ActionRow)
			}
			else if (LoadType=="JobManagement")
			{
				strResponseText=xmlHttp.responseText
				//document.getElementById("Corporate_job_Panel").innerHTML=strResponseText;
				document.getElementById("latest-job").innerHTML=xmlHttp.responseText;	
				//alert(2)
				
				
				try 
				{
					setCorpGraph();
				}
				catch (x)
				{
					//console.log(1)
				}
				//alert(3)
							
			}
			else if (LoadType=="Graph")
			{
				strResponseText=xmlHttp.responseText
				//document.getElementById("Corporate_job_Panel").innerHTML=strResponseText;
				document.getElementById("CropGraph").innerHTML=xmlHttp.responseText;				
			}
			
			else
			{
				/*np=xmlHttp.responseText;
				//alert(np);
				nn=window.open();
				nn.document.write(np);*/
				
				strResponseText=xmlHttp.responseText
				//document.getElementById("Corporate_job_Panel").innerHTML=strResponseText;
				document.getElementById("SearchedResult").innerHTML=xmlHttp.responseText;				
			}
		}
		else
		{
			//alert(xmlHttp.status);
			alert("Some problem has been occurred. Please try later."); 
		}
	}
} 

function showArchieve(cpg)
{
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null)
	{
		//alert ("Your browser does not support AJAX!");
		window.location.href=gURL;
	  	return;
	}
	
	url="Corporate_ARC_job_board.asp?pg="+cpg;
	//alert(IntID);
	LoadType = "Job"
	xmlHttp.onreadystatechange=stateChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.setRequestHeader("Content-length", url.length); //This line is required for Firefox, only when using POST method
	xmlHttp.send(url);
}

function RequestJobToDorA(tmpVal,ActionType,pt)
{
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null)
	{
		//alert ("Your browser does not support AJAX!");
		window.location.href=gURL;
	  	return;
	}
	
	url="jobposting_RequestToPublishType.asp?ID="+tmpVal+"&at="+ActionType+"&pT="+pt;
	//confirm(url);
	LoadStatus("");
	LoadType = "Job"
	
	xmlHttp.onreadystatechange=stateChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.setRequestHeader("Content-length", url.length); //This line is required for Firefox, only when using POST method
	xmlHttp.send(url);
}


function PublishorDraft (JID,ActionType,SelectedRow)
{
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null)
	{
		//alert ("Your browser does not support AJAX!");
		window.location.href=gURL;
	  	return;
	}
	
	url="jobposting_PublishorDraft.asp?ID="+JID+"&at="+ActionType;
	//confirm(url);
	
	LoadType = "Job"
	LoadStatus(LoadType);
	ActionRow = SelectedRow;
	ActType = ActionType
	xmlHttp.onreadystatechange=stateChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.setRequestHeader("Content-length", url.length); //This line is required for Firefox, only when using POST method
	xmlHttp.send(url);
}

function DraftJobDelete (JID,SelectedRow)
{
	
	strConfirm = confirm("Are you sure to delete this job?")
	
	if (strConfirm)
	{
		xmlHttp=GetXmlHttpObject()
		if (xmlHttp==null)
		{
			//alert ("Your browser does not support AJAX!");
			window.location.href=gURL;
			return;
		}
		
		url="DeletedDraftedJob.asp?ID="+JID	//+"&at="+ActionType;
		//confirm(url);
		
		LoadType = "DJob"
		LoadStatus(LoadType);
		ActionRow = SelectedRow;
		xmlHttp.onreadystatechange=stateChanged;
		xmlHttp.open("GET",url,true);
		xmlHttp.setRequestHeader("Content-length", url.length); //This line is required for Firefox, only when using POST method
		xmlHttp.send(url);
	}
}

function showpaging (arc,rec,rec)
{
	
	document.getElementById(arc).style.display= "block";
	document.getElementById(rec).style.display= "none";
	document.getElementById(rec).style.display= "none";
}

function LoadStatus(LoadType) //(strStatus, StatusNumber)
{	
	if(LoadType=="Action")
	{
		//strLayer="<div align='center' class='style1'>Process is Running. Please wait...</div>";		
		//document.getElementById("ActionResult").innerHTML = strLayer;
		strLayer="<br><div align='center'>"
		strLayer+="<span class='style2'><img src='images/ajax_loader.gif' width='50px' height='50px' /></span> "
		strLayer+="</div>"
		
		CreateMessageBox ("processing", strLayer, "TmpMessage", 375,-1,"")		
	}
	else if (LoadType=="JobManagement")
	{
		strLayer="<br><div align='center'>"
		strLayer+="<img src='images/ajax_loader.gif' width='50px' height='50px' /> "
		strLayer+="</div>"
		document.getElementById("latest-job").innerHTML = strLayer;
	}
	else if (LoadType=="DJob")
	{
		strLayer="<br><div align='center'>"
		strLayer+="<span class='style2'><img src='images/ajax_loader.gif' width='50px' height='50px' /></span> "
		strLayer+="</div>"
		
		CreateMessageBox ("processing", strLayer, "TmpMessage", 375,-1,"")	
	}
	else if (LoadType=="Job")
	{
		strLayer="<br><div align='center'>"
		strLayer+="<span class='style2'><img src='images/ajax_loader.gif' width='50px' height='50px' /></span> "
		strLayer+="</div>"
		
		CreateMessageBox ("processing", strLayer, "TmpMessage", 375,-1,"")	
	}
	else
	{
		strLayer="<br><div align='center'>"
		strLayer+="<span class='style2'><img src='images/ajax_loader.gif' width='50px' height='50px' /></span> "
		strLayer+="</div>"
		document.getElementById("ActionResult").innerHTML = strLayer;
		//location.href="#setPosition";
		//alert(location.href);
	}	
}



function fnActionRow (strID)
{
	document.getElementById("jdtr"+strID).style.display="none";
	//document.getElementById("jdtr"+strID).style.backgroundColor= "#CEDFE8";
}

function fbShare(valfb)
		{
			u = 'http://jobs.bdjobs.com/Jobdetails.asp?id='+valfb+'&cid=';
			
			t='';
			var left = (screen.width/2) - 200;
			var top = (screen.height/2) - 200;
			window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436, top='+top+', left='+left);
		}

function setPerpageRecord(pt, TRec)
{
	cprpp = TRec
	var newDate = addDays(new Date(), 7);
	document.cookie="JAMRPP="+cprpp+"; expires="+newDate+"; path=/";
	JAMGoPage(1, pt)
}

function setPerpageRecordCD(pt, TRec)
{
	cprpp = TRec
	var newDate = addDays(new Date(), 7);
	document.cookie="CDRPP="+cprpp+"; expires="+newDate+"; path=/";
	setReloadJobBoard(1, pt)
}

function addDays(theDate, days) {
    return new Date(theDate.getTime() + days*24*60*60*1000);
}