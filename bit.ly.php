<?php 

$ch = curl_init('http://api.bitly.com/v3/shorten?login=USERNAME&apiKey=KEY&longUrl=http://www.svnlabs.com');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
$result = curl_exec($ch);
print_r(json_decode($result));

?>