@extends('layouts.app')
@section('content')
<div id="header-container" data-background="images/shop-parallax.jpg" data-color="#303133" data-color-opacity="0.7">
    @include('layouts.includes.header')

    <!-- Titlebar
================================================== -->
    <div id="titlebar" class="centered">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>Shop</h2>
                    <span>Our Must Have Products</span>

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
                    <h4>Категории</h4></div>

                <div class="list-group">
                    
                        <a href="#" class="list-group-item list-group-item-action"> Cras justo odio</a>
                    
                        <a href="#" class="list-group-item list-group-item-action"> Cras justo odio</a>
                   
                        <a href="#" class="list-group-item list-group-item-action"> Cras justo odio</a>
                   
                        <a href="#" class="list-group-item list-group-item-action"> Cras justo odio</a>
                    

                </div>

            </div>

            <!-- Recent Posts -->
            <div class="widget margin-bottom-50">
                <h4>Popular Products</h4>
                <ul class="widget-tabs shop">

                    <!-- Post #1 -->
                    <li>
                        <div class="widget-content">
                            <div class="widget-thumb">
                                <a href="#"><img src="images/shop-widget-01.jpg" alt="" /></a>
                            </div>

                            <div class="widget-text">
                                <h5><a href="#">Casual Shoes</a></h5>
                                <span>$79</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>

                    <!-- Post #2 -->
                    <li>
                        <div class="widget-content">
                            <div class="widget-thumb">
                                <a href="#"><img src="images/shop-widget-02.jpg" alt="" /></a>
                            </div>

                            <div class="widget-text">
                                <h5><a href="#">Red Backpack</a></h5>
                                <span><del>$49</del> <mark>$39</mark></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>

                    <!-- Post #3 -->
                    <li>
                        <div class="widget-content">
                            <div class="widget-thumb">
                                <a href="#"><img src="images/shop-widget-03.jpg" alt="" /></a>
                            </div>

                            <div class="widget-text">
                                <h5><a href="#">Sunglasses</a></h5>
                                <span><del>$29</del> <mark>$25</mark></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
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
                <div class="col-md-4 col-xs-12 isotope-item">
                    <div class="shop-item">
                        <a href="shop-detail"><img src="images/shop-01.jpg" alt="" /></a>
                        <figure>
                            <figcaption class="item-description">
                                <a href="shop-detail"><h5>Red Backpack</h5></a>
                                <span class="sale"><del>$49</del> <mark>$39</mark></span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Product -->
                <div class="col-md-4 col-xs-12 isotope-item">
                    <div class="shop-item">
                        <a href="shop-detail"><img src="images/shop-02.jpg" alt="" /></a>
                        <figure>
                            <figcaption class="item-description">
                                <a href="shop-detail"><h5>Casual Shoes</h5></a>
                                <span class="sale">$79</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Product -->
                <div class="col-md-4 col-xs-12 isotope-item">
                    <div class="shop-item">
                        <a href="shop-detail"><img src="images/shop-03.jpg" alt="" /></a>
                        <figure>
                            <figcaption class="item-description">
                                <a href="shop-detail"><h5>Cap</h5></a>
                                <span class="sale"><del>$10</del> <mark>$6</mark></span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Product -->
                <div class="col-md-4 col-xs-12 isotope-item">
                    <div class="shop-item">
                        <a href="shop-detail"><img src="images/shop-04.jpg" alt="" /></a>
                        <figure>
                            <figcaption class="item-description">
                                <a href="shop-detail"><h5>Watch</h5></a>
                                <span class="sale">$179</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Product -->
                <div class="col-md-4 col-xs-12 isotope-item">
                    <div class="shop-item">
                        <a href="shop-detail"><img src="images/shop-05.jpg" alt="" /></a>
                        <figure>
                            <figcaption class="item-description">
                                <a href="shop-detail"><h5>Sunglasses</h5></a>
                                <span class="sale"><del>$29</del> <mark>$25</mark></span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Product -->
                <div class="col-md-4 col-xs-12 isotope-item">
                    <div class="shop-item">
                        <a href="shop-detail"><img src="images/shop-06.jpg" alt="" /></a>
                        <figure>
                            <figcaption class="item-description">
                                <a href="shop-detail"><h5>Wallet</h5></a>
                                <span class="sale"><del>$79</del> <mark>$69</mark></span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Product -->
                <div class="col-md-4 col-xs-12 isotope-item">
                    <div class="shop-item">
                        <a href="shop-detail"><img src="images/shop-07.jpg" alt="" /></a>
                        <figure>
                            <figcaption class="item-description">
                                <a href="shop-detail"><h5>Shirt</h5></a>
                                <span class="sale">$19</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Product -->
                <div class="col-md-4 col-xs-12 isotope-item">
                    <div class="shop-item">
                        <a href="shop-detail"><img src="images/shop-08.jpg" alt="" /></a>
                        <figure>
                            <figcaption class="item-description">
                                <a href="shop-detail"><h5>T-Shirt</h5></a>
                                <span class="sale"><del>$19</del> <mark>$14</mark></span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Product -->
                <div class="col-md-4 col-xs-12 isotope-item">
                    <div class="shop-item">
                        <a href="shop-detail"><img src="images/shop-09.jpg" alt="" /></a>
                        <figure>
                            <figcaption class="item-description">
                                <a href="shop-detail"><h5>Tie</h5></a>
                                <span class="sale">$9</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Pagination -->
                    <div class="pagination-container margin-top-20 margin-bottom-0">
                        <nav class="pagination">
                            <ul>
                                <!-- 							<li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li> -->
                                <li><a href="#" class="current-page">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
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
