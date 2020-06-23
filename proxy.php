<?php
$url = 'https://api.verbix.com/finder/json/a3b9a949-b39a-11ea-8527-e237142b3bef/v2/spa/' . $_GET['search-word'];

function url_get_contents($url) {
    if (!function_exists('curl_init')) {
        die('The cURL library is not installed.');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

echo json_encode(url_get_contents($url));
