<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-4">
    <div class="container">
        <div class="section-title">
            <b></b>
            <span>Featured Categories</span>
            <b></b>
        </div>
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/1.jpeg" alt="" class="img-responsive">
                </div>
                <div class="swiper-slide">
                    <img src="./images/2.jpg" alt="" class="img-responsive">
                </div>
                <div class="swiper-slide">
                    <img src="./images/3.jpg" alt="" class="img-responsive">
                </div>
                <div class="swiper-slide">
                    <img src="./images/5.jpeg" alt="" class="img-responsive">
                </div>
                <div class="swiper-slide">
                    <img src="./images/6.jpeg" alt="" class="img-responsive">
                </div>

            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>