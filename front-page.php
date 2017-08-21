<?php get_header(); ?>

    <div class="jumbotron">
        <video class="landing-video" id="landing-video" autoplay muted loop poster="/wp-content/themes/forvakbysnosme/img/logo-bg.jpg">
            <source src="/wp-content/themes/forvakbysnosme/media/landing.mp4" type="video/mp4">
        </video>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="landing-logo"><img class="img-fluid" src="/wp-content/themes/forvakbysnosme/img/logo.png"></div>
                    <div class="landing-org-name"><h1>Работай и отдыхай<br>с удовольствием</h1></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="landing-view-more text-center">
                        <a href="/posts" role="button"><i class="fa fa-angle-double-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
<script>
    jQuery(document).ready(function() {
    	jQuery(".landing-video").on('loadeddata', function () {
    	    jQuery(this).css({
    	        display: 'block'
    	    });
    	});	
    });
</script>
</body>
</html>