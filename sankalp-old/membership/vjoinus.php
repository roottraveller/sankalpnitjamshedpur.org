<head>
 <script type="text/javascript">

function validateForm()
{
if(document.FORMTEST.fname.value == "")
  {
  alert("First Name cannot be blank ????");
  return false;
  }
 if(document.FORMTEST.lname.value == "")
  {
  alert("Last Name cannot be blank ????");
  return false;
  }
if(document.FORMTEST.address.value == "")
  {
  alert("Address cannot be blank ????");
  return false;
  }
  var x = document.FORMTEST.phone.value;   
if (document.FORMTEST.phone.value==null || document.FORMTEST.phone.value=="")
 	 {
 		  alert("Enter a valid Phone Number (starting with +91)");
 		 return false;
 	 } 
	 
var y = document.FORMTEST.phone.value;    
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
if(document.forms["FORMTEST"]["phone"].value == "" || document.forms["FORMTEST"]["phone"].length < 10)
  {
 
  return false;
  }*/

}
</script>

</head>
<?php
error_reporting(0);
$root='../';
?>
<?php include $root.'header.php' ?>
        <!-- <div class="clear"></div>-->
		  <div class="page_space"></div>
	
	<div id="wrapper_sec">
   <!-- side panal -->
   <div class="col1">
    <?php include $root.'sidepanal.php' ?>
     </div>
	
<!---- main content------------->
<div class="col2">    
  <div class="pagecontent">	
      <h1 class="heading">Volunteer Registration</h1>
		 <p>Welcome to the family of Sankalp NIT Jsr. You are welcome to join us in SANKALP. Please fill the following informations regarding yourself. We use these information only for academic purpose . Mandatory fields are mark as red asterisk.</p> 
		 <p><span class="astky">*</span> Mandatory Part.<br />
		   If you have find any error related to this page. mail us to:<a href="#"> contact@sankalpnitjamshepur.org</a><br>
If you are not a student of NIT/RIT Jamshedpur &amp; want to join sankalp. kindly mail to: <a href="#">contact@sankalpnitjamshedpur.org</a> </p>
		 <p>&nbsp;</p>
		 <div class="clear"></div>

 <form action="voljoin.php" method="post" onSubmit="return validateForm()" name="FORMTEST" enctype="multipart/form-data"  onreset="return confirm('Are you sure you want to reset this form  ??');">
 <table class="join_us">
		 <tr><td>First Name   <span class="astky">*</span></td></tr>
		 <tr><td><input type="text" name="fname" id="fname" class="join_input" /></td></tr>
		 
		 <tr><td>Last Name  <span class="astky">*</span></td></tr>
		 <tr><td><input type="text" name="lname" id="lname" class="join_input" /></td></tr>
		 
		 <tr><td>your current Image    <span class="astky">*</span></td></tr>
        <tr><td> <input type="file" name="file" id="file">
		</td></tr>
		 <tr><td>Gender   <span class="astky">*</span></td></tr>
		<tr><td> <select name="gender" id= "gender" class="show_item">
                <option value="male" selected="selected">Male</option>
                  <option value="female">Female</option></select> </td></tr>
				  
		 <tr><td>  Date of Birth   <span class="astky">*</span></td></tr>
		 <tr><td> <select id="day" name="day" class="show_item">
			<option selected="selected" value="0">&nbsp;&nbsp;Day&nbsp;&nbsp;</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>			</select> &nbsp;&nbsp;
			<select id="month" name="month" class="show_item">
			<option selected="selected" value="0">&nbsp;&nbsp;Month&nbsp;&nbsp;</option><option value="1">January</option><option value="2">February</option><option value="3">March</option><option value="4">April</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option>			</select> &nbsp;&nbsp;
			<select id="year" name="year" class="show_item">
			<option selected="selected" value="0">&nbsp;&nbsp;Year&nbsp;&nbsp;</option><option value="1920">1920</option><option value="1921">1921</option><option value="1922">1922</option><option value="1923">1923</option><option value="1924">1924</option><option value="1925">1925</option><option value="1926">1926</option><option value="1927">1927</option><option value="1928">1928</option><option value="1929">1929</option><option value="1930">1930</option><option value="1931">1931</option><option value="1932">1932</option><option value="1933">1933</option><option value="1934">1934</option><option value="1935">1935</option><option value="1936">1936</option><option value="1937">1937</option><option value="1938">1938</option><option value="1939">1939</option><option value="1940">1940</option><option value="1941">1941</option><option value="1942">1942</option><option value="1943">1943</option><option value="1944">1944</option><option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option>			</select>
			
			</td></tr>
			
			<tr><td>Email-ID  <span class="astky">*</span></td></tr>
			<tr><td><input type="email" name="email" id="email" class="join_input" /></td></tr>
			
			<tr><td>Batch (required only for NIT Jsr Student )</td></tr>
			<tr><td><select id="batch_from" name="batch_from" class="show_item">
			<option selected="selected" value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option>			<option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option></select>
			&nbsp;&nbsp;&nbsp;&nbsp; To &nbsp;&nbsp;&nbsp;&nbsp;
			<select id="batch_to" name="batch_to" class="show_item">
<option  selected="selected" value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option>			</select>
		     </td></tr>
			 
			 <tr><td>Branch (required only for NIT JSR Student )</td></tr>
			 <tr><td><select id="branch" name="branch" class="show_item">
			 <option selected="selected" value="0">Select Your Branch</option>
			 <option value="Civil Engineering">Civil Engineering</option>
			<option value="Computer Science &amp; Engineering">Computer Science &amp; Engineering</option>
			<option value="Electronics &amp; Communication Engineering">Electronics &amp; Communication Engineering</option>
			<option value="Electrical &amp; Electronics Engineering">Electrical &amp; Electronics Engineering</option>
			<option value="Manufacturing Engineerig">Manufacturing Engineerig</option>
			<option value="Mechanical Engineering">Mechanical Engineering</option>		
			<option value="Metallurgy &amp; Materials Engineering">Metallurgy &amp; Materials Engineering</option>	
			<option value="MCA">MCA</option>
			<option value="Mtech">M.Tech</option>
			<option value="phd">P.hd</option>
			<option value="Others">Others</option>	
			</select></td></tr>
	
	       <tr><td>Contact Number   <span class="astky">*</span></td></tr>
		   <tr><td><input type="text" name="phone" id="phone" class="join_input" /></td></tr>
		   
		   <tr><td>Contact Address   <span class="astky">*</span> </td></tr>
		   <tr><td><textarea id="address" name="address" rows="3" cols="50" class="textarea"></textarea></td></tr>
		   
		   <tr><td>Why you want to join Sankalp? (optional)</td></tr>
		   <tr><td><textarea name="whyjoin" id="whyjoin" class="textarea"></textarea></td></tr>
		   
		   <tr><td>How would you help Sankalp? (optional)</td></tr>
		   <tr><td><textarea name="howhelp" id="howhelp" class="textarea"></textarea></td></tr>
		      <tr><td></td></tr>
		   
		   </table>
		    <p><br></p>
		   <input type="submit" value="submit" class="button" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   <input type="reset" value="reset" class="button" />
		   </form>
		 
		  <span class="astky">*</span> Mandatory Part.
		   <p>If you have find any error related to this page. mail us to:<a href="#"> contact@sankalpnitjamshepur.org</a><br>
If you are not a student of NIT/RIT Jamshedpur &amp; want to join sankalp. kindly mail to: <a href="#">contact@sankalpnitjamshedpur.org</a> </p>
		   
		   
		  <p><br></p>   
		   
		 </div><!----------pagecontent end here--------->
      </div><!------col2 end here--->  
    </div><!--wrapper end here--------->
</div><!---------bg end here---------->
<!-- Footer Section -->
<div class="clear"></div>
<?php include $root.'footer.php' ?>
</html>