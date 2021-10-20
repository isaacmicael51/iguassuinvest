<?php

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros={"finalidade":"2","numeroPagina":"5","numeroRegistros":"20","ordenacao":"valorasc"}',
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

$response = json_decode(curl_exec($curl));

curl_close($curl);

echo '<pre>'; 
print_r($response); 
echo '</pre>';



echo "<div class='container'>";
echo "<div class='row'>";
foreach ($response->lista as $lista) {

    echo "<div class='col-4 mt-4'>";
    echo "  <div class='card' style='width: 18rem;'>";
    echo "       <img src='" . $lista->urlfotoprincipal . "' class='card-img-top' alt='...'>";
    echo "           <div class='card-body'>";
    echo "                <h5 class='card-title'>". $lista->titulo . "</h5>";
    echo "                <p class='card-text'>" . mb_strimwidth($lista->descricao, 0, 160) . ' ...' ."</p>";
    echo "                <a href='#' class='btn btn-primary'>" . $lista->valor . "</a>";
    echo "           </div>";
    echo "    </div>";
    echo "</div>";
    
}
echo "</div>";
echo "</div>";
    
    echo "<hr>";
?>