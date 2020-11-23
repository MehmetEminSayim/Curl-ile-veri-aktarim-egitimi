<?php
$comment = "author=Mehmet+Emin&email=admin@admin.com&url=emin.com&comment=Bu bır curl deneme yorımıdır curl geldi&comment_post_ID=3024";

$curl = curl_init();
curl_setopt($curl,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
curl_setopt($curl,CURLOPT_URL,"posturl");
curl_setopt($curl,CURLOPT_REFERER,"http://www.google.com/");
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);
curl_setopt($curl,CURLOPT_POST,true);
curl_setopt($curl,CURLOPT_POSTFIELDS,$comment);
$data = curl_exec($curl);
curl_close($curl);

echo $data;


