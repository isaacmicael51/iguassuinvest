<!-- finalidade: OBRIGATÓRIO - Enviar 1 para ALUGUEL ou 2 para VENDA
destinacao: OPCIONAL - Enviar 1 para Residencial, 2 para Comercial, 3 para Residencial e comercial, 4 para industrial, 5 para rural, 6 para temporada, 7 para corporativa, 8 para comercial e industrial ou 0 para todos
codigounidade: OPCIONAL - Enviar código da unidade ou vazio para todas
codigocondominio: OPCIONAL - Enviar o código do condomínio (lista de condomínios em Imovel/RetornarCondominiosDisponiveis) ou 0 para todos
codigoproprietario: OPCIONAL - Enviar o código do proprietário (lista autocomplete de pessoas em Cliente/App_PesquisarCliente) ou 0 para todos
codigocaptador: OPCIONAL - Enviar o código do captador (lista autocomplete de usuários em Usuario/App_RetornarUsuarios) ou 0 para todos
codigosimoveis: OPCIONAL - Enviar os códigos dos imóveis separados por vírgula (,) ou vazio para todos
codigoTipo: OPCIONAL - Enviar o código do tipo de imóvel selecionado de acordo com a lista existente (RetornarTiposImoveisDisponiveis), para mais de um tipo, separar por vírgula (,) ou vazio para todos
estado: OPCIONAL - Enviar a sigla do estado selecionado de acordo com a lista existente (RetornarEstadosDisponiveis) ou vazio para todos
codigocidade: OPCIONAL - Enviar o código da cidade selecionada de acordo com a lista existente (RetornarCidadesDisponiveis) ou 0 para todos
codigoregiao: OPCIONAL - Enviar o código da região selecionada de acordo com a lista existente (RetornarRegioesDisponiveis) ou 0 para todos
codigosbairros: OPCIONAL - Enviar os códigos dos bairros selecionados de acordo com a lista existente (RetornarBairrosDisponiveis) separados por vírgula (,) ou vazio para todos
endereco: OPCIONAL - Enviar parte do logradouro do endereço ou vazio para todos
edificio: OPCIONAL - Enviar parte do edifício/torre ou vazio para todos
numeroquartos: OPCIONAL - Enviar nº de quartos a partir, 0 para todos ou negativo para exato
numerovagas: OPCIONAL - Enviar nº de vagas a partir, 0 para todos ou negativo para exato
numerobanhos: OPCIONAL - Enviar nº de banheiros a partir, 0 para todos ou negativo para exato
numerosuite: OPCIONAL - Enviar nº de suítes a partir, 0 para todos ou negativo para exato
numerovaranda: OPCIONAL - Enviar nº de varandas a partir, 0 para todos
numeroelevador: OPCIONAL - Enviar nº de elevadores a partir, 0 para todos
valorde: OPCIONAL - Enviar valor a partir, 0 para todos
valorate: OPCIONAL - Enviar valor até, 0 para todos
areade: OPCIONAL - Enviar área interna a partir, 0 para todos
areaate: OPCIONAL - Enviar área interna até, 0 para todos
areaexternade: OPCIONAL - Enviar área externa a partir, 0 para todos
areaexternaate: OPCIONAL - Enviar área externa até, 0 para todos
extras: OPCIONAL - Enviar código gerado no CRM para o campo extra, separados por vírgula (,) ou vazio para não filtrar
academia: OPCIONAL - Enviar true ou false
aceitafinanciamento: OPCIONAL - Enviar true ou false
aceitapermuta: OPCIONAL - Enviar true ou false
alarme: OPCIONAL - Enviar true ou false
arealazer: OPCIONAL - Enviar true ou false
areaprivativa: OPCIONAL - Enviar true ou false
areaservico: OPCIONAL - Enviar true ou false
boxbanheiro: OPCIONAL - Enviar true ou false
boxDespejo: OPCIONAL - Enviar true ou false
churrasqueira: OPCIONAL - Enviar true ou false
circuitotv: OPCIONAL - Enviar true ou false
closet: OPCIONAL - Enviar true ou false
dce: OPCIONAL - Enviar true ou false
exclusivo: OPCIONAL - Enviar true ou false
interfone: OPCIONAL - Enviar true ou false
jardim: OPCIONAL - Enviar true ou false
lavabo: OPCIONAL - Enviar true ou false
mobiliado: OPCIONAL - Enviar true ou false
naplanta: OPCIONAL - Enviar true ou false
piscina: OPCIONAL - Enviar true ou false
playground: OPCIONAL - Enviar true ou false
portaoeletronico: OPCIONAL - Enviar true ou false
portaria24h: OPCIONAL - Enviar true ou false
quadraesportiva: OPCIONAL - Enviar true ou false
quadratenis salaofestas: OPCIONAL - Enviar true ou false
salaojogos: OPCIONAL - Enviar true ou false
sauna: OPCIONAL - Enviar true ou false
varanda: OPCIONAL - Enviar true ou false
wifi: OPCIONAL - Enviar true ou false
ocupado: OPCIONAL - Enviar true para imóveis ocupados, ou false para desocupado ou vazio para todos
alugado: OPCIONAL - Enviar true ou false
quartoqtdeexata: OPCIONAL - Enviar true ou false
vagaqtdexata: OPCIONAL - Enviar true ou false
datacadastroinicio: OPCIONAL - Enviar data no formato dd/mm/yyyy
datacadastrofim: OPCIONAL - Enviar data no formato dd/mm/yyyy
dataultimaalteracaoinicio: OPCIONAL - Enviar data no formato dd/mm/yyyy hh:mm:ss
dataultimaalteracaofim: OPCIONAL - Enviar data no formato dd/mm/yyyy hh:mm:ss
destaque: OPCIONAL - Enviar 1 para simples, 2 para destaque ou 3 para super destaque, 0 para todos
opcaoimovel: OPCIONAL - Enviar 1 para somente avulsos, 2 para somente lançamentos, 3 para unidades de lançamentos, 4 para avulsos e lançamentos mãe, 0 para todos (avulsos e lançamentos por tipo e m²)
retornomapa: OPCIONAL - Enviar true ou false, usado para exibir os imóveis no mapa (retorno com até 100 registros e JSON reduzido)
retornomapaapp: OPCIONAL - Enviar true ou false, usado para exibir os imóveis no mapa (retorno com até 100 registros e JSON reduzido)
numeropagina: OBRIGATÓRIO - Usado para paginação, enviar o nº da página atual
numeroregistros: OBRIGATÓRIO - Usado máximo de imóveis para retorno, máximo 20
ordenacao: OPCIONAL - Tipo de ordenação, codigoasc, codigodesc, valorasc, valordesc, dataatualizacaoasc, dataatualizacaodesc, datainclusaoasc, datainclusaodesc, datavagodesdeasc, datavagodesdedesc, destaque, areainternaasc, areainternadesc, areaexternaasc, areaexternadesc, arealoteasc, arealotedesc ou vazio para assumir destaque decrescente
exibircaptadores: OPCIONAL - Enviar true ou false
somentecomurlpublica: OPCIONAL - Enviar true ou fals -->


<?php
require '../backend/chave.php';
// pega os paramentros na url
$cidade = isset($_GET['cidade']);
$tipoImovel = isset($_GET['tipoImovel']);
// $codCondominio = isset($_GET['condominio']);
$pagina = isset($_GET["pagina"]);
if ($pagina == null || ''){
    $pagina = 1;
}



$chTipos   = curl_init();
$chCidades = curl_init();
// $chCondominios = curl_init();
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

    // curl_setopt_array($chCondominios, array(
    //     CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarCondominiosDisponiveis?parametros={"codigocidade":"' . $cidade . '"}',
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_ENCODING => '',
    //     CURLOPT_MAXREDIRS => 10,
    //     CURLOPT_TIMEOUT => 0,
    //     CURLOPT_FOLLOWLOCATION => true,
    //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //     CURLOPT_CUSTOMREQUEST => 'GET',

    //     CURLOPT_HTTPHEADER => array(
    //       'chave: wSK7Jlc7sQfuJ5Gx8/3v61ce5zEqL2vNNzZ8cHert2E='
    //     ) , 
    // ));


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
    // curl_multi_add_handle($mh, $chCondominios);
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
    // curl_multi_remove_handle($mh, $chCondominios);
    // curl_multi_remove_handle($mh, $ch4);
    // curl_multi_remove_handle($mh, $ch5);
    curl_multi_close($mh);

    // all of our requests are done, we can now access the results
    $responseTipos   = json_decode(curl_multi_getcontent($chTipos));
    $responseCidades = json_decode(curl_multi_getcontent($chCidades));
    // $responseCondominios = json_decode(curl_multi_getcontent($chCondominios));
    // $response_4 = curl_multi_getcontent($ch4);
    // $response_5 = curl_multi_getcontent($ch5);

    // var_dump($responseCidades);


// get todos os imoveis
$chTodosImoveis = curl_init();
$chTodosImoveis2 = curl_init();
$chTodosImoveis3 = curl_init();

    $url = 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros={"finalidade":"2","numeroPagina":"1","codigocidade":"' . $cidade  . '","numeroRegistros":"20","retornarRange":"true"}';
    curl_setopt_array($chTodosImoveis, array(
        CURLOPT_URL => $url,
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
    
    $url = 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros={"finalidade":"2","numeroPagina":"2","codigocidade":"' . $cidade  . '","numeroRegistros":"20","retornarRange":"true"}';
    curl_setopt_array($chTodosImoveis2, array(
        CURLOPT_URL => $url,
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

    $url = 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros={"finalidade":"2","numeroPagina":"3","codigocidade":"' . $cidade  . '","numeroRegistros":"20","retornarRange":"true"}';
    curl_setopt_array($chTodosImoveis3, array(
        CURLOPT_URL => $url,
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
    curl_multi_add_handle($mh, $chTodosImoveis);
    curl_multi_add_handle($mh, $chTodosImoveis2);
    curl_multi_add_handle($mh, $chTodosImoveis3);

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
    curl_multi_remove_handle($mh, $chTodosImoveis);
    curl_multi_remove_handle($mh, $chTodosImoveis2);
    curl_multi_remove_handle($mh, $chTodosImoveis3);

    curl_multi_close($mh);

    // all of our requests are done, we can now access the results
    $responseTodosOsImoveis   = json_decode(curl_multi_getcontent($chTodosImoveis));
    $responseTodosOsImoveis2 = json_decode(curl_multi_getcontent($chTodosImoveis2));
    $responseTodosOsImoveis3 = json_decode(curl_multi_getcontent($chTodosImoveis3));



    // var_dump($responseCidades);

 echo $url;
 $responseTodosOsImoveis = json_decode(curl_exec($chTodosImoveis));
 $responseTodosOsImoveis = json_decode(curl_exec($chTodosImoveis2));
 $responseTodosOsImoveis = json_decode(curl_exec($chTodosImoveis3));

 $obj_merged = (object) array_merge((array) $responseTodosOsImoveis, (array) $responseTodosOsImoveis2);

 curl_close($chTodosImoveis);
 curl_close($chTodosImoveis2);
 curl_close($chTodosImoveis3);

//  var_dump($obj_merged);
 
