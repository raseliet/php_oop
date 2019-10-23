<?php

class FileDB {

    //nepasiekiamas metodas išorėje
    private $file_name;
    private $data;

    //atviras metodas išorėje, t.y.prieinamas
    //construct išsikviečia pats, tik sukūrus naują objektą
    public function __construct($file_name) {
        $this->file_name = $file_name;
    }

    //pripildo objektą(užloadina), iš txt failo paima duomenis ir jsonu paverčia į array
    public function load() {
        $this->data = file_to_array($this->file_name);
    }

    //įdedu data 
    public function setData($data_array) {
        $this->data = $data_array;
    }

    //returnina tai, kas nurodoma Ėthis->data
    public function getData() {
        return $this->data;
    }

    //įrašo į txt failą tai, kas tuo metu įdėta į variablą
    public function save() {
        return array_to_file($this->data, $this->file_name);
    }

    //paima vertę ir returnina
    public function getrow($table, $row_id) {
        return $this->data[$table][$row_id];
    }

    //nurodytu indeksu įdeda vertę, nieko nereturnina
    public function addRow($table, $row) {
        $this->data[$table][] = $row;
    }

    //kuriama lentelė
//    public function createTable($table_name) {
//        if (!isset($this->data[$table_name])) {
//            $this->data[$table_name] = [];
//            return true;
//        }
//        return false;
//    }
    //tikrinama, ar lentelė yra
    public function tableExists($table_name) {
        if (isset($this->data[$table_name])) {

            return true;
        }
        return false;
    }

    //panaudojant tableExists, sukurti lentelę
    public function createTable($table_name) {
        if (!$this->tableExists($table_name)) {
            $this->data[$table_name] = [];
            return true;
        }
        return false;
    }

    //ištrinti lentelę kartu su indeksu
    public function dropTable($table_name) {
        unset($this->data[$table_name]);
    }

}
