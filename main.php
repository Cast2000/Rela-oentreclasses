<?php
require_once 'Bob.php';
require_once 'Invertercachorro.php';

$dog = new Bob("cinza","médio");

$dog->latir("auau");

$gato = new Invertercachorro();

$gato->latir();

?>
