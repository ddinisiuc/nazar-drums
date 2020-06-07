@extends('layouts.app') @section('content')
<div id="header-container" data-background="images/about-01-parallax.jpg" data-color="#303133" data-color-opacity="0.6">
@include('layouts.includes.header')
    <!-- Titlebar
================================================== -->
    <div id="titlebar" class="large">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $page->title }}</h2>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="clearfix"></div>
<!-- Content
================================================== -->
<div class="container">
    <div class="row margin-top-0">

        <!-- Text Block -->
        <div class="col-md-4">
            <h3 class="about-me-title"><strong>Привет, меня зовут {{ App\User::first()->name }}!</strong></h3>
        </div>

        <!-- Skill bars -->
        <div class="col-md-8">
            <div class="row margin-top-20">
                <div class="col-md-12">
                    <p class="about-me-intro">
                        {!! $page->body !!}
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Container / End -->

<!-- Container -->
<div class="section-background margin-top-60" data-background-color="#fffae2">
    <div class="container">
        <div class="row margin-top-15">
            <div class="col-md-4">
                <h3 class="about-me-title"><strong>{{ $page->excerpt }}</strong></h3></div>

            <div class="col-md-8">

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="icon-box-3 rounded dark">
                            <i class="ln {{ setting('about.icon_one') }}"></i>
                            <h4>{{ setting('about.title_one') }}</h4>
                            {!! setting('about.description_one') !!}
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="icon-box-3 rounded dark">
                            <i class="ln {{ setting('about.icon_two') }}"></i>
                            <h4>{{ setting('about.title_two') }}</h4>
                            {!! setting('about.description_two') !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="icon-box-3 rounded dark">
                            <i class="ln {{ setting('about.icon_three') }}"></i>
                            <h4>{{ setting('about.title_three') }}</h4>
                            {!! setting('about.description_three') !!}
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="icon-box-3 rounded dark">
                            <i class="ln {{ setting('about.icon_three') }}"></i>
                            <h4>{{ setting('about.title_four') }}</h4>
                            {!! setting('about.description_four') !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Container / End -->

<!-- Image Edge -->
<div class="image-edge dark left margin-bottom-0">

    <div class="image-edge-content">
        <h3 class="about-me-title margin-bottom-25"><strong>{{ setting('about.get_in_touch') }}</strong></h3>
        {!! setting('about.get_it_touch_description') !!}
        <div class="sidebar-textbox">
            <ul class="contact-details">
                <li><i class="ln ln-icon-Phone-2"></i> <strong>{{ setting('contact.phone_label') }}</strong> <a style="color:white" href="tel:{{ setting('contact.phone_number') }}">{{ setting('contact.phone_number') }}</span></li>
                <li><i class="ln ln-icon-Envelope"></i> <strong>{{ setting('contact.email_label') }}</strong> <span><a href="mailto:{{ setting('contact.email') }}">{{ setting('contact.email') }}</a></span></li>
            </ul>
            <div class="clearfix"></div>

            <!-- Social Icons / Start -->
            <ul class="social-icons color rounded margin-top-15">
                <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                <li><a class="facebook" href="{{ setting('footer.fb_link') }}"><i class="icon-facebook"></i></a></li>
                <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
            </ul>
            <div class="clearfix"></div>
            <!-- Social Icons / End -->

        </div>
    </div>

    <div class="edge-bg with-map">
        <!-- Google Maps -->
        <div class="google-map-container">
            <div id="googlemaps" class="google-map google-map-full"></div>
        </div>
        <!-- Google Maps / End -->
    </div>

</div>
<!-- Image Edge / End -->

<!-- Back To Top Button -->
<div id="backtotop">
    <a href="#"></a>
</div>
@endsection

