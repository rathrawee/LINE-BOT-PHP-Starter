<?php
$access_token = '2/2pH5VW3ug1FalmM9cw8GxR8vNZ/OuaywBlMWM2JgB/l

+fhClbRI8UVVrtuUKrI8AIAoVDx7VUqr4Z5Ep21JFd3MQbeddh2Fb63oj

+r2fDEnRdMKQZ/LaFkSz2FXQy4zWGCJqmvbjUOYQUrJW3EVwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('U27fc888c4fd40c38e98dd576f9cd53e3' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
