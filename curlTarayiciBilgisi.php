<?php

//echo $_SERVER['HTTP_USER_AGENT']; browser bilgisi alma;

$browser = $_SERVER['HTTP_USER_AGENT'];

$curl = curl_init();
curl_setopt($curl,CURLOPT_USERAGENT,$browser);
curl_setopt($curl,CURLOPT_REFERER,"http://www.google.com");
curl_setopt($curl,CURLOPT_TIMEOUT,0);
curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, "https://www.trendyol.com/");
$data = curl_exec($curl);
curl_close($curl);
echo $data;