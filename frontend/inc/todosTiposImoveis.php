<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarTiposImoveisDisponiveis',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'chave: wSK7Jlc7sQfuJ5Gx8/3v61ce5zEqL2vNNzZ8cHert2E='
  ),
));

$responseTiposImoveis = json_decode(curl_exec($curl));

curl_close($curl);


foreach ($responseTiposImoveis->lista as $lista) {
    echo "<button type='button' data-filter='.tipo-$lista->codigo'>$lista->nome</button>";
};
  
  ?>