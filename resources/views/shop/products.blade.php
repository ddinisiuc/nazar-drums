@extends('layouts.app')
@section('content')
<div id="header-container" data-background="{{ asset('images/shop-parallax.jpg') }}" data-color="#303133" data-color-opacity="0.7">
    @include('layouts.includes.header')

    <!-- Titlebar
================================================== -->
    <div id="titlebar" class="centered">
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
<div class="clearfix"></div>

<!-- Content
================================================== -->

<div class="container">
    <div class="row">

        <!-- Widgets -->
        <div class="col-md-3 col-sm-4">

            <!-- Price Range -->
            <div class="widget margin-bottom-50">
                <div class="headline no-margin">
                    <h4>Категории</h4>
                </div>
                <ul class="list-group category_list">
                    @forelse ($categories as $item)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{ $item->slug }}" style="text-decoration: none;"> {{ $item->title }}</a>
                            <span class="badge badge-primary badge-pill">{{ count($item->products) }}</span>
                        </li>
                    @empty

                    @endforelse
                </ul>
            </div>

            <!-- Recent Posts -->
            <div class="widget margin-bottom-50">
                <h4>Popular Products</h4>
                <ul class="widget-tabs shop">
                    @forelse ($popular_products as $item)
                        <li>
                            <div class="widget-content">
                                <div class="widget-thumb">
                                    <a href="{{ route('product_detail', $item->slug) }}"><img src="{{ Voyager::image($item->image) }}" alt="" /></a>
                                </div>
                                <div class="widget-text">
                                    <h5><a href="#">{{ $item->title }}</a></h5>
                                    <span>
                                        @if ($item->old_price)
                                            <del>${{ $item->old_price }}</del>
                                        @endif
                                        <mark>${{ $item->price }}</mark>
                                    </span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                    @empty

                    @endforelse
                </ul>
            </div>

            <div class="clearfix"></div>
            <div class="margin-bottom-40"></div>
        </div>
        <!-- Widgets / End -->

        <!-- Products -->
        <div class="col-md-9 col-sm-8">

            <p class="margin-bottom-25 margin-left-10">Showing 1–9 of 23 results</p>

            <div class="row isotope-wrapper isotope-three-cols extra-gutter-left shop-wrapper">

                <div class="isotope-sizer"></div>

                <!-- Product -->
                @if ($products->isNotEmpty())
                    @foreach ($products as $item)
                        <div class="col-md-4 col-xs-12 isotope-item">
                            <div class="shop-item">
                                <a href="{{ route('product_detail', $item->slug) }}">
                                    <img src="{{ Voyager::image($item->image) }}" alt="" />
                                </a>
                                <figure>
                                    <figcaption class="item-description">
                                        <a href="{{ route('product_detail', $item->slug) }}"><h5>{{ $item->title }}</h5></a>
                                        <span class="sale">
                                            @if ($item->old_price)
                                                <del>${{ $item->old_price }}</del>
                                            @endif
                                            <mark>${{ $item->price }}</mark>
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Pagination -->
                    <div class="pagination-container margin-top-20 margin-bottom-0">
                        <nav class="pagination">
                            <ul>
                                <li><a href="{{ $products->previousPageUrl() }}"><i class="sl sl-icon-arrow-left"></i></a></li>
                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                    <li><a href="{{ $products->url($i) }}" class="current-page">{{ $i }}</a></li>
                                @endfor
                                <li><a href="{{ $products->nextPageUrl() }}"><i class="sl sl-icon-arrow-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
        <!-- Products -->

    </div>
</div>
<!-- Container / End -->
<!-- Back To Top Button -->
<div id="backtotop">
    <a href="#"></a>
</div>
@endsection
