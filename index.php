<html>
    <head>

    </head>

    <style>
        table{
            border-collapse: collapse;
        }
        table th {
            text-align: left;
            background-color: #3a6070;
            color: #fff;
            padding: 4px 30px 4px 8px;
        }

        table td{
            border: 1px solid #e3e3e3;
            padding: 4px 8px;
        }
        table tr:nth-child(odd) td{
            background-color: #e7edf0;
        }
        .box {
            width:550px;
            background-color:#d9d9d9;
            position:fixed;
            margin-left:-150px; /* half of width */
            margin-top:-150px;  /* half of height */
            top:60%;
            left:25%;
        }
    </style>

    <body>
       <h1> Consumido API com recurso a PHP usando web server Tomcat</h1>

       <h3>Grupo:</h3>
       <h3 style="color: #626262">Euliterio Maunde</h3>
       <h3 style="color: #626262">Marco Cangela Garujo</h3>
       <h3 style="color: #3a6070">POST - Criacao de usuario </h3>

       <table class="box" border="1px">
           <tr>
               <th>ID</th>
               <th>Nome</th>
               <th>Usuario</th>
               <th>Senha</th>
           </tr>
<tr>
       <?php

        require 'vendor/autoload.php';

        use GuzzleHttp\Client;
        use GuzzleHttp\Exception\RequestException;
        use GuzzleHttp\Psr7\Request;


       //       Requisicao para exibicao de um cliente(comeca aqui)
//               $client = new GuzzleHttp\Client();
//
//               $token = 'eyJhbGciOiJIUzUxMiJ9.eyJub21lIjoiR3J1cG8gUHJpbWVpcm8iLCJpZCI6IjEiLCJleHAiOjE1NDMwNjM2Nzd9.u0V9aXv6oqvce9LqGKbFxBoMWBPCi_b0ePRdkbvo9WcE2DIfcKwsr-RfITUhPJ0JQt0sVfy2AMTrqCUihVGXhQ';
//
//               //Requisicao para toda a colecao
//               $response = $client->request('GET', 'http://localhost:8088/dawapi/usuario/1', [
//                   'headers' => [
//                       'Accept' => 'application/json',
//                       'Content-type' => 'application/json',
//                       'Authorization' => $token
//                   ]]);
//
//
//               $arr = json_decode($response->getBody()->getContents(),true);
//
//                   echo '<tr>';
//                   echo '<td>'.$arr['id'].'</td>';
//                   echo '<td>'.$arr['nome'].'</td>';
//                   echo '<td>'.$arr['usuario'].'</td>';
//                   echo '<td>'.$arr['senha'].'</td>';
//                   echo '</tr>';
//                   echo '<br>';
       //Aqui termina a exibicao de um elemento da colecao

//       Requisicao para exibicao da colececao completa(comeca aqui)
        $client = new GuzzleHttp\Client();

        $token = 'eyJhbGciOiJIUzUxMiJ9.eyJub21lIjoiR3J1cG8gUHJpbWVpcm8iLCJpZCI6IjEiLCJleHAiOjE1NDMwNjM2Nzd9.u0V9aXv6oqvce9LqGKbFxBoMWBPCi_b0ePRdkbvo9WcE2DIfcKwsr-RfITUhPJ0JQt0sVfy2AMTrqCUihVGXhQ';

        //Requisicao para toda a colecao
        $response = $client->request('GET', 'http://localhost:8088/dawapi/usuario', [
            'headers' => [
                'Accept' => 'application/json',
                'Content-type' => 'application/json',
                'Authorization' => $token
            ]]);

        $arr = json_decode($response->getBody()->getContents(),true);
        foreach($arr as $valor){
            echo '<tr>';
            echo '<td>'.$valor['id'].'</td>';
            echo '<td>'.$valor['nome'].'</td>';
            echo '<td>'.$valor['usuario'].'</td>';
            echo '<td>'.$valor['senha'].'</td>';
            echo '</tr>';
            echo '<br>';
        }
//Aqui termina a exibicao de toda colecao


//        Para a simulacao de criacao de um objecto no PHP
//        $token = 'eyJhbGciOiJIUzUxMiJ9.eyJub21lIjoiR3J1cG8gUHJpbWVpcm8iLCJpZCI6IjEiLCJleHAiOjE1NDMwNjM2Nzd9.u0V9aXv6oqvce9LqGKbFxBoMWBPCi_b0ePRdkbvo9WcE2DIfcKwsr-RfITUhPJ0JQt0sVfy2AMTrqCUihVGXhQ';
//
//
//        $client = new Client([
//            'headers' => [
//                'Content-Type' => 'application/json',
//
//            ]
//        ]);
//
//        $response = $client->post('localhost:8088/dawapi/usuario',
//            ['body' => json_encode(
//                [
//                    'id' => 1 ,
//                    'nome' => 'Grupo Primeiro',
//                    'usuario' => 'grupo',
//                    'senha' => 'primeiro'
//                ]
//            )]
//        );
//
//        echo '<pre>' . var_export($response->getStatusCode(), true) . '</pre>';
//        echo '<pre>' . var_export($response->getBody()->getContents(), true) . '</pre>';


       //        Para a requisicao do token de autenticacao
       //        $token = 'eyJhbGciOiJIUzUxMiJ9.eyJub21lIjoiR3J1cG8gUHJpbWVpcm8iLCJpZCI6IjEiLCJleHAiOjE1NDMwNjM2Nzd9.u0V9aXv6oqvce9LqGKbFxBoMWBPCi_b0ePRdkbvo9WcE2DIfcKwsr-RfITUhPJ0JQt0sVfy2AMTrqCUihVGXhQ';


//       $client = new Client([
//           'headers' => [
//               'Content-Type' => 'application/json',
//
//           ]
//       ]);
//
//       $response = $client->post('localhost:8088/dawapi/usuario/login',
//           ['body' => json_encode(
//               [
//                   'id' => 1 ,
//                   'nome' => 'Grupo Primeiro',
//                   'usuario' => 'grupo',
//                   'senha' => 'primeiro'
//               ]
//           )]
//       );
//
//       echo '<pre>' . var_export($response->getStatusCode(), true) . '</pre>';
//       echo '<pre>' . var_export($response->getBody()->getContents(), true) . '</pre>';



       ?>
</tr>
       </table>
    </body>
