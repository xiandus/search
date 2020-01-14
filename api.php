<?php
/*
 * @Author: yumusb
 * @LastEditors: yumusb
 * @Description: 
 * @Date: 2019-04-25 09:24:02
 * @LastEditTime: 2019-10-10 15:40:07
 */

include 'common.php';
function echores($res, $code = 200)
{
    if (empty($res)) {
        $res = "无结果";
        $code = 404;
    }
    $res = array(
        'status' => $code,
        'res' => $res,
    );
    if ($code = 200) {
        return json_encode($res);
    } else {
        return json_encode($res);
        exit;
    }
}
function filter($keyword)
{
    $keyword = urldecode($keyword);
    if (is_numeric($keyword)) {
        echo echores($res = "你搞h?", $code = 500);
        exit;
    }
    $blacklist = "韩国|车展|美女|范拍|真人秀|小姐|写真|自拍|美女|趣向|内衣|欧美|日韩|街拍";
    $encode = mb_detect_encoding("中国", array("ASCII", 'UTF-8', "GB2312", "GBK", 'BIG5'));
    if ($encode !== "UTF-8") {
        $blacklist = iconv($encode, "UTF-8//IGNORE", $blacklist);
    }
    if (preg_match("/$blacklist/", $keyword)) {
        echo echores($res = "你搞h?", $code = 500);
        exit;
    } else {
        return $keyword;
    }
}
function get_movie($keyword)
{
    $url = WEBSITE . 'index.php?m=vod-search';

    $post = array("wd" => $keyword, "submit" => "search");

    $data =  curl_post($url, $post);
    //echo $data;
    $blacklist = "福利片|伦理片";
    $encode = mb_detect_encoding("中国", array("ASCII", 'UTF-8', "GB2312", "GBK", 'BIG5'));
    if ($encode !== "UTF-8") {
        $blacklist = iconv($encode, "UTF-8//IGNORE", $blacklist);
    }
    preg_match_all('/<a href="\/\?m=vod-detail-id-(\d+?).html" target="_blank">(.*?)<\/a>(?!.*(' . $blacklist . '))/', $data, $res);
    $urls = $res[1];
    $titles = $res[2];
    $res = array();
    for ($i = 0; $i < count($urls); $i++) {
        $tmp['title'] = $titles[$i];
        $tmp['url'] = $urls[$i];
        $res[] = $tmp;
        if (count($res) == 10) {
            return echores($res);
        }
    }
    return echores($res);
}
function play($id, $title)
{
    $id = intval($id);
    $url = WEBSITE . "?m=vod-detail-id-{$id}.html";
    $html = curl_get($url);
    preg_match_all('/\/>(.*?.m3u8)</', $html, $urls);
    $urls = $urls[1];

    $res = array();
    foreach ($urls as $url) {

        $tmp['title'] = explode('$', $url)[0];
        $tmp['url'] = PLAYER . base64_encode(explode('$', $url)[1] . '|' . $tmp['title'] . '_' . $title);
        $res[] = $tmp;
    }
    return echores($res);
}

if (isset($_SERVER['HTTP_REFERER'])) {
    if (stripos($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST']) === false) {
        echo echores($res = "禁止盗用API", $code = 500);
        exit;
    }
} else {
    echo echores($res = "禁止直接访问!", $code = 500);
    exit;
}

if (isset($_GET['do']) && isset($_GET['v'])) {
    $do = trim($_GET['do']);
    $v = trim($_GET['v']);
    switch ($do) {
        case "get":
            if ($keyword = filter($_GET['v'])) {
                echo get_movie($keyword);
            } else {
                echo echores($res = "不明白的姿势", $code = 500);
                exit;
            }
            break;
        case "play":
            echo play($v, trim($_GET['title']));
            break;
        default:
            echo echores($res = "不明白的姿势", $code = 500);
            exit;
    }
} else {
    echo echores($res = "禁止直接访问!", $code = 500);
    exit;
}
