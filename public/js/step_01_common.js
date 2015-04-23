/*'---------------------------------------------------------------------------------------------------------
'Function No   	: 01
'---------------------------------------------------------------------------------------------------------
'Purpose 	  	: Clear Items of a ListBox.
'---------------------------------------------------------------------------------------------------------
'Parameter		:Takes name of the listbox to clear.
'---------------------------------------------------------------------------------------------------------
'Author  	  	: Naznin
'---------------------------------------------------------------------------------------------------------
'Created On 	: 15 Oct 2005 
'---------------------------------------------------------------------------------------------------------
'Last Modified 	: 15 Oct 2005 
'---------------------------------------------------------------------------------------------------------*/	

function ClearListBox(lst)
	{
		
	document.getElementById(lst).innerHTML="" ;
		var strvalue= document.getElementById("selected_Dist").value;
		
		if (strvalue!="")
		{
		var hid_1=String(strvalue).substr(1,strvalue.lenght);
		
		var iLen = String(hid_1).length;
		var len= String(hid_1).substring(-iLen, iLen - 1);
	
		var temp = new Array();
		temp = len.split(",");
		for (i in temp)
			{
				if (temp[i]!="" )
				{
				
				if ($("#"+temp[i]+"dist").is(':checked')) {
					$("#"+temp[i]+"dist").prop('checked', false);
		}
		}
			}
				
						

			}
	document.getElementById("selected_Dist").value="";
	
	//for (i=0; i<=len; i++)
//	
//		{
//		document.getElementById(lst).remove(0)
//		}
	}
/*---------------------------------------------------------------------------------------------------------
'Function No   	: 02
'---------------------------------------------------------------------------------------------------------
'Purpose 	  	: Add items from one listbox to another listbox.
'---------------------------------------------------------------------------------------------------------
'Parameter		:Takes two parameter.
	    fromSel :source listbox. where items to be select.
		 theSel :destination listbox. where items to be added.
'---------------------------------------------------------------------------------------------------------
'Author  	  	: Naznin
'---------------------------------------------------------------------------------------------------------
'Created On 	: 15 Oct 2005 
'---------------------------------------------------------------------------------------------------------
'Last Modified 	: 15 Oct 2005 
'---------------------------------------------------------------------------------------------------------*/	

function append(fromSel,theSel,hID,maxSize,msg)
 {
   var selIndex;
   var IDCollection;
   var TempID;
		FSel=document.getElementById(fromSel);
		TSel=document.getElementById(theSel);

		selIndex = FSel.selectedIndex;
		
		if (TSel.length >=parseInt(maxSize))
			{
				alert(msg);
				return false;
			}
				if (selIndex>=0)
		{
			newValue=FSel.options[selIndex].value;
			newText=FSel.options[selIndex].text;
		
			for(i = 0 ; i < TSel.length ; i++)// find duplicate
				{									
					if (newValue==TSel.options[i].value) 
						{
							alert("Already exist!");
							return false;
						}
				}//end for
						
			var newOpt1 = new Option(newText, newValue);
				
			TSel.options[TSel.length] = newOpt1;
				
			TSel.selectedIndex =TSel.length-1;
			IDCollection=ListBox_IDCollection(theSel);
			document.getElementById(hID).value=IDCollection;
			
		}
			
}
function appendbn(fromSel,theSel,hID,maxSize,msg)
 {
   var selIndex;
   var IDCollection;
   var TempID;
		FSel=document.getElementById(fromSel);
		TSel=document.getElementById(theSel);

		selIndex = FSel.selectedIndex;
		
		if (TSel.length >=parseInt(maxSize))
			{
				alert(msg);
				return false;
			}
				if (selIndex>=0)
		{
			newValue=FSel.options[selIndex].value;
			newText=FSel.options[selIndex].text;
		
			for(i = 0 ; i < TSel.length ; i++)// find duplicate
				{									
					if (newValue==TSel.options[i].value) 
						{
							alert("ইতিমধ্যে বিদ্যমান!");
							return false;
						}
				}//end for
						
			var newOpt1 = new Option(newText, newValue);
				
			TSel.options[TSel.length] = newOpt1;
				
			TSel.selectedIndex =TSel.length-1;
			IDCollection=ListBox_IDCollection(theSel);
			document.getElementById(hID).value=IDCollection;
			
		}
			
}
function remove_new()
{
  theSel=document.getElementById("cboSelectedSkill");
  
  var selIndex = theSel.selectedIndex;
    

  if (selIndex != -1)
	 { 
		  if(theSel.options[selIndex].selected)
				  {
					theSel.options[selIndex] = null;//alert(selIndex)
				  }
					
			if (theSel.length > 0)
			{
			  theSel.selectedIndex = selIndex == 0 ? 0 : selIndex - 1;
			}	
		var skil=document.getElementById('hSkill');
		skil.value=ListBox_IDCollection("cboSelectedSkill");
									
  }//outer if
 }
function remove_Exp()
{
  theSel=document.getElementById("cboSelectedArea_of_Exp");
  
  var selIndex = theSel.selectedIndex;
    

  if (selIndex != -1)
	 { 
		  if(theSel.options[selIndex].selected)
				  {
					theSel.options[selIndex] = null;//alert(selIndex)
				  }
					
			if (theSel.length > 0)
			{
			  theSel.selectedIndex = selIndex == 0 ? 0 : selIndex - 1;
			}	
		var skil=document.getElementById('SWorkArea');
		skil.value=ListBox_IDCollection("cboSelectedArea_of_Exp");
									
  }//outer if
 }

function remove_step_01_workArea()
{
  theSel=document.getElementById("lstSelectedWorkArea");
  
  var selIndex = theSel.selectedIndex;
    

  if (selIndex != -1)
	 { 
		  if(theSel.options[selIndex].selected)
				  {
					theSel.options[selIndex] = null;//alert(selIndex)
				  }
					
			if (theSel.length > 0)
			{
			  theSel.selectedIndex = selIndex == 0 ? 0 : selIndex - 1;
			}	
		var skil=document.getElementById('selected_Cat');
		skil.value=ListBox_IDCollection("lstSelectedWorkArea");
									
  }//outer if
 }
function remove_step_01_jobArea()
{
  theSel=document.getElementById("lstSelectedJobArea");
  
  var selIndex = theSel.selectedIndex;
    

  if (selIndex != -1)
	 { 
		  if(theSel.options[selIndex].selected)
				  {
					theSel.options[selIndex] = null;//alert(selIndex)
				  }
					
			if (theSel.length > 0)
			{
			  theSel.selectedIndex = selIndex == 0 ? 0 : selIndex - 1;
			}	
		var skil=document.getElementById('selected_Dist');
		skil.value=ListBox_IDCollection("lstSelectedJobArea");
									
  }//outer if
 }

function remove_step_01_jobArea()
{
  theSel=document.getElementById("lstSelectedJobArea");
  
  var selIndex = theSel.selectedIndex;
    

  if (selIndex != -1)
	 { 
		  if(theSel.options[selIndex].selected)
				  {
					theSel.options[selIndex] = null;//alert(selIndex)
				  }
					
			if (theSel.length > 0)
			{
			  theSel.selectedIndex = selIndex == 0 ? 0 : selIndex - 1;
			}	
		var skil=document.getElementById('selected_Dist');
		skil.value=ListBox_IDCollection("lstSelectedJobArea");
									
  }//outer if
 }

function remove_step_01_jobCountry()
{
  theSel=document.getElementById("lstSelectedJobCountry");
  
  var selIndex = theSel.selectedIndex;
    

  if (selIndex != -1)
	 { 
		  if(theSel.options[selIndex].selected)
				  {
					theSel.options[selIndex] = null;//alert(selIndex)
				  }
					
			if (theSel.length > 0)
			{
			  theSel.selectedIndex = selIndex == 0 ? 0 : selIndex - 1;
			}	
		var skil=document.getElementById('selected_JobCountry');
		skil.value=ListBox_IDCollection("lstSelectedJobCountry");
									
  }//outer if
 }
function remove_step_01_org()
{
  theSel=document.getElementById("lstSelectedOrganization");
  
  var selIndex = theSel.selectedIndex;
    

  if (selIndex != -1)
	 { 
		  if(theSel.options[selIndex].selected)
				  {
					theSel.options[selIndex] = null;//alert(selIndex)
				  }
					
			if (theSel.length > 0)
			{
			  theSel.selectedIndex = selIndex == 0 ? 0 : selIndex - 1;
			}	
		var skil=document.getElementById('selected_Job');
		skil.value=ListBox_IDCollection("lstSelectedOrganization");
									
  }//outer if
 }

/*---------------------------------------------------------------------------------------------------------
'Function No   	: 03
'---------------------------------------------------------------------------------------------------------
'Purpose 	  	: Remove item from a listbox.
'---------------------------------------------------------------------------------------------------------
'Parameter		:Takes one parameter.
	       tSel : Id of the Listbox where selected item remove. 
'---------------------------------------------------------------------------------------------------------
'Author  	  	: Naznin
'---------------------------------------------------------------------------------------------------------
'Created On 	: 15 Oct 2005 
'---------------------------------------------------------------------------------------------------------
'Last Modified 	: 15 Oct 2005 
'---------------------------------------------------------------------------------------------------------*/	

function remove(tSel,hID)
{
	
 
    var theSel=document.getElementById(tSel);
  var selIndex = theSel.selectedIndex;

  if (selIndex != -1)
	 { 
		  if(theSel.options[selIndex].selected)
				  {
					theSel.options[selIndex] = null;//alert(selIndex)
				  }
					
			if (theSel.length > 0)
			{
			  theSel.selectedIndex = selIndex == 0 ? 0 : selIndex - 1;
			}	
			var hiddenID=document.getElementById(hID);
			hiddenID.value=ListBox_IDCollection(tSel);
									
  }//outer if
 }
 function remove_block_emp()
{
	
  var theSel=document.getElementById("lstSelectedCompany");
  var selIndex = theSel.selectedIndex;

  if (selIndex != -1)
	 { 
		  if(theSel.options[selIndex].selected)
				  {
					theSel.options[selIndex] = null;//alert(selIndex)
				  }
					
			if (theSel.length > 0)
			{
			  theSel.selectedIndex = selIndex == 0 ? 0 : selIndex - 1;
			}	
			var hiddenID=document.getElementById("block_cp_id");
			hiddenID.value=ListBox_IDCollection("lstSelectedCompany");
									
  }//outer if
 }
 
 function closeBlockCompany(inTDiv)
{
	document.getElementById("blockCompany"+inTDiv).style.display="none";
	var hiddenID=document.getElementById("block_cp_id");
	hiddenID.value=ListBox_IDCollection_NewDegine("hidBlockCount");
}
/*---------------------------------------------------------------------------------------------------------
'Function No   	: 04
'---------------------------------------------------------------------------------------------------------
'Purpose 	  	: Collect all IDs of a listbox
'---------------------------------------------------------------------------------------------------------
'Parameter		:Takes one parameter.
	     theSel : Id of the Listbox. 
'---------------------------------------------------------------------------------------------------------
'Author  	  	: Naznin
'---------------------------------------------------------------------------------------------------------
'Created On 	: 15 Oct 2005 
'---------------------------------------------------------------------------------------------------------
'Last Modified 	: 15 Oct 2005 
'---------------------------------------------------------------------------------------------------------*/	

function ListBox_IDCollection_NewDegine(theSel)
	{
	var TempID;	
	var TSel;
	TempID="";
	TSel=document.getElementById(theSel).value;
		alert(TSel.length>0);
		if (TSel.length>0)
		{				
			for(i=0; i<TSel-1; i++)
			{
				if(TempID != "") //add new id to temp id
					{ 
					TempID = TempID  + "," + TSel;
					}	
				else
					{ 
					TempID = TSel;
					}
			}//end for
			
			TempID="," + TempID + ",";
		}//outer if
		
		return TempID;
			}//end function


function ListBox_IDCollection(theSel)
	{
	var TempID;	
	var TSel;
	TempID="";
	TSel=document.getElementById(theSel);	
		if (TSel.length>0)
		{				
			for(i=0; i<TSel.length; i++)
			{
				if(TempID != "") //add new id to temp id
					{ 
					TempID = TempID  + "," + TSel.options[i].value;
					}	
				else
					{ 
					TempID = TSel.options[i].value;
					}
			}//end for
			
			TempID="," + TempID + ",";
		}//outer if
		
		return TempID;
			}//end function
