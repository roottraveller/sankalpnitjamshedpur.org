<?php
error_reporting(0);
$root='../';
?><head>
<!--
<script>
var xmlhttp
function loadContent()
{
var ldng=document.getElementById("ldng");
ldng.style.visibility='visible';
var name=document.getElementById("name").value;
var email=document.getElementById("email").value;
var contact=document.getElementById("contact").value;
var donate=document.getElementById("donate").value;


 xmlhttp=GetXmlHttpObject();

  if (xmlhttp==null)
  {
   alert ("Your browser does not support Ajax HTTP");
   return;
  }

    var url="donate_chck.php";
    url=url+"?name="+name+"&email="+email+"&contact="+contact+"&donate="+donate;

    xmlhttp.onreadystatechange=getOutput;
    xmlhttp.open("POST",url,true);
    xmlhttp.send(null);
}

function getOutput()
{

  if (xmlhttp.readyState==4)
  {
  var tmp=xmlhttp.responseText;
//alert(tmp);
var ldng=document.getElementById("ldng");
ldng.style.visibility='hidden';

  if(tmp==1)
  {
  
document.getElementById("dnt").innerHTML="Thank you for donating us. Your help is highly appreciable.<br> We will contact you soon.";
  }
  else
  document.getElementById("dnt").innerHTML="<blink><a>!! Please provide valid details !!</a></blink>";
  //document.getElementById("prtCnt").innerHTML=tmp;
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
</script>--->
<script type="text/javascript">

function validateForm()
{
if(document.FORMTEST.name.value == "")
  {
  alert("Name cannot be blank ????");
  return false;
  }
  var x = document.FORMTEST.contact.value;   
if (document.FORMTEST.contact.value==null || document.FORMTEST.contact.value=="")
 	 {
 		  alert("Enter a valid Phone Number (starting with +91)");
 		 return false;
 	 } 
	 
var y = document.FORMTEST.contact.value;    
if(isNaN(y)|| y.indexOf(" ")!=-1)
	{
            alert("Enter Numeric value Only in phone Number");
			return false;
      }
 if (y.length < 10)
	{
         alert("Enter a valid phone Number"); 
		return false;
     }

 /* 
if(document.forms["FORMTEST"]["contact"].value == "" || document.forms["FORMTEST"]["contact"].length < 10)
  {
 
  return false;
  }*/
if(document.forms["FORMTEST"]["donate"].value == "")
  {
  alert("Donation cannot be blank ?????");
  return false;
  }
}
</script>

</head>


<?php include $root.'header.php' ?>
         
<div class="clear"></div>
		  <div class="page_space"></div>
	
	<div id="wrapper_sec">
   <!-- side panal -->
   <div class="col1">
    <?php include $root.'sidepanal.php' ?>
     </div>
<!---- main content------------->
<div class="col2">    
  <div class="pagecontent">	
     <h1  class="heading">Donation to Sankalp </h1>	
		Welcome!

<p>"Sankalp - A pledge to change" is full of activities. All these activities entail various expenses such as Room rent, Admissions, School fee, teachers' payment, stationery and books for kids, special class activities, maintenance requirements and much more. In such a case, it helps if some helping hands can come forward to support this noble initiative. We accept donation in the form of cash, cheque, DD or online account transfer. Other items such as stationery and books etc. may also be donated. We maintain a very transparent system wherein we ensure that we send monthly financial reports are sent to all the donors. The latest finance reports can also be downloaded from our website under the 'Downloads' section.</p>

<p>We ensure you that your donation would go in the right hands. Any contribution, howsoever small will be gratefully acknowledged. We cry over things we don't have in life. Someday, feel the happiness of bringing a smile on someone's face by making a donation to this noble cause.</p>
		 <p>&nbsp;</p>
		<h2  class="heading">Money by cash</h1>
		<p><font size="+1">You can Pay At:</font></p>
		<table class="donate_table">
		
		<tr><td>Account No : </td>
		<td>	31114719936</td></tr>
		<tr><td>Branch Code : </td>
		<td>01882</td></tr>
		
		<tr><td>IFSC No : </td>
		<td>SBIN0001882</td></tr>
		<tr><td>MICR No : </td>
		<td>831002004</td></tr>
		<tr><td>Customer Name : </td>
		<td>	SANKALP<BR />
	       State Bank of India (SBI) RIT Branch,NIT Campus, Adityapur, Jamshedpur.</td></tr>
		   </table>
		<p>&nbsp;</p>
		<h2  class="heading">Other Donation  (books,cloths,study materials etc. )</h1>
		<form action="success.php" method="post" onSubmit="return validateForm()" name="FORMTEST"  onreset="return confirm('Are you sure you want to reset this form?');">
            <table class="feedback">
		 	<tr><td>Your Name    <span class="astky">*</span></td>
			
		    <td><input type="text" id="name" name="name" class="frmstyle" /></td>
			</tr>
			<tr><td>Email-ID           <span class="astky">*</span></td>
			
			<td><input type="email" id="email" name="email" class="frmstyle"></td>
			</tr>
			<tr><td>Contact Number  <span class="astky">*</span></td>
			
			<td><input type="text" id="contact" name="contact" class="frmstyle"></td>
			</tr>
			<tr><td>Your Donations (such as.. books,cloths,study materials etc.)</td>
			
			  <td><textarea id="donate" name="donate" rows="8" cols="50" class="textarea"></textarea></td>
			</tr>
			<tr>
			<td></td>
			<td><input id="sbmt" type="submit" value="Donate">&nbsp;&nbsp;&nbsp;&nbsp;
			   <input type="reset" value="reset" />
		         	<table style="visibility: hidden;" id="ldng">
		             <tr><td><img src="<?php echo $root;?>images/load.gif" height="30px" width="30px"></td>
		             <td><div id="ldng" style="color:#3366FF; font-weight:bold;">Processing...</div>		</td>
		                </tr></table>	
						
			</td></tr>
			</table>
      </form>
		
		<span class="astky">*</span> Mandatory Part.
		
		 <p>&nbsp;</p>
		 </div><!----------pagecontent end here--------->
      </div><!------col2 end here--->  
    </div><!--wrapper end here--------->
</div><!---------bg end here---------->
<!-- Footer Section -->
<div class="clear"></div>
<?php include $root.'footer.php' ?>
