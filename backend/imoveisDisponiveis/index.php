<?php

        $curl = curl_init();



        $json = '{
            "finalidade":"2",
            "numeroPagina":"5",
            "numeroRegistros":"20",
            "ordenacao":"valorasc"
        }';

        
        curl_setopt_array($curl, array (
            CURLOPT_URL => 'https://api.imoview.com.br/Imovel/RetornarImoveisDisponiveis?parametros={"finalidade":"2","numeroPagina":"5","numeroRegistros":"20","ordenacao":"valorasc", valorde:"0"}',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',



        CURLOPT_HTTPHEADER => array (
            'chave: wSK7Jlc7sQfuJ5Gx8/3v61ce5zEqL2vNNzZ8cHert2E='
            ),
        ));

        $response = json_decode(curl_exec($curl));


            var_dump($response);

        curl_close($curl);


    /**
     *  Do a GET request
     *  @param  string      Resource to fetch
     *  @param  array       Associative array with additional parameters
     *  @return array       Associative array with the result
     */
    public function get($resource, array $parameters = array())
    {
        // the query string
        $query = http_build_query(array('wSK7Jlc7sQfuJ5Gx8' => $this->token) + $parameters);

        // construct curl resource
        $curl = curl_init("https://api.copernica.com/v1/$resource?$query");

        // additional options
        curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true));

        // do the call
        $answer = curl_exec($curl);

        // clean up curl resource
        curl_close($curl);

        // done
        return json_decode($answer, true);
    }

        // echo '<pre>'; 
        // print_r($response); 
        // echo '</pre>';



        // echo "<div class='container'>";
        // echo "<div class='row'>";
        // foreach ($response->lista as $lista) {

        //     echo "<div class='col-4 mt-4'>";
        //     echo "  <div class='card' style='width: 18rem;'>";
        //     echo "       <img src='" . $lista->urlfotoprincipal . "' class='card-img-top' alt='...'>";
        //     echo "           <div class='card-body'>";
        //     echo "                <h5 class='card-title'>". $lista->titulo . "</h5>";
        //     echo "                <p class='card-text'>" . mb_strimwidth($lista->descricao, 0, 160) . ' ...' ."</p>";
        //     echo "                <a href='#' class='btn btn-primary'>" . $lista->valor . "</a>";
        //     echo "           </div>";
        //     echo "    </div>";
        //     echo "</div>";
            
        // }
        // echo "</div>";
        // echo "</div>";
            
        //     echo "<hr>";
?>