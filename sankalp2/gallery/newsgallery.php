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
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index">Gallery</a>
                    </li>
                    <li class="active">News Gallery </li>
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
                        <h5 class="ftext">News Gallery</h5>
                    </div>
                    <div class="panel-body">
    
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sankalp News" data-caption="Sankalp Kids participated in Ojass and Utkarsh" data-image="news/1.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="news/1.jpg" alt="Sankalp News">
            </a>
        	</div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sankalp News" data-caption="New sankalp center at Madhepura , Bihar" data-image="news/2.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="news/2.jpg" alt="Sankalp News">
            </a>
        	</div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sankalp News" data-caption="Falicitation ceremony for 2010 batch volunteers" data-image="news/3.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="news/3.jpg" alt="Sankalp News">
            </a>
        	</div>
        	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sankalp News" data-caption="" data-image="news/news4.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="news/news4.jpg" alt="Sankalp News">
            </a>
        	</div>
        	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sankalp News" data-caption="" data-image="news/news5.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="news/news5.jpg" alt="Sankalp News">
            </a>
        	</div>
        	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sankalp News" data-caption="" data-image="news/news3.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="news/news3.jpg" alt="Sankalp News">
            </a>
        	</div>
        	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sankalp News" data-caption="" data-image="news/news1.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="news/news1.jpg" alt="Sankalp News">
            </a>
        	</div>
        	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sankalp News" data-caption="" data-image="news/news2.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="news/news2.jpg" alt="Sankalp News">
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
