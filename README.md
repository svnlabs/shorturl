bit.ly.php

<?php 

$ch = curl_init('http://api.bitly.com/v3/shorten?login=USERNAME&apiKey=KEY&longUrl=http://www.svnlabs.com');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
$result = curl_exec($ch);
print_r(json_decode($result));

?>


=========================================================================================


goo.gl.php

<?php

// This is the URL you want to shorten
$longUrl = 'http://www.svnlabs.com/';

// Get API key from : http://code.google.com/apis/console/
$apiKey = 'KEY';

$postData = array('longUrl' => $longUrl, 'key' => $apiKey);
$jsonData = json_encode($postData);

$curlObj = curl_init();

curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url');
curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curlObj, CURLOPT_HEADER, 0);
curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
curl_setopt($curlObj, CURLOPT_POST, 1);
curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);

$response = curl_exec($curlObj);

// Change the response json string to object
$json = json_decode($response);

curl_close($curlObj);

echo 'Shortened URL is: '.$json->id;

//$shortLink = get_object_vars($json);
//echo "Shortened URL is: ".$shortLink['id'];

?>


=========================================================================================


tinyurl.php


<?php
function createTinyUrl($strURL) {
    $tinyurl = file_get_contents("http://tinyurl.com/api-create.php?url=" . $strURL);
    return $tinyurl;
}

echo(createTinyUrl('http://www.svnlabs.com/'));

?>
