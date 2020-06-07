@extends('layouts.app')
@section('content')
<div id="header-container" data-background="{{ asset('images/shop-parallax.jpg') }}" data-color="#303133"  data-color-opacity="0.7">
@include('layouts.includes.header')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="centered">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>{{ $product_detail->title }}</h2>
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
					@php $gallery = json_decode($product_detail->gallery) @endphp
                    @forelse ($gallery as $item)
					    <li><img src="{{ Voyager::image($item) }}" alt=""/></li>
                    @empty
                    @endforelse
				</ul>
			</div>
		</div>
	</div>

	<div class="row vanilla-content">

		<div class="col-md-12">
			<h3 class="margin-top-45 margin-bottom-30">Описание продукта</h3>
		</div>

		<div class="col-md-8">
				{!! $product_detail->description !!}
		</div>

		<div class="col-md-4">
			<ul class="details alt">
				<li><span>Название инструмента:</span> {{ $product_detail->title }}</li>
				<li><span>Цена:</span> ${{ $product_detail->price }}</li>
				{{-- <li><span>Post :</span> <a href="#">Post Name (how it was made)</a> --}}
			</ul>
            @if ($product_detail->youtube)
                <a href="{{ $product_detail->youtube }}" target="_blank" class="button fw medium border margin-top-15">Просмотреть в Youtube</a>
            @endif
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
			<h3 class="headline centered margin-bottom-45">Связаться</h3>

			<div id="contact-message"></div>

				<form method="post" action="{{ route('send_order') }}" name="contactform" id="contactform" autocomplete="on">
                    @csrf
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

				<div class="form-group col-md-14">
      					<select name="product_id" id="inputState" class="form-control">
                            <option  selected>Choose...</option>
                            @forelse ($products as $item)
        					    <option @if ($product_detail->slug == $item->slug) selected @endif value="{{ $item->id }}">{{ $item->title }}</option>
                            @empty

                            @endforelse
      					</select>
    			</div>
				<div>
					<textarea name="message" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
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
			<h3 class="headline left with-border margin-top-60 margin-bottom-50">Похожие инструменты</h3>
		</div>
    </div>
    
	<div class="row">
		<div class="col-md-12">

			<!-- Carousel -->
			<div class="logo-carousel-alt">
                @forelse ($related_products as $item)
			        <div class="item"><img src="{{ Voyager::image($item->image) }}" alt=""/></div>
                @empty

                @endforelse
			</div>

		</div>
	</div>
</div>
</section>
<!-- Logo Carousel 2 / End -->

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>
@endsection
