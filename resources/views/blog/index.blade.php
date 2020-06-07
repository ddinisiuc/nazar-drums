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
					<h2>{{ $page->title }}</h2>
				    <span>{{ $page->excerpt }}</span>
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
    @forelse ($posts as $item)
        <div class="isotope-item">
            <!-- Post -->
            <div class="post-container">
                <div class="post-img">
                    <a href="{{ route('blog_detail', $item->slug) }}" class="img-hover">
                        <img src="{{ Voyager::image($item->image) }}" alt="">
                    </a>
                </div>
                <div class="post-content">
                    <!-- Categories -->
                    <ul class="post-categories">
                        <li><a href="#">{{ strftime("%B %d, %Y", strtotime($item->created_at)) }}</a></li>
                    </ul>
                    <!-- Meta -->
                    <a href="#"><h3>{{ $item->title }}</h3></a>
                    <p>{{ $item->excerpt }}</p>
                </div>
            </div>
        </div>
    @empty
        <p>Постов пока нету</p>
    @endforelse
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
                        <li><a href="{{ $posts->previousPageUrl() }}"><i class="sl sl-icon-arrow-left"></i></a></li>
                        @for ($i = 1; $i <= $posts->lastPage(); $i++)
                            <li><a href="{{ $posts->url($i) }}" class="current-page">{{ $i }}</a></li>
                        @endfor
                        <li><a href="{{ $posts->nextPageUrl() }}"><i class="sl sl-icon-arrow-right"></i></a></li>
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
