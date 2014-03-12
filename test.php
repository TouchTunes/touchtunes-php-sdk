<?php
// Important - Be sure to add your TouchTunes API key to api.php 
include "lib/api.php";

$api = new api();

// Sample API Calls
// echo $api->now_playing("783530");
// echo $api->locate("30.267153", "-97.743061","10");
echo $api->songid_search("95373901");
// echo $api->keyword_search("Van Halen");
?>