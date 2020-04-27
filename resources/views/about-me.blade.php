@extends('layouts.app') @section('content')
<div id="header-container" data-background="images/about-01-parallax.jpg" data-color="#303133" data-color-opacity="0.6">
    <div id="main-header">
        <div class="container">

            <div class="row">
                <div class="header">

                    <div class="col-md-2 col-sm-12">
                        <div id="logo" class="margin-top-25">
                            <a href="index.html"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>

                    <div class="search-container">
                        <form action="#" method="get">
                            <input type="text" name="s" id="s" onblur="if(this.value=='')this.value='to search type and hit enter';" onfocus="if(this.value=='to search type and hit enter')this.value='';" value="to search type and hit enter" />
                        </form>
                        <div class="close-search">
                            <a class="sl sl-icon-close" href="#"></a>
                        </div>
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
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('projects') }}">My projects</a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ route('shop') }}">Shop</a>
                                </li>

                                <li>
                                    <a href="{{ route('blog') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ route('about-me') }}" class="current">about-me</a>
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
    <!-- Titlebar
================================================== -->
    <div id="titlebar" class="large">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>About Me</h2>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>About Me</li>
                        </ul>
                    </nav>

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
            <h3 class="about-me-title"><strong>Hi, I'm John Doe!</strong></h3>
        </div>

        <!-- Skill bars -->
        <div class="col-md-8">
            <div class="row margin-top-20">
                <div class="col-md-12">
                    <p class="about-me-intro">I'm freelance web designer who creates beautiful and usable websites using best practice accessibility and the latest W3C web standards guidelines, resulting in semantic and seo friendly HTML5 and CSS.</p>
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
                <h3 class="about-me-title"><strong>Web Design, Branding and UI/UX Design</strong></h3></div>

            <div class="col-md-8">

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="icon-box-3 rounded dark">
                            <i class="ln ln-icon-Smartphone-3"></i>
                            <h4>Responsive Design</h4>
                            <p>Pellentesque habitant morbi tristique senectus netus ante et malesuada fames ac turpis egestas maximus neque.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="icon-box-3 rounded dark">
                            <i class="ln ln-icon-Sailing-Ship"></i>
                            <h4>Social Media</h4>
                            <p>Pellentesque habitant morbi tristique senectus netus ante et malesuada fames ac turpis egestas maximus neque.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="icon-box-3 rounded dark">
                            <i class="ln ln-icon-Rotation"></i>
                            <h4>Prototyping</h4>
                            <p>Pellentesque habitant morbi tristique senectus netus ante et malesuada fames ac turpis egestas maximus neque.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="icon-box-3 rounded dark">
                            <i class="ln ln-icon-Code-Window"></i>
                            <h4>CMS Systems</h4>
                            <p>Pellentesque habitant morbi tristique senectus netus ante et malesuada fames ac turpis egestas maximus neque.</p>
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
        <h3 class="about-me-title margin-bottom-25"><strong>Get In Touch</strong></h3>
        <p>Collaboratively administrate turnkey channels whereas virtual. Objectively seize scalable metrics whereas proactive.</p>

        <div class="sidebar-textbox">
            <ul class="contact-details">
                <li><i class="ln ln-icon-Phone-2"></i> <strong>Phone:</strong> <span>(123) 123-456 </span></li>
                <li><i class="ln ln-icon-Envelope"></i> <strong>E-Mail:</strong> <span><a href="#">office@example.com</a></span></li>
            </ul>
            <div class="clearfix"></div>

            <!-- Social Icons / Start -->
            <ul class="social-icons color rounded margin-top-15">
                <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
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
@section('scripts')
<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="scripts/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="scripts/jquery.isotope.min.js"></script>
<script type="text/javascript" src="scripts/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/jquery.sticky-kit.min.js"></script>
<script type="text/javascript" src="scripts/jquery.twentytwenty.js"></script>
<script type="text/javascript" src="scripts/jquery.event.move.js"></script>
<script type="text/javascript" src="scripts/jquery.photogrid.js"></script>
<script type="text/javascript" src="scripts/jquery.tooltips.min.js"></script>
<script type="text/javascript" src="scripts/jquery.pricefilter.js"></script>
<script type="text/javascript" src="scripts/jquery.stacktable.js"></script>
<script type="text/javascript" src="scripts/jquery.contact-form.js"></script>
<script type="text/javascript" src="scripts/jquery.jpanelmenu.js"></script>
<script type="text/javascript" src="scripts/headroom.min.js"></script>
<script type="text/javascript" src="scripts/modernizr.custom.js"></script>
<script type="text/javascript" src="scripts/puregrid.js"></script>
<script type="text/javascript" src="scripts/flexibility.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>

@endsection
