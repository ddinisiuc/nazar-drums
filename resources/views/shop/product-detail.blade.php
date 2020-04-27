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
<section>
   <div class="container">
    Contact form popup with selected instrument
   </div>
</section>
<section>
    <div class="container">
        related products
    </div>
</section>


<!-- Footer
================================================== -->
<div class="margin-top-65"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<h4>About</h4>
				<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
				<a href="#" class="button social-btn"><i class="fa fa-facebook-official"></i> Like Us on Facebook</a>
			</div>

			<div class="col-md-4  col-sm-6">
				<h4>Helpful Links</h4>
				<ul class="footer-links">
					<li><a href="#">About Us</a></li>
					<li><a href="#">Press Releases</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Projects</a></li>
				</ul>

				<ul class="footer-links">
					<li><a href="#">In the News</a></li>
					<li><a href="#">Our Blog</a></li>
					<li><a href="#">Testimonials</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>

			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>12345 Little Lonsdale St, Melbourne</span> <br>
					Phone: <span>(123) 123-456 </span><br>
					Fax: <span>(123) 123-456</span> <br>
					E-Mail:<span> office@example.com </span><br>
				</div>
			</div>

		</div>

		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">©  Copyright 2016 by <a href="#">Sphene</a>. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>

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
