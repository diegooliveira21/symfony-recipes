<?php

$client = HttpClient::create();
$response = $client->request('GET', 'https://pokeapi.co/api/v2/pokemon');

$statusCode = $response->getStatusCode();
// $statusCode = 200
$contentType = $response->getHeaders()['content-type'][0];
// $contentType = 'application/json'
$content = $response->getContent();
// $content = '{"id":521583, "name":"symfony-docs", ...}'
$content = $response->toArray();
// $content = ['id' => 521583, 'name' => 'symfony-docs', ...]

$pokemonList = $content;

return $pokemonList;


?>
