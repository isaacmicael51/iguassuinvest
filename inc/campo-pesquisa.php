<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../assets/css/custom.css">
</head>
<body>

<?php require '../../backend/cidadesDisponiveis/cidadesDisponiveis.php';?> 
<?php require '../../backend/tiposDeImoveis/tiposDeImoveis.php'?>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <form class="form_busca">
                <div class="form-group">
                        <select class="form_busca__inputs" name="cidade" id="cidade">
                            <?php
                            echo"<option>Qual a localização?</option>";
                            foreach ($responseCidades->lista as $listaCidades) {
                                echo "<option value='" . $listaCidades->codigo . "'>" . $listaCidades->nome ."</option>";
                                // var_dump($listaCidades);
                            }
                            ?>
                        </select>

                        <select class="form_busca__inputs" name="tipoImovel" id="tipoImovel">
                            <?php
                            echo"<option>Tipo de imóvel?</option>";
                            foreach ($responseImoveis->lista as $listaTipoImoveis) {
                                echo "<option value='" . $listaTipoImoveis->codigo . "'>" . $listaTipoImoveis->nome ."</option>";

                            }
                            ?>
                        </select>
                        <button type="button" id="pesquisar">Pesquisar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script>

        $("#pesquisar").click(function() {    
            var cidade = $("#cidade").val();
            var tipoImovel = $("#tipoImovel").val();
             $.get('../todosOsImoveis/index.php', {cidade:cidade, tipoImovel:tipoImovel});

            console.log(cidade, tipoImovel);
        });

    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>