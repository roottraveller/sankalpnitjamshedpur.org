<?php
error_reporting(0);
$root='../';
?><head> <!--
<script>
var xmlhttp
function loadContent()
{
var ldng=document.getElementById("ldng");
var rslt_msg=document.getElementById("rslt_msg");

ldng.style.visibility='visible';
rslt_msg.style.visibility='hidden';

var name=document.getElementById("name").value;
var email=document.getElementById("email").value;
var comment=document.getElementById("comment").value;

 xmlhttp=GetXmlHttpObject();

  if (xmlhttp==null)
  {
   alert ("Your browser does not support Ajax HTTP");
   return;
  }

    var url="feedback_check.php";
    url=url+"?name="+name+"&email="+email+"&comment="+comment;
//alert(url);
    xmlhttp.onreadystatechange=getOutput;
    xmlhttp.open("POST",url,true);
    xmlhttp.send(null);
}

function getOutput()
{

  if (xmlhttp.readyState==4)
  {
  var tmp=xmlhttp.responseText;
var ldng=document.getElementById("ldng");
var rslt_msg=document.getElementById("rslt_msg");
//alert(tmp);
if(tmp==1)
{
rslt_msg.innerHTML="Sent Successfully.";
}
else
{
rslt_msg.innerHTML="Eorror in sending/Enter Valid Details";
}
ldng.style.visibility='hidden';
rslt_msg.style.visibility='visible';

  }
}

function GetXmlHttpObject()
{
    if (window.XMLHttpRequest)
    {
       return new XMLHttpRequest();
    }
    if (window.ActiveXObject)
    {
      return new ActiveXObject("Microsoft.XMLHTTP");
    }
 return null;
}
</script> -->
<script type="text/javascript">

function validateForm()
{
//var x=document.forms["FORMTEST"]["FNAME"].value;
if(document.FORMTEST.name.value == "")
  {
  alert("Your Name cannot be blank ??");
  return false;
  }
 if(document.forms["FORMTEST"]["comment"].value == "")
  {
  alert("Comments cannot be blank ???");
  return false;
  }
}
  
  </script>
</head>
<?php include $root.'header.php' ?>
       <!--  <div class="clear"></div>-->
		  
<div class="page_space"></div>
	
	<div id="wrapper_sec">
   <!-- side panal -->
   <div class="col1">
    <?php include $root.'sidepanal.php' ?>
     </div>
<!---- main content------------->
<div class="col2">    
  <div class="pagecontent">	
     <h1  class="heading">Feedback/Comments</h1>
		 
	<p>Please share your Feedback/Comment with us. We use it to serve you more better.
	We use this information only for official Purpose.</p>
	<p>&nbsp;</p>
	<div class="clear"></div>
	
	<form action="comment.php" method="post"  onSubmit="return validateForm()" name="FORMTEST" >
            <table class="feedback">
		 	<tbody><tr>
			<th> Name   <span class="astky">*</span></th>
	
		    <td><input type="text" id="name" name="name" class="frmstyle"></td>
			</tr>
			<tr>
			<th>Email-ID   <span class="astky">*</span></th>
			
			<td><input type="email" id="email" name="email" class="frmstyle"></td>
			</tr>
			<tr>
			<th>Comments</th>
			
			<td><textarea id="comment" name="comment" rows="8" cols="50" class="textarea"></textarea></td>
			</tr>
			<tr>
			<td>
			
			</td><td><input id="submt" value="Submit" type="submit" class="input">
		
			</td>
			</tr>
			</tbody></table>
          </form>
		  
		   <span class="astky">*</span>   Mandantory Part.
	<p>&nbsp;</p>
	
   </div><!----------pagecontent end here--------->
 </div><!------col2 end here--->  
    </div><!--wrapper end here--------->
</div><!---------bg end here---------->
<!-- Footer Section -->
<div class="clear"></div>
<?php include $root.'footer.php' ?>
