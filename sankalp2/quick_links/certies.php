    <?php
        error_reporting(0);
        $root='../';
    ?>
    <?php include $root.'auth.inc.php'?>
    <!-- include header -->
    <?php include $root.'header.php' ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quick Links
                    <small>Certificates</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index">Quick links</a>
                    </li>
                    <li class="active">Certificates</li>
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
                        <h5 class="ftext">Certificates from Sankalp</h5>
                    </div>
                    <div class="panel-body">
                        <center><b><h4>Please select a Batch</h4></b><br>
            
<select class="form-control" name="batch"  >
             <option selected="selected" value="0">Select Batch</option>
             <option value="2010" onclick="a();">2010</option>
            <option value="2011" onclick="2011();">2011</option> 
            
            
                
            </select>

<div id= "2010"style="display:none" >
 <table class="table">
          
          <th>Sl. No.</th><th>Name</th><th>Batch</th><th>Special Remark</th><th>Certificate No.</th>
          </table>
          <table class="table">
                    <?php
           $result=mysql_query("select * from 2k10 ");
            while($row = mysql_fetch_array($result))
            {
                  $i=$row['SNO'];  
                  if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>

                  
                    
                        <td  ><?php echo $row['SNO'] ?></td>
                        <td ><?php echo $row['NAME'] ?></td>
                        <td ><?php echo $row['BATCH'] ?></td>
                        <td ><?php echo $row['REMARK'] ?></td>
                        <td ><?php echo $row['CERTI_NO'] ?></td>
                        </tr>
                        <?php } ?>
                        </table>
                        </div>
    </center>

<p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p>

                    </div>
                </div>
            </div>
        </div>

        
     
        <!-- /.row -->

        <hr>

     </div>

     <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript">
    function a(){

        $('#2010').fadeIn("slow").css("display","block");
        }
    function oth(){
        $('#2011').fadeIn("slow").css("display","block");
        }
    </script>
    <!-- /.container -->
       

        <!-- Footer -->
        <!-- Footer -->



    <?php include $root.'footer.php' ?>

    

   

</body>

</html>
