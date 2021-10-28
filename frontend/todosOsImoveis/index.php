 
<?php
$cidade = $_GET['cidade'];
$tipoImovel = $_GET['tipoImovel'];


$curl = curl_init();
$url = 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros={"finalidade":"2","numeroPagina":"5","numeroRegistros":"20","retornarRange":"true"}';
// $url = 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros={"finalidade":"2","numeroPagina":"5","numeroRegistros":"20","retornarRange":"true","codigocidade":' . $cidade . ',"codigoTipo":' . $tipoImovel . '}';

// echo $url;

curl_setopt_array($curl, array (
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',



CURLOPT_HTTPHEADER => array (
    'chave: sua_chave_aqui'
    ),
));

$response = json_decode(curl_exec($curl));


// var_dump($response);

curl_close($curl);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos os imoveis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .card-imoveis {
            width: 100%;
            height: 420px;
            border-radius: 16px;
            border: 1px solid #EBEBEB;
        }
        .card-imoveis_body {
            padding: 16px
        }
        .card-imoveis_img__top {
            height: 200px;
            background-size: cover;
            border-radius: 16px 16px 0 0;    
        }

        .card-imoveis_card__text , p{
            font-family: Interop;
            font-weight: 500;
            font-size: 13px;
            text-align: left;
            color: #a2a2a2;
        }
        .card-imoveis_icon__ubication {
            padding: 0 4px 4px 10px;
        }
        .card-imoveis_icon__shower {
            padding: 0 4px 4px 10px;
        }
        .card-imoveis_icon__left{
            padding: 0 4px 4px 0;
        }
        .card-imoveis_icon__bed {
            padding: 0 4px 0px 10px;
        }
        .card-imoveis_card__title {
            font-size: 1em;    
        }
        .action-buttons {
            /* display: inline-flex; */
            margin: 8px 16px;
        }
        .button-more_info {
            height: 33px;
            background: #fff;
            border: 1px solid #e2e2e2;
            border-radius: 8px;
            padding: 0 22px;
            margin: 0 8px 0 0;
            width: 50%;

        }
        .button-more_agend {
            height: 33px;
            border-radius: 8px;
            background: #ff385c;
            border: 1px solid #ff385c;
            color: #fff;
            padding: 0 22px;
            margin: 0 0 0 8px;
            width: 50%
        }
      
    </style>
</head>
<body>
   

     
<?php
        echo "<div class='container'>";
        echo "<button type='button' data-filter='all'>All</button>";
        // echo "<button type='button' data-filter='.tipo-25'>Area</button>";
        echo "<button type='button' data-filter='.tipo-2'>Apartamentos</button>";
        echo "<button type='button' data-filter='.tipo-23'>Casas em condominios</button>";
        // echo "<button type='button' data-filter='.tipo-16'>Chácara</button>";
        echo "<div class='row'>";
       
        foreach ($response->lista as $lista) {

            echo "<div class='col-4 mt-4 padding-0 mix  tipo-$lista->codigotipo' data-order='1'>";
            echo "  <div class='card-imoveis'>";
            echo "       <div class='card-imoveis_img__top' style='background-image:url($lista->urlfotoprincipal);'></div>";
            echo "           <div class='card-imoveis_body'>";
            echo "                <h3 class='card-imoveis_card__title'>". mb_strimwidth($lista->fotos[0]->descricao, 0, 39) . "</h5>";
            echo "                     <div class='card-imoveis_text'>";
            echo "                           <p>" . $lista->cidade . "   <img src='../assets/icons/icon-location-on.svg' class='img-responsive card-imoveis_icon__ubication'>" . $lista->endereco . "</p>";
            echo "                            <p><img src='../assets/icons/icon-shower.svg' class='card-imoveis_icon__left img-responsive'>" .$lista->numerobanhos . " banheiros <img src='../assets/icons/icon-shower.svg' class='card-imoveis_icon__shower img-responsive'>" .$lista->numerosuites . " suites <img src='../assets/icons/icon-bed.svg' class='card-imoveis_icon__bed img-responsive'>" .$lista->numeroquartos . " quartos</p>";
            echo "                            <p><img src='../assets/icons/icon-car.svg' class='card-imoveis_icon__left img-responsive'>" .$lista->numerovagas . " vagas <img src='../assets/icons/icon-area-2.svg' class='card-imoveis_icon__shower img-responsive'>" .$lista->areaexterna . " m²  de lote <img src='../assets/icons/icon-area-2.svg' class='card-imoveis_icon__bed img-responsive'>" .$lista->areainterna . " m² construção</p>";
            echo "                      </div>";
            echo "                      <div class='d-flex justify-content-between'>";
            echo "                          <button class='button-more_info'>mais detalhes</button>";
            echo "                          <button class='button-more_agend'>agendar visita</button>";
            echo "                      </div>";
            echo "           </div>";
            echo "    </div>";
            echo "</div>";
            
        }
        echo "</div>";
        echo "</div>";
            
            echo "<hr>";
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../assets/js/mixitup/dist/mixitup.min.js"></script>
<script>
    var mixer = mixitup('.container');

</script>
</body>
</html>