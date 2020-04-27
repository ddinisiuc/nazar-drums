@extends('layouts.app')
@section('content')
<div id="header-container" data-background="images/shop-parallax.jpg" data-color="#303133"  data-color-opacity="0.7">
@include('layouts.includes.header')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="centered">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Single Project - Content Bottom</h2>

				<!-- Nav -->
				<ul id="portfolio-nav">
					<li class="next"><a href="single-project-creative-style-1.html"><i class="sl sl-icon-arrow-right"></i></a></li>
					<li class="prev"><a href="single-project-content-left.html"><i class="sl sl-icon-arrow-left"></i></a></li>
				</ul>

			</div>
		</div>
	</div>
</div>

</div>
<div class="clearfix"></div>
<!-- Content
================================================== -->
<div class="container">

	<div class="row">
		<div class="col-md-12">
			<div class="simple-slider">
				<ul class="slides">
					<li><img src="images/single-project-03a.jpg" alt=""/></li>
					<li><img src="images/single-project-03b.jpg" alt=""/></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row vanilla-content">

		<div class="col-md-12">
			<h3 class="margin-top-45 margin-bottom-30">Project Description</h3>
		</div>

		<div class="col-md-8">
				<p>Maecenas molestie fermentum luctus. Cras lacinia molestie nibh. Pellentesque non magna ac dui varius auctor at sed nunc. Fusce bibendum eros sed mattis accumsan. Nam mattis convallis elit, ut condimentum nulla commodo nec. Aenean eget metus sed turpis molestie porta vitae non libero.</p>
				<p>Maecenas vehicula ultrices magna, vitae placerat nibh rhoncus sit amet. Vestibulum congue suscipit sagittis. Phasellus at dui eget metus consectetur laoreet id ac mi. Proin nisl mi, gravida sed maximus ut, sodales dictum velit. Nunc ultricies porttitor est, ut rutrum ante. Vivamus interdum sodales sem. In ultrices augue eget nibh convallis, quis laoreet tortor lacinia. </p>
		</div>

		<div class="col-md-4">
			<ul class="details alt">
				<li><span>Product Name:</span> My name</li>
				<li><span>Price:</span> $100</li>
				<li><span>Post :</span> <a href="#">Post Name (how it was made)</a>
			</ul>

			<a href="#" class="button fw medium border margin-top-15">Оставить заявку</a>
		</div>
	</div>

</div>
  <!-- Container / Start -->
<section>
<div class="container">

<div class="row">

	<!-- Contact Form -->
	<div class="col-md-8 col-md-offset-2">

		<section id="contact">
			<h3 class="headline centered margin-bottom-45">Get In Touch</h3>

			<div id="contact-message"></div> 

				<form method="post" action="contact.php" name="contactform" id="contactform" autocomplete="on">

				<div class="row">
					<div class="col-md-6">
						<div>
							<input name="name" type="text" id="name" placeholder="Your Name" required="required" />
						</div>
					</div>

					<div class="col-md-6">
						<div>
							<input name="email" type="email" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
						</div>
					</div>
				</div>

				

				<div>
					<textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
				</div>

				<input type="submit" class="submit button border center margin-top-10" id="submit" value="Submit Message" />

				</form>
		</section>
	</div>
</section>
	<!-- Contact Form / End -->
<section>
		<!-- Logo Carousel 2 -->
		<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 class="headline centered with-border margin-top-60 margin-bottom-50">Logo Carousel Style 1</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			
			<!-- Carousel -->
			<div class="logo-carousel-alt">
			    <div class="item"><img src="images/logo-01.png" alt="" /></div>
			    <div class="item"><img src="images/logo-02.png" alt="" /></div>
			    <div class="item"><img src="images/logo-03.png" alt="" /></div>
			    <div class="item"><img src="images/logo-04.png" alt="" /></div>
			    <div class="item"><img src="images/logo-05.png" alt="" /></div>
			    <div class="item"><img src="images/logo-06.png" alt="" /></div>
			    <div class="item"><img src="images/logo-07.png" alt="" /></div>
			</div>

		</div>
	</div>
</div>
</section>
<!-- Logo Carousel 2 / End -->

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>
@endsection
@section('scripts')
<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="scripts/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="scripts/jquery.isotope.min.js"></script>
<script type="text/javascript" src="scripts/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/jquery.sticky-kit.min.js"></script>
<script type="text/javascript" src="scripts/jquery.twentytwenty.js"></script>
<script type="text/javascript" src="scripts/jquery.event.move.js"></script>
<script type="text/javascript" src="scripts/jquery.photogrid.js"></script>
<script type="text/javascript" src="scripts/jquery.tooltips.min.js"></script>
<script type="text/javascript" src="scripts/jquery.pricefilter.js"></script>
<script type="text/javascript" src="scripts/jquery.stacktable.js"></script>
<script type="text/javascript" src="scripts/jquery.contact-form.js"></script>
<script type="text/javascript" src="scripts/jquery.jpanelmenu.js"></script>
<script type="text/javascript" src="scripts/headroom.min.js"></script>
<script type="text/javascript" src="scripts/modernizr.custom.js"></script>
<script type="text/javascript" src="scripts/puregrid.js"></script>
<script type="text/javascript" src="scripts/flexibility.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
@endsection
