<?php
$identificador = rand(1, 1000);

if (isset($_POST['numAleatorio'])) {
    $identificador = $_POST['numAleatorio'];
}

$pokeapi = file_get_contents("https://pokeapi.co/api/v2/pokemon/$identificador/");
$poke = json_decode($pokeapi);


$html = '<img src="'. $poke->sprites->front_default . '" width="250">';
$html .= '<br><b>Nombre: </b>' . $poke->name;
$html .= '<br><b>Id: </b>' . $poke->id;
$html .= '<br><b>Tipo: </b>' . $poke->types[0]->type->name;


echo $html;
?>