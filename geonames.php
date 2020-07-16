<?php
    $username = "fahim3";
    $handle = curl_init('http://api.geonames.org/countryInfoJSON?formatted=true&lang='. $_POST['lang'] .'&country=' . urlencode($_POST['postCountryCode']).'&username=' . urlencode($username) . '&style=full');
    
        curl_setopt($handle, CURLOPT_HTTPHEADER, array('Content-Type: text/plain; charset=UTF-8'));
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        $json_result = curl_exec($handle);
        echo json_encode($json_result, JSON_UNESCAPED_UNICODE);
?>