<?php
header('Content-Type: text/html; charset=utf-8');
const WEBSITE = 'http://www.okzyw.com/';
const PLAYER = './player/?play=';
$set = array(
    'title' => '闲渡搜索 - Xiandu.Me',
    'keywords' => '闲渡搜索,最新电影',
    'desc' => '闲渡搜索是一个轻量搜索。。',
   // 'bg' => 'https://cn.bing.com/th?id=OHR.QingmingBridge_ZH-CN3844222543_1920x1080.jpg&rf=LaDigue_1920x1080.jpg&pid=hp',
    'autokeywords'=>'1',
);

function curl_get($url, $ip = true)
{

    $ch = curl_init();
    $defaultOptions = defaultOptions($url, dirname($url), $ip);
    curl_setopt_array($ch, $defaultOptions);
    $chContents = curl_exec($ch);
    $curlInfo = curl_getinfo($ch);

    curl_close($ch);

    if ($curlInfo['http_code'] != 200) {
        $contents = $curlInfo['http_code'];
    } else {
        $contents = $chContents;
    }

    return $contents;
}


function randIp()
{
    return mt_rand(20, 250) . "." . mt_rand(20, 250) . "." . mt_rand(20, 250) . "." . mt_rand(20, 250);
}

function defaultOptions($url, $httpReferer, $ip = false)
{
    if (!$ip) {
        $ip = randIp();
    }

    return [
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_REFERER => $httpReferer,
        CURLOPT_HTTPHEADER => [
            "Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Accept-Language:zh-CN,en-US;q=0.7,en;q=0.3",
            "User-Agent:Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36",
            "HTTP_X_FORWARDED_FOR:{$ip}",
            "CLIENT-IP:{$ip}"
        ]
    ];
}
function curl_post($url, $param = '',$ip = true)
{

    $ch = curl_init();
    $defaultOptions = defaultOptions($url, dirname($url), $ip);
    curl_setopt_array($ch, $defaultOptions);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
    $chContents = curl_exec($ch);
    $curlInfo = curl_getinfo($ch);
    curl_close($ch);


    if ($curlInfo['http_code'] != 200) {
        $contents = $curlInfo['http_code'];
    } else {
        $contents = $chContents;
    }
    return $contents;
}
// function curl_post($url = '', $param = '')
// {
//     if (empty($url) || empty($param)) {
//         return false;
//     }
//     $postUrl = $url;
//     $curlPost = $param;
//     $ch = curl_init(); //初始化curl
//     curl_setopt($ch, CURLOPT_URL, $postUrl); //抓取指定网页
//     ##curl_setopt($ch, CURLOPT_HEADER, 0); //设置header

//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //要求结果为字符串且输出到屏幕上
//     curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; U; Android 4.4.1; zh-cn; R815T Build/JOP40D) AppleWebKit/533.1 (KHTML, like Gecko)Version/4.0 MQQBrowser/4.5 Mobile Safari/533.1');
//     curl_setopt($ch, CURLOPT_POST, 1); //post提交方式
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
//     $content = curl_exec($ch); //运行curl
//     curl_close($ch);
//     return $content;
// }

function get_word(){
    $url = "https://node.video.qq.com/x/api/vdefault_word";
    if($word=json_decode(curl_get($url),true)['data'][0]['title']){
        return $word;
    }
    else return "迪迦奥特曼";
}
