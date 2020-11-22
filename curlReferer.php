<?php

$curl = curl_init();
curl_setopt($curl,CURLOPT_TIMEOUT,0);
curl_setopt($curl,CURLOPT_REFERER,"https://www.google.com/");
curl_setopt($curl , CURLOPT_URL,"https://www.trendyol.com/butik/liste/erkek");
curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$data = curl_exec($curl);

curl_close($curl);
echo $data;