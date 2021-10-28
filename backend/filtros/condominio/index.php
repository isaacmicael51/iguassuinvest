<?php 
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros=%7B%22finalidade%22:%222%22,%22numeroPagina%22:%221%22,%22numeroRegistros%22:%2220%22,%22ordenacao%22:%22valorasc%22,%20%22codigocondominio%22:%22101%22%7D',
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

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
