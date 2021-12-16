<?php
    require './backend/chave.php';
// get todos os imoveis
$chImoveisHome= curl_init();

    curl_setopt_array($chImoveisHome, array(
      CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros={"finalidade":"2","numeroPagina":"1","numeroRegistros":"8","ordenacao":"valorasc","destaque":"3"}',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'chave:', $chave
      ),
    ));

    $responseImoveisHome = curl_exec($chImoveisHome);
    $responseImoveisHome = json_decode(curl_exec($chImoveisHome));



    curl_close($chImoveisHome);


