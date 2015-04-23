function load_ajax_for_photo(folderName,imageName)
{
	document.getElementById("photo").src="http://my.bdjobs.com/photos/"+folderName+"/"+imageName;
}


function Load_ajax_for_pre(strHtml,hid,tablename)
{
  if(hid==9)
     {
        
       
		 document.getElementById("per").innerHTML="";
		document.getElementById("per").innerHTML=strHtml;
	 }
     
  if(hid==10)
     {
		 document.getElementById("cai").innerHTML="";
		document.getElementById("cai").innerHTML=strHtml;
	 }
if(hid==11)
     {
        
       
		 document.getElementById("jclo").innerHTML="";
		document.getElementById("jclo").innerHTML=strHtml;
	 }
   if(hid==12)
     {
        
       
		 document.getElementById("ori").innerHTML="";
		document.getElementById("ori").innerHTML=strHtml;
	 }

   
}

function Load_ajax(str_html,rec_ID_ram,hId,table_id)
{  
	if(hId=="1"||hId=="-1")
	{
       
        if(table_id=="-1")
         {
           
			document.getElementById("message_1").style.display="none";
         }
		table_id=parseInt(table_id)
	
		if(table_id==0)
		{
            
			document.getElementById("message").style.display="none";
		}
      
           
			document.getElementById("message").style.display="none";
		
		if (hId=="1")
		{
         
			document.getElementById(table_id).innerHTML="";
			document.getElementById(table_id).innerHTML=str_html;
		
		}
	
		if (hId=="-1" )
		{
      
			var count=document.getElementById("intcount").value;
			
			if(parseInt(count)< 10)
			{   
			
			 
				count=parseInt(count)+1; 
				document.getElementById("intcount").value=count;
				document.getElementById(count).innerHTML="<div class=\'tab-header02 col-md-12 col-sm-12 col-xs-12\'><div class=\'col-md-7 col-sm-7\'>Academic Qualification: "+count+"</div><div class=\'col-md-5 col-sm-5\'><div class=ed-btn><a class=fancybox id=fancybox href=#Wrapperbox><button type=submit class=\'btn btn-default tab-button\'   onClick=openbox("+count+",1,&quot;"+rec_ID_ram+"&quot;,"+count+")> <span class=\'glyphicon glyphicon-edit icon-padding\'></span>Edit </button></a><button type=button class=\'btn btn-default tab-button02\'  onclick=confirmation_1(&quot;"+rec_ID_ram+"&quot;,tableEdu,"+count+",1)> <span class=\'glyphicon glyphicon-trash icon-padding\'></span>Delete </button></div></div></div>"+str_html+"";

				//document.getElementById(count).innerHTML="<table width=100% border=0; cellspacing=0 cellpadding=0><tr><td width=77% height=29 align=center bgcolor=#e9ece9 class=BDJValues><U class=BDJPanelNavNormal><strong>Academic Qualification : "+count+"</strong></U></td><td width=23% height=29 bgcolor=#e9ece9><a class=fancybox id=fancybox href=#Wrapperbox><img src=images/icons/edit_button.gif  width=45 height=18 border=0 onClick=openbox("+count+",1,&quot;"+rec_ID_ram+"&quot;,"+count+")  class=cursorTp ></a><img src=images/icons/delete_button.gif width=58 height=18 border=0 onclick=confirmation_1(&quot;"+rec_ID_ram+"&quot;,tableEdu,"+count+",1) class=cursorTp/></td></tr></table>"+str_html+"";
				document.getElementById(count).style.display="inline";
			//alert(document.getElementById(count).innerHTML);
			}
			else
			{
               parent.jQuery.fancybox({afterClose:parent.location.reload(true)});
				
			
			}
		}
	}
	
	if(hId=="2"||hId=="-2")
	{ 
        if(table_id=="-1")
         {
          document.getElementById("tr_message_1").style.display="none";
         }
		table_id=parseInt(table_id)
         
       if (table_id==0)
        {
            document.getElementById("tr_message").style.display="none";
        }  
        document.getElementById("tr_message").style.display="none";

		if (hId=="2")
		{
           
			document.getElementById("tr"+table_id+"").innerHTML="";
			document.getElementById("tr"+table_id+"").innerHTML=str_html;
		
		}
		if (hId=="-2")
		{
			var tr_count=document.getElementById("hTrainingCounter").value;
			
			if(parseInt(tr_count)< 12)
			{   
			
				
				tr_count=parseInt(tr_count)+1; 
				document.getElementById("hTrainingCounter").value=tr_count;
				
				//document.getElementById("tr"+tr_count+"").innerHTML="<table width=100% border=0 cellspacing=0 cellpadding=0><tr><td width=401 height=29 align=center bgcolor=#e9ece9 class=BDJValues><U class=BDJPanelNavNormal><strong>Training : "+tr_count+"</strong></U></td><td height=29 bgcolor=#e9ece9 width=123><a class=fancybox href=#Wrapperbox><img src=images/icons/edit_button.gif width=45 height=18 border=0 onClick=openbox("+tr_count+",2,&quot;"+rec_ID_ram+"&quot;,"+tr_count+") class=cursorTp ></a><img src=images/icons/delete_button.gif width=58 height=18 border=0 onClick=confirmation_1(&quot;"+rec_ID_ram+"&quot;,tableTra,&quot;"+tr_count+"&quot;,2) class=cursorTp ></td></tr></table>"+str_html+"";			document.getElementById("tr"+tr_count+"").style.display="inline";
				document.getElementById("tr"+tr_count+"").innerHTML="<div class=\'tab-header02 col-md-12 col-sm-12 col-xs-12\'><div class=\'col-md-7 col-sm-7\'>Training: "+tr_count+"</div><div class=\'col-md-5 col-sm-5\'><div class=ed-btn><a class=fancybox id=fancybox href=#Wrapperbox><button onclick=openbox("+tr_count+",2,&quot;"+rec_ID_ram+"&quot;,"+tr_count+")  data-toggle=modal class=\'btn btn-default tab-button\' type=submit> <span class=\'glyphicon glyphicon-edit icon-padding\'></span>Edit </button> </a>  <button onclick=confirmation_1(&quot;"+rec_ID_ram+"&quot;,tableTra,&quot;"+tr_count+"&quot;,2) class=\'btn btn-default tab-button02\' type=submit> <span class=\'glyphicon glyphicon-trash icon-padding\'></span>Delete </button></div></div></div>"+str_html+"";
			}
            else
            {
                parent.jQuery.fancybox({afterClose:parent.location.reload(true)});
				
            }		
		}
	}
	
	if(hId=="3"||hId=="-3")
	{
         if(table_id=="-1")
         {
           
            document.getElementById("proq_message_1").style.display="none";
          }   
		table_id=parseInt(table_id)
          
		
        if (table_id==0)
        {
        	
            document.getElementById("proq_message").style.display="none";
        }
       
        document.getElementById("proq_message").style.display="none";
		if (hId=="3")
		{
			document.getElementById("proq"+table_id+"").innerHTML="";
			document.getElementById("proq"+table_id+"").innerHTML=str_html;
		
		}
		if (hId=="-3")
		{
			var proq_count=document.getElementById("hPECounter").value;
			
			if(parseInt(proq_count)< 12)
			{   
				
				
				proq_count=parseInt(proq_count)+1; 
                
				document.getElementById("hPECounter").value=proq_count;
				document.getElementById("proq"+proq_count+"").innerHTML="<div class=\'tab-header02 col-md-12 col-xs-12\'><div class=\'col-md-7 col-sm-7\'>Professional Qualification : "+proq_count+"</div><div class=\'col-md-5 col-sm-5\'><div class=ed-btn> <a href=#Wrapperbox id=fancybox class=fancybox style=text-decoration:none;><button onclick=openbox("+proq_count+",3,&quot;"+rec_ID_ram+"&quot;,"+proq_count+")  data-toggle=modal class=\'btn btn-default tab-button\' type=submit> <span class=\'glyphicon glyphicon-edit icon-padding\'></span>Edit </button> </a>  <button onclick=confirmation_1(&quot;"+rec_ID_ram+"&quot;,tablePro,"+proq_count+",3) class=\'btn btn-default tab-button02\' type=submit> <span class=\'glyphicon glyphicon-trash icon-padding\'></span>Delete </button></div></div></div>"+str_html+"";

				//document.getElementById("proq"+proq_count+"").innerHTML="<table width=100% border=0 cellspacing=0 cellpadding=0><tr><td width=411 height=29 align=center bgcolor=#e9ece9 class=BDJValues><U class=BDJPanelNavNormal><strong>Professional Qualification : "+proq_count+"</strong></U></td><td height=29 bgcolor=#e9ece9 width=113><a class=fancybox href=#Wrapperbox> <img src=images/icons/edit_button.gif width=45 height=18 border=0 onClick=openbox("+proq_count+",3,&quot;"+rec_ID_ram+"&quot;,"+proq_count+")  class=cursorTp ></a><img src=images/icons/delete_button.gif width=58 height=18 border=0 onClick=confirmation_1(&quot;"+rec_ID_ram+"&quot;,tablePro,"+proq_count+",3) class=cursorTp  ></td></tr></table>"+str_html+"";
				document.getElementById("proq"+proq_count+"").style.display="inline"; 
				
				
			
			
			}
             else
              {
                parent.jQuery.fancybox({afterClose:parent.location.reload(true)});
				
              }
		
		}
	}
	
	
	
	if(hId=="4"||hId=="-4")
	{
        if (table_id=="-1")
        {
         document.getElementById("exp_message_1").style.display="none";
         
        }
		table_id=parseInt(table_id)
		
       if (table_id==0)
        {
            document.getElementById("exp_message").style.display="none";
        }
        document.getElementById("exp_message").style.display="none";
		if (hId=="4")
		{
         
		document.getElementById("exp"+table_id+"").innerHTML="";
		document.getElementById("exp"+table_id+"").innerHTML=str_html;
		
		}
		if (hId=="-4")
		{
			var Ex_count=document.getElementById("hExperienceCounter").value;
			
			if(parseInt(Ex_count)< 14)
			{   
			
				
				Ex_count=parseInt(Ex_count)+1; 
				document.getElementById("hExperienceCounter").value=Ex_count;
				document.getElementById("exp"+Ex_count+"").innerHTML="<div class=\'tab-header02 col-md-12 col-xs-12\'><div class=\'col-md-7 col-sm-7\'>Experience : "+Ex_count+"</div><div class=\'col-md-5 col-sm-5\'><div class=ed-btn> <a href=#Wrapperbox id=fancybox class=fancybox style=text-decoration:none;><button onclick=openbox("+Ex_count+",4,&quot;"+rec_ID_ram+"&quot;,"+Ex_count+")  data-toggle=modal class=\'btn btn-default tab-button\' type=submit> <span class=\'glyphicon glyphicon-edit icon-padding\'></span>Edit </button> </a>  <button onclick=confirmation_1(&quot;"+rec_ID_ram+"&quot;,tableName,"+Ex_count+",4) class=\'btn btn-default tab-button02\' type=submit> <span class=\'glyphicon glyphicon-trash icon-padding\'></span>Delete </button></div></div></div>"+str_html+"";

				//document.getElementById("exp"+Ex_count+"").innerHTML="<table width=100% border=0 cellspacing=0 cellpadding=0><tr><td width=414 height=29 align=center bgcolor=#e9ece9 class=BDJValues><U class=BDJPanelNavNormal><strong>Experience : "+Ex_count+"</strong></U></td><td height=29 bgcolor=#e9ece9 width=110><div align=right><a class=fancybox href=#Wrapperbox><img src=images/icons/edit_button.gif width=45 height=18 border=0 onClick=openbox("+Ex_count+",4,&quot;"+rec_ID_ram+"&quot;,"+Ex_count+") class=cursorTp ></a><img src=images/icons/delete_button.gif width=58 height=18 border=0 onClick=confirmation_1(&quot;"+rec_ID_ram+"&quot;,tableName,"+Ex_count+",4) class=cursorTp ></div></td></tr></table>"+str_html+"";
				document.getElementById("exp"+Ex_count+"").style.display="inline"; 
				//alert(document.getElementById(count).innerHTML);
			}
             else
             {
                parent.jQuery.fancybox({afterClose:parent.location.reload(true)});
				
             }

		
		}
	}
	
	if((hId=="5"||hId=="-5"))
	{  
		
		
		if (hId=="5")
		{
		
			document.getElementById(""+table_id+"").innerHTML="";
			document.getElementById(""+table_id+"").innerHTML=str_html;
		    
		}
		if (hId=="-5")
		{
            
			document.getElementById("SpeandExtra").style.display="none";
			document.getElementById("message").style.display="none";
			document.getElementById(""+table_id+"").innerHTML=str_html;
			
		}
	
	}
	if((hId=="6"||hId=="-6"))
	{  
	
		
		if (hId=="6")
		{
		 //	 lert(table_id+"<br/>"+str_html);
			 
			document.getElementById(""+table_id+"").innerHTML="";
			document.getElementById(""+table_id+"").innerHTML=str_html;
		    
		}
		if (hId=="-6")
		{
           // alert(table_id+"<br/>"+str_html);
			//
			//document.getElementById("l_no").style.display="none";
			document.getElementById("lang_table_1").style.display="none";
			document.getElementById(""+table_id+"").style.display="inline";
			document.getElementById(""+table_id+"").innerHTML=str_html;
			
		}
	
	}
	if((hId=="7"||hId=="-7"))
	{  
		
		if (hId=="7")
		{
		 //	 lert(table_id+"<br/>"+str_html);
			 
			document.getElementById(""+table_id+"").innerHTML="";
			document.getElementById(""+table_id+"").innerHTML=str_html;
		    
		}
		if (hId=="-7")
		{
            //alert(table_id+"<br/>"+str_html);
			//
			//document.getElementById("l_no").style.display="none";
			document.getElementById("ref_n").style.display="none";
			document.getElementById(""+table_id+"").style.display="inline";
			document.getElementById(""+table_id+"").innerHTML=str_html;
			
		}
	
	}
	
     
}
function Load_ajaxBangla(str_html,rec_ID_ram,hId,table_id)
{  

	if(hId=="1"||hId=="-1")
	{
      
        if(table_id=="-1")
         {
           
			document.getElementById("message_1").style.display="none";
         }
		table_id=parseInt(table_id)
	
		if(table_id==0)
		{
            
			document.getElementById("message").style.display="none";
		}
      
           
			document.getElementById("message").style.display="none";
		
		if (hId=="1")
		{
         
			document.getElementById(table_id).innerHTML="";
			document.getElementById(table_id).innerHTML=str_html;
		
		}
			
		if (hId=="-1" )
		{
      
			var count=document.getElementById("intcount").value;
			
			if(parseInt(count)< 10)
			{   
			
			 
				count=parseInt(count)+1; 
				document.getElementById("intcount").value=count;
				var a=numberConvertion(count);
				document.getElementById(count).innerHTML="<div class=\'tab-header02 col-md-12 col-sm-12 col-xs-12\'><div class=\'col-md-7 col-sm-7\'><h4>à¦¶à¦¿à¦•à§à¦·à¦¾à¦—à¦¤ à¦¯à§‹à¦—à§à¦¯à¦¤à¦¾ : "+a+"</h4></div><div class=\'col-md-5 col-sm-5\'><div class=ed-btn><a class=fancybox id=fancybox href=#Wrapperbox><button type=submit class=\'btn btn-default tab-button data-toggle=modal\' onClick=openboxBangla("+count+",1,&quot;"+rec_ID_ram+"&quot;,"+count+")> <span class=\'glyphicon glyphicon-edit icon-padding\'></span>à¦à¦¡à¦¿à¦Ÿ </button></a><button type=button class=\'btn btn-default tab-button02\'  onclick=confirmation_1BN(&quot;"+rec_ID_ram+"&quot;,tableEdu,"+count+",1)> <span class=\'glyphicon glyphicon-trash icon-padding\'></span>à¦¡à¦¿à¦²à¦¿à¦Ÿ</button></div></div></div>"+str_html+"";
				//document.getElementById(count).innerHTML="<table width=100% border=0; cellspacing=0 cellpadding=0><tr><td width=77% height=29 align=center bgcolor=#e9ece9 class=BDJValues><U class=BDJPanelNavNormal_b><strong>à¦¶à¦¿à¦•à§à¦·à¦¾à¦—à¦¤ à¦¯à§‹à¦—à§à¦¯à¦¤à¦¾ : "+a+"</strong></U></td><td width=23% height=29 bgcolor=#e9ece9><a class=fancybox id=fancybox href=#Wrapperbox><img src=images/icons/edit_button.gif  width=45 height=18 border=0 onClick=openboxBangla("+count+",1,&quot;"+rec_ID_ram+"&quot;,"+count+")  class=cursorTp ></a><img src=images/icons/delete_button.gif width=58 height=18 border=0 onclick=confirmation_1BN(&quot;"+rec_ID_ram+"&quot;,tableEdu,"+count+",1) class=cursorTp/></td></tr></table>"+str_html+"";
				document.getElementById(count).style.display="inline";
			//alert(document.getElementById(count).innerHTML);
			}
			else
			{
               parent.jQuery.fancybox({afterClose:parent.location.reload(true)});
				
			
			}
		}
	}
	
	if(hId=="2"||hId=="-2")
	{ 
        if(table_id=="-1")
         {
          document.getElementById("tr_message_1").style.display="none";
         }
		table_id=parseInt(table_id)
         
       if (table_id==0)
        {
            document.getElementById("tr_message").style.display="none";
        }  
        document.getElementById("tr_message").style.display="none";

		if (hId=="2")
		{
           
			document.getElementById("tr"+table_id+"").innerHTML="";
			document.getElementById("tr"+table_id+"").innerHTML=str_html;
		
		}
		if (hId=="-2")
		{
			
			var tr_count=document.getElementById("hTrainingCounter").value;
			
			if(parseInt(tr_count)< 12)
			{   
			
			
				tr_count=parseInt(tr_count)+1; 
				document.getElementById("hTrainingCounter").value=tr_count;
				var t=numberConvertion(tr_count);
				document.getElementById("tr"+tr_count+"").innerHTML="<div class=\'tab-header02 col-md-12 col-sm-12 col-xs-12\'><div class=\'col-md-7 col-sm-7\'>à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£: "+ t+"</div><div class=\'col-md-5 col-sm-5\'><div class=ed-btn><a href=#Wrapperbox id=fancybox class=fancybox style=text-decoration:none;><button onclick=openboxBangla("+tr_count+",2,&quot;"+rec_ID_ram+"&quot;,"+tr_count+")  data-toggle=modal class=\'btn btn-default tab-button\' type=submit> <span class=\'glyphicon glyphicon-edit icon-padding\'></span>à¦à¦¡à¦¿à¦Ÿ </button> </a>  <button onclick=confirmation_1BN(&quot;"+rec_ID_ram+"&quot;,tableTra,&quot;"+tr_count+"&quot;,2) class=\'btn btn-default tab-button02\' type=submit> <span class=\'glyphicon glyphicon-trash icon-padding\'></span>à¦¡à¦¿à¦²à¦¿à¦Ÿ </button></div></div></div>"+str_html+"";

				//document.getElementById("tr"+tr_count+"").innerHTML="<table width=100% border=0 cellspacing=0 cellpadding=0><tr><td width=401 height=29 align=center bgcolor=#e9ece9 class=BDJValues><U class=BDJPanelNavNormal_b><strong>à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£ : "+t+"</strong></U></td><td height=29 bgcolor=#e9ece9 width=123><a class=fancybox href=#Wrapperbox><img src=images/icons/edit_button.gif width=45 height=18 border=0 onClick=openboxBangla("+tr_count+",2,&quot;"+rec_ID_ram+"&quot;,"+tr_count+") class=cursorTp ></a><img src=images/icons/delete_button.gif width=58 height=18 border=0 onClick=confirmation_1BN(&quot;"+rec_ID_ram+"&quot;,tableTra,&quot;"+tr_count+"&quot;,2) class=cursorTp ></td></tr></table>"+str_html+"";			document.getElementById("tr"+tr_count+"").style.display="inline";
				
			}
            else
            {
                parent.jQuery.fancybox({afterClose:parent.location.reload(true)});
				
            }		
		}
	}
	
	if(hId=="3"||hId=="-3")
	{
         if(table_id=="-1")
         {
           
            document.getElementById("proq_message_1").style.display="none";
          }   
		table_id=parseInt(table_id)
          
		
        if (table_id==0)
        {
        	
            document.getElementById("proq_message").style.display="none";
        }
       
        document.getElementById("proq_message").style.display="none";
		if (hId=="3")
		{
			document.getElementById("proq"+table_id+"").innerHTML="";
			document.getElementById("proq"+table_id+"").innerHTML=str_html;
		
		}
		if (hId=="-3")
		{
			var proq_count=document.getElementById("hPECounter").value;
			
			if(parseInt(proq_count)< 12)
			{   
				
				
				proq_count=parseInt(proq_count)+1; 
                
				document.getElementById("hPECounter").value=proq_count;
				var p=numberConvertion(proq_count);
				document.getElementById("proq"+proq_count+"").innerHTML="<div class=\'tab-header02 col-md-12 col-xs-12\'><div class=\'col-md-7 col-sm-7\'>à¦ªà§‡à¦¶à¦¾à¦—à¦¤ à¦¯à§‹à¦—à§à¦¯à¦¤à¦¾ : "+ p+"</div><div class=\'col-md-5 col-sm-5\'><div class=ed-btn> <a href=#Wrapperbox id=fancybox class=fancybox style=text-decoration:none;><button onclick=openboxBangla("+proq_count+",3,&quot;"+rec_ID_ram+"&quot;,"+proq_count+")  data-toggle=modal class=\'btn btn-default tab-button\' type=submit> <span class=\'glyphicon glyphicon-edit icon-padding\'></span>à¦à¦¡à¦¿à¦Ÿ </button> </a>  <button onclick=confirmation_1BN(&quot;"+rec_ID_ram+"&quot;,tablePro,"+proq_count+",3) class=\'btn btn-default tab-button02\' type=submit> <span class=\'glyphicon glyphicon-trash icon-padding\'></span>à¦¡à¦¿à¦²à¦¿à¦Ÿ </button></div></div></div>"+str_html+"";

				//document.getElementById("proq"+proq_count+"").innerHTML="<table width=100% border=0 cellspacing=0 cellpadding=0><tr><td width=411 height=29 align=center bgcolor=#e9ece9 class=BDJValues><U class=BDJPanelNavNormal_b><strong>à¦ªà§‡à¦¶à¦¾à¦—à¦¤ à¦¯à§‹à¦—à§à¦¯à¦¤à¦¾ : "+p+"</strong></U></td><td height=29 bgcolor=#e9ece9 width=113><a class=fancybox href=#Wrapperbox> <img src=images/icons/edit_button.gif width=45 height=18 border=0 onClick=openboxBangla("+proq_count+",3,&quot;"+rec_ID_ram+"&quot;,"+proq_count+")  class=cursorTp ></a><img src=images/icons/delete_button.gif width=58 height=18 border=0 onClick=confirmation_1BN(&quot;"+rec_ID_ram+"&quot;,tablePro,"+proq_count+",3) class=cursorTp  ></td></tr></table>"+str_html+"";
				document.getElementById("proq"+proq_count+"").style.display="inline"; 
				
				
			
			
			}
             else
              {
                parent.jQuery.fancybox({afterClose:parent.location.reload(true)});
				
              }
		
		}
	}
	
	
	
	if(hId=="4"||hId=="-4")
	{
        if (table_id=="-1")
        {
         document.getElementById("exp_message_1").style.display="none";
         
        }
		table_id=parseInt(table_id)
		
       if (table_id==0)
        {
            document.getElementById("exp_message").style.display="none";
        }
        document.getElementById("exp_message").style.display="none";
		if (hId=="4")
		{
         
		document.getElementById("exp"+table_id+"").innerHTML="";
		document.getElementById("exp"+table_id+"").innerHTML=str_html;
		
		}
		if (hId=="-4")
		{
			var Ex_count=document.getElementById("hExperienceCounter").value;
			
			if(parseInt(Ex_count)< 14)
			{   
			
				
				Ex_count=parseInt(Ex_count)+1; 
				document.getElementById("hExperienceCounter").value=Ex_count;
				var e=numberConvertion(Ex_count);
				document.getElementById("exp"+Ex_count+"").innerHTML="<div class=\'tab-header02 col-md-12 col-xs-12\'><div class=\'col-md-7 col-sm-7\'>à¦•à¦°à§à¦®à¦¸à¦‚à¦¸à§à¦¥à¦¾à¦¨ à¦‡à¦¤à¦¿à¦¹à¦¾à¦¸ : "+e+"</div><div class=\'col-md-5 col-sm-5\'><div class=ed-btn> <a href=#Wrapperbox id=fancybox class=fancybox style=text-decoration:none;><button onclick=openboxBangla("+Ex_count+",4,&quot;"+rec_ID_ram+"&quot;,"+Ex_count+")  data-toggle=modal class=\'btn btn-default tab-button\' type=submit> <span class=\'glyphicon glyphicon-edit icon-padding\'></span>à¦à¦¡à¦¿à¦Ÿ </button> </a>  <button onclick=confirmation_1BN(&quot;"+rec_ID_ram+"&quot;,tableName,"+Ex_count+",4) class=\'btn btn-default tab-button02\' type=submit> <span class=\'glyphicon glyphicon-trash icon-padding\'></span>à¦¡à¦¿à¦²à¦¿à¦Ÿ </button></div></div></div>"+str_html+"";

				//document.getElementById("exp"+Ex_count+"").innerHTML="<table width=100% border=0 cellspacing=0 cellpadding=0><tr><td width=414 height=29 align=center bgcolor=#e9ece9 class=BDJValues><U class=BDJPanelNavNormal_b><strong>à¦•à¦°à§à¦®à¦¸à¦‚à¦¸à§à¦¥à¦¾à¦¨ à¦‡à¦¤à¦¿à¦¹à¦¾à¦¸ : "+e+"</strong></U></td><td height=29 bgcolor=#e9ece9 width=110><div align=right><a class=fancybox href=#Wrapperbox><img src=images/icons/edit_button.gif width=45 height=18 border=0 onClick=openboxBangla("+Ex_count+",4,&quot;"+rec_ID_ram+"&quot;,"+Ex_count+") class=cursorTp ></a><img src=images/icons/delete_button.gif width=58 height=18 border=0 onClick=confirmation_1BN(&quot;"+rec_ID_ram+"&quot;,tableName,"+Ex_count+",4) class=cursorTp ></div></td></tr></table>"+str_html+"";
				document.getElementById("exp"+Ex_count+"").style.display="inline"; 
				//alert(document.getElementById(count).innerHTML);
			}
             else
             {
                parent.jQuery.fancybox({afterClose:parent.location.reload(true)});
				
             }

		
		}
	}
	
	if((hId=="5"||hId=="-5"))
	{  
	//alert(hId);
		
		if (hId=="5")
		{
		
			document.getElementById(""+table_id+"").innerHTML="";
			document.getElementById(""+table_id+"").innerHTML=str_html;
		    
		}
		if (hId=="-5")
		{
            
			document.getElementById("SpeandExtra").style.display="none";
			document.getElementById("message").style.display="none";
			document.getElementById(""+table_id+"").innerHTML=str_html;
			
		}
	
	}
	if((hId=="6"||hId=="-6"))
	{  
	//alert(hId);
		
		if (hId=="6")
		{
		 //	 lert(table_id+"<br/>"+str_html);
			 
			document.getElementById(""+table_id+"").innerHTML="";
			document.getElementById(""+table_id+"").innerHTML=str_html;
		    
		}
		if (hId=="-6")
		{
           
			//
			//document.getElementById("l_no").style.display="none";
			document.getElementById("lang_table_1").style.display="none";
			document.getElementById(""+table_id+"").style.display="inline";
			document.getElementById(""+table_id+"").innerHTML=str_html;
			
		}
	
	}
	if((hId=="7"||hId=="-7"))
	{  
	//alert(hId);
		
		if (hId=="7")
		{
		 //	 lert(table_id+"<br/>"+str_html);
			 
			document.getElementById(""+table_id+"").innerHTML="";
			document.getElementById(""+table_id+"").innerHTML=str_html;
		    
		}
		if (hId=="-7")
		{
            
			//
			//document.getElementById("l_no").style.display="none";
			document.getElementById("ref_n").style.display="none";
			document.getElementById(""+table_id+"").style.display="inline";
			document.getElementById(""+table_id+"").innerHTML=str_html;
			
		}
	
	}
	
     
}

function numberConvertion(varNum)
{
	var strBanglaFont
	var arrBangla=["à§¦","à§§","à§¨","à§©","à§ª","à§«","à§¬","à§­","à§®","à§¯"];
	var arr=(varNum).toString(10).split("").map(Number);
	strBanglaFont=""
	for(var i=0;i<arr.length;i++)
	{
		strBanglaFont=strBanglaFont+arrBangla[arr[i]];
	}
	//alert(strBanglaFont);
	return strBanglaFont.trim();
}
