<?php
// include '../backend/chave.php';
$cidade = $_GET['cidade'];
if ($cidade == null || ''){
  $cidade = 1;
}

echo "cidade aqui" . $cidade;



$chTipos   = curl_init();
$chCidades = curl_init();
$chCondominios = curl_init();
// $ch4 = curl_init();
// $ch5 = curl_init();


    curl_setopt_array($chTipos, array(
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
        ) ,
    ));

    curl_setopt_array($chCidades, array(
        CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarCidadesDisponiveis',
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


    // curl_setopt_array($ch4, array(
    //     CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros={"finalidade":"4","numeroPagina":"2","numeroRegistros":"20","retornarRange":"true"}',
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_ENCODING => '',
    //     CURLOPT_MAXREDIRS => 10,
    //     CURLOPT_TIMEOUT => 0,
    //     CURLOPT_FOLLOWLOCATION => true,
    //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //     CURLOPT_CUSTOMREQUEST => 'GET',

    //     CURLOPT_HTTPHEADER => array(
    //         'chave', $chave
    //     ) , 
    // ));


    // curl_setopt_array($ch5, array(
    //     CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros={"finalidade":"5","numeroPagina":"2","numeroRegistros":"20","retornarRange":"true"}',
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_ENCODING => '',
    //     CURLOPT_MAXREDIRS => 10,
    //     CURLOPT_TIMEOUT => 0,
    //     CURLOPT_FOLLOWLOCATION => true,
    //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //     CURLOPT_CUSTOMREQUEST => 'GET',

    //     CURLOPT_HTTPHEADER => array(
    //         'chave', $chave
    //     ) , 
    // ));





    //create the multiple cURL handle
    $mh = curl_multi_init();

    //add the two handles
    curl_multi_add_handle($mh, $chTipos);
    curl_multi_add_handle($mh, $chCidades);
    curl_multi_add_handle($mh, $chCondominios);
    // curl_multi_add_handle($mh, $ch4);
    // curl_multi_add_handle($mh, $ch5);

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
    curl_multi_remove_handle($mh, $chTipos);
    curl_multi_remove_handle($mh, $chCidades);
    curl_multi_remove_handle($mh, $chCondominios);
    // curl_multi_remove_handle($mh, $ch4);
    // curl_multi_remove_handle($mh, $ch5);
    curl_multi_close($mh);

    // all of our requests are done, we can now access the results
    $responseTipos   = json_decode(curl_multi_getcontent($chTipos));
    $responseCidades = json_decode(curl_multi_getcontent($chCidades));
    $responseCondominios = json_decode(curl_multi_getcontent($chCondominios));
    // $response_4 = curl_multi_getcontent($ch4);
    // $response_5 = curl_multi_getcontent($ch5);





echo "<form role='form' action='index.php' method='get'>";
 
  echo "<select name='cidade' id='cidade'>";
  echo "<option value=''>Selecione a cidade</option>";
    foreach ($responseCidades->lista as $lista) {
      echo "<option value='$lista->codigo'>$lista->nome</option>";
    };
  echo "</select>";
  
  echo "<select name='tipoImovel' id='tipos'>";
  echo "<option value=''>Selecione o tipo de imóvel</option>";
    foreach ($responseTipos->lista as $lista) {
      echo "<option value='$lista->codigo'>$lista->nome</option>";
    };
  echo "</select>";

  echo "<select name='condominio' id='cidade'>";
  echo "<option>Selecione o condominio</option>";
    foreach ($responseCondominios->lista as $lista) {
      echo "<option value='$lista->codigo'>$lista->nome</option>";
    };
  echo "</select>";
  echo "<button>pesquisar</button>";
  echo "</form>";
  
  ?>

