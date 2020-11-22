<?php

$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,"http://metgedemo.site/ip.php");
curl_setopt($curl,CURLOPT_PROXY,"170.140.119.70");
curl_setopt($curl,CURLOPT_PROXYPORT,3124);
curl_exec($curl);
curl_close($curl);
