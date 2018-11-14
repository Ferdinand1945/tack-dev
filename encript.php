<?php

function decryptStringArray ($stringArray, $key = "Your secret salt thingie")
{
    $s = unserialize(rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode(strtr($stringArray, '-_,', '+/=')), MCRYPT_MODE_CBC, md5(md5($key))), "\0"));
    return $s;
}

function encryptStringArray ($stringArray, $key = "Your secret salt thingie")
{
    $s = strtr(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), serialize($stringArray), MCRYPT_MODE_CBC, md5(md5($key)))), '+/=', '-_,');
    return $s;
}

function prepareUrl($url, $key = "Your secret salt thingie")
{
    $url = explode("?",$url,2);
    if(sizeof($url) <= 1)
        return $url;
    else
        return $url[0]."?params=".encryptStringArray($url[1],$key);
}

function setGET($params,$key = "Your secret salt thingie")
{
    $params = decryptStringArray($params,$key);
    $param_pairs = explode('&',$params);
    foreach($param_pairs as $pair)
    {
        $split_pair = explode('=',$pair);
        $_GET[$split_pair[0]] = $split_pair[1];
    }
}

?>
