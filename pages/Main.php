<?php
echo"<pre>";
require_once('class/Raktar.php');
require_once('class/Marka.php');
require_once('class/Termek.php');

$termek = new Termek(210101,'szeletelt trappista sajt',320,'Ammerlander','10 dkg',4 ,['tej', 'tejsavó','víz','cukor']);
$termek2 = new Termek(210001,'fehér kenyér', 200, 'Budapesti Péklegyény', 'kilós', 3, ['tojás', 'liszt', 'élesztő', 'tej', 'só']);
$termek3 = new Termek(120101, '2020-as naptár', 220, 'Kossuth Nyomda', 'darab',5, ['fehér papír', 'fekete festék', 'piros festék', 'fém spirál']);
$termek4 = new Termek(102011, 'Riska tej', 320, 'Riska tej Kft.', 'liter/doboz', 4, ['papír doboz', 'tej', 'víz']);
$termek5 = new Termek(102011, 'Riska tej', 320, 'Riska tej Kft.', 'liter/doboz', 4, ['papír doboz', 'tej', 'víz']);/**/
$raktar = new Raktar('CBA Remíz', 'Üllői út 266.',5,[$termek5, $termek3],4 );
$raktar2 = new Raktar('CBA ', 'István út 23.',5,[$termek4, $termek2,$termek, $termek2],10 );

/*
var_dump($raktar);
var_dump($raktar2);
var_dump($termek);
var_dump($termek2);
var_dump($termek3);
var_dump($termek4);
var_dump($termek5);*/

echo"</pre>";
?>