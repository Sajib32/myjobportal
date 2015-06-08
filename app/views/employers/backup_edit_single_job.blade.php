
<html>
<head>

<title>Edit </title>
<meta name="distribution" content="Global">
<meta  http-equiv="Pragma" content="no-cache">


<link rel="stylesheet" href="{{ URL::asset('css/employers/home1.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/employers/jquery.ui.all.css') }}">

<script src="{{ URL::asset('js/employers/jquery-1.7.1.min.js') }}"></script>
<script src="{{ URL::asset('js/employers/jquery.ui.core.js') }}"></script>
<script src="{{ URL::asset('js/employers/jquery.ui.widget.js') }}"></script>
<script src="{{ URL::asset('js/employers/jquery.ui.datepicker.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('css/employers/demos.css') }}">

  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
<script>
function confirmdelete(title,cir_id,job)
{
    var is_confirmed = confirm('Do you really want to Delete "'+title+'" jobs from this circular?');
    if (is_confirmed) {
        window.location='jobs_add.php?circular_id='+cir_id+'&job='+job+'&title='+title;

    }
}
</script>

</head>

<body topmargin="5" leftmargin="0" class="body">
                        <div align="center">
                          <center>
                            <table cellspacing=0 cellpadding=0 width="950" border=0 height="132" bgcolor="#FFFFFF" style="border-collapse: collapse">
                              <tbody>
                                <tr>
                                  <td valign=top align=left class="bortl"> </td>
                                  <td class="bortop" valign=top align=left width="100%" height="5"></td>
                                  <td width="20" align=left valign=top class="bortr"></td>
                                </tr>
                                <tr>
                                  <td class="borleft" valign=top 
                            align=left width="5" height="122">&nbsp;</td>
                                  <td valign=center align=middle width="100%" height="122">
                                    <table border="0" cellspacing="0" width="100%" cellpadding="0" id="AutoNumber2">
                                      
                                      <tr>
                                        <td align="center" width="100%">
                                          <div align="center">
                                            <center>
                                              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber6" height="100">
                                                <tr>
                                                  <td width="310" height="100" valign="middle"><a href="../index.php"><img class=logo src="../images/logo.gif" alt="BDJobsToday.com logo" title="BDJobsToday.com Logo" border="0"></a></td>
                                                  <td height="100" class="details"></td>
                                                </tr>
                                              </table>
                                            </center>
                                        </div></td>
                                      </tr>
                                    </table>
                                    
                                    <table width="100%" border="0" align="right" cellpadding="0" cellspacing="0" style="border-collapse: collapse">
                                      <tr>
                                        <td width="327" align="center" valign="top">
                                        </td>
                                        
                                        
                                      </tr>
                                      <tr>
                                        <td colspan="3"> </td>
                                      </tr>
                                      <tr>
                                        <td colspan="3"></td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" align="center">
                    <table width="100%" cellpadding="0" cellspacing="0" id="BOX">
                    <tbody><tr>
                      <td>
                        <table cellpadding="0" cellspacing="0">
                          <tbody><tr>
                            <td class="box4tl">&nbsp;</td>
                            <td class="box4tm"><div align="right"></div></td>
                            <td class="box4tr">&nbsp;</td>
                          </tr>
                        </tbody></table>
                      </td>
                    </tr>
                    <tr>
      <td  align="center" class="box4body"><table border="0" cellpadding="0" cellspacing="0"  width="100%" class="details">
                    <tr>
                      <td width="200" align="left" valign="top" bgcolor="#EDEDED">                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                         <tr>
                           <td colspan="2" ><ul class="STYLE2">
                <li><a href="employer.php" class="link02"><strong>Home</strong></a></li>
        <li><a href="jobs_add.php" class="link02"><strong>Add New Job </strong></a></li>
                <li><a href="manage_jobs.php?employer=13604" class="link02"><strong>Manage Jobs</strong></a> </li>
        <li><a href="companyinfo.php" class="link02"><b>Accounts Info</b></a></li>
        <li class="STYLE2"><b><a href="logout.php" target="_parent" class="link03">Signout</a> </b></li>             </ul>        </td>
                           </tr>
                         <tr>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                         </tr>
                         <tr>
                           <td width="4%">&nbsp;</td>
                           <td width="96%" class="STYLE10"> Online Application</td>
                         </tr>
                         <tr>
                           <td>&nbsp;</td>
                           <td class="bulet">
               <ol>               </ol></td>
                         </tr>
                         <tr>
                           <td colspan="2" class="bulet">
               
               </td>
                           </tr>
                       </table>
            </td>
                      <td width="10" align="center" valign="top">&nbsp;</td>
                      <td align="center" valign="top"><br>
                      <div align="left" class="STYLE3"><span class="text_box_red">Edit Jobs</span></div>
                      <br>
                        <div class="text_box_free" align="center"><br>
          <script type="text/javascript">

// HTML to Entities (form) script- By JavaScriptKit.com (http://www.javascriptkit.com)
// For this and over 400+ free scripts, visit JavaScript Kit- http://www.javascriptkit.com/
// This notice must stay intact for use

function html2entities(){
var re=/[<>"']/g
for (i=0; i<arguments.length; i++)
arguments[i].value=arguments[i].value.replace(re, function(m){return replacechar(m)})
}

function replacechar(match){
if (match=="<")
return "&lt;"
else if (match==">")
return "&gt;"
else if (match=="\"")
return "&quot;"
else if (match=="'")
return "&#039;"
}

</script>
<form method="post" action="{{ URL::route('edit-job-post') }}" name="form1" id="form1">
                  {{ Form::hidden('id', $jobedit->id) }}
                  {{ Form::token() }}
                 
                  <table width="99%" border="0" align="center" cellpadding="3" cellspacing="0" bordercolorlight="#E8EDE5" bordercolordark="#E8EDE5" id="insideform" style="border-collapse: collapse">
                            <tr class="menu">
                              <td height="20" colspan="3" class="STYLE9" >Add Single Jobs </td>
                              </tr>
                            
                            <tr>
                              <td height="30" colspan="2" class="print" ><div align="right">Jobs Title : </div></td>
                              <td width="79%" height="30" class="print" >
                              <input name="title" type="text" class="details" id="title" value="{{ $jobedit->job_title }}" size="70" width="auto"/></td>
                            </tr>
                            <tr>
                              <td height="30" colspan="2" class="print" ><div align="right">Company Name : </div></td>
                              <td width="79%" height="30" class="print" ><input name="company" type="text" class="details" id="company" value="" size="70" width="auto"/></td>
                            </tr>
                            
                            <tr>
                              <td height="30" colspan="2" class="print" ><div align="right">Category : </div></td>
                              <td height="30" class="print" >
                                Job Category:
        <select name="category[]" class="detailsnoncap" id="select" style="width:auto">
        
        <option value="{{ $jobedit->jobcategory->id }}">{{ $jobedit->jobcategory->name }}</option>
        @foreach(JobCategory::all() as $jcat)
          
<option value="{{ $jcat->id }}">{{ $jcat->name }}</option>
@endforeach
                              </select> 
                              Nature :
                              <select name="job_nature" id="job_nature" class="detailsnoncap">
                                   <option value="2" >Non-Govt</option>
                                   <option value="3" >Overseas</option>

                               </select></td>
                            </tr>
                            <tr>
                              <td height="30" colspan="2" class="print" ><div align="right">Vacancy :</div></td>
                              <td height="30" class="print" ><input name="postno" type="text" class="details" id="postno" value="" size="10" width="auto"/> 
                              Job Location :
                                <input name="location" type="text" class="details" id="location" value="" size="20" width="auto"/></td>
                            </tr>
                            <tr>
                              <td height="30" colspan="2" class="print" > <div align="right">Salary :
                                                    <input name="postdate" type="hidden" class="details" id="postdate" value="30 Apr, 2015" size="15" width="auto" />
                                    <input name="source" type="hidden" class="details" id="source" value="" size="15" width="auto" />

                              </div></td>
                              <td height="30" class="print" ><input name="salary" type="text" class="details" id="salary" value="" size="20" width="auto"/> 
                              Applying Last Date: 
                <input name="deadline" type="text" class="detailsnoncap" id="datepicker" onblur='javascript:if(this.value == "")this.value=""' value="" size="13">
                   
                </td>
                            </tr>
                            
                            
                            <tr>
                              <td height="30" colspan="2" valign="top" class="print" ><div align="right">Jobs Responsibility  : </div></td>
                              <td height="30" class="STYLE2" ><textarea name="job_response" cols="70" rows="5" class="details" id="textarea" width="auto"></textarea>
                                <br>[Use ENTER end of line]</td>
                            </tr>
              <tr>
                              <td height="30" colspan="2" valign="top" class="print" ><div align="right">Educational Qualification  : </div></td>
                              <td height="30" class="STYLE2" ><textarea name="job_qua" cols="70" rows="3" class="details" id="textarea" width="auto"></textarea>
                                <br>[Use ENTER end of line]</td>
                            </tr>
              <tr>
                              <td height="30" colspan="2" valign="top" class="print" ><div align="right">Jobs Experience  : </div></td>
                              <td height="30" class="STYLE2" ><textarea name="job_exp" cols="70" rows="3" class="details" id="textarea" width="auto"></textarea>
                                <br>[Use ENTER end of line]</td>
                            </tr>
                            <tr>
                              <td height="30" colspan="2" valign="top" class="print" ><div align="right"> Additional Requirements :</div></td>
                              <td height="30" class="STYLE2" ><textarea name="aditional" cols="70" rows="3" class="details" id="textarea" width="auto"></textarea>
                              <br>[Use ENTER end of line]</td>
                            </tr>
              <tr>
                              <td height="30" colspan="2" valign="top" class="print" ><div align="right"> Others Benefits :</div></td>
                              <td height="30" class="STYLE2" ><textarea name="other_benefit" cols="70" rows="2" class="details" id="textarea" width="auto"></textarea>
                              <br>[Use ENTER end of line]</td>
                            </tr>
              <tr>
                              <td height="30" colspan="2" valign="top" class="print" ><div align="right"> Applying Procedure :</div></td>
                              <td height="30" class="STYLE2" ><textarea name="apply_procedure" cols="70" rows="4" class="details" id="textarea" width="auto"></textarea>
                              <br>[Use ENTER end of line]<br>
                <div class="print" >Application Submit Online :
                                                            <input name="apply" type="radio" value="1" />
                                                            <label for="YES">YES</label>
                                                    <input name="apply" type="radio" value="0" />
                                                    <label for="NO">NO</label>
                              </div></td>
                            </tr>
              <tr>
                              <td height="30" colspan="2" valign="top" class="print" ><div align="right"> Company Address  :</div></td>

                              <td height="30" class="STYLE2" ><textarea name="address" cols="70" rows="5" class="details" id="textarea" width="auto"></textarea>
                              <br>[Use ENTER end of line]</td>
                            </tr>
              <tr>
                              <td height="30" colspan="2" class="print" ><div align="right">Company Website : </div></td>
                              <td width="79%" height="30" class="print" ><input name="web" type="text" class="details" id="web" value="" size="70" width="auto"/></td>
                            </tr>
                            <tr>
                              <td height="30" colspan="2" valign="top" class="print" >&nbsp;</td>
                              <td height="30" class="print" ><input name="action" type="hidden" id="action" value="save" />
                                <input name="submit" type="submit" id="submit" value="Submit" /></td>
                            </tr>
                          </table>
                  </form>
                                </div>
                        </td>
                    </tr>
                    
                    
                  </table></td>
      
    </tr>
                    <tr>
                      <td>
                        <table cellpadding="0" cellspacing="0">
                          <tbody><tr>
                            <td  class="box4bl">&nbsp;</td>
                            <td class="box4bm">&nbsp;</td>
                            <td class="box4br">&nbsp;</td>
                          </tr>
                        </tbody></table>
                      </td>
                    </tr>
                    
                    </tbody></table>
                    </td>
                                      </tr>
                    <tr>
                                        <td colspan="3"><hr size="1" noshade color="#C0C0C0"></td>
                                      </tr>
                                      <tr>
                                        <td colspan="3">
                                          <table width="100%" height="40" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" id="AutoNumber18" style="border-collapse: collapse; border-width: 0">
                                            <tr>
                                              <td><span class="STYLE3">All right reserved by : <a class=link02 href="http://www.BDJobsToday.com">www.BDJobsToday.com</a></span></td>
                                              <td><div align="right"><span class="STYLE3">Design &amp; Developed by : <a class=link02 href="http://www.indexbangladesh.com">www.IndexBangladesh.com</a></span></div></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                  </table></td>
                                  <td width="5" height="122" align=left valign=top class="borright">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td valign=top align=left class="borbl"></td>
                                  <td class="borbottom" valign=top align=left width="100%" height="5"></td>
                                  <td valign=top align=left class="borbr"></td>
                                </tr>
                              </tbody>
                            </table>
                          </center>
</div>
                              


</body>

</html>