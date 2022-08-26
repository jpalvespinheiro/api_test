<?php
header('Content-Type: application/json');

 //POST
 $body = [
     'nome' => '',
     'Idade' => 22,
     'Cidade' => 'Goiânia',
     'Cep' => '74595-333'
 ];

 //JSON 
 $body = json_encode($body);

//Define as configurações
$curl = curl_init();

//Preparar CURL para envio da requisicao
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:8888/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $body,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

//executando a requisição 
$response = curl_exec($curl);

//Aqui está fechando a conexão
curl_close($curl);

//Aqui imprimi o response da requisição
echo $response;


 ?>