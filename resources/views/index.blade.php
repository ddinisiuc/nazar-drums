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

            <!-- Slide  -->
            <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

                <!-- Background -->
                <img src="images/slide-corporate-01.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0">

                <!-- Caption-->
                <div class="tp-caption custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-2" data-x="['left','left','left','left']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['30']" data-width="['640','640', 640','420','320']" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

                    <!-- Caption Content -->
                    <div class="R_title margin-bottom-15" id="slide-2-layer-1" data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-20','-80']" data-fontsize="['52','46', '42','36','22']" data-lineheight="['78','68','70','55','35']" data-width="['640','640', 640','420','320']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;" data-transform_out="opacity:0;s:300;" data-start="600" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 700; ">Strategy Planning</div>

                    <div class="caption-text">Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures.</div>
                    <a href="#" class="button medium">Read More</a>
                </div>

            </li>

            <!-- Slide  -->
            <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

                <!-- Background -->
                <img src="images/slide-corporate-02.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="112" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0">

                <!-- Caption-->
                <div class="tp-caption centered custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-2-layer-2" data-x="['center','center','center','center']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['30']" data-width="['640','640', 640','420','320']" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

                    <!-- Caption Content -->
                    <div class="R_title margin-bottom-15" id="slide-2-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-20','-80']" data-fontsize="['52','46', '42','36','22']" data-lineheight="['78','68','70','55','35']" data-width="['640','640', 640','420','320']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;" data-transform_out="opacity:0;s:300;" data-start="600" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 700; ">Business Analysis</div>

                    <div class="caption-text">Proactively envisioned multimedia based on expertise cross-media growth strategies. Pontificate installed base portals after maintainable products.</div>
                    <a href="#" class="button medium">Read More</a>
                </div>

            </li>

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
                <h2 class="section-title margin-bottom-40"><strong>Be Familiar With Stunning Design</strong></h2>
            </div>

            <!-- Icons -->
            <div class="col-md-8">

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="icon-box-3">
                            <i class="ln  ln-icon-Rain-Drop"></i>
                            <h4>Pixel Perfect</h4>
                            <p>Pellentesque habitant morbi tristique senectus netus ante et malesuada fames ac turpis egestas maximus neque.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="icon-box-3">
                            <i class="ln ln-icon-Anchor-2"></i>
                            <h4>Solid Code</h4>
                            <p>Pellentesque habitant morbi tristique senectus netus ante et malesuada fames ac turpis egestas maximus.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="icon-box-3">
                            <i class="ln ln-icon-Rotation"></i>
                            <h4>Deeply Customizable</h4>
                            <p>Pellentesque habitant morbi tristique senectus netus ante et malesuada fames ac turpis egestas maximus neque.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="icon-box-3">
                            <i class="ln ln-icon-Smartphone-3"></i>
                            <h4>Mobile Optimised</h4>
                            <p>Pellentesque habitant morbi tristique senectus netus ante et malesuada fames ac turpis egestas maximus.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Section With Background / End -->

<!-- Image Edge -->
<div class="image-edge dark margin-top-0" data-background-image="images/footer_lodyas.png">

    <div class="image-edge-content">
        <h2>Don't Hestitate, Let Out Your Creative Beast</h2>
        <br>
        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation.</p>
        <br>
        <a href="portfolio-full-width-style-1.html" class="button border medium white margin-bottom-40">View All Projects</a>
    </div>

    <div class="edge-bg" data-background-image="images/service-02c.jpg"></div>

</div>
<!-- Image Edge / End -->

<!-- Projects -->
<div class="projects style-1 isotope-wrapper fw">

    <div class="isotope-sizer"></div>

    <!-- Item -->
    <div class="isotope-item identity print">
        <a href="single-project-creative-style-1.html">
            <img src="images/project-01.jpg" alt="">
            <div class="overlay">
                <div class="overlay-content">
                    <h4>Food Branding</h4>
                    <span>Nice Title Here</span>
                </div>
            </div>
        </a>
    </div>

    <!-- Item -->
    <div class="isotope-item print">
        <a href="single-project-creative-style-2.html">
            <img src="images/project-02.jpg" alt="">
            <div class="overlay">
                <div class="overlay-content">
                    <h4>Bilboard</h4>
                    <span>February 2016</span>
                </div>
            </div>
        </a>
    </div>

    <!-- Item -->
    <div class="isotope-item identity">
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
    </div>

    <!-- Item -->
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
    </div>

</div>
<!-- Projects / End -->
<!-- Infobox -->
<div class="info-banner-fw">
    <div class="container">
        <div class="row">
            <div class="col-md-12">Create Your Own Web Masterpiece <a href="contact.html">Contact Us</a></div>
        </div>
    </div>
</div>
<!-- Infobox / End -->

<!-- Testimonials -->
<section class="section-background with-testimonials" data-background-color="#222c42">

    <h3>Who We Work With</h3>

    <div class="testimonial-carousel full-width arrows">

        <div class="item">
            <div class="testimonial">
                <p>Simple and clean - that's what people and me like the most. Beautifully crafted, well organized and thoroughly documented.</p>
                <div class="testimonial-author">
                    <h4>Garret Gravesen</h4>
                    <span>Envato</span>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="testimonial">
                <p>Sphene is ridiculously powerful and easy to use, beginner or advanced. Always been on the hunt for handcrafted, clean themes.</p>
                <div class="testimonial-author">
                    <h4>Robert Lindstrom</h4>
                    <span>Google</span>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="testimonial">
                <p>What impressed me was the fast response to questions and helpful community conversation in the support forums.</p>
                <div class="testimonial-author">
                    <h4>Thomas Johnson</h4>
                    <span>Microsoft</span>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="testimonial">
                <p>Sphene is ridiculously powerful and easy to use, beginner or advanced. Always been on the hunt for handcrafted, clean themes.</p>
                <div class="testimonial-author">
                    <h4>John Smith</h4>
                    <span>Adobe</span>
                </div>
            </div>
        </div>

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

@endsection
