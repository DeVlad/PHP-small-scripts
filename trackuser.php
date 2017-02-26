<?php
// Log user agent and save data to log file
$referred = '';
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$path =  $_SERVER['REQUEST_URI'];
$referrer = $_SERVER['HTTP_REFERER'];

if ($referred = '') {
  $referrer = "NO";
}
$data = $ip . '|' . $browser . '|' . $referrer . '|' . $path . '|' . date("d-m-Y h:i") .PHP_EOL;

file_put_contents("track.log",$data ,FILE_APPEND);