<?php
//variables
$name = "Fer";
$isDev = true;
$age = 15;
$newAge = (bool) $age . '1';
$isOld = $age < $age;

var_dump($name);
var_dump($isDev);
var_dump($age);
var_dump($newAge);

echo gettype($name);
echo gettype($isDev);
echo gettype($age);
is_string($name);

if ($isOld) {
    echo "<h2>Eres mayor</h2>";
} else {
    echo "<h2>Eres menor</h2>";
}

//constantes
const NOMBRE = 'Miguel';

$outputAge = "Hola $name, con una edad de $age";
$outputAge = match (true) {
    $age < 5 => "eres un bebe",
    $age < 20 => "eres adolescente",
    default => "eres un adulto"
}


$bestLanguages = ["PHP", "Java", "Pyhton", 1, 2];
$bestLanguages[] = "C++";
$bestLanguages[4] = "hum";

$person = [
        "name" => "Miguel",
        "age" => 78,
        "isDev" => true,
        "language" => ["PHP", "Java", "Pyhton"],
];
$person["name"] = "Fran";
?>
<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
    <li><?= $key+1 . " " . $language ?> </li>
    <?php endforeach; ?>
</ul>

<h2><?= $outputAge ?></h2>
<h1>
    <?= "hola $isDev" . $name; ?>
</h1>
<h3><?= NOMBRE ?> </h3>
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>