function openboxForPhotograph()
{
	var ifream= document.getElementById("Iframe");
		ifream.src="step_05_edit.asp";
		ifream.height="500px";
}
function openboxForMatchJob(jID,aID)
{
	var ifream= document.getElementById("Iframe");
		ifream.src="JobMatchReason.asp?JID="+jID+"&AID="+aID;
		ifream.height="700px";
}
function openboxForMatchJobBN(jID,aID)
{
	var ifream= document.getElementById("Iframe");
		ifream.src="JobMatchReasonbn.asp?JID="+jID+"&AID="+aID+"";
		ifream.height="700px";
}
function openboxForPhotographBN()
{
	var ifream= document.getElementById("Iframe");
		ifream.src="step_05_editbn.asp";
		ifream.height="500px";
}
function openboxForPersonal(hId,type)
{
 if(hId=='9')
	{
		//alert("aca"+ID);
		loadEntryFormForPersonal(hId,type);
	}
      if(hId=='10')
	{
		//alert("aca"+ID);
		loadEntryFormForPersonal(hId,type);
	}
 	if(hId=='11')
	{
		//alert("aca"+ID);
		loadEntryFormForPersonal(hId,type);
	}
	if(hId=='12')
	{
		//alert("aca"+ID);
		loadEntryFormForPersonal(hId,type);
	}
}

function entryFormForPersonal_mobile(hId,type)
{
 if(hId=='9' && type=='per' )
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
        //ifream.src="";
		window.location="step_01_edit_per_test_m.asp?hId="+hId;
	}
    if(hId=='10' && type=='cai' )
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
        //ifream.src="";
		ifream.src="step_01_edit_cai.asp?hId="+hId;
		ifream.height="700px";
	}
      if(hId=='11' && type=='jclo' )
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
        //ifream.src="";
		ifream.src="step_01_edit_jclo.asp?hId="+hId;
		ifream.height="785px";
	}
   if(hId=='12' && type=='ori' )
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
        //ifream.src="";
		ifream.src="step_01_edit_ori.asp?hId="+hId;
		ifream.height="700px";
	}

}

function loadEntryFormForPersonal(hId,type)
{
 if(hId=='9' && type=='per' )
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
        //ifream.src="";
		ifream.src="step_01_edit_per.asp?hId="+hId;
		ifream.height="750px";
	}
    if(hId=='10' && type=='cai' )
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
        //ifream.src="";
		ifream.src="step_01_edit_cai.asp?hId="+hId;
		ifream.height="700px";
	}
      if(hId=='11' && type=='jclo' )
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
        //ifream.src="";
		ifream.src="step_01_edit_jclo.asp?hId="+hId;
		ifream.height="785px";
	}
   if(hId=='12' && type=='ori' )
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
        //ifream.src="";
		ifream.src="step_01_edit_ori.asp?hId="+hId;
		ifream.height="700px";
	}

}



function openbox(count,hId,ID,tableId)
	{  
		
			if(hId=='-1'||hId=='1')
			{
			    //alert(hId+"aca"+ID);
				loadEntryFrom(count,hId,ID,tableId);
			}
           
			if(hId=='-2'||hId=='2')
			{
			    //alert(hId+"aca"+ID);
				loadEntryFrom(count,hId,ID,tableId);
			}
           if(hId=='-3'||hId=='3')
			{
			    //alert("aca"+ID);
				loadEntryFrom(count,hId,ID,tableId);
			}
            if(hId=='-4'||hId=='4')
			{
			   // alert("aca"+ID);
				loadEntryFrom(count,hId,ID,tableId);
			}
            if(hId=='-5'||hId=='5')
			{
			    //alert("aca"+ID);
				loadEntryFrom(count,hId,ID,tableId);
			}
            if(hId=='-6'||hId=='6')
			{
			    //alert("aca"+ID);
				loadEntryFrom(count,hId,ID,tableId);
			}
            if(hId=='-7'||hId=='7')
			{
			    //alert("aca"+ID);
				loadEntryFrom(count,hId,ID,tableId);
			}
             
			 if(hId=='-8'||hId=='8')
			{
			    //alert("aca"+ID);
				loadEntryFrom(count,hId,ID,tableId);
			}
	 
		
	}
	
	function gradient(id, level)
	{
		var box = document.getElementById(id);
		box.style.opacity = level;
		box.style.MozOpacity = level;
		box.style.KhtmlOpacity = level;
		box.style.filter = "alpha(opacity=" + level * 100 + ")";
		box.style.display="block";
		return;
	}

	function fadein(id) 
	{
		var level = 0;
		while(level <= 1)
		{
			//setTimeout( "gradient('" + id + "'," + level + ")", (level* 1000) + 10);
			level += 0.01;
		}
	}
	function closebox()
	{
        //alert("1st");
		document.getElementById('Wrapperbox').style.display='none';
		document.getElementById('shadowing').style.display='none';
        window.location.reload();
		
	}
    function submitbox()
      {
		var message=document.getElementById('Iframe').contentWindow.document.body.innerHTML;
       
    	//var backbutton=document.getElementById('back');
         
         var message = message.replace(/(<([^>]+)>)/ig,""); 
         var message = message.replace(/^\s+|\s+$/g, '');
		var strMessage_1="Academic Qualification Successfuly update";
		var strMessage_2="Training Information Successfuly Insert";
		var strMessage_3="Professional Information Successfuly update";
		var strMessage_4="Academic Qualification Successfuly Insert";
		var strMessage_5="Training Information Successfuly update";
		var strMessage_6="Experience information Insert sucessfuly";
		var strMessage_7="Experience information update sucessfuly";
		var strMessage_8="Professional Information Successfuly Insert";
        var strErrorMessage="This information can't be inserted in this system";
        var strErrorMessage_1="The information can't be updated in this system";
       
      

		if (message==strMessage_1 ||message==strMessage_2||message==strMessage_3||message==strMessage_4||message==strMessage_5||message==strMessage_6||message==strMessage_7||message==strMessage_8||message=="")
		{     //backbutton.style.visibility='hidden';
            // alert(message);
//			document.getElementById('Wrapperbox').style.display='none';
//			document.getElementById('shadowing').style.display='none';
		//	var url=window.location.href;
//			var url1=url.replace("#", "");
//			window.location=url1;
          
			
		}
     

        
         
      }

function loadEntryFrom(count,hId,ID,tableId)
{
	if(hId=='-1'|| hId=='1')
	{
		var ifream=document.getElementById("Iframe");
      ifream.src="step_02_edit_aca.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
       ifream.height="735";	
	}

	if(hId=='-2'|| hId=='2')
	{
		//alert(ID+"id"+"HId"+hId);
		var ifream= document.getElementById("Iframe");
         ifream.src="step_02_edit_tr.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
         ifream.height="500px";
	}
	if(hId=='-3'|| hId=='3')
	{
      //alert("a"+ID+" "+"edit for training");
		var ifream= document.getElementById("Iframe")
        ifream.src="step_02_edit_prq.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
        ifream.height="500px";
	    
	}
    if(hId=='-4'||hId=='4')
	{
      //alert("a"+ID+" "+"edit for exprience"+ID);
		var ifream= document.getElementById("Iframe");
        ifream.src="step_03_edit_exp.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
        ifream.height="700px";
	    
	}
	if(hId=='5'||hId=='-5')
	{
	 	//alert(ID+ID);
		var ifream= document.getElementById("Iframe");
        ifream.src="step_04_edit_spe.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
         ifream.height="700px";
	}
	if(hId=='-6'||hId=='6')
	{
		//alert("Id="+ID+"ghfh"+ID+"cc");
       // var table_id=document.getElementById("table_id").value;
		var ifream= document.getElementById("Iframe");
         
           
		ifream.src="step_04_edit_lang.asp?hId="+hId+"&ID="+ID+"&Count="+count;
		ifream.height="600px";
	}
 
	if(hId=='-7'||hId=='7')
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
		ifream.src="step_04_edit_ref.asp?hId="+hId+"&ID="+ID+"&Count="+count;
		ifream.height="600px";
	}
    if(hId=='-8'||hId=='8')
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
		ifream.src="step_04_edit_ref.asp?hId="+hId+"&ID="+ID+"&Count="+count;
		ifream.height="600px";
	}
	
}

function openbox_old_browser(count,hId,ID,tableId)
{
	if( hId=='1' ||hId=='-1')
	{   
          
		window.location="step_02_edit_aca.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId; 
          
	}
	if(hId=='-2'|| hId=='2')
	{
		//alert(ID+"id"+"HId"+hId);
         window.location="step_02_edit_tr.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
	}
	if(hId=='-3'|| hId=='3')
	{
      //alert("a"+ID+" "+"edit for training");
        window.location="step_02_edit_prq.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
	    
	}
    if(hId=='-4'||hId=='4')
	{
      //alert("a"+ID+" "+"edit for exprience"+ID);
        window.location="step_03_edit_exp.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
	    
	}
	if(hId=='5'||hId=='-5')
	{
	 	//alert(ID+ID);
        window.location="step_04_edit_spe.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
	}
	if(hId=='-6'||hId=='6')
	{
		//alert("Id="+ID+"ghfh"+ID+"cc");
       // var table_id=document.getElementById("table_id").value;
         
           
		window.location="step_04_edit_lang.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
	}
 
	if(hId=='-7'||hId=='7')
	{
		//alert(ID+"ghfh"+ID+"cc");
		window.location="step_04_edit_ref.asp?hId="+hId+"&ID="+ID+"&Count="+count;
	}
    if(hId=='-8'||hId=='8')
	{
      //alert(ID+"t"+hId+"t");
		window.location="step_04_edit_ref.asp?hId="+hId+"&ID="+ID+"&Count="+count;
        
	}
	
      
	

}



/* ---------------------bangla------------------------------------*/
function openboxBangla(count,hId,ID,tableId)
	{  
		
			if(hId=='-1'||hId=='1')
			{
			    //alert(hId+"aca"+ID);
				loadEntryFromBangla(count,hId,ID,tableId);
			}
           
			if(hId=='-2'||hId=='2')
			{
			    //alert(hId+"aca"+ID);
				loadEntryFromBangla(count,hId,ID,tableId);
			}
           if(hId=='-3'||hId=='3')
			{
			    //alert("aca"+ID);
				loadEntryFromBangla(count,hId,ID,tableId);
			}
            if(hId=='-4'||hId=='4')
			{
			   // alert("aca"+ID);
				loadEntryFromBangla(count,hId,ID,tableId);
			}
            if(hId=='-5'||hId=='5')
			{
			   
				loadEntryFromBangla(count,hId,ID,tableId);
			}
            if(hId=='-6'||hId=='6')
			{
			    //alert("aca"+ID);
				loadEntryFromBangla(count,hId,ID,tableId);
			}
            if(hId=='-7'||hId=='7')
			{
			    //alert("aca"+ID);
				loadEntryFromBangla(count,hId,ID,tableId);
			}
             
			 if(hId=='-8'||hId=='8')
			{
			    //alert("aca"+ID);
				loadEntryFromBangla(count,hId,ID,tableId);
			}
	 
		
	}
	
	
function loadEntryFromBangla(count,hId,ID,tableId)
{
	if(hId=='-1'|| hId=='1')
	{
		var ifream=document.getElementById("Iframe");
		
       
 		 ifream.height="735px";	      
        ifream.src="step_02_edit_acabn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
       
	}

	if(hId=='-2'|| hId=='2')
	{
		//alert(ID+"id"+"HId"+hId);
		var ifream= document.getElementById("Iframe");
         ifream.src="step_02_edit_trbn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
         ifream.height="500px";
	}
	if(hId=='-3'|| hId=='3')
	{
      //alert("a"+ID+" "+"edit for training");
		var ifream= document.getElementById("Iframe")
        ifream.src="step_02_edit_prqbn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
        ifream.height="500px";
	    
	}
    if(hId=='-4'||hId=='4')
	{
      //alert("a"+ID+" "+"edit for exprience"+ID);
	  
		var ifream= document.getElementById("Iframe");
        ifream.src="step_03_edit_expbn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
        ifream.height="700px";
	    
	}
	if(hId=='5'||hId=='-5')
	{
	 	//alert(hId+" "+ID);
		var ifream= document.getElementById("Iframe");
        ifream.src="step_04_edit_spebn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
         ifream.height="600px";
	}
	if(hId=='-6'||hId=='6')
	{
		//alert("Id="+ID+"ghfh"+ID+"cc");
       // var table_id=document.getElementById("table_id").value;
		var ifream= document.getElementById("Iframe");
         
           
		ifream.src="step_04_edit_langbn.asp?hId="+hId+"&ID="+ID+"&Count="+count;
		ifream.height="600px";
	}
 
	if(hId=='-7'||hId=='7')
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
		ifream.src="step_04_edit_refbn.asp?hId="+hId+"&ID="+ID+"&Count="+count;
		ifream.height="600px";
	}
    if(hId=='-8'||hId=='8')
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
		ifream.src="step_04_edit_refbn.asp?hId="+hId+"&ID="+ID+"&Count="+count;
		ifream.height="600px";
	}
	
}

function openboxForPersonalBangla(hId,type)
{
 if(hId=='9')
	{
		//alert("aca"+ID);
		loadEntryFormForPersonalBangla(hId,type);
	}
      if(hId=='10')
	{
		//alert("aca"+ID);
		loadEntryFormForPersonalBangla(hId,type);
	}
 	if(hId=='11')
	{
		//alert("aca"+ID);
		loadEntryFormForPersonalBangla(hId,type);
	}
	if(hId=='12')
	{
		//alert("aca"+ID);
		loadEntryFormForPersonalBangla(hId,type);
	}
}

function loadEntryFormForPersonalBangla(hId,type)
{
	if(hId=='9' && type=='per' )
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
        //ifream.src="";
		ifream.src="step_01_edit_perbn.asp?hId="+hId;
		ifream.height="700px";
	}
    if(hId=='10' && type=='cai' )
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
        //ifream.src="";
		ifream.src="step_01_edit_caibn.asp?hId="+hId;
		ifream.height="700px";
	}
      if(hId=='11' && type=='jclo' )
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
        //ifream.src="";
		ifream.src="step_01_edit_jclobn.asp?hId="+hId;
		ifream.height="785px";
	}
   if(hId=='12' && type=='ori' )
	{
		//alert(ID+"ghfh"+ID+"cc");
		var ifream= document.getElementById("Iframe");
        //ifream.src="";
		ifream.src="step_01_edit_oribn.asp?hId="+hId;
		ifream.height="700px";
	}
}


function openbox_old_browser_bn(count,hId,ID,tableId)
{
	if( hId=='1' ||hId=='-1')
	{   
          
		window.location="step_02_edit_acabn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId; 
          
	}
	if(hId=='-2'|| hId=='2')
	{
		//alert(ID+"id"+"HId"+hId);
         window.location="step_02_edit_trbn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
	}
	if(hId=='-3'|| hId=='3')
	{
      //alert("a"+ID+" "+"edit for training");
        window.location="step_02_edit_prqbn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
	    
	}
    if(hId=='-4'||hId=='4')
	{
      //alert("a"+ID+" "+"edit for exprience"+ID);
        window.location="step_03_edit_expbn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
	    
	}
	if(hId=='5'||hId=='-5')
	{
	 	//alert(ID+ID);
        window.location="step_04_edit_spebn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
	}
	if(hId=='-6'||hId=='6')
	{
		//alert("Id="+ID+"ghfh"+ID+"cc");
       // var table_id=document.getElementById("table_id").value;
         
           
		window.location="step_04_edit_langbn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
	}
 
	if(hId=='-7'||hId=='7')
	{
		//alert(ID+"ghfh"+ID+"cc");
		window.location="step_04_edit_refbn.asp?hId="+hId+"&ID="+ID+"&Count="+count;
	}
    if(hId=='-8'||hId=='8')
	{
      //alert(ID+"t"+hId+"t");
		window.location="step_04_edit_refbn.asp?hId="+hId+"&ID="+ID+"&Count="+count;
        
	}
	
      
	

}

function openbox_mobile_browser_bn(count,hId,ID,tableId)
{
	if( hId=='1' ||hId=='-1')
	{   
          
		window.location="step_02_edit_acabn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId; 
          
	}
	if(hId=='-2'|| hId=='2')
	{
		//alert(ID+"id"+"HId"+hId);
         window.location="step_02_edit_trbn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
	}
	if(hId=='-3'|| hId=='3')
	{
      //alert("a"+ID+" "+"edit for training");
        window.location="step_02_edit_prqbn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
	    
	}
    if(hId=='-4'||hId=='4')
	{
      //alert("a"+ID+" "+"edit for exprience"+ID);
        window.location="step_03_edit_expbn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
	    
	}
	if(hId=='5'||hId=='-5')
	{
	 	//alert(ID+ID);
        window.location="step_04_edit_spebn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
	}
	if(hId=='-6'||hId=='6')
	{
		//alert("Id="+ID+"ghfh"+ID+"cc");
       // var table_id=document.getElementById("table_id").value;
         
           
		window.location="step_04_edit_langbn.asp?hId="+hId+"&ID="+ID+"&Count="+count+"&tableId="+tableId;
	}
 
	if(hId=='-7'||hId=='7')
	{
		//alert(ID+"ghfh"+ID+"cc");
		window.location="step_04_edit_refbn.asp?hId="+hId+"&ID="+ID+"&Count="+count;
	}
    if(hId=='-8'||hId=='8')
	{
      //alert(ID+"t"+hId+"t");
		window.location="step_04_edit_refbn.asp?hId="+hId+"&ID="+ID+"&Count="+count;
        
	}
	
      
	

}


	





