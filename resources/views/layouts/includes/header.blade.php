
<!-- Header
================================================== -->

<div id="main-header">
	<div class="container">

		<div class="row">
			<div class="header">

				<div class="col-md-2 col-sm-12">
					<div id="logo" class="margin-top-25">
						<a href="{{ route('home') }}"><img src="{{ Voyager::image(setting('index.logo')) }}" alt=""></a><br>
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
                            @php $current = Route::currentRouteName(); @endphp
							<ul class="menu alt2" id="responsive">
								<li class="dropdown">
									<a href="{{ route('home') }}" @if (Route::currentRouteName() == 'home') class="current" @endif>Главная</a>
								</li>
								<li class="dropdown">
									<a onclick="return false" href="#" @if ($current == 'project') class="current" @endif>Мои Проекты</a>
									<ul>
                                        @forelse ($projects as $item)
                                            <li>
                                                <a href="{{ route('project', $item->slug) }}">{{ $item->title }}</a>
                                            </li>
                                        @empty

                                        @endforelse
									</ul>
								</li>
								<li class="dropdown" >
									<a href="{{ route('shop') }}" @if ($current == 'shop') class="current" @endif>Магазин</a>
								</li>

								<li>
									<a href="{{ route('blog') }}" @if ($current == 'blog') class="current" @endif>Блог</a>
								</li>
								<li>
									<a href="{{ route('about-me') }}" @if ($current == 'about-me') class="current" @endif>Ооб-мне</a>
								</li>

								<li>
									<a href="{{ route('contact') }}" @if ($current == 'contact') class="current" @endif>Контанкты</a>
								</li>
							</ul>
						</nav>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>
</div>
