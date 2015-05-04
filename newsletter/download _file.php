<?php
$targetPath = 'tmp/';
$filename = $targetPath . 'tmpfile';
$headerBuff = fopen('tmp/headers', 'w+');
$fileTarget = fopen($filename, 'w');

$ch = curl_init('http://www.example.com/');
curl_setopt($ch, CURLOPT_WRITEHEADER, $headerBuff);
curl_setopt($ch, CURLOPT_FILE, $fileTarget);
curl_exec($ch);

if(!curl_errno($ch)) {
  rewind($headerBuff);
  $headers = stream_get_contents($headerBuff);
  if(preg_match('/Content-Disposition: .*filename=([^ ]+)/', $headers, $matches)) {
    rename($filename, $targetPath . $matches[1]);
  }
}
curl_close($ch);