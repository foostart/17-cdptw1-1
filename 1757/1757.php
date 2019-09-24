<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/'.$pattern_document_root.'(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host.$matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once $dir_block.'/libs/lessc.inc.php';
    }

    $less = new lessc();
    $less->compileFile('less/1757.less', 'css/1757.css');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="<?php echo $url_path; ?>/css/1757.css" rel="stylesheet" />
    <!-- <link href="<?php echo $url_path; ?>/fontawesome/css/all.css" rel="stylesheet" /> -->
    <!-- <link href="<?php echo $url_path; ?>/fontawesome/css/all.min.css" rel="stylesheet" /> -->
</head>

<body>
    <div class="type-1757">
        <?php include '1757-content.php'; ?>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- <script src="js/bootstrap.js"></script> -->
<script>
$(function() {
    // $("#switch-view").click(function() {
    //     $('button').removeClass('active');
    //     $(this).find("button").addClass("active");
    //     alert(123);
    //     $(".article-wrapper").toggleClass("bloc col-xs-12 col-xs-4");
    // });
    $('.type-1757-btna').click(function(){
        $('#switch-view').find('button').removeClass('active');
        $(this).addClass('active');
        $(".article-wrapper").addClass("bloc col-xs-4");
        $(".article-wrapper").removeClass("col-xs-12");
    });
    $('.type-1757-btnb').click(function(){
        $('#switch-view').find('button').removeClass('active');
        $(this).addClass('active');
        $(".article-wrapper").removeClass("bloc col-xs-4");
        $(".article-wrapper").addClass("col-xs-12");
    });
});
</script>

</html>