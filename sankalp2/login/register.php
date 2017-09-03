<?php require 'functions.php'; ?>
<?php
        error_reporting(0);
        $root='../../';
    ?>
	<?php include $root.'header.php' ?>
    <!-- Page Content -->
    <div class="container">
    <div id="content">
        <div class="reg-cont">
            <div id="fb-root"></div>
            <script type="text/javascript">
                window.fbAsyncInit = function() {
                    FB.init({
                        appId   : '<?php echo $config["fb_app_id"]; ?>',
                        status  : true,
                        cookie  : true,
                        xfbml   : true
                    });
                    FB.getLoginStatus(function(response) {
                        if (response.status == "connected" || response.status == "unknown") {
                            window.location = "<?php echo $config["base_url"]; ?>";
                        }
                    });
                };
                (function() {
                    var e = document.createElement('script');
                    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
                    e.async = true;
                    document.getElementById('fb-root').appendChild(e);
                }());
            </script>
            <fb:registration
                fields='<?php echo retrieve_fields($config["fb_fields"]); ?>'
                redirect-uri="<?php echo $config["base_url"]; ?>"
                fb_only="true"
                width="530">
            </fb:registration>
        </div>
    </div>
</div>

</body>
</html>