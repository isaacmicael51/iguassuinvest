
<?php require './backend/imoveisHome/imoveisHome.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iguassu Invest</title>
    <?php include './inc/scripts-include.php'; ?>
        <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>

    
</head>
<body>     
     <?php include './inc/header.php'; ?> 
    
    <div class="hero"></div>

    <div class="container">
            <div class="carousel-1" data-flickity='{ "groupCells": true, "prevNextButtons": false, "pageDots": false, "freeScroll": true}'>
                <?php foreach ($responseImoveisHome->lista as $lista) {
                    echo "<div class='carousel-cell tipo-$lista->codigotipo'>";
                    echo "  <div class='card-imoveis '>";
                    echo "       <div class='card-imoveis_img__top' style='background-image:url($lista->urlfotoprincipal);'></div>";
                    echo "           <div class='card-imoveis_body'>";
                    echo "                <h3 class='card-imoveis_card__title'>". mb_strimwidth($lista->fotos[0]->descricao, 0, 39) . "</h5>";
                    echo "                     <div class='card-imoveis_text'>";
                    echo "                           <p>" . $lista->cidade . "   <img src='./assets/icons/icon-location-on.svg' class='img-responsive card-imoveis_icon__ubication'>" . mb_strimwidth($lista->endereco, 0 , 20) . "</p>";
                    echo "                            <p><img src='./assets/icons/icon-shower.svg' class='card-imoveis_icon__left img-responsive'>" .$lista->numerobanhos . " banheiros <img src='./assets/icons/icon-shower.svg' class='card-imoveis_icon__shower img-responsive'>" .$lista->numerosuites . " suites <img src='./assets/icons/icon-bed.svg' class='card-imoveis_icon__bed img-responsive'>" .$lista->numeroquartos . " quartos</p>";
                    echo "                            <p><img src='./assets/icons/icon-car.svg' class='card-imoveis_icon__left img-responsive'>" .$lista->numerovagas . " vagas <img src='./assets/icons/icon-area-2.svg' class='card-imoveis_icon__shower img-responsive'>" .$lista->areaexterna . " m²  de lote <img src='./assets/icons/icon-area-2.svg' class='card-imoveis_icon__bed img-responsive'>" .$lista->areainterna . " m² construção</p>";
                    echo "                      </div>";
                    echo "                      <div class='d-flex justify-content-between'>";
                    echo "                          <button class='button-more_info'>mais detalhes</button>";
                    echo "                          <a href='https://api.whatsapp.com/send?phone=5545998171516&text=Ol%C3%A1,%20tenho%20interesse%20neste%20im%C3%B3vel,%20c%C3%B3digo%20776%20Aguardo%20breve%20o%20contato.%20Obrigado!.' class='button-more_agend'>agendar visita</a>";
                    echo "                      </div>";
                    echo "            </div>";
                    echo "  </div>";
                    echo "</div>";
                    
                }?>
            </div>
    </div>    



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>

</script>
</body>
</html>