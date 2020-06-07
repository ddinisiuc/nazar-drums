@extends('layouts.app')
@section('content')

<div id="header-container" data-background="images/shop-parallax.jpg" data-color="#303133" data-color-opacity="0.7">
    @include('layouts.includes.header')
</div>

<!-- Slider
	================================================== -->

<!-- Revolution Slider -->
<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

    <!-- 5.0.7 auto mode -->
    <div id="rev_slider_4_1" class="rev_slider home fullwidthabanner" style="display:none;" data-version="5.0.7">
        <ul>
            @foreach ($baner as $item)
                <!-- Slide  -->
                <li data-index="rs-.{{ $item->id }}" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

                    <!-- Background -->
                    <img src="{{ Voyager::image($item->image) }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0">

                    <!-- Caption-->
                    <div class="tp-caption custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-2" data-x="['left','left','left','left']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['30']" data-width="['640','640', 640','420','320']" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

                        <!-- Caption Content -->
                        <div class="R_title margin-bottom-15" id="slide-2-layer-1" data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-20','-80']" data-fontsize="['52','46', '42','36','22']" data-lineheight="['78','68','70','55','35']" data-width="['640','640', 640','420','320']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;" data-transform_out="opacity:0;s:300;" data-start="600" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 700; ">
                            {{ $item->title }}
                        </div>

                        <div class="caption-text">{!! $item->excerpt !!}</div>
                        <a href="{{ $item->btn_link }}" class="button medium">{{ $item->btn_label }}</a>
                    </div>
                </li>
            @endforeach

            <!-- Slide  -->
            {{-- <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

                <!-- Background -->
                <img src="images/slide-corporate-02.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="112" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0">

                <!-- Caption-->
                <div class="tp-caption centered custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-2-layer-2" data-x="['center','center','center','center']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['30']" data-width="['640','640', 640','420','320']" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

                    <!-- Caption Content -->
                    <div class="R_title margin-bottom-15" id="slide-2-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-20','-80']" data-fontsize="['52','46', '42','36','22']" data-lineheight="['78','68','70','55','35']" data-width="['640','640', 640','420','320']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;" data-transform_out="opacity:0;s:300;" data-start="600" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 700; ">Business Analysis</div>

                    <div class="caption-text">Proactively envisioned multimedia based on expertise cross-media growth strategies. Pontificate installed base portals after maintainable products.</div>
                    <a href="#" class="button medium">Read More</a>
                </div>

            </li> --}}

        </ul>
        <div class="tp-static-layers"></div>

    </div>
</div>
<!-- Revolution Slider / End -->

<!-- Content
================================================== -->

<!-- Section With Background -->
<section class="section-background main-color-bg white-text">
    <div class="container">

        <div class="row margin-top-10">

            <!-- Text Block -->
            <div class="col-md-4">
                <h2 class="section-title margin-bottom-40"><strong>{{ setting('index.benefits_title') }}</strong></h2>
            </div>

            <!-- Icons -->
            <div class="col-md-8">

                <div class="row">
                    @forelse ($benefits as $item)
                        <div class="col-md-6 col-sm-6">
                            <div class="icon-box-3">
                                <i class="ln {{ $item->icon }}"></i>
                                <h4>{{ $item->title }}</h4>
                                {!! $item->description !!}
                            </div>
                        </div>
                    @empty

                    @endforelse
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Section With Background / End -->

<!-- Image Edge -->
<div class="image-edge dark margin-top-0" data-background-image="{{ Voyager::image(setting('index.left_block_bg')) }}">

    <div class="image-edge-content">
        <h2>{{ setting('index.left_block_title') }}</h2>
        <br>
        {!! setting('index.left_block_description') !!}
        <br>
        <a href="{{ setting('index.left_block_btn_link') }}" class="button border medium white margin-bottom-40">{{ setting('index.left_block_btn_label') }}</a>
    </div>

    <div class="edge-bg" data-background-image="{{ Voyager::image(setting('index.right_block_image')) }}"></div>

</div>
<!-- Image Edge / End -->

<!-- Projects -->
<div class="projects style-1 isotope-wrapper fw">

    <div class="isotope-sizer"></div>

    <!-- Item -->
    {{-- <div class="isotope-item identity print">
        <a href="single-project-creative-style-1.html">
            <img src="images/project-01.jpg" alt="">
            <div class="overlay">
                <div class="overlay-content">
                    <h4>Food Branding</h4>
                    <span>Nice Title Here</span>
                </div>
            </div>
        </a>
    </div> --}}

    <!-- Item -->
    @foreach ($products as $item)
        <div class="isotope-item  @if($loop->first) print  @endif @if($loop->last) identity @endif">
            <a href="{{ route('product_detail', $item->slug) }}">
                <img src="{{ Voyager::image($item->image) }}" alt="">
                <div class="overlay">
                    <div class="overlay-content">
                        <h4>{{ $item->title }}</h4>
                        <span>{{ $item->created_at }}</span>
                    </div>
                </div>
            </a>
        </div>
    @endforeach


    <!-- Item -->
    {{-- <div class="isotope-item identity">
        <a href="single-project-content-right.html">
            <img src="images/project-03-masonry.jpg" alt="">
            <div class="overlay">
                <div class="overlay-content">
                    <h4>Coffee Cup</h4>
                    <span>January 2016</span>
                </div>
            </div>
        </a>
    </div>

    <!-- Item -->
    <div class="isotope-item identity">
        <a href="single-project-creative-style-2.html">
            <img src="images/project-04.jpg" alt="">
            <div class="overlay">
                <div class="overlay-content">
                    <h4>Wall Sign</h4>
                    <span>December 2016</span>
                </div>
            </div>
        </a>
    </div>

    <!-- Item -->
    <div class="isotope-item print other">
        <a href="single-project-content-right.html">
            <img src="images/project-05-masonry.jpg" alt="">
            <div class="overlay">
                <div class="overlay-content">
                    <h4>Sketches</h4>
                    <span>November 2015</span>
                </div>
            </div>
        </a>
    </div>

    <!-- Item -->
    <div class="isotope-item other">
        <a href="single-project-content-right.html">
            <img src="images/project-06.jpg" alt="">
            <div class="overlay">
                <div class="overlay-content">
                    <h4>Mobile App</h4>
                    <span>November 2015</span>
                </div>
            </div>
        </a>
    </div>

    <!-- Item -->
    <div class="isotope-item print">
        <a href="single-project-content-right.html">
            <img src="images/project-07-masonry.jpg" alt="">
            <div class="overlay">
                <div class="overlay-content">
                    <h4>Magazine</h4>
                    <span>September 2015</span>
                </div>
            </div>
        </a>
    </div> --}}

    {{-- <!-- Item -->
    <div class="isotope-item identity">
        <a href="single-project-content-right.html">
            <img src="images/project-08.jpg" alt="">
            <div class="overlay">
                <div class="overlay-content">
                    <h4>Wall Sign</h4>
                    <span>November 2015</span>
                </div>
            </div>
        </a>
    </div>

    <!-- Item -->
    <div class="isotope-item identity print">
        <a href="single-project-content-right.html">
            <img src="images/project-09.jpg" alt="">
            <div class="overlay">
                <div class="overlay-content">
                    <h4>Shopping Bag</h4>
                    <span>November 2015</span>
                </div>
            </div>
        </a>
    </div> --}}

</div>
<!-- Projects / End -->
<!-- Infobox -->
<div class="info-banner-fw">
    <div class="container">
        <div class="row">
            <div class="col-md-12">{{ setting('index.contact_text') }}  <a href="{{ route('contact') }}">{{ setting('index.contact') }}</a></div>
        </div>
    </div>
</div>
<!-- Infobox / End -->

<!-- Testimonials -->
<section class="section-background with-testimonials" data-background-color="#222c42">

    <h3>Отзывы</h3>

    <div class="testimonial-carousel full-width arrows">
        @foreach ($testimonials as $item)
            <div class="item">
                <div class="testimonial">
                    <div class="testimonial-author">
                        {!! $item->description !!}
                        <h4>{{ $item->title }}</h4>
                        <span>Envato</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</section>
<!-- Testimonials / End -->
<!-- Back To Top Button -->
<div id="backtotop">
    <a href="#"></a>
</div>
@endsection
@section('scripts')


<!-- -->

<!-- REVOLUTION SLIDER SCRIPT -->
<script type="text/javascript">
    var tpj = jQuery;
    var revapi4;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_4_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_4_1");
        } else {
            revapi4 = tpj("#rev_slider_4_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "scripts/",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "zeus alt",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '<div class="tp-title-wrap"></div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 00,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 00,
                            v_offset: 0
                        }
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%"
                },
                responsiveLevels: [1900, 1700, 1600, 768, 480],
                visibilityLevels: [1400, 1200, 992, 768, 480],
                gridwidth: [1380, 1380, 1380, 1180, 778, 480],
                gridheight: [850, 800, 700, 1000, 1000],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 25, 47, 48, 49, 50, 51, 55],
                    type: "mouse",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
	(Load Extensions only on Local File Systems !
	The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="scripts/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.video.min.js"></script>
<script>
    // $(function() {
    //     function isotopeInit() {
	// 	$('.isotope-wrapper').isotope({
	// 	  itemSelector: '.isotope-item',
	// 	  percentPosition: false,
	// 	  masonry: {
	// 	    // use outer width of grid-sizer for columnWidth
	// 	    columnWidth: '.isotope-sizer'
	// 	  }
	// 	})
	// }
    //     isotopeInit();
    // });
</script>
@endsection
