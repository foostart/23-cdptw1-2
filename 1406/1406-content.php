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

<body>
    <div class="type-1406">
        <div class="container pdtype">
            <h2 class="title">LATEST BLOG</h2>
            <div class="viewblog clearfix pc-view">
                <div class="caption">
                    <img src="images/images-2.png" class="img-responsive">
                    <span class="entry-time">10 Jan, 2016</span>
                    <div class="item-content-wrap">
                        <a>
                            Italian fashion designer Elio Fiorucci dies aged 80
                        </a>
                    </div>
                    <div class="item-content">
                        <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </p>
                    </div>
                    <div class="entry-meta">
                        <div class="entry-comment">
                            <i class="fas fa-comments"></i>
                            <span class="comments"><a href="#">2 COMMENTS</a></span>
                            <span class="l_comments">
                                <a class="view-all-blog" href="#" title="View All"> VIEW ALL </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="caption2">
                    <span class="entry-time">10 Jan, 2016</span>
                    <div class="item-content-wrap">
                        <a>
                            Italian fashion designer Elio Fiorucci dies aged 80
                        </a>
                    </div>
                    <div class="item-content">
                        <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </p>
                    </div>
                    <div class="entry-meta">
                        <div class="entry-comment">
                            <i class="fas fa-comments"></i>
                            <span class="comments"><a href="#">2 COMMENTS</a></span>
                            <span class="l_comments">
                                <a class="view-all-blog" href="#" title="View All"> VIEW ALL </a>
                            </span>
                        </div>
                    </div>
                    <img src="images/images-1.png" class="img-responsive">
                </div>
            </div>
            <div class=" container view clearfix mb-view">
                <div class="captionmb">
                    <img src="images/images-2.png" class="img-responsive">
                    <span class="entry-time">10 Jan, 2016</span>
                    <div class="item-content-wrap">
                        <a>
                            Italian fashion designer Elio Fiorucci dies aged 80
                        </a>
                    </div>
                    <div class="item-content">
                        <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </p>
                    </div>
                    <div class="entry-meta">
                        <div class="entry-comment">
                            <i class="fas fa-comments"></i>
                            <span class="comments">2 COMMENTS</span>
                            <span class="l_comments">
                                <a class="view-all-blog" href="#" title="View All"> VIEW ALL </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="captionmb">
                    <img src="images/images-1.png" class="img-responsive">
                    <span class="entry-time">10 Jan, 2016</span>
                    <div class="item-content-wrap">
                        <a>
                            Italian fashion designer Elio Fiorucci dies aged 80
                        </a>
                    </div>
                    <div class="item-content">
                        <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </p>
                    </div>
                    <div class="entry-meta">
                        <div class="entry-comment">
                            <i class="fas fa-comments"></i>
                            <span class="comments">2 COMMENTS</span>
                            <span class="l_comments">
                                <a class="view-all-blog" href="#" title="View All"> VIEW ALL </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>