<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Debug\Debug;

/**
 *
 */
class PokemonController extends AbstractController
{

  public $pokemonList;

  public function getPokemons() {
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

    $pokemonList = $content['results'];

    return $pokemonList;
  }

  public function Index() {
    $pokemonList = $this->getPokemons();

    Debug::enable();

    return $this->render('modules/pokemon-list.html.twig', ['pokemonList' => $pokemonList]);

  }
}


 ?>
