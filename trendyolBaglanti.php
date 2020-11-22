<?php



    $site = "https://www.trendyol.com/lc-waikiki/elbise-p-51033702?boutiqueId=533989&merchantId=4171";

    $ch = curl_init();
    $hc = "YahooSeeker-Testing/v3.9 (compatible; Mozilla 4.0; MSIE 5.5; Yahoo! Search - Web Search)";
    curl_setopt($ch, CURLOPT_REFERER, 'http://www.google.com');
    curl_setopt($ch, CURLOPT_URL, $site);
    curl_setopt($ch, CURLOPT_USERAGENT, $hc);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $site = curl_exec($ch);
    curl_close($ch);

    preg_match_all('@<span class="prc-slg">(.*?)</span>@si',$site,$urunfiyat);
    preg_match_all('@<h1 class="pr-new-br">(.*?)</span>@si',$site,$urunadi);

    echo "<pre>";
    echo "Ürün Adı"," : ",$urunadi[1][0];
    echo "<br>";
    echo "Ürün Fiyatı"," : ",$urunfiyat[1][0];
    echo "</pre>";


