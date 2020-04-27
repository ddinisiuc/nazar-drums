@extends('layouts.app')
@section('content')
<div id="header-container" data-background="images/blog-post-header.jpg" data-color="#303133"data-color-opacity="0.6">
    @include('layouts.includes.header')
    <!-- Titlebar
    ================================================== -->
    <div id="titlebar" class="single-post-titlebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Category -->
                        <ul class="post-categories">
                            <li><a href="#">Technology</a></li>
                        </ul>

                        <!-- Title -->
                        <h2>Snooze-Worthy Watches</h2>

                        <!-- Meta Tags -->
                        <div class="meta-tags">
                            <span>August 10, 2016</span>
                            <span><a href="#">4 Comments</a></span>
                            <span>by <a href="#">John Doe</a></span>
                        </div>

                        <!-- Nav -->
                        <ul id="portfolio-nav">
                            <li class="next"><a href="#" class="tooltip left" title="Next Post"><i
                                        class="sl sl-icon-arrow-right"></i></a></li>
                            <li class="prev"><a href="#" class="tooltip right" title="Previous Posts"><i
                                        class="sl sl-icon-arrow-left"></i></a></li>
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

				<!-- Post Content -->
				<div class="single-post-content">

					<div class="col-md-10 col-md-offset-1">
						<h2>An Awesome Photo Grid</h2>
						<p>Aliquam sit amet euismod purus, sed commodo ipsum. Morbi sodales consectetur ex vitae
							molestie. Morbi ultrices rhoncus felis et vehicula. Ut maximus, dui nec mollis laoreet,
							turpis arcu congue elit, quis congue ipsum lacus et velit. Vivamus cursus, libero in
							fringilla dignissim, elit ante mattis felis, eget pretium ex leo sed dolor. Integer eget
							condimentum ligula.</p>
					</div>

					<!-- Photo Grid -->
					<div class="col-md-12">
						<div class="photoGrid  big clearfix margin-top-40 margin-bottom-0">
							<a class="item mfp-gallery zoom-hover" href="images/blog-grid-01.jpg"
								title="Mobile Apps"><img src="images/blog-grid-01.jpg" alt=""></a>
							<a class="item mfp-gallery zoom-hover" href="images/blog-grid-02.jpg"><img
									src="images/blog-grid-02.jpg" alt=""></a>
							<a class="item mfp-gallery zoom-hover" href="images/blog-grid-03.jpg"><img
									src="images/blog-grid-03.jpg" alt=""></a>
							<a class="item mfp-gallery zoom-hover" href="images/blog-grid-04.jpg"><img
									src="images/blog-grid-04.jpg" alt=""></a>
						</div>
					</div>


					<div class="col-md-10 col-md-offset-1">
						<h3>Just Another Title</h3>
						<p>Aliquam sit amet euismod purus, sed commodo ipsum. Morbi sodales consectetur ex vitae
							molestie. Morbi ultrices rhoncus felis et vehicula. Ut maximus, dui nec mollis laoreet,
							turpis arcu congue elit, quis congue ipsum lacus et velit. Vivamus cursus, libero in
							fringilla dignissim, elit ante mattis felis, eget pretium ex leo sed dolor. Integer eget
							condimentum ligula.</p>

						<p> Vestibulum at erat sit amet mauris aliquam faucibus. Aliquam consectetur ex enim, vitae
							dignissim lorem convallis at. Nullam posuere aliquet maximus. Suspendisse quis orci congue,
							pretium est vel, dapibus leo. Praesent pulvinar ante justo, sed vestibulum nisi porta quis.
							Suspendisse magna justo, vehicula eu dolor luctus, lacinia hendrerit augue. Fusce
							ullamcorper consectetur magna, ut elementum mi hendrerit tristique. Suspendisse libero
							ligula, tempus vel quam sed, pretium pellentesque augue. Donec congue vitae sem vel mollis.
						</p>
					</div>

				</div>

				<!-- Others -->
				<div class="col-md-10 col-md-offset-1">

					<!-- Related Posts -->
					<h3 class="headline margin-top-65">Related Posts</h3>
					<div class="gutter-30px isotope-three-cols isotope-wrapper no-animation related-posts">

						<div class="isotope-sizer"></div>

						<!-- Item -->
						<div class="isotope-item">
							<!-- Post -->
							<div class="post-container">
								<div class="post-img"><a href="blog-contained-single-post.html" class="img-hover"><img
											src="images/blog-01-related.jpg" alt=""></a></div>

								<div class="post-content">
									<!-- Categories -->
									<ul class="post-categories">
										<li><a href="#">Technology</a></li>
									</ul>

									<!-- Meta -->
									<div class="meta-tags">
										<span>August 22, 2016</span>
									</div>

									<a href="#">
										<h3>Snooze-Worthy Watches</h3>
									</a>
									<p>Vestibulum ligula nunc, rutrum in malesuada vitae sed augue. </p>
								</div>

							</div>
						</div>

						<!-- Item -->
						<div class="isotope-item">
							<!-- Post -->
							<div class="post-container">
								<div class="post-img"><a href="blog-full-width-single-post.html" class="img-hover"><img
											src="images/blog-02-related.jpg" alt=""></a></div>

								<div class="post-content">
									<!-- Categories -->
									<ul class="post-categories">
										<li><a href="#">Traveling</a></li>
									</ul>

									<!-- Meta -->
									<div class="meta-tags">
										<span>August 22, 2016</span>
									</div>

									<a href="#">
										<h3>Tips For Newbie Hitchhiker</h3>
									</a>
									<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque.</p>
								</div>

							</div>
						</div>

						<!-- Item -->
						<div class="isotope-item">
							<!-- Post -->
							<div class="post-container">
								<div class="post-img"><a href="blog-full-width-single-post.html" class="img-hover"><img
											src="images/blog-03-related.jpg" alt=""></a></div>

								<div class="post-content">
									<!-- Categories -->
									<ul class="post-categories">
										<li><a href="#">Lifestyle</a></li>
									</ul>

									<!-- Meta -->
									<div class="meta-tags">
										<span>August 22, 2016</span>
									</div>

									<a href="#">
										<h3>Vintage and Classic</h3>
									</a>
									<p>Nam nisl lacus, dignissim ac tristique ligula nunc, rutrum in malesuada. </p>
								</div>

							</div>
						</div>

					</div>
					<!-- Related Posts / End -->

					<div class="clearfix"></div>

					<div class="margin-top-50"></div>


					<div class="clearfix"></div>
					<div class="margin-top-35"></div>
				</div>

			</div>
		</div>
		<!-- Container / End -->
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


<!-- Style Switcher
================================================== -->
<script src="scripts/switcher.js"></script>

<div id="style-switcher">
	<h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>

	<div>
		<ul class="colors" id="color1">
			<li><a href="#" class="blue" title="Blue"></a></li>
			<li><a href="#" class="green" title="Green"></a></li>
			<li><a href="#" class="orange" title="Orange"></a></li>
			<li><a href="#" class="navy" title="Navy"></a></li>
			<li><a href="#" class="yellow" title="Yellow"></a></li>
			<li><a href="#" class="peach" title="Peach"></a></li>
			<li><a href="#" class="beige" title="Beige"></a></li>
			<li><a href="#" class="purple" title="Purple"></a></li>
			<li><a href="#" class="celadon" title="Celadon"></a></li>
			<li><a href="#" class="pink" title="Pink"></a></li>
			<li><a href="#" class="red" title="Red"></a></li>
			<li><a href="#" class="brown" title="Brown"></a></li>
			<li><a href="#" class="cherry" title="Cherry"></a></li>
			<li><a href="#" class="cyan" title="Cyan"></a></li>
			<li><a href="#" class="gray" title="Gray"></a></li>
			<li><a href="#" class="olive" title="Olive"></a></li>
		</ul>
	</div>
@endsection
