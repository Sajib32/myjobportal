// JavaScript Document


$(document).ready(function() {
	
	 /*$(".actionCaller").focus(function(){
		 
		 if($(this).val() == $(this).attr('cattr'))
		 {	
		 	$(this).val("");
		 }
	});
	
	 $(".actionCaller").blur(function(){
		 if(!$(this).val())
		 {
			$(this).val($(this).attr('cattr'));
		 }
	});*/
	
	
	/*$("#showhide_leftmenu").toggle(function(){
		$(this).addClass("show_left_menu");
		$(".left_menu").slideUp("fast");
	},
	function(){
		$(this).removeClass("show_left_menu");
		$(".left_menu").slideDown("fast");
		});*/
	
	
	/*$("#showhide_leftmenu").toggle(function(){
		$(this).removeClass("show_left_menu");
		$(this).addClass("hide_left_menu");
		$(".left_menu").slideDown("fast");
	},
	function(){
		$(this).removeClass("hide_left_menu");
		$(this).addClass("show_left_menu");
		$(".left_menu").slideUp("fast");
		});*/

	/*$(".toggle_showhide").toggle(
		function()
		{
			$(this).addClass("show_toggle");
			$($(this).attr("trgtcls")).slideUp("fast");
			//alert($(this).attr("trgtcls"));
		},
		function()
		{
			$(this).removeClass("show_toggle");
			$($(this).attr("trgtcls")).slideDown("fast");
		});
*/


		//pop message and sub window code
		
			//$(".sub_window").click(function(){$.colorbox({iframe:true, width:$(this).attr('width'), height:$(this).attr('height'), href:$(this).attr('path'), scrolling:false});});
			
			/*$(".sub_window").click(function () {
					//alert( $(this).attr('scrolling'));
				$.colorbox({
					iframe: true,
					width: $(this).attr('width'),
					height: $(this).attr('height'),
					href: $(this).attr('path'),
					scrolling: true,
					innerWidth:'545px'
				});
			});	*/
			
			
		/*
		Created by Azhar on 10 Oct 2013
		onclick tr backgroud color change
		*/
		//$('.group_Name').toggle(function(){
//			
//			alert(grpName)
//			if (grpName != "")
//			{
//				$('#'+grpName).removeClass('trWatchlisted');
//				$(this).addClass('trWatchlisted');
//			}
//			else
//			{
//			$(this).removeClass('trWatchlisted');
//			}
//			grpName = $(this).attr('id');
//			}, function(){
//			alert('t:'+grpName)
//			if (grpName != "")
//			{
//				$('#'+grpName).removeClass('trWatchlisted');
//				$(this).addClass('trWatchlisted');
//			}
//			else
//			{
//			$(this).removeClass('trWatchlisted');
//			}
//			});


			
   //v
  


/*
Created by Azhar on 09 Oct 2013
This function call in ajax pages

*/

$(".pop_msg").click(function(){$.colorbox({html:'<p class="title" style="text-align:center">'+$(this).attr("msg")+'</p>', width:"550px;"});});

$(document).on('click', ".sub_window_new", function() {
	
	 $.colorbox({
		iframe: true,
		width: $(this).attr('width'),
		height: $(this).attr('height'),
		href: $(this).attr('path'),
		scrolling: true,
		innerWidth:'545px'
	});
});

/*
Created by Azhar on 10 Oct 2013
This function call in ajax pages

*/
$(document).on('click', ".Send_Mail_Message", function() {
	 //alert($(this).attr('prm1'));
	 //alert($(this).attr('prm2'));
	 strJID= $(this).attr('jid');
	 strCVS = $(this).attr('prm1');
	 strPGT = $(this).attr('prm2');
	 //strPath= '';
	 strTChk = $('#TCheckBox').attr('value');
	 
	 if (strTChk < 0)
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
		
		for(i=1; i <= strTChk; i++)
		{
			//if(document.getElementById("ActionP_ID"+i).checked && !(document.getElementById("ActionP_ID"+i).disabled))
			if($('#ActionP_ID'+i).is(':checked') && !($('#ActionP_ID'+i).is(':disabled')))
			{
				var arrValue;
				tmpValue = $('#ActionP_ID'+i).attr('value')			
				arrValue = tmpValue.split("/");
				if(SelectedIds == "")
				{
					SelectedIds = arrValue[0];	//Applicant's ID
				}
				else
				{
					SelectedIds = SelectedIds + "," + arrValue[0]; 	//Applicant's ID
				}
			}
		}
	 	
		//alert(SelectedIds)
		if (SelectedIds == "" && strCVS == '-1')
		{
			alert("You must select at least one checkbox from the right side.");
		}
		else
		{
			strPath = "MessageToApplicant/Message_Sender.asp?JobID="+ strJID + "&AppID=" + SelectedIds + "&CVStatus=" + strCVS + "&PGType=" + strPGT;	
			 //alert(strPath);
			 $(this).attr('path', strPath)
			 //alert($(this).attr('path'))
			 $.colorbox({
				iframe: true,
				width: $(this).attr('width'),
				height: $(this).attr('height'),
				href: $(this).attr('path'),
				scrolling: true,
				innerWidth:'545px'
			});
		}
	 
	 }
	
	 
});


$(document).on('click', ".btnSaveFilter", function() {
	 //alert($(this).attr('prm1'));
	 //alert($(this).attr('prm2'));
	 //Save_Cv_Filter.asp?n=|^catID&v=|^7&id=0&t=74497
	 val = $("#hidfFVIdd").val();
	 nam =  $("#hidfFNIdd").val();
	 idd = $("#FID").val();
	 tt = $("#hidtt").val();
	 strPath = "Save_Cv_Filter.asp?n="+nam+"&v="+val+"&id="+idd+"&t="+tt;
	 //alert(strPath)
	 //strPath = "MessageToApplicant/Message_Sender.asp?JobID="+ strJID + "&AppID=" + SelectedIds + "&CVStatus=" + strCVS + "&PGType=" + strPGT;	
		 //alert(strPath);
		 $(this).attr('path', strPath)
		 //alert($(this).attr('path'))
		 $.colorbox({
			iframe: true,
			width: $(this).attr('width'),
			height: $(this).attr('height'),
			href: $(this).attr('path'),
			scrolling: true,
			innerWidth:'545px'
		});
	 
});

$(document).on('click', ".btnSaveFilter_", function() {
	 //alert($(this).attr('prm1'));
	 //alert($(this).attr('prm2'));
	 //Save_Cv_Filter.asp?n=|^catID&v=|^7&id=0&t=74497
	 val = $("#hidfFVIdd").val();
	 nam =  $("#hidfFNIdd").val();
	 idd = $("#FID").val();
	 tt = $("#hidtt").val();
	 strPath = "Save_Cv_Filter_test.asp?n="+nam+"&v="+val+"&id="+idd+"&t="+tt;
	 //alert(strPath)
	 //strPath = "MessageToApplicant/Message_Sender.asp?JobID="+ strJID + "&AppID=" + SelectedIds + "&CVStatus=" + strCVS + "&PGType=" + strPGT;	
		 //alert(strPath);
		 $(this).attr('path', strPath)
		 //alert($(this).attr('path'))
		 $.colorbox({
			iframe: true,
			width: $(this).attr('width'),
			height: $(this).attr('height'),
			href: $(this).attr('path'),
			scrolling: true,
			innerWidth:'545px'
		});
	 
});


$(document).on('click', ".cv_search", function() {
     //alert($(this).attr('prm1'));
	 //alert($(this).attr('prm2'));
	 acttype = $(this).attr('prm1');
	 //strPath= '';
	 strTChk = $('#TCheckBox').attr('value');
	 //console.log (strTChk)
	 if (strTChk < 0)
	 {
		alert("You must select at least one checkbox from the right side.");
		return false;
	 }
	 else
	 {
		var SelectedIds="";
		var SelectedNames = "";
		var SelectedRows="";
		var CheckBoxNo="";
		var tmpValue;
		//alert(strTChk)
		for(i=0; i <= strTChk; i++)
		{
			//alert(i)
			//if(document.getElementById("ActionP_ID"+i).checked && !(document.getElementById("ActionP_ID"+i).disabled))
			if($('#Appl_ID'+i).is(':checked') )
			{
				
				var arrValue;
				tmpValue = $('#Appl_ID'+i).attr('value')	
				tmpValueName = $('#Appl_IDN'+i).attr('value')			
				//arrValue = tmpValue.split("/");
				if(SelectedIds == "")
				{
					SelectedIds = tmpValue;	//Applicant's ID
				}
				else
				{
					SelectedIds = SelectedIds + ", " + tmpValue; 	//Applicant's ID
				}
				
				if (SelectedNames == "")
				{
					SelectedNames = tmpValueName;
				}
				else
				{
					SelectedNames = SelectedNames +", "+tmpValueName;
				}
			}
		}
	 	
		//alert(SelectedIds)
		if (SelectedIds == "")
		{
			alert("You must select at least one checkbox from the right side.");
		}
		else
		{
			if (acttype  == "wl")
			{
				strPath = "Watchlist_panel.asp?appids="+ SelectedIds+"&name="+SelectedNames;
			}
			else
			{
				strPath = "MessageToApplicant/Message_Sender.asp?AppID=" + SelectedIds + "&PGType=CVView";	
			}
			
			 //alert(strPath);
			 $(this).attr('path', strPath)
			 //alert($(this).attr('path'))
			 $.colorbox({
				iframe: true,
				width: $(this).attr('width'),
				height: $(this).attr('height'),
				href: $(this).attr('path'),
				scrolling: true,
				innerWidth:'545px'
			});
		}
	 
	 }
	
	 
});

});

$(document).on('click', ".Send_Mail_Message_test", function() {
	 //alert($(this).attr('prm1'));
	 //alert($(this).attr('prm2'));
	 strJID= $(this).attr('jid');
	 strCVS = $(this).attr('prm1');
	 strPGT = $(this).attr('prm2');
	 //strPath= '';
	 strTChk = $('#TCheckBox').attr('value');
	 
	 if (strTChk < 0)
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
		
		for(i=1; i <= strTChk; i++)
		{
			//if(document.getElementById("ActionP_ID"+i).checked && !(document.getElementById("ActionP_ID"+i).disabled))
			if($('#ActionP_ID'+i).is(':checked') && !($('#ActionP_ID'+i).is(':disabled')))
			{
				var arrValue;
				tmpValue = $('#ActionP_ID'+i).attr('value')			
				arrValue = tmpValue.split("/");
				if(SelectedIds == "")
				{
					SelectedIds = arrValue[0];	//Applicant's ID
				}
				else
				{
					SelectedIds = SelectedIds + "," + arrValue[0]; 	//Applicant's ID
				}
			}
		}
	 	
		//alert(SelectedIds)
		if (SelectedIds == "" && strCVS == '-1')
		{
			alert("You must select at least one checkbox from the right side.");
		}
		else
		{
			strPath = "MessageToApplicant/Message_Sender_test.asp?JobID="+ strJID + "&AppID=" + SelectedIds + "&CVStatus=" + strCVS + "&PGType=" + strPGT;	
			 //alert(strPath);
			 $(this).attr('path', strPath)
			 //alert($(this).attr('path'))
			 $.colorbox({
				iframe: true,
				width: $(this).attr('width'),
				height: $(this).attr('height'),
				href: $(this).attr('path'),
				scrolling: true,
				innerWidth:'545px'
			});
		}
	 
	 }
	
	 
});
//$(document).on('toggle', ".group_Name", function() {
//     if (grpName != "")
//			{
//				$('#'+grpName).removeClass('trWatchlisted');
//			}
//			$(this).addClass('trWatchlisted');
//			grpName = $(this).attr('id');
//			}, function(){
//			$(this).removeClass('trWatchlisted');
//});