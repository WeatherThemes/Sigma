<?php get_header(); ?>

<body>

<header id="top">

	<div class="container-fluid">
    
        <div class="row">
        
            <div class="col-lg-4 col-md-12 site-title">
                <h1>Sigma</h1>
                <h2>Image Gallery built on Bootstrap 4.0</h2>
                
            </div>
            
            <div class="col-lg-8 col-md-12 main-menu">
                
                <nav class="navbar navbar-light">
                  <ul class="nav navbar-nav single-page-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#home">Home <!-- <span class="sr-only">(current)</span> --></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link external" href="http://www.google.com/+templatemo" title="+templatemo page" target="_parent">External</a>
                    </li>
                  </ul>
                </nav>
              
            </div>
            
        </div>
        
        <div class="row">
            <div class="col-md-12">
            	<hr class="sigma-hr">
            </div>
        </div>

    </div>
    
</header>

<section id="home">

	<div class="container-fluid">

        <div class="row sigma-home single-page-nav">
        
        	<div class="col-md-offset-2 col-lg-offset-3 col-lg-6 col-md-8 col-sm-12 text-center">
            	<h1>Bootstrap 4.0 Theme</h1>
            	<p>Sigma is free Bootstrap 4 (alpha 2) theme designed for a metro-style image grid gallery. 
                Download, modify and use this layout for your websites.</p>
                <a href="#gallery" class="btn btn-danger sigma-start">Our Gallery</a>
                <a href="#about" class="btn btn-success sigma-start">Learn More</a>
            </div>
            
        </div>
        
        <div class="row">
        	<div class="sigma-content col-lg-3 col-md-6 sigma-bg-lightgray text-center">
            	<span class="sigma-icon fa fa-power-off"></span>
                <h2>Design</h2>
            	<p>Praesent lorem dui, suscipit eu volutpat id, sollicitudin ut mi. Praesent ornare massa vehicula.</p>
            </div>
            <div class="sigma-content col-lg-3 col-md-6 sigma-bg-gray text-center">
            	<span class="sigma-icon fa fa-bolt"></span>
            	<h2>Implement</h2>
            	<p>Praesent lorem dui, suscipit eu volutpat id, sollicitudin ut mi. Praesent ornare massa vehicula.</p>
            </div>
            <div class="sigma-content col-lg-3 col-md-6 sigma-bg-darkgray text-center">
            	<span class="sigma-icon fa fa-thumbs-up"></span>
            	<h2>Enhance</h2>
            	<p>Praesent lorem dui, suscipit eu volutpat id, sollicitudin ut mi. Praesent ornare massa vehicula.</p>
            </div>
            <div class="sigma-content col-lg-3 col-md-6 sigma-bg-black text-center">
            	<span class="sigma-icon fa fa-bar-chart"></span>
            	<h2>Monitor</h2>
            	<p>Praesent lorem dui, suscipit eu volutpat id, sollicitudin ut mi. Praesent ornare massa vehicula.</p>
            </div>
        </div>
        
	</div>
    
</section>

<section id="gallery">

	<div class="container-fluid">

        <div class="row">
        
			<a href="<?php bloginfo('template_directory'); ?>/images/tm-sigma-01.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 01">
            <img src="<?php bloginfo('template_directory'); ?>/images/tm-sigma-01.jpg" alt="Image 1" class="img-fluid sigmapad col-lg-4 col-md-6 col-sm-6"></a>

			<a href="<?php bloginfo('template_directory'); ?>/images/tm-sigma-02.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 02"
            	data-footer="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non nunc dictum.">
            <img src="<?php bloginfo('template_directory'); ?>/images/tm-sigma-02.jpg" alt="Image 2" class="img-fluid sigmapad col-lg-4 col-md-6 col-sm-6"></a>

			<a href="<?php bloginfo('template_directory'); ?>/images/tm-sigma-02.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 03">
			<img src="<?php bloginfo('template_directory'); ?>/images/tm-sigma-03.jpg" alt="Image 3" class="img-fluid sigmapad col-lg-4 col-md-8 col-sm-12"></a>

			<a href="<?php bloginfo('template_directory'); ?>/images/tm-sigma-04.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 04"
            	data-footer="Aenean et tortor nec odio tempor volutpat nec in dui. Etiam libero turpis, accumsan nec.">
			<img src="<?php bloginfo('template_directory'); ?>/images/tm-sigma-04.jpg" alt="Image 4" class="img-fluid sigmapad col-lg-8 col-md-4 col-sm-6"></a>

			<a href="<?php bloginfo('template_directory'); ?>/images/tm-sigma-05.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 05">
			<img src="<?php bloginfo('template_directory'); ?>/images/tm-sigma-05.jpg" alt="Image 5" class="img-fluid sigmapad col-lg-4 col-md-4 col-sm-6"></a>
			
            <a href="<?php bloginfo('template_directory'); ?>/images/tm-sigma-06.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 06">
            <img src="<?php bloginfo('template_directory'); ?>/images/tm-sigma-06.jpg" alt="Image 6" class="img-fluid sigmapad col-lg-4" title="Bicycle"></a>
            

			<a href="<?php bloginfo('template_directory'); ?>/images/tm-sigma-07.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 07">
			<img src="<?php bloginfo('template_directory'); ?>/images/tm-sigma-07.jpg" alt="Image 7" class="img-fluid sigmapad col-sm-6" title="Walking"></a>

			<a href="<?php bloginfo('template_directory'); ?>/images/tm-sigma-08.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 08">
			<img src="<?php bloginfo('template_directory'); ?>/images/tm-sigma-08.jpg" alt="Image 8" class="img-fluid sigmapad col-sm-6" title="Camera"></a>
            
            <a href="<?php bloginfo('template_directory'); ?>/images/tm-sigma-01.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 09">
			<img src="<?php bloginfo('template_directory'); ?>/images/tm-sigma-01.jpg" alt="Image 9" class="img-fluid sigmapad col-lg-3 col-md-8 col-sm-12"></a>


			<a href="<?php bloginfo('template_directory'); ?>/images/tm-sigma-02.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 10">
			<img src="<?php bloginfo('template_directory'); ?>/images/tm-sigma-02.jpg" alt="Image 10" class="img-fluid sigmapad col-lg-3 col-md-4 col-sm-6"></a>

			<a href="<?php bloginfo('template_directory'); ?>/images/tm-sigma-03.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 11">
			<img src="<?php bloginfo('template_directory'); ?>/images/tm-sigma-03.jpg" alt="Image 11" class="img-fluid sigmapad col-lg-3 col-md-4 col-sm-6"></a>

			<a href="<?php bloginfo('template_directory'); ?>/images/tm-sigma-04.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 12">
			<img src="<?php bloginfo('template_directory'); ?>/images/tm-sigma-04.jpg" alt="Image 12" class="img-fluid sigmapad col-lg-3 col-sm-12"></a>

        </div>
        
    </div>

</section>

<section id="about">

	<div class="container-fluid">
    
    	<div class="row sigma-section-header">
        	<div class="col-md-offset-2 col-lg-offset-3 col-lg-6 col-md-8 col-sm-12 text-center">
        		<h1>About Us</h1>
                <p>Sed elit elit, dictum eu turpis non, fringilla efficitur ipsum. Phasellus ultrices, nunc et tempus porta, tellus purus elementum ex, volutpat lobortis orci dolor in tortor.</p>
            </div>
        </div>

        <div class="row single-page-nav">
        
        	<div class="sigma-content col-lg-4 col-md-6 sigma-bg-lightgray">
            	<h2>01 Design</h2>
            	<p>Praesent lorem dui, suscipit eu volutpat id, sollicitudin ut mi. Praesent ornare massa vehicula.</p>
            </div>
            <div class="sigma-content col-lg-4 col-md-6 sigma-bg-gray">
            	<h2>02 Coding</h2>
            	<p>Praesent lorem dui, suscipit eu volutpat id, sollicitudin ut mi. Praesent ornare massa vehicula.</p>
            </div>
            <div class="sigma-content col-lg-4 col-md-12 sigma-bg-darkgray">
            	<h2>03 Mobile Ready</h2>
            	<p>Praesent lorem dui, suscipit eu volutpat id, sollicitudin ut mi. Praesent ornare massa vehicula.</p>
            </div>
        
        	<div class="sigma-content col-lg-6 col-md-6 sigma-bg-pink">
            	<h2>Left Column</h2>
            	<p>Praesent lorem dui, suscipit eu volutpat id, sollicitudin ut mi. Praesent ornare massa vehicula.</p>
                <a href="#about" class="btn btn-primary btn-lg">Read Detail</a>
            </div>
            <div class="sigma-content col-lg-6 col-md-6 sigma-bg-lightblue">
            	<h2>Right Column</h2>
            	<p>Praesent lorem dui, suscipit eu volutpat id, sollicitudin ut mi. Praesent ornare massa vehicula.</p>
                <a href="#contact" class="btn btn-danger btn-lg">Learn More</a>
            </div>
        
        	<div class="sigma-content col-lg-3 col-md-6 sigma-bg-red">
            	<h2>Our Team</h2>
            	<p>Praesent lorem dui, suscipit eu volutpat id, sollicitudin ut mi. Praesent ornare massa vehicula.</p>
            </div>
            <div class="sigma-content col-lg-3 col-md-6 sigma-bg-blue">
            	<h2>History</h2>
            	<p>Praesent lorem dui, suscipit eu volutpat id, sollicitudin ut mi. Praesent ornare massa vehicula.</p>
            </div>
            <div class="sigma-content col-lg-3 col-md-6 sigma-bg-green">
            	<h2>Management</h2>
            	<p>Praesent lorem dui, suscipit eu volutpat id, sollicitudin ut mi. Praesent ornare massa vehicula.</p>
            </div>
            <div class="sigma-content col-lg-3 col-md-6 sigma-bg-yellow">
            	<h2>Career</h2>
            	<p>Praesent lorem dui, suscipit eu volutpat id, sollicitudin ut mi. Praesent ornare massa vehicula.</p>
            </div> 
            
        </div>
        
	</div>
    
</section>
            
<section id="contact">

	<div class="container-fluid">

        <div class="row sigma-section-header">
        	<div class="col-md-offset-2 col-lg-offset-3 col-lg-6 col-md-8 col-sm-12 text-center">
        		<h1>Contact</h1>
                <p>You may <a rel="nofollow" href="http://www.templatemo.com/contact" target="_parent">contact</a> templatemo if you have any question. Suspendisse dolor purus, malesuada ut luctus quis, consectetur vel ante. Integer a pulvinar orci.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="sigmano col-lg-8 col-md-12">
                
                <form action="#contact" method="post" id="contact-form">
                <div class="col-md-6">
               		<fieldset class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Write a full name">
                  	</fieldset>
                  
                  	<fieldset class="form-group">
                    	<label for="email">Your Email</label>
                    	<input type="email" class="form-control" id="email" placeholder="Enter your email">
                    	
                  	</fieldset>
                    
                    <fieldset class="form-group">
                    	<label for="budget">Your Budget</label>
                    	<select class="form-control" id="budget">
                      		<option>$500</option>
                      		<option>$1,000</option>
                      		<option>$1,500</option>
                      		<option>$2,000</option>
                    	</select>
                  	</fieldset>
                </div> 
                <div class="col-md-6">
                 
                 	<fieldset class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                  	</fieldset>
                    
                  	<fieldset class="form-group">
                    	<label for="message">Your Message</label>
                    	<textarea class="form-control" id="message" rows="4" placeholder="Write a message"></textarea>
                  	</fieldset>
                  
                  	<div class="checkbox">
                    	<label>
                      		<input type="checkbox"> I am not a robot.
                    	</label>
                  	</div>
                  
                  	<button type="submit" class="btn btn-success btn-lg">Submit</button>
                </div>  
            	</form>
                
            </div>
            
			<div class="sigma-content col-lg-4 col-md-12">
        		<h3>Our Address</h3>
                <p>Suspendisse dolor purus, malesuada ut luctus quis, consectetur vel ante. 
                Integer a pulvinar orci, eget sagittis enim.</p>
          		<p><span class="contact-icon fa fa-envelope-o"></span> Email: info@company.com</p>
                <p><span class="contact-icon fa fa-phone"></span> Phone: 070-070-0880</p>
            </div>
        </div>
        
	</div>
    
</section>

<?php get_footer(); ?>