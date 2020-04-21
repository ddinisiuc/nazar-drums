@extends('layouts.app')
@section('content')

<div id="header-container" data-color="#202122" data-color-opacity="1">
@include('layouts.includes.header')
<!-- Titlebar
================================================== -->
	<div id="titlebar" class="centered margin-bottom-0">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h2>Blog Masonry</h2>
				<span>4 Cols Full-Width</span>

				</div>
			</div>
		</div>
	</div>

</div>



<!-- Content
================================================== -->

<!-- Projects -->
<div class="gutter-30px isotope-four-cols blog-wrapper isotope-wrapper fw">

	<div class="isotope-sizer"></div>
	
	<!-- Item -->
	<div class="isotope-item">
		<!-- Post -->
		<div class="post-container">
			<div class="post-img"><a href="{{ route('blog-detail') }}" class="img-hover"><img src="images/blog-01.jpg" alt=""></a></div>

			<div class="post-content">
				<!-- Categories -->
				<ul class="post-categories">
					<li><a href="#">Technology</a></li>
				</ul>

				<!-- Meta -->
				<div class="meta-tags">
					<span>August 22, 2016</span>
					<span><a href="#">4 Comments</a></span>
				</div>

				<a href="#"><h3>Snooze-Worthy Watches</h3></a>
				<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. </p>
			</div>

		</div>
	</div>	
			
	<!-- Item -->
	<div class="isotope-item">
		<!-- Post -->
		<div class="post-container">
			<div class="post-img"><a href="{{ route('blog-detail') }}" class="img-hover"><img src="images/blog-02.jpg" alt=""></a></div>
			<div class="post-content">
				<!-- Categories -->
				<ul class="post-categories">
					<li><a href="#">Traveling</a></li>
				</ul>

				<!-- Meta -->
				<div class="meta-tags">
					<span>August 10, 2016</span>
					<span><a href="#">4 Comments</a></span>
				</div>

				<a href="#"><h3>Tips For Neewbie Hitchhiker</h3></a>
				<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue.</p>
			</div>
		</div>
	</div>		

	<!-- Item -->
	<div class="isotope-item">
		<!-- Post -->
		<div class="post-container">
			<div class="post-img"><a href="{{ route('blog-detail') }}" class="img-hover"><img src="images/blog-03.jpg" alt=""></a></div>
			<div class="post-content">
				<!-- Categories -->
				<ul class="post-categories">
					<li><a href="#">Lifestyle</a></li>
				</ul>

				<!-- Meta -->
				<div class="meta-tags">
					<span>August 10, 2016</span>
					<span><a href="#">4 Comments</a></span>
				</div>

				<a href="#"><h3>What's So Great About Merry? </h3></a>
				<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue.</p>
			</div>
		</div>
	</div>	

	<!-- Item -->
	<div class="isotope-item">
		<div class="post-quote">
			<span class="icon"></span>
			<blockquote>
				No one who cooks, cooks alone. Even at her most solitary, a cook in the kitchen is surrounded by generations of cooks past, the advice and menus of cooks present, the wisdom of cookbook writers.
				<span>Laurie Colwin</span>
			</blockquote>
		</div>
		<div class="clearfix"></div>
	</div>


	<!-- Item -->
	<div class="isotope-item">
		<!-- Post -->
		<div class="post-container">
			<div class="post-img"><a href="{{ route('blog-detail') }}" class="img-hover"><img src="images/blog-04.jpg" alt=""></a></div>
			<div class="post-content">
				<!-- Categories -->
				<ul class="post-categories">
					<li><a href="#">Photography</a></li>
				</ul>

				<!-- Meta -->
				<div class="meta-tags">
					<span>August 10, 2016</span>
					<span><a href="#">4 Comments</a></span>
				</div>

				<a href="#"><h3>Just Fruits </h3></a>
				<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue.</p>
			</div>
		</div>
	</div>

	<!-- Item -->
	<div class="isotope-item">
		<!-- Post -->
		<div class="post-container">
			<div class="post-img"><a href="{{ route('blog-detail') }}" class="img-hover"><img src="images/blog-05.jpg" alt=""></a></div>
			<div class="post-content">
				<!-- Categories -->
				<ul class="post-categories">
					<li><a href="#">Fashion</a></li>
				</ul>

				<!-- Meta -->
				<div class="meta-tags">
					<span>August 10, 2016</span>
					<span><a href="#">4 Comments</a></span>
				</div>

				<a href="#"><h3>Fashion Under a Light Sky</h3></a>
				<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue.</p>
			</div>
		</div>
	</div>
	
	<!-- Item -->
	<div class="isotope-item">
		<!-- Post -->
		<div class="post-container">
			<div class="post-img"><a href="{{ route('blog-detail') }}" class="img-hover"><img src="images/blog-06.jpg" alt=""></a></div>
			<div class="post-content">
				<!-- Categories -->
				<ul class="post-categories">
					<li><a href="#">Lifestyle</a></li>
				</ul>

				<!-- Meta -->
				<div class="meta-tags">
					<span>August 10, 2016</span>
					<span><a href="#">4 Comments</a></span>
				</div>

				<a href="#"><h3>It Takes Plenty of Time and Money</h3></a>
				<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue.</p>
			</div>
		</div>
	</div>

	<!-- Item -->
	<div class="isotope-item">
		<!-- Post -->
		<div class="post-container">
			<div class="post-img"><a href="{{ route('blog-detail') }}" class="img-hover"><img src="images/blog-07.jpg" alt=""></a></div>
			<div class="post-content">
				<!-- Categories -->
				<ul class="post-categories">
					<li><a href="#">Traveling</a></li>
				</ul>

				<!-- Meta -->
				<div class="meta-tags">
					<span>August 10, 2016</span>
					<span><a href="#">4 Comments</a></span>
				</div>

				<a href="#"><h3>Keep Exploring</h3></a>
				<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue.</p>
			</div>
		</div>
	</div>	

	<!-- Item -->
	<div class="isotope-item">
		<!-- Post -->
		<div class="post-container">
			<div class="post-img"><a href="{{ route('blog-detail') }}" class="img-hover"><img src="https://images.unsplash.com/photo-1470434151738-dc5f4474c239?dpr=1&auto=format&crop=entropy&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb" alt=""></a></div>
			<div class="post-content">
				<!-- Categories -->
				<ul class="post-categories">
					<li><a href="#">Lifestyle</a></li>
				</ul>

				<!-- Meta -->
				<div class="meta-tags">
					<span>August 10, 2016</span>
					<span><a href="#">4 Comments</a></span>
				</div>

				<a href="#"><h3>Vintage and Classic</h3></a>
				<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue.</p>
			</div>
		</div>
	</div>	

</div>
<!-- Isotope Wrapper / End -->


<!-- Pagination -->
<div class="container">

	<div class="row">
		<div class="col-md-12">
			<!-- Pagination -->
			<div class="pagination-container margin-top-50 margin-bottom-0">
				<nav class="pagination">
					<ul>
						<li><a href="#" class="current-page">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
    <div class="clearfix"></div>
			
			<div class="margin-top-50"></div>


			<div class="clearfix"></div>
			<div class="margin-top-35"></div>
            </div>
</div>
<!-- Pagination / End -->
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