

<?php

function baglan($url,$userInfo){
    $curl = curl_init();
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION,true);
    curl_setopt($curl, CURLOPT_POST,true);
    curl_setopt($curl,CURLOPT_POSTFIELDS,$userInfo);
    curl_setopt($curl,CURLOPT_COOKIEJAR,"cookie.txt");
    curl_setopt($curl,CURLOPT_COOKIEFILE,"cookie.txt");
    curl_exec($curl);
    curl_close($curl);
}



echo baglan($url,$userinfo);
