<?php

require_once 'TourniquetDuplex.php';
require_once 'TourniquetSimplex.php';
require_once 'Passenger.php';


$duplexTourniqeut = new TourniquetDuplex();
$simplexTourniquet = new TourniquetSimplex();

$petya = new Passenger();

$petya->addMoneyToWallet(59);
$petya->showMoneyInWallet();

$petya->passTourniquet('in', $simplexTourniquet);
$petya->passTourniquet('out', $duplexTourniqeut);


