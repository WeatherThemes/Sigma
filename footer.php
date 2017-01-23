<footer>

	<div class="container-fluid">
    
    	<div class="row">
            <div class="col-md-12">
            	<hr class="sigma-hr">
            </div>
        </div>

        <div class="row">
        	<div class="sigma-copyright col-lg-8">
            	<p>Copyright © 2016 Sigma HTML CSS Template</p>
            </div>
            
            <div class="sigma-copyright col-lg-4 single-page-nav text-right">
            	<p><a href="#top">Go to top</a></p>
            </div>
        </div>
        
    </div>   
    <?php wp_footer(); ?>

</footer>

		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/ekko-lightbox.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.singlePageNav.min.js"></script>
        <script>

            // Prevent console.log from generating errors in IE for the purposes of the demo
            if ( ! window.console ) console = { log: function(){} };

            // The actual plugin
            $('.single-page-nav').singlePageNav({
                offset: $('.single-page-nav').outerHeight(),
                filter: ':not(.external)',
                updateHash: true,
                beforeStart: function() {
                    console.log('begin scrolling');
                },
                onComplete: function() {
                    console.log('done scrolling');
                }
            });
			
			$(document).ready(function ($) {

				// delegate calls to data-toggle="lightbox"
				$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						always_show_close: true
					});
				});

			});
			
        </script>

</body>
</html>