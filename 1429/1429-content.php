<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" id="slide-0">
                <div class = "set">
                    <div class = "text">
                        <h3>Welcome To Statistic Consulting</h3>
                        <h2>We're here to offer the best support, to help you troubleshot any bussiness issues</h2>
                    </div>
                    <div class = "button">
                        <a>Contract Us</a>
                        <a>Our Services</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" id="slide-1">
                <div class = "set">
                    <div class = "text">
                        <h3>Welcome To Statistic Consulting</h3>
                        <h2>We're here to offer the best support, to help you troubleshot any bussiness issues</h2>
                    </div>
                    <div class = "button">
                        <a>Contract Us</a>
                        <a>Our Services</a>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    
</div>