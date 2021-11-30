<?php
$chCondominios = curl_init();

curl_setopt_array($chCondominios, array(
  CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarCondominiosDisponiveis',
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

$responseCondominios = curl_exec($chCondominios);

curl_close($chCondominios);
json_decode($responseCondominios);
// echo ($responseCondominios);

// foreach ($responseCondominios->lista as $lista) {
//   echo $lista->codigo;
// };