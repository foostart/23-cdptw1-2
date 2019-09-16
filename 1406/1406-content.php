<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
?>
<body >
    <div class="type-1406">
        <div class="container">
            <div class="wpb_wrapper">
                <div class="widget-the-blog the_blog ">
                    <div class="title-home">
                        <span>Latest Blog</span>
                    </div>
                    <div class="wrap-content">
                        <div class="widget-post">
                            <div class="widget-post-inner">
                                <div class="widget-thumb">
                                    <a href="#">
                                        <img width="430" height="280" src="images/images-2.png"  alt="images-2"  sizes="(max-width: 430px) 100vw, 430px">
                                    </a>
                                </div>
                                <div class="widget-caption">
                                    <span class="entry-time">10 Jan, 2016</span>
                                    <div class="item-content-wrap">
                                        <h4>
                                            <a href="#">Italian fashion designer Elio Fiorucci dies aged 80</a>
                                        </h4>
                                    </div>
                                    <div class="item-content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </div>
                                    <div class="entry-meta">
                                        <div class="entry-comment">
                                            <i class="fas fa-comments"></i>
                                            <span>2 comments</span>
                                        </div>
                                        <a class="view-all-blog" href="#" title="View All"> View All </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-post">
                            <div class="widget-post-inner">
                                <div class="widget-thumb">
                                    <a href="#">
                                        <img width="430" height="280" src="images/images-1.png" alt="images-1" sizes="(max-width: 430px) 100vw, 430px"></a>
                                </div>
                                <div class="widget-caption">
                                    <span class="entry-time">10 Jan, 2016</span>
                                    <div class="item-content-wrap">
                                        <h4>
                                            <a href="#">Quis nostrum exercit ullam corporis supit labor
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="item-content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi 
                                    </div>
                                    <div class="entry-meta">
                                        <div class="entry-comment">
                                            <i class="fas fa-comments"></i>
                                            <span>1 comment</span>
                                        </div>
                                        <a class="view-all-blog" href="#" title="View All"> View All 
                                        </a>
                                    </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    
</body>
