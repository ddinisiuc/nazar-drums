@extends('layouts.app') @section('content')
<div id="header-container" class="basic">
    @include('layouts.includes.header')
    <!-- Contact
================================================== -->

    <!-- Map Container -->
    {{-- <div class="full-width-box-container margin-bottom-10">

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

    </div> --}}
    <!-- Map Container / End -->

    <!-- Container / Start -->
    <div class="container">

        <div class="row">

            <!-- Contact Details -->
            <div class="col-md-4">

                <h3 class="headline margin-bottom-35">{{ setting('contact.get_in_touch') }}</h3>

                <!-- Contact Details -->
                <div class="sidebar-textbox">
                    <p>{{ $page->excerpt }}</p>

                    <ul class="contact-details">
                        <li><i class="ln ln-icon-Phone-2"></i> <strong>{{ setting('contact.phone_label') }}</strong> <span><a href="tel:{{ setting('contact.phone_number') }}">{{ setting('contact.phone_number') }}</a> </span></li>
                        <li><i class="ln ln-icon-Facebook"></i> <strong>{{ setting('contact.facebook_label') }}</strong> <span><a href="{{ setting('contact.facebook') }}">www.facebook.com</a></span></li>
                        <li><i class="ln ln-icon-Envelope"></i> <strong>{{ setting('contact.email_label') }}</strong> <span><a href="mailto:{{ setting('contact.email') }}">{{ setting('contact.email') }}</a></span></li>
                    </ul>
                </div>

            </div>

            <!-- Contact Form -->
            <div class="col-md-8">

                <section id="contact">
                    <h3 class="headline margin-bottom-45">{{ setting('contact.contact_form') }}</h3>

                    <div id="contact-message"></div>

                    <form method="post" action="{{ route('send_contact') }}" name="contactform" id="contactform" autocomplete="on">
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

                        <div>
                            <input name="subject" type="text" id="subject" placeholder="Subject" required="required" />
                        </div>

                        <div>
                            <textarea name="message" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
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

    @endsection
