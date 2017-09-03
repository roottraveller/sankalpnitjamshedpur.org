    <?php
        error_reporting(0);
        $root='../';
    ?>
	<?php include $root.'auth.inc.php' ?>
    <!-- include header -->
    <?php include $root.'header.php' ?>
	    <link href="<?php echo $root?>css/donerlist-table.css" rel="stylesheet">

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Doner's List
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index">Home</a>
                    </li>
                    <li class="active">Doner's List</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        
        <!-- /.row -->
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#2C3E50" >
                        <h5 class="ftext">Doners </h5>
                    </div>
                    <div class="panel-body">
					<p>We are thankful to you for your kind  donations and for showing faith in us and supporting our cause.<br />
		  Note: Some of the donors have requested us not to reveal their identity. Their names are not shown here.</br></br>
           <b>Last Updated in:- October 2014.</b> </p><p><br></p>
		   
		   <table class="donerlist_head">
		  
		  <th>Sl. No.</th><th>Name</th><th>Batch(for NIT Jsr alumni)</th><th>Current Position</th>
		  </table>
		  <table class="donerlist">
		            <?php
		   $result=mysql_query("select * from doners ");
		   if($result==0)
			   echo "<br><center><b>Currenty no list is available.</b></center>";
		   else{
			while($row = mysql_fetch_array($result))
			{
			      $i=$row['sno'];  
				  if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>

				  
				    
      					<td  ><?php echo $row['sno'] ?></td>
						<td ><?php echo $row['name'] ?></td>
						<td ><?php echo $row['batch'] ?></td>
						<td ><?php echo $row['company'] ?></td>
      					</tr>
						<?php } 
		   }?>
		   
						</table>
		 
		  <p>&nbsp;</p><p><br></p>
		  
		  
<b>Note : </b>If you have find any error related to this page. mail us to: <a href="#">contact@sankalpnitjamshepur.org.</a>

                    </div>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#2C3E50" >
                        <h5 class="ftext">Other Donations </h5>
                    </div>
                    <div class="panel-body">
                        <div class="donertable">
		  Cash donation by <b>Amit, Dev, Indradev Giri, Ratnesh </b>(2007 batch) for computer purchase.<br />
	      Employees of Tata steel donated a laptop for Computer literacy to Sankalp.<br />
	     <b> Smita Kujur</b>(2009 batch) donated some Books to Sankalp Library.<br />
	       Employees of Tata Steel set up a library for student of SANKALP.<br /> 
		  </div>
		 		<p><br></p>

		  <p>Any Queries mail us to <a href="#">contact@sankalpnitjamshedpur.org  </a></p>
		  <p>Thanks to all of you for generous support . </p>
		  <h4><b>Sankalp Family</b></h
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        

       
     
        <!-- /.row -->

		<p><br></p>
     </div>
    <!-- /.container -->
       

        <!-- Footer -->
        <!-- Footer -->

    <?php include $root.'footer.php' ?>

    

   

</body>

</html>
