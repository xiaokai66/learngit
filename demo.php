<?php
/**
 * Created by PhpStorm.
 * User: 在乎
 * Date: 2016/8/15
 * Time: 8:55
 */
header('content-type:text/html;charset=utf-8');
$name=$_POST['name'];
$url="http://tts.baidu.com/text2audio?lan=zh&ie=UTF-8&spd=2&text=$name";
echo $url;