<?php
$bilgi = "kuladisifre";
$useragent = $_SERVER['HTTP_USER_AGENT'];

$curl = curl_init();
curl_setopt($curl,CURLOPT_USERAGENT,$useragent);
curl_setopt($curl,CURLOPT_USERPWD,$bilgi);
curl_setopt($curl,CURLOPT_REFERER,"url");
curl_setopt($curl,CURLOPT_URL, "url");
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);

$data = curl_exec($curl);
curl_close($curl);

echo $data;
