<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    // la url que me llega originalmente es https://api.gameofthronesquotes.xyz/v1/random pero le quitamos el 'v1/random' para utilizarlo mas adelante
    'base_uri' => 'https://api.gameofthronesquotes.xyz/',
    // Pasado este tiempo, error.
    'timeout'  => 2.0,
]);

// intenta ESTO. Si falla, haz AQUELLO
try {
    // Realiza una solicitud GET a la ruta especificada, la cual es la que hemos quitado antes. Queda mucho mas limpio
    $response = $client->request('GET', 'v1/random');

    // Obtener el cuerpo de la respuesta
    $body = $response->getBody();

    // Decodifico el JSON
    $data = json_decode($body);

    // Esto para printar todo el objeto. Lo comento porque solo me interesa la frase y el nombre de quien la dice
    // print_r($data);

    //Printo la propiedad sentence del objeto resultante y ademas el nombre del personaje que dice la frase
    echo $data->sentence . ' - ' . $data->character->name;

} catch (Exception $error) {
    // Si falla, haces esto.
    echo 'Error: ' . $error->getMessage();
}
?>
