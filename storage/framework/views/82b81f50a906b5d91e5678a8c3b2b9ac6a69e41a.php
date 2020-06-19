<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Jekyll v4.0.1">
    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php if (! empty(trim($__env->yieldContent('template_title')))): ?><?php echo $__env->yieldContent('template_title'); ?> | <?php endif; ?> <?php echo e(config('app.name', Lang::get('titles.app'))); ?></title>

    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
    <?php echo $__env->yieldContent('template_linked_fonts'); ?>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
	
	<!-- Main Script -->
	<script src="<?php echo e(asset('/js/main.js')); ?>"></script>
	

    
    <link href="<?php echo e(mix('/css/app.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('/css/personal.css')); ?>" rel="stylesheet">

    <?php echo $__env->yieldContent('template_linked_css'); ?>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <!--<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
      </nav>
      <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>-->
	
	<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">EZO SPACE</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Prices</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Services</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
	</header>
	
	<!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/event.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We are professional</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/personal.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>At vero eos et accusamus</h2>
                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/img4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Temporibus autem quibusdam</h2>
                <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/img2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Nam libero tempore</h2>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->
  
  <!-- Info section -->
	<div id="services" class="service spacer p-t-30 p-b-30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img src="img/cowork.jpg" class="img-fluid" alt="" width="100%">
				</div>
				<div class="info col-lg-6">
					<h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
					<p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem est error omnis repudiandae ad dolorum sit.</p>
					<p>
						Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro consequatur
						et temporibus. Labore est odio.

						Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..
					</p>
				</div>
			</div>
		</div>
	</div><!-- #info -->

    <div class="service">
	<div class="container">
		<header class="section-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
		  <h3>Pricing</h3>
		  <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
		</header>
		<?php echo $__env->yieldContent('content'); ?>
    </div>
	</div>
	
	<section id="seats" class="service">
		<div class="container">
			<header class="section-header">
			  <h3>Seat Layouts</h3>
			</header>
			<div class="row" style="padding-top: 1em;">
				<div class="card-deck">
				  <div class="card" >
					<img class="card-img-top" width="100%" height="180" src="img/Group 14.png">
					  <h5 class="card-title name-box">Classroom Layout</h5>
				  </div>
			  <div class="card" >
					<img class="card-img-top" width="100%" height="180" src="img/Group 15.png">
					  <h5 class="card-title name-box">O-Layout</h5>
				  </div>
			  <div class="card" >
					<img class="card-img-top" width="100%" height="180" src="img/Group 13.png">
					  <h5 class="card-title name-box">U-Layout</h5>
				  </div>
				  <div class="card" >
					<img class="card-img-top" width="100%" height="180" src="img/Group 12.png">
					  <h5 class="card-title name-box">Group Layout</h5>
				  </div>
				  <div class="card" >
					<img class="card-img-top" width="100%" height="180" src="img/Group 11.png">
					  <h5 class="card-title name-box">Theater Layout </h5>
				  </div>
				  <div class="card" >
					<img class="card-img-top" width="100%" height="180" src="img/Group 9.png">
					  <h5 class="card-title name-box">Square Layout</h5>
				  </div>
			</div>
			</div>
		</div>
	</section>
	
	<!-- about us-->
	<section id="about" class="service spacer p-t-30 p-b-30">
		<div class="container">
			<div class="section-header">
			  <h3>About Us</h3>
			  <div class="aboutus-tagline">Partners</div>
					<div id="clients" class="owl-carousel clients-carousel">
					  <img src="img/clients/client-1.png" alt="">
					  <img src="img/clients/client-2.png" alt="">
					  <img src="img/clients/client-3.png" alt="">
					  <img src="img/clients/client-4.png" alt="">
					  <img src="img/clients/client-5.png" alt="">
					  <img src="img/clients/client-6.png" alt="">
					  <img src="img/clients/client-7.png" alt="">
					  <img src="img/clients/client-8.png" alt="">
					</div>
					
			  <div class="aboutus-tagline">Our Benefits</div>
				<div class="row">
					<div class="col-md-4">
						<h6 class="text-uppercase font-weight-bold">Feature One</h6>
						<hr class="cyan accent-4 accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
						<p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
						  consectetur
						  adipisicing elit.
						</p>
					</div>
					<div class="col-md-4">
						<h6 class="text-uppercase font-weight-bold">Feature Two</h6>
						<hr class="cyan accent-4 accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
						<p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
						  consectetur
						  adipisicing elit.
						</p>
					</div>
					<div class="col-md-4">
						<h6 class="text-uppercase font-weight-bold">Feature Three</h6>
						<hr class="cyan accent-4 accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
						<p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
						  consectetur
						  adipisicing elit.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
  
	<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #107f35;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Company name</h6>
        <hr class="cyan accent-4 accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.
		</p>
		
		<!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="cyan accent-4 accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@example.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

      </div>
      <!-- Grid column -->
	  
	  <!-- Grid column -->
      <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Contact Us</h6>
        <hr class="cyan accent-4 accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.
		</p>
		
		<!-- Form -->
        <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
				  
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
<!-- 
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
 -->
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
	
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"></script>
	
	
	<script type="text/javascript">
		$(document).ready(function() {
			$(window).on('scroll', function () {
				if ( $(window).scrollTop() > 10 ) {
					$('.navbar').addClass('active');
				} else {
					$('.navbar').removeClass('active');
				}
			});
		});
    </script>
	
  </body>
</html>
<?php /**PATH /home/zazan/Public/laravel/resources/views/layouts/frontend.blade.php ENDPATH**/ ?>