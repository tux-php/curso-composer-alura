#!/usr/bin/env php
<?php

require_once __DIR__ . '/vendor/autoload.php';



use TuxPhp\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri'=>'https://www.alura.com.br/']);

$crawler = new Crawler();

$buscador = new Buscador($client,$crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach($cursos as $curso){
    exibeMensagem($curso);
}