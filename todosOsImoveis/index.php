

<?php
require '../backend/imoveisDisponiveis/imoveisDisponiveis.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos os imoveis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php include '../inc/scripts-includes.php';?>
</head>
<body>     
    <?php include '../inc/header.php'; ?>
    

<?php
        echo "<div class='container container-todos-imoveis'>";
        include '../inc/filtroConsulta.php';

        echo "<button type='button' data-filter='all'>All</button>";
        foreach ($responseTipos->lista as $lista) {
        echo "<button type='button' data-filter='.tipo-$lista->codigo'>$lista->nome</button>";
        }
       
       
        echo "<div class='row'>";

        foreach ($responseTodosOsImoveis->lista as $lista) {

            echo "<div class='mix tipo-$lista->codigotipo col-4 mt-4 padding-0  ' data-order='1'>";
            echo "  <div class='card-imoveis'>";
            echo "       <div class='card-imoveis_img__top' style='background-image:url($lista->urlfotoprincipal);'></div>";
            echo "           <div class='card-imoveis_body'>";
            echo "                <h3 class='card-imoveis_card__title'>". mb_strimwidth($lista->fotos[0]->descricao, 0, 39) . "</h5>";
            echo "                     <div class='card-imoveis_text'>";
            echo "                           <p>" . $lista->cidade . "   <img src='../assets/icons/icon-location-on.svg' class='img-responsive card-imoveis_icon__ubication'>" . mb_strimwidth($lista->endereco, 0 , 20) . "</p>";
            echo "                            <p><img src='../assets/icons/icon-shower.svg' class='card-imoveis_icon__left img-responsive'>" .$lista->numerobanhos . " banheiros <img src='../assets/icons/icon-shower.svg' class='card-imoveis_icon__shower img-responsive'>" .$lista->numerosuites . " suites <img src='../assets/icons/icon-bed.svg' class='card-imoveis_icon__bed img-responsive'>" .$lista->numeroquartos . " quartos</p>";
            echo "                            <p><img src='../assets/icons/icon-car.svg' class='card-imoveis_icon__left img-responsive'>" .$lista->numerovagas . " vagas <img src='../assets/icons/icon-area-2.svg' class='card-imoveis_icon__shower img-responsive'>" .$lista->areaexterna . " m²  de lote <img src='../assets/icons/icon-area-2.svg' class='card-imoveis_icon__bed img-responsive'>" .$lista->areainterna . " m² construção</p>";
            echo "                      </div>";
            echo "                      <div class='d-flex justify-content-between'>";
            echo "                          <button class='button-more_info'>mais detalhes</button>";
            echo "                          <a href='https://api.whatsapp.com/send?phone=5545998171516&text=Ol%C3%A1,%20tenho%20interesse%20neste%20im%C3%B3vel,%20c%C3%B3digo%20776%20Aguardo%20breve%20o%20contato.%20Obrigado!.' class='button-more_agend'>agendar visita</a>";
            echo "                      </div>";
            echo "           </div>";
            echo "    </div>";
            echo "</div>";
            
        }
        echo "</div>";

        echo "";
        echo "</div>";


                $quantidade = $responseTodosOsImoveis->quantidade;
                $totalDePaginas = $quantidade / 20;    
                $nPage =  1;
            ?>
        <div class="col-12 ">
            <ul class="pagination ">
            <?php while($nPage < $totalDePaginas){
                    echo "<li class='page-item'><a class='page-link' href='index.php?cidade=1&pagina=" . $nPage .  "'>" . (int)  $nPage . "</a></li>";
                    $nPage ++;
                }?>
            </ul>
        </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../assets/js/mixitup/dist/mixitup.min.js"></script>
<script src="../assets/js/mixitup/dist/mixitup-multifilter.min.js"></script>
<script>
var mixer = mixitup('.container-todos-imoveis');
var mixer = mixitup(containerEl, {
    multifilter: {
        enable: true // enable the multifilter extension for the mixer
    }
});

</script>
</body>
</html>