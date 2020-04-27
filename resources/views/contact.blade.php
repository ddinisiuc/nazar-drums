@extends('layouts.app') @section('content')
<div id="header-container" class="basic">
    @include('layouts.includes.header')
    <!-- Contact
================================================== -->

    <!-- Map Container -->
    <div class="full-width-box-container margin-bottom-10">

        <!-- Map -->
        <div class="col-lg-9 col-md-8">
            <!-- Google Maps -->
            <div class="google-map-container">
                <div id="googlemaps" class="google-map google-map-full"></div>
            </div>
            <!-- Google Maps / End -->
        </div>

        <!-- Office -->
        <div class="col-lg-3 col-md-4">
            <div class="address-container" data-background-image="images/contact-our-office.jpg">
                <div class="office-address">
                    <h3>Our Office</h3>
                    <ul>
                        <li>45 Park Avenue, Apt. 303</li>
                        <li>New York, NY 10016</li>
                        <li>Phone (123) 123-456 </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- Map Container / End -->

    <!-- Container / Start -->
    <div class="container">

        <div class="row">

            <!-- Contact Details -->
            <div class="col-md-4">

                <h3 class="headline margin-bottom-35">Find Us There</h3>

                <!-- Contact Details -->
                <div class="sidebar-textbox">
                    <p>Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services.</p>

                    <ul class="contact-details">
                        <li><i class="ln ln-icon-Phone-2"></i> <strong>Phone:</strong> <span>(123) 123-456 </span></li>
                        <li><i class="ln ln-icon-Fax"></i> <strong>Fax:</strong> <span>(123) 123-456 </span></li>
                        <li><i class="ln ln-icon-Globe"></i> <strong>Web:</strong> <span><a href="#">www.example.com</a></span></li>
                        <li><i class="ln ln-icon-Envelope"></i> <strong>E-Mail:</strong> <span><a href="#">office@example.com</a></span></li>
                    </ul>
                </div>

            </div>

            <!-- Contact Form -->
            <div class="col-md-8">

                <section id="contact">
                    <h3 class="headline margin-bottom-45">Contact Form</h3>

                    <div id="contact-message"></div>

                    <form method="post" action="contact.php" name="contactform" id="contactform" autocomplete="on">

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

                        <div>
                            <input name="subject" type="text" id="subject" placeholder="Subject" required="required" />
                        </div>

                        <div>
                            <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
                        </div>

                        <input type="submit" class="submit button medium border" id="submit" value="Submit Message" />

                    </form>
                </section>
            </div>
            <!-- Contact Form / End -->

        </div>

    </div>
    <!-- Container / End -->

    <!-- Footer
================================================== -->
    <div class="margin-top-60"></div>

  

    <!-- Back To Top Button -->
    <div id="backtotop">
        <a href="#"></a>
    </div>

    @endsection @section('scripts')
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

    <!-- Google Maps -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBENlIxSKmTEK2fJeKjKo_JMxC9jE2IkL4"></script>
    <script src="scripts/jquery.gmaps.min.js"></script>

    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {

                $('#googlemaps').gMap({
                    maptype: 'ROADMAP',
                    scrollwheel: false,
                    zoom: 13,
                    markers: [{
                        address: 'New York, 45 Park Avenue', // Your Adress Here
                        html: '<strong>Our Office</strong><br>45 Park Avenue, Apt. 303 </br>New York, NY 10016 ',
                        popup: false,
                        icon: {
                            image: "images/map-icon.png",
                            iconsize: [41, 53],
                            iconanchor: [20, 53]
                        }
                    }],

                    styles: [{
                        "featureType": "landscape",
                        "stylers": [{
                            "hue": "#FFBB00"
                        }, {
                            "saturation": 43.400000000000006
                        }, {
                            "lightness": 37.599999999999994
                        }, {
                            "gamma": 1
                        }]
                    }, {
                        "featureType": "road.highway",
                        "stylers": [{
                            "hue": "#FFC200"
                        }, {
                            "saturation": -61.8
                        }, {
                            "lightness": 45.599999999999994
                        }, {
                            "gamma": 1
                        }]
                    }, {
                        "featureType": "road.arterial",
                        "stylers": [{
                            "hue": "#FF0300"
                        }, {
                            "saturation": -100
                        }, {
                            "lightness": 51.19999999999999
                        }, {
                            "gamma": 1
                        }]
                    }, {
                        "featureType": "road.local",
                        "stylers": [{
                            "hue": "#FF0300"
                        }, {
                            "saturation": -100
                        }, {
                            "lightness": 52
                        }, {
                            "gamma": 1
                        }]
                    }, {
                        "featureType": "water",
                        "stylers": [{
                            "hue": "#0078FF"
                        }, {
                            "saturation": -13.200000000000003
                        }, {
                            "lightness": 2.4000000000000057
                        }, {
                            "gamma": 1
                        }]
                    }, {
                        "featureType": "poi",
                        "stylers": [{
                            "hue": "#00FF6A"
                        }, {
                            "saturation": -1.0989010989011234
                        }, {
                            "lightness": 11.200000000000017
                        }, {
                            "gamma": 1
                        }]
                    }]

                });

            });

        })(this.jQuery);
    </script>
    @endsection
