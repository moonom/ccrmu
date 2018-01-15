<?php
$access_token = 'kviNL8ceO4bixahQSxtBvpo4qFnYTPvfCj4Et0Q2uVbAA6X4gbPueIsM+yqUBMp2oNwSv0vo6uBL1LJ6/UOhAkFLKVDOO5xbHX95l0MQaOSKnTZLawbGTVblVgifW0dJUzf1Ltha61FU2tElxIkCSAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;