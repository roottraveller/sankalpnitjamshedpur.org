<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sankalp:Comment Varification</title>
</head>

<body>
<?php
mysql_connect ("localhost", "root","")  or die (mysql_error());
    mysql_select_db ('sankalp');
	
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	
	$sql="insert INTO comment (name,email,comment,date) values ('$name','$email','$comment',now())";
	if(mysql_query($sql))
	{
	echo  
	 "<script type=text/javascript>alert('your comment has been submitted successfully . Thanks for your feedback !');
	 window.history.back();
	  </script>";}
	else {echo  
"<script type=text/javascript>alert('Error in connection . Please try again !');
	 window.history.back(); </script>";	}?> </body>
</html>
