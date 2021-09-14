<?php
  $istemci = curl_init();
  curl_setopt($istemci, CURLOPT_URL, 'https://www.atv.com.tr/canli-yayin');
  curl_setopt($istemci, CURLOPT_RETURNTRANSFER, 1);
  $ham_veri = curl_exec($istemci);
  preg_match_all('#<div data-fb-disable-controls=(.*?)</div>#si'', $ham_veri, $satirlar);
  echo $satirlar;
?>

