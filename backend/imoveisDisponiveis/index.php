<?php
require '../../backend/chave.php';

// $cidade = $_GET['cidade'];
// $tipoImovel = $_GET['tipoImovel'];
// create both cURL resources
$ch1 = curl_init();
$ch2 = curl_init();
$ch3 = curl_init();
$ch4 = curl_init();
$ch5 = curl_init();


    curl_setopt_array($ch1, array(
        CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros={"finalidade":"2","numeroPagina":"1","numeroRegistros":"20","retornarRange":"true"}',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',

        CURLOPT_HTTPHEADER => array(
            'chave', $chave
        ) ,
    ));

    curl_setopt_array($ch2, array(
        CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros={"finalidade":"2","numeroPagina":"2","numeroRegistros":"20","retornarRange":"true"}',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',

        CURLOPT_HTTPHEADER => array(
            'chave', $chave
        ) , 
    ));

    curl_setopt_array($ch3, array(
        CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros={"finalidade":"3","numeroPagina":"2","numeroRegistros":"20","retornarRange":"true"}',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',

        CURLOPT_HTTPHEADER => array(
            'chave', $chave
        ) , 
    ));


    curl_setopt_array($ch4, array(
        CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros={"finalidade":"4","numeroPagina":"2","numeroRegistros":"20","retornarRange":"true"}',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',

        CURLOPT_HTTPHEADER => array(
            'chave', $chave
        ) , 
    ));


    curl_setopt_array($ch5, array(
        CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros={"finalidade":"5","numeroPagina":"2","numeroRegistros":"20","retornarRange":"true"}',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',

        CURLOPT_HTTPHEADER => array(
            'chave', $chave
        ) , 
    ));





    //create the multiple cURL handle
    $mh = curl_multi_init();

    //add the two handles
    curl_multi_add_handle($mh, $ch1);
    curl_multi_add_handle($mh, $ch2);
    curl_multi_add_handle($mh, $ch3);
    curl_multi_add_handle($mh, $ch4);
    curl_multi_add_handle($mh, $ch5);

    //execute the multi handle
    do
    {
        $status = curl_multi_exec($mh, $active);
        if ($active)
        {
            curl_multi_select($mh);
        }
    }
    while ($active && $status == CURLM_OK);

    //close the handles
    curl_multi_remove_handle($mh, $ch1);
    curl_multi_remove_handle($mh, $ch2);
    curl_multi_remove_handle($mh, $ch3);
    curl_multi_remove_handle($mh, $ch4);
    curl_multi_remove_handle($mh, $ch5);
    curl_multi_close($mh);
 
    // all of our requests are done, we can now access the results
    $response_1 = curl_multi_getcontent($ch1);
    $response_2 = curl_multi_getcontent($ch2);
    $response_3 = curl_multi_getcontent($ch3);
    $response_4 = curl_multi_getcontent($ch4);
    $response_5 = curl_multi_getcontent($ch5);

    // $full_response = $response_1 . $response_2 ;

    // $full_response = json_decode($full_response);

    $full_response = json_encode(array_merge(json_decode($response_1, true),json_decode($response_2, true)));


    // var_dump($full_response);


    // echo $full_response;

    curl_close($ch1);
    curl_close($ch2);
    curl_close($ch3);
    curl_close($ch4);
    curl_close($ch5);

