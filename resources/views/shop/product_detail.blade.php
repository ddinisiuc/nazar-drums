@extends('layouts.app')
@section('content')
<div id="header-container" data-background="{{ asset('images/shop-parallax.jpg') }}" data-color="#303133"  data-color-opacity="0.7">
@include('layouts.includes.header')
<!-- Titlebar================================================== -->
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
<!-- Content================================================== -->
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
                    <h3 class="headline contact_line centered margin-bottom-45">Связаться</h3>

                    <div id="contact-message"></div>
                        <form method="post" action="{{ route('send_order') }}" name="contactform" id="contactform" autocomplete="on">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <input name="name" type="text" id="name" placeholder="Имя" required="required" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div>
                                        <input name="email" type="email" id="email" placeholder="Email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input name="phone" type="nomber" id="name" placeholder="Телефон" required="required" />
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
                                <textarea name="message" cols="40" rows="3" id="comments" placeholder="Сообщение" spellcheck="true" required="required"></textarea>
                            </div>

                            <input type="submit" class="submit button border center margin-top-10" id="submit" value="Submit Message" />

                        </form>
                </section>
            </div>
        </div>
</section>
	<!-- Contact Form / End -->

<!-- Logo Carousel 2 / End -->

<!-- Related Products Carousel -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 class="headline centered with-border margin-top-60">Похожие инструменты</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 projects style-4 latest">
			<div class="owl-carousel arrow-nav">
                <!-- Item -->
                @forelse ($related_products as $item)
                    <div class="item">
                        <a href="{{ route('product_detail', $item->slug) }}">
                            <img src="{{ Voyager::image($item->image) }}" alt=""/>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <h4>{{ $item->title }}</h4>
                                    <span>${{ $item->price }}</span>
                                </div>
                            </div>
                            <div class="plus-icon"></div>
                        </a>
                    </div>
                    @empty
                        <div>Похожих товаров нету</div>
                @endforelse
			</div>
		</div>

	</div>

</div>
<!-- Projects Carousel / End -->
	<!-- Reviews -->
<section class="comments">
    <div class="container">
        <h3 class="headline margin-bottom-45">Comments <span class="comments-amount">({{ count($reviews) }})</span></h3>

        <ul>
            @forelse ($reviews as $item)
                <li>
                    <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
                    <div class="comment-content"><div class="arrow-comment"></div>
                        <div class="comment-by">{{ $item->name }}<span class="date">{{ strftime("%B %d, %Y", strtotime($item->created_at)) }}</span>
                        </div>
                        <p>{!! $item->comment !!}</p>
                    </div>
                </li>
            @empty

            @endforelse
        </ul>
    </div>
</section>
<div class="clearfix"></div>
<div class="margin-top-35"></div>

<section class="add-comment">
    <div class="container">
           <!-- Add Comment -->
        <h3 class="headline">Add Comment</h3>
        <div class="margin-top-15"></div>

        <!-- Add Comment Form -->
        <form action="{{ route('add_comment') }}" id="add_comment" class="add-comment">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product_detail->id }}">
            <fieldset>
                <div>
                    <label>Name:</label>
                    <input name="name" type="text"/>
                </div>

                <div>
                    <label>Email: <span>*</span></label>
                    <input name="email" type="email" value=""/>
                </div>
                <div>
                    <label>Comment: <span>*</span></label>
                    <textarea name="comment" cols="40" rows="3"></textarea>
                </div>
            </fieldset>

            <input type="submit" class="submit button border center margin-top-10" id="submit" value="Add Comment" />

            <div class="clearfix"></div>
            <div class="margin-bottom-20"></div>
        </form>
    </div>
</section>

<!-- Content / End -->

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>
@endsection
@section('scripts')
<script>
$('#add_comment').submit(function(){

    var action = $(this).attr('action');

    $('#add_comment #submit')
        .after('<img src="/images/loader.gif" class="loader" />');

        $('#submit')
            .prop('disabled',true)
            .addClass('disabled');

        $.post(action, $('#add_comment').serialize(),
            function(data){
                console.log(data.message);
                window.location.reload();
                $('#add_comment img.loader').fadeOut('slow',function(){$(this).remove();});
            }
        );

        return false;

});
</script>
@endsection
