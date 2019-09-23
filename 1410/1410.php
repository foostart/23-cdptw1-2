<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
  $less->compileFile('less/1410.less', 'css/1410.css');
?>
<!DOCTYPE html>

<html lang="en-US">

    <head>
        <title>module 1410</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/1410.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/nouislider.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
       <?php include $dir_block.'/1410-content.php'; ?>
       <script src="<?php echo $url_path ?>/js/jquery-2.2.4.min.js"></script>
       <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
       <script src="<?php echo $url_path ?>/js/nouislider.min.js"></script>
       <script src="<?php echo $url_path ?>/js/main.js"></script>
    </body>
</html>