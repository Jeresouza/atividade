<?php
$data = $_POST['dataNasc'];
$date = new DateTime($data);
$dateSig = $date->format('m-d');

$xml = simplexml_load_file('signos.xml');

echo '<h1>' . $xml->titulo . '</h1>';
echo '<h2>';

foreach ($xml->signo as $registro) :
  if ($dateSig >= $registro->dataInicio and $dateSig <= $registro->dataFim)
    echo $registro->signoNome . '</h2>';
  echo '<p>' . $registro->descricao . '</p>';
endforeach;
