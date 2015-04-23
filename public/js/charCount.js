
// params = textareanm, max char, spanName , MessageCaption , shouldShowSpan
//  <textarea name="CADD" id="CADD"  cols="45" rows="2" onkeyup="countLetter(this.id , 20 , 'CADD_sp1' , 'MY TEXT' , 1)" onchange="countLetter(this.id , 20 , 'CADD_sp1' , 'MY TEXT' , 1 )" ></textarea>
function numberConvertion(varNum)
{
	var strBanglaFont
	var arrBangla=["০","১","২","৩","৪","৫","৬","৭","৮","৯"];
	var arr=(varNum).toString(10).split("").map(Number);
	strBanglaFont=""
	for(var i=0;i<arr.length;i++)
	{
		strBanglaFont=strBanglaFont+arrBangla[arr[i]];
	}
	//alert(strBanglaFont);
	return strBanglaFont.trim();
}

function countLetter(textareanm , maxChar , spanName , MessageCaption , shouldShowSpan )
{

span_area = document.getElementById(spanName) ;
txtara = document.getElementById(textareanm)   ;
ev_v =  txtara.value ;
tfVal = parseInt(ev_v.length) ; 
maxChar = parseInt(maxChar) ; 


if(tfVal != 0){
window.status = tfVal ; 
shouldShowSpan == 1 ? span_area.innerHTML = "You wrote <b>"+tfVal+"</b> character(s)" : "" ;
  
 
	 if(tfVal >= ( maxChar + 1 ) ) 
	 {
		alert("Please stop writing on "+MessageCaption +", you are crossing the "+maxChar+" letter limit !") ;
		txtara.focus() ;
	 }// if(tfVal >= ( maxChar + 1 ) ) 
	 if(tfVal > maxChar )
	 {
	 nb =  txtara.value.substr(0, maxChar ) ;
	 txtara.value =  nb ;
	 shouldShowSpan == 1 ? span_area.innerHTML ="You wrote <b>"+nb.length+"</b> character(s)" : "" ;
	  }//if(tfVal > maxChar )
 
}//if(tfVal != 0)
else{
 window.status = "" ;
  shouldShowSpan == 1 ? span_area.innerHTML = "" : "" ;
 
        }//else of if(tfVal != 0)


}//end countLetter fnc
function countLetterBN(textareanm , maxChar , spanName , MessageCaption , shouldShowSpan )
{

span_area = document.getElementById(spanName) ;
txtara = document.getElementById(textareanm)   ;
ev_v =  txtara.value ;
tfVal = parseInt(ev_v.length) ; 
maxChar = parseInt(maxChar) ; 


if(tfVal != 0){
window.status = tfVal ; 
shouldShowSpan == 1 ? span_area.innerHTML = " আপনি <b>"+numberConvertion(tfVal)+"</b> অক্ষর লিখেছেন" : "" ;
  
 
	 if(tfVal >= ( maxChar + 1 ) ) 
	 {
		alert("Please stop writing on "+MessageCaption +", you are crossing the "+maxChar+" letter limit !") ;
		txtara.focus() ;
	 }// if(tfVal >= ( maxChar + 1 ) ) 
	 if(tfVal > maxChar )
	 {
	 nb =  txtara.value.substr(0, maxChar ) ;
	 txtara.value =  nb ;
	 shouldShowSpan == 1 ? span_area.innerHTML ="You wrote <b>"+nb.length+"</b> character(s)" : "" ;
	  }//if(tfVal > maxChar )
 
}//if(tfVal != 0)
else{
 window.status = "" ;
  shouldShowSpan == 1 ? span_area.innerHTML = "" : "" ;
 
        }//else of if(tfVal != 0)


}//end countLetter fnc