<?php
$cidade = 1;
$chCondominios = curl_init();

curl_setopt_array($chCondominios, array(
  CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarCondominiosDisponiveis?parametros={"codigocidade":"' . $cidade . '"}',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',

  CURLOPT_HTTPHEADER => array(
    'chave: wSK7Jlc7sQfuJ5Gx8/3v61ce5zEqL2vNNzZ8cHert2E='
  ) , 
));

$response = curl_exec($chCondominios);

curl_close($chCondominios);
echo $response;

