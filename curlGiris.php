<?php
//file_put_contents("logo.png",$data); //Resim indirme işlemi

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,"https://www.webyazilimyaptir.com/wp-content/uploads/2020/09/Basliksiz-6.png");
curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);
$data =  curl_exec($curl);
curl_close($curl);





?>