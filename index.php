<?php

require 'functions/file.php';
require 'classes/FileDB.php';
require 'classes/Drinks/Drink.php';


$db = new FileDB('data/db.txt');
$db->load();
////pripildo objektą(užloadina), iš txt failo paima duomenis ir jsonu paverčia į array
//$db->load();
//
////nurodytu indeksu įdeda vertę, nieko nereturnina
//$db->addRow('Vartotojai', ['name'=>'Rasa', 'surname' => 'Lietuvnikaite']);
//
//////array`ju issaugo i faila



//$db->insertRow('Vartotojai', ['name'=>'Iveta', 'surname' => 'Isajevaite']);
$db->insertRowIfNotExists('Vartotojai nauji', ['name'=>'Rasele', 'surname' => 'Kita pavarde'], 8);

//$db->createTable('users');

//var_dump($db->tableExists('users'));
//$duomenys = $db->getData();
//var_dump($duomenys);
////var_dump($db->tableExists('users'));

$db->save();


//
var_dump($db->getData());

//$1 - destruktoriaus iskvietimas;
unset($db);

//$2 - Kodo pabaiga;

//$3 - F-jos pabaiga;