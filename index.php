<?php

require 'functions/file.php';
require 'classes/FileDB.php';


$db = new FileDB('data/db.txt');

//pripildo objektą(užloadina), iš txt failo paima duomenis ir jsonu paverčia į array
$db->load();

//nurodytu indeksu įdeda vertę, nieko nereturnina
$db->addRow('Vartotojai', ['name'=>'Rasa', 'surname' => 'Lietuvnikaite']);

////array`ju issaugo i faila
$db->save();

$db->load();
var_dump($db->getData());