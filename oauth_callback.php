<?php
// Receber o token de acesso enviado pelo Magento
$accessToken = $_GET['07r3vvrv2mjl62qe9ayvdgm7zm7jmnav'];

// Usar o token de acesso para fazer chamadas � API
// Exemplo de chamada � API (substitua pela l�gica real de sua aplica��o):
$apiUrl = 'https://www.seudominio.com.br/rest/V1/products';
$curl = curl_init($apiUrl);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $accessToken));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

// Exibir a resposta da API
echo $response;
?>
