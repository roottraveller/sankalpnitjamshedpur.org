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
                    <li class="active">Image / News Gallery </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        
        <!-- /.row -->
        <br>

        <div class="row">

    <div class="col-lg-12" id="image-gallery">
        <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#2C3E50" >
                        <h5 class="ftext">Image Gallery</h5>
                    </div>
                    <div class="panel-body">
                <p> <b>Please click on any of the album headers to see all the photos under that album.</b></p>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="a1" >
                <h4>Sankalp- Best Moments</h4>
                <img class="img-responsive" src="Image Gallery/1-Sankalp- Best Moments/2013-10-05.jpg" alt="sankalp Images">
            </a>
        	</div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="a12" >
                <h4>Celebration of Independence Day</h4>
                <img class="img-responsive" src="Image Gallery/12-independence day/album.jpg" alt="sankalp Images">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="a11" >
                <h4>Events by Sankalp kids on Ojass '14'</h4>
                <img class="img-responsive" src="Image Gallery/10-event for sankalp student/album.jpg" alt="sankalp Images">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="a10" >
                <h4>Falicitation Ceremony,2010 Batch</h4>
                <img class="img-responsive" src="Image Gallery/11-facilation ceremony/album.jpg" alt="sankalp Images">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="a3" >
                <h4>Trip to Tata Zoo</h4>
                <img class="img-responsive" src="Image Gallery/2-Trip to Tata Zoo/zoo.jpg" alt="sankalp Images">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="a4" >
                <h4>Photos of centre</h4>
                <img class="img-responsive" src="Image Gallery/4-Photos of centre/insti.jpg" alt="sankalp Images">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="a5" >
                <h4>Health Camp</h4>
                <img class="img-responsive" src="Image Gallery/5-Health Camp/health.jpg" alt="sankalp Images">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="a6" >
                <h4>Alumni and Volunteers</h4>
                <img class="img-responsive" src="Image Gallery/6-Alumni associated with us/alumni.jpg" alt="sankalp Images">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="a7" >
                <h4>Extracurricular activities</h4>
                <img class="img-responsive" src="Image Gallery/7-Extracurricular activities/extra.jpg" alt="sankalp Images">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="a8" >
                <h4>Children's Day Celebration</h4>
                <img class="img-responsive" src="Image Gallery/8-Children's Day Celebration/1.jpg" alt="sankalp Images">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="a9" >
                <h4>Diwali Celebration</h4>
                <img class="img-responsive" src="Image Gallery/9-Diwali Celebration/5.jpg" alt="sankalp Images">
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

        

     </div>
	 </div>
	 </div>
	 </div>
	 
	 <!-- /.row -->
        <br>

        <div class="row">

    <div class="col-lg-12" id="news-gallery">
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
	 </div>     </div></div></div></div>
	 
    <!-- /.container -->
       
<p><br></p>
        <!-- Footer -->
        <!-- Footer -->

    <?php include $root.'footer.php' ?>

    <!-- jQuery -->
<script src="gallery.js"></script>

   

</body>

</html>
