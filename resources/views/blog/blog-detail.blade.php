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
                        <!-- Title -->
                        <h2>{{ $blog_detail->title }}</h2>

                        <!-- Meta Tags -->
                        <div class="meta-tags">
                            <span>{{ strftime("%B %d, %Y", strtotime($blog_detail->created_at)) }}</span>
                            {{-- <span><a href="#">4 Comments</a></span> --}}
                            <span>by <a href="#">{{ $admin['name'] }}</a></span>
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
						<h2>{{ $blog_detail->subtitle }}</h2>
						<p>{{ $blog_detail->excerpt }}</p>
					</div>

                    @if ($blog_detail->gallery)

                        <!-- Photo Grid -->
                        <div class="col-md-12">
                            <div class="photoGrid  big clearfix margin-top-40 margin-bottom-0">
                                @forelse (json_decode($blog_detail->gallery) as $item)
                                <a class="item mfp-gallery zoom-hover" href="{{ Voyager::image($item) }}">
                                    <img src="{{ asset('images/blog-grid-01.jpg') }}" alt="">
                                </a>
                                @empty

                                @endforelse
                            </div>
                        </div>
                    @endif


					<div class="col-md-10 col-md-offset-1">
						<h3>{{ $blog_detail->subtitle_three }}</h3>
						{!! $blog_detail->body !!}
					</div>

				</div>

				<!-- Others -->
				<div class="col-md-10 col-md-offset-1">

					<!-- Related Posts -->
					<h3 class="headline margin-top-65">Похожие посты</h3>
					<div class="gutter-30px isotope-three-cols isotope-wrapper no-animation related-posts">

						<div class="isotope-sizer"></div>

						<!-- Item -->
						@forelse ($related_posts as $item)
                            <div class="isotope-item">
                                <!-- Post -->
                                <div class="post-container">
                                    <div class="post-img related_post_img">
                                        <a href="{{ route('blog_detail', $item->slug) }}" class="img-hover">
                                            <img src="{{ Voyager::image($item->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <!-- Categories -->
                                        <ul class="post-categories">
                                            <li><a href="{{ route('blog_detail', $item->slug) }}">{{ strftime("%B %d, %Y", strtotime($item->created_at)) }}</a></li>
                                        </ul>
                                        <!-- Meta -->
                                        {{-- <div class="meta-tags">
                                            <span>{{ strftime("%B %d, %Y", strtotime($item->created_at)) }}</span>
                                        </div> --}}
                                        <a href="{{ route('blog_detail', $item->slug) }}">
                                            <h3>{{ $item->title }}</h3>
                                        </a>
                                        <p>{{ $item->excerpt }}</p>
                                    </div>
                                </div>
                            </div>
                        @empty

                        @endforelse

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
