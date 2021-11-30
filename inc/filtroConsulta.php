
<?php
//  value="34">Balneário Camboriú
//  value="5">Cascavel
//  value="9">Curitiba
//  value="1">Foz do Iguaçu
//  value="21">Itajaí
//  value="29">Itapema
//  value="3">Santa Terezinha de Itaipu
  $cidadeSelecionada =  isset($_GET['cidade']);
  $foz = 1;
  $balneario = 34;
  $itajai = 21;
  $itapema = 29;
  $cascavel = 5;
  $sti = 3;
  $curitiba =9;

//  
echo "<form role='form' action='index.php' method='get'>";
echo "<h2>Para fazer sua busca, primeiro selecione a cidade</h2>";
 
  echo "<select name='cidade' id='cidade'>";
  echo "<option value=''>Selecione a cidade</option>";
    foreach ($responseCidades->lista as $lista) {
      echo "<option value='$lista->codigo'>$lista->nome</option>";
    };
  echo "</select>";
  
  // echo "<select name='tipoImovel' id='tipos'>";
  // echo "<option value=''>Selecione o tipo de imóvel</option>";
  //   foreach ($responseTipos->lista as $lista) {
  //     echo "<option value='$lista->codigo'>$lista->nome</option>";
  //   };
  // echo "</select>";
  echo "<button>pesquisar</button>";
  echo "</form>";

  echo "<p class='px-2'> Você está vendo imóveis da cidade: " . $nomeCidadeSelecionada. "</p>";

 
  
  
  ?>

