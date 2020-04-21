@extends('layouts.app') 
@section('content') 
@include('layouts.includes.header')
<!-- Content
================================================== -->

<!-- Parallax Full-Screen Background -->
<div class="fullscreen background parallax" data-background="images/portfolio-slide-01.jpg" data-img-width="1800" data-img-height="1202" data-diff="300" data-color="#303133" data-color-opacity="0.9">
    <div class="parallax-content-container">
        <div class="parallax-content">
            <h2>Single Project Full-Screen</h2>
            <div class="scroll-to-content bounce ln ln-icon-Down-3"></div>
        </div>
    </div>
</div>

<br>

<!-- Content -->
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="project-details margin-top-45 margin-bottom-0">
                <h4>Project Name</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <p>Maecenas molestie fermentum luctus. Cras lacinia molestie nibh. Pellentesque non magna ac dui varius auctor at sed nunc. Fusce bibendum eros sed mattis accumsan. Nam mattis convallis elit, ut condimentum nulla commodo nec. Aenean eget metus sed turpis molestie porta vitae non libero.</p>
            <p>Maecenas vehicula ultrices magna, vitae placerat nibh rhoncus sit amet. Vestibulum congue suscipit sagittis. Phasellus at dui eget metus consectetur laoreet id ac mi. Proin nisl mi, gravida sed maximus ut, sodales dictum velit. Nunc ultricies porttitor est, ut rutrum ante. Vivamus interdum sodales sem. In ultrices augue eget nibh convallis, quis laoreet tortor lacinia. </p>
        </div>

        <div class="col-md-4">
            <ul class="details alt2">
                <li><span>Date:</span> 11 January 2016</li>
                <li><span>Location:</span> London</li>
                <li><span>Category:</span> <a href="#">Kitchens</a>, <a href="#">Carpentry</a></li>
            </ul>
        </div>
    </div>

</div>

<!-- Image Edge -->
<div class="image-edge margin-top-80">

    <div class="image-edge-content">
        <h2>Don't Hestitate, <br>Let Out Your Creative Beast</h2>
        <br>
        <p>Avenger is a powerful multipurpose template, excellent compromise among the conflicting requirements of novelty, simplicity, elegance and function.</p>
        <br>
    </div>

    <div class="edge-bg" data-background-image="images/single-project-01a.jpg"></div>

</div>
<!-- Image Edge / End -->

<!-- Image Edge -->
<div class="image-edge left margin-top-0">

    <div class="image-edge-content">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="icon-box-1">
                    <i class="ln ln-icon-Ship-2"></i>
                    <h4>Visual Identity</h4>
                    <p>Nunc ultricies porttitor est, ut rutrum ante. Vivamus interdum sodales sem. In ultrices augue eget.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="icon-box-1">
                    <i class="ln ln-icon-Box-Open"></i>
                    <h4>Package Design</h4>
                    <p>Nunc ultricies porttitor est, ut rutrum ante. Vivamus interdum sodales sem. In ultrices augue eget.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="icon-box-1">
                    <i class="ln ln-icon-Environmental-3"></i>
                    <h4>Ecologic Paper</h4>
                    <p>Nunc ultricies porttitor est, ut rutrum ante. Vivamus interdum sodales sem. In ultrices augue eget.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="icon-box-1">
                    <i class="ln ln-icon-Search-onCloud"></i>
                    <h4>Audit & Assurance</h4>
                    <p>Nunc ultricies porttitor est, ut rutrum ante. Vivamus interdum sodales sem. In ultrices augue eget.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="edge-bg" data-background-image="images/single-project-01b.jpg"></div>

</div>
<!-- Image Edge / End -->

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
@endsection