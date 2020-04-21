
<!-- Header
================================================== -->

<div id="main-header">
	<div class="container">
	
		<div class="row">
			<div class="header">
	
				<div class="col-md-2 col-sm-12">
					<div id="logo" class="margin-top-25">
						<a href="index.html"><img src="images/logo.png" alt=""></a><br>
					</div>
				</div>
	
				<!-- Search Form -->
				<div class="search-container">
					  <form action="#" method="get">
						  <input type="text" name="s" id="s" onblur="if(this.value=='')this.value='to search type and hit enter';" onfocus="if(this.value=='to search type and hit enter')this.value='';" value="to search type and hit enter" />
					  </form>
					  <div class="close-search"><a class="sl sl-icon-close" href="#"></a></div>
				</div>
	
				<div class="col-md-10 col-sm-12">
	
					<!-- Mobile Navigation -->
					<div class="menu-responsive">
						<i class="fa fa-reorder menu-trigger"></i>
					
						  <form action="#" method="get" class="responsive-search">
							  <input type="text" onblur="if(this.value=='')this.value='to search type and hit enter';" onfocus="if(this.value=='to search type and hit enter')this.value='';" value="to search type and hit enter" />
						  </form>
					</div>
					
						<!-- Main Navigation -->
						<nav id="navigation">
	
							<ul class="menu alt2" id="responsive">
	
								<li class="dropdown">
									<a href="{{ route('index') }}" class="current">Home</a>
								</li>
								<li>
									<a href="{{ route('projects') }}">My projects</a>
								</li>
								<li class="dropdown" >
									<a href="{{ route('shop') }}">Shop</a>
								</li>
	
								<li>
									<a href="{{ route('blog') }}">Blog</a>
								</li>
								<li>
									<a href="{{ route('about-me') }}">about-me</a>
								</li>
								
								<li>
									<a href="{{ route('contact') }}">Contact</a>
								</li>
							</ul>
						</nav>
	
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	
	</div>
</div>