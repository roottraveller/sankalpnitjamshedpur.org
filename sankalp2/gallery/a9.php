    <?php
        error_reporting(0);
        $root='../';
    ?>
    <!-- include header -->
    <?php include $root.'header.php' ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Gallery
                    <small>Image Gallery</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index">Gallery</a>
                    </li>
                    <li class="active">Image Gallery </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        
        <!-- /.row -->
        <br>

        <div class="row">

    <div class="col-lg-12">
        <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#2C3E50" >
                        <h5 class="ftext">Diwali Celebration</h5>
                    </div>
                    <div class="panel-body">
                
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Diwali Celebration" data-caption=""
             data-image="Image Gallery/9-Diwali Celebration/1.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="Image Gallery/9-Diwali Celebration/1.jpg" alt="Sankalp image">
            </a>
        	</div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Diwali Celebration" data-caption=""
             data-image="Image Gallery/9-Diwali Celebration/2.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="Image Gallery/9-Diwali Celebration/2.jpg" alt="Sankalp image">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Diwali Celebration" data-caption=""
             data-image="Image Gallery/9-Diwali Celebration/3.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="Image Gallery/9-Diwali Celebration/3.jpg" alt="Sankalp image">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Diwali Celebration" data-caption=""
             data-image="Image Gallery/9-Diwali Celebration/4.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="Image Gallery/9-Diwali Celebration/4.jpg" alt="Sankalp image">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Diwali Celebration" data-caption=""
             data-image="Image Gallery/9-Diwali Celebration/5.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="Image Gallery/9-Diwali Celebration/5.jpg" alt="Sankalp image">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Diwali Celebration" data-caption=""
             data-image="Image Gallery/9-Diwali Celebration/6.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="Image Gallery/9-Diwali Celebration/6.jpg" alt="Sankalp image">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Diwali Celebration" data-caption=""
             data-image="Image Gallery/9-Diwali Celebration/7.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="Image Gallery/9-Diwali Celebration/7.jpg" alt="Sankalp image">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Diwali Celebration" data-caption=""
             data-image="Image Gallery/9-Diwali Celebration/8.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="Image Gallery/9-Diwali Celebration/8.jpg" alt="Sankalp image">
            </a>
            </div>
            
            
            
            
            
            
</div>


<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                    This text will be overwritten by jQuery
                </div>

                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- /.row -->

        <hr>

     </div></div></div></div></div>
    <!-- /.container -->
       

        <!-- Footer -->
        <!-- Footer -->

    <?php include $root.'footer.php' ?>

    <!-- jQuery -->
<script src="gallery.js"></script>

   

</body>

</html>
