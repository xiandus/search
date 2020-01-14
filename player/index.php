<?php
require "../common.php";
$url = @$_GET['play'];
if (!empty($url)) {
    $url = str_replace(" ", "+", $url);
    $item = base64_decode($url);
    $url = htmlentities(explode("|", $item)[0], ENT_QUOTES);
    $title = htmlentities(explode("|", $item)[1], ENT_QUOTES) . '_' . $set['title'];
} else {
    header('Refresh:3,Url=../');
    echo '<h1>地址出错，将返回首页。。。</h1>';
    die;
}
?>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=”applicable-device” content=”pc,mobile”>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/video.js@7.4.1/dist/video-js.min.css">
    <style>
        @media (min-width: 1200px) {
            .container {
                max-width: 1100px
            }
        }

        .nice-nav {
            background: #123;
        }

        .div_foot {

            position: absolute;

            height: 50px;

            text-align: center;
            bottom: 0px;

            line-height: 50px;

            width: 100%;

        }
    </style>
    <title><?= $title; ?></title>
</head>

<body style="background:#235;">
    <nav class="navbar navbar-expand-lg navbar-dark   nice-nav">
        <div class="container"><a class="navbar-brand" style="color:#fff;"><?= $title; ?></a></div>
    </nav>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-12"><video id="player" class="video-js vjs-16-9 vjs-big-play-centered" controls preload="auto" data-setup="{}">
                    <source id="video-player" src="<?php echo $url; ?>" type="application/x-mpegURL">
                    <p class="vjs-no-js">To view this video please enable JavaScript,
                        and consider upgrading to a web browser that <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                </video></div>
        </div>
        <div class="my-3" style="color:#fff;text-align:center;">
            <h4>正在播放:&nbsp;&nbsp;<?= $title; ?></h4>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/video.js@7.4.1/dist/video.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@videojs/http-streaming@1.10.3/dist/videojs-http-streaming.min.js"></script>
</body>

</html>
