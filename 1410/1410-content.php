<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div>
    <div class="products-nav">
        <div class="container">
            <p class="woocommerce-result-count">
            Showing all 4 results</p>
            <div class="view-mode-wrap">
                <span class="text-view">View as:</span>
                <p class="view-mode">
                    <a href="javascript:void(0)" class="grid-view" title="Grid view"><span>Grid view</span></a>
                    <a href="javascript:void(0)" class="list-view" title="List view"><span>List view</span></a>
                </p>	
            </div>
            <div class = "category-ss">
                <div class="show">
                    <span class="showproduct">Show:</span>
                    <span class = "current-li">
                        <a href="#">12</a>
                    </span>
                    <ul class = "ll">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </div>
                <div class="default">
                    <span class="defaultroduct">Sort by:</span>
                    <span class = "current-li">
                        <a href="#">Default</a>
                    </span>
                    <ul class = "ll">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </div>
            </div>
        </div>  
    </div>
    <div  class="container">
        <div class="body">
            <div class="col-md-4">
                <div class="categories">
                    <span>CATEGORIES</span>
                    <hr>
                    <ul>
                        <li class = "cat-item">Bags</li>
                        <li class = "cat-item">Dresses</li>
                        <li class = "cat-item">Hoodies&Sweatshirts</li>
                        <li class = "cat-item">Jackets&Coats</li>
                        <li class = "cat-item">Jeans</li>
                        <li class = "cat-item">Shirts</li>
                        <li class = "cat-item">More</li>
                    </ul>
                </div>
                <div class="shopby">
                    <span><h3>Shop By</h3></span>
                    <hr>
                    <div type=" margin-bottom: 20px;">
                        <div class ="slider"></div>
                        <span class="head"></span>
                        <span class="tail"></span>
                    </div>
                    <form action="#">
                        <input type="text">
                        <input type="text">
                        <button>filter</button>
                    </form>
                </div>
            </div>
            <div class="col-md-8 left-side">
                    <div class="col-md-4 product">
                        <img src="./images/23-400x424.jpg" alt="">
                        <div class="info">
                            <p>MESH EMBROIDEDRED FRINGED BEACH KIMONIO</p>
                            <span><a href="#" class="price">$76.000</a></span>
                            <a href="#"  class="tim"></a>
                            <a href="#" class="tui"></a>
                        </div>
                    </div>
                    <div class="col-md-4 product">
                        <img src="./images/17-400x424.jpg" alt="">
                        <div class="info">
                            <p>MESH EMBROIDEDRED FRINGED BEACH KIMONIO</p>
                            <span><a href="#" class="price">$70.000</a></span>
                            <a href="#"  class="tim"></a>
                            <a href="#" class="tui"></a>
                        </div>
                    </div>
                    <div class="col-md-4 product">
                        <img src="./images/6-400x424.jpg" alt="">
                        <div class="info">
                            <p>MESH EMBROIDEDRED FRINGED BEACH KIMONIO</p>
                            <span><a href="#" class="price">$65.000</a></span>
                            <a href="#"  class="tim"></a>
                            <a href="#" class="tui"></a>
                        </div>
                    </div>
                    <div class="col-md-4 product">
                        <img src="./images/7-400x424.jpg" alt="">
                        <div class="info">
                            <p>MESH EMBROIDEDRED FRINGED BEACH KIMONIO</p>
                            <span><a href="#" class="price">$76.000</a></span>
                            <a href="#"  class="tim"></a>
                            <a href="#" class="tui"></a>
                        </div>
                    </div>
            </div>
        </div> 
    </div>
</div>

  
    
    

    