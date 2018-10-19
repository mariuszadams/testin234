<?php header('Location: http://lmgtfy.com/?iie=1&q=docker') ?>

<?php
$handle = curl_init();
 
$url = "https://www.google.com";
 
// Set the url
curl_setopt($handle, CURLOPT_URL, $url);
// Set the result output to be a string.
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
 
$output = curl_exec($handle);
 
curl_close($handle);
 
echo $output;
?>
