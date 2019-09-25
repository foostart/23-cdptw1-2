<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1410">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-categories">
                    <div class="head">CATEGORIES</div>
                    <ul class="main-categories">
                        <li class="main-nav-list"><a data-toggle="collapse" href="#"><span
                                    class="lnr lnr-arrow-right"></span>Bags</a>
                        </li>

                        <li class="main-nav-list"><a data-toggle="collapse" href="#"><span class="lnr lnr-arrow-right"></span>Dresses</a>
                        </li>
                        <li class="main-nav-list"><a data-toggle="collapse" href="#" ><span class="lnr lnr-arrow-right"></span>Hoodies&Sweatshirts</a>
                        </li>
                        <li class="main-nav-list"><a data-toggle="collapse" href="#" ><span class="lnr lnr-arrow-right"></span>Jackets&Coats</a>
                        </li>
                        <li class="main-nav-list"><a data-toggle="collapse" href="#" ><span class="lnr lnr-arrow-right"></span>Jeans</a>
                        </li>
                        <li class="main-nav-list"><a href="#">Shirts</a></li>
                        <li class="main-nav-list"><a data-toggle="collapse" href="#" ><span class="lnr lnr-arrow-right"></span>More</a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-filter mt-50">
                    <div class="common-filter">
                        <div class="head">PRICE</div>
                        <div class="price-range-area">
                            <div id="price-range"></div>
                            <div class="value-wrapper d-flex">
                                <div class="price">Price:
                                    <span id="lower-value"></span>VND
                                    <span>to</span>
                                    <span id="upper-value"></span>VND
                                </div>
                                <div class="text-center">
                                    <button type="submit" value="submit" class="primary-btn">FILTER</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="./images/1.jpg" alt="">
                                <div class="product-details">
                                    <a href="#"><h6>MESH EMBROIDEDRED FRINGED BEACH KIMONIO</h6></a>
                                    <span><a href="#" class="price">$76.000</a></span>
                                    <a href="#" class="tim"></a>
                                    <a href="#" class="tui"></a>
                                </div>
                            </div>
                        </div>
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="./images/2.jpg" alt="">
                                <div class="product-details">
                                    <a href="#"><h6>MESH EMBROIDEDRED FRINGED BEACH KIMONIO</h6></a>
                                    <span><a href="#" class="price">$76.000</a></span>
                                    <a href="#" class="tim"></a>
                                    <a href="#" class="tui"></a>
                                </div>
                            </div>
                        </div>
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="./images/3.jpg" alt="">
                                <div class="product-details">
                                    <a href="#"><h6>MESH EMBROIDEDRED FRINGED BEACH KIMONIO</h6></a>
                                    <span><a href="#" class="price">$76.000</a></span>
                                    <a href="#" class="tim"></a>
                                    <a href="#" class="tui"></a>
                                </div>
                            </div>
                        </div>
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="./images/4.jpg" alt="">
                                <div class="product-details">
                                    <a href="#"><h6>MESH EMBROIDEDRED FRINGED BEACH KIMONIO</h6></a>
                                    <span><a href="#" class="price">$76.000</a></span>
                                    <a href="#" class="tim"></a>
                                    <a href="#" class="tui"></a>
                                </div>
                            </div>
                        </div>
                        <!-- single product -->
                        
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>