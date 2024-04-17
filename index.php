<?php

const API_URL = "https://www.whenisthenextmcufilm.com/api";
#inicializar una nueva sesion de cURL;
$ch = curl_init(API_URL);
#indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
/*
 * ejecutamos la peticion
 * y guardamos el resultado
*/
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);
/*
 * una alternativa seria utilizar file_get_contentes
 * $result = file_get_contents(API_URL); Solo si quieres hacer un GET de una API
 */
$data = json_decode($result,true);
//var_dump($data);


?>
<head>
    <title>La proxima pelicula de Marvel</title>
    <style>
        :root {
            color-scheme: light dark;
        }

        body {
            display: grid;
            place-content: center;
        }
    </style>
</head>
<main>

    <section>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de " >
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]?> dias </h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?> </p>
        <p> la siguiente pelicula es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>




