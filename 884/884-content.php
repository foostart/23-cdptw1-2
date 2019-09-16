
<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-884">
    <div class="container">
        <div class="row">
            <h2 class="page_heading">Blog
                <span class="page_heading">News and useful tips</span>
            </h2>
            <div class="col-sm-6">
                <div class="blog_post row">
                    <div class="article_img col-sm-12"><img src="<?php echo $url_path ?>/images/blog4_1024x1024.jpg?v=1468860293" alt="Best Makeup Secrets &amp; Looks For A Date Night. Look romnantic."></div>
                    <div class="blog_post__info col-sm-12">
                        <h3 class="blog_title"><a href="#">Best Makeup Secrets &amp; Looks For A Date Night. Look romnantic.</a></h3>
                        <div class="blog_content">We’ve collected all our knowledge to deliver you only the best organic, biodynamic, natural, wild-harvested cosmetology brands in the world. The point is that science and nature are easily combined...</div>
                    </div>
                </div>
                <div class="blog_post">
                    <div class="article_img"><img src="<?php echo $url_path ?>/images/blog1_00643b2b-1226-4ebf-9508-967dd3f30ebd_1024x1024.jpg?v=1468861247" alt="Our goal is to help you stay healthy as well as gorgeous at the same time"></div>
                    <div class="blog_post__info">
                        <h3 class="blog_title"><a href="#">Our goal is to help you stay healthy as well as gorgeous at the same time</a></h3>
                        <div class="blog_content">Soon you’ll discover how it is possible to use organic cosmetics for your body. We’ve collected all our knowledge to deliver you only the best organic, biodynamic, natural, wild-harvested cosmetology...</div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 video_wr">
                <figure>
                    <iframe src="https://www.youtube.com/embed/2F5Z50q4FNk" allowfullscreen=""></iframe>
                    <figcaption>
                        <h2>How to find the ideal fragrance for you or your loved one</h2>
                    </figcaption>
                </figure>
            </div>

        </div>
    </div>
</div>