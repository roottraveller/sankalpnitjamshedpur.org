    <?php
        error_reporting(0);
        $root='../../';
    ?>
    <!-- include header -->
    <?php include $root.'header.php' ?>

    <!-- page content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12" >
                <h1 class="page-header" >Donate
                    <small>Sankalp</small>
                </h1>
                <ol class="breadcrumb" style="background-color:#2980B9">
                    <li ><a href="<?php echo $root?>index">Home</a>
                    </li>
                    <li class="active"><a href="<?php echo $root?>donate">Donate</a></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


        <div class="row">
            <div class="col-md-12 well">
            <center>
            <img class="img-responsive"  src="<?php echo $root?>images/thankyou.jpg" height="10%" weight="75%" alt="">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                <h3 ><B> Thank you ! For your Donation. We will be very thankful to you for your kind support 
                    in promoting this social cause.</B></h3>
                </div>
            </center>

            </div>
        </div>
    </div>








    <!-- Footer -->
         <?php include $root.'footer.php' ?>
</body>

</html>
