<?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarCidadesDisponiveis',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'chave: sua_chave_aqui'
      ),
    ));

    $responseCidades = curl_exec($curl);
    $responseCidades = json_decode(curl_exec($curl));
  

    curl_close($curl);

