<?php

$curl = curl_init();
$dosya = fopen("logo.png","w");
curl_setopt($curl,CURLOPT_TIMEOUT,0);
curl_setopt($curl, CURLOPT_URL,"https://www.webyazilimyaptir.com/wp-content/uploads/2020/09/Basliksiz-6.png");
curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);
curl_setopt($curl,CURLOPT_FILE,$dosya);


curl_exec($curl);
curl_close($curl);