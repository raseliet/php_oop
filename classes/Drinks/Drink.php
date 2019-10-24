<?php

class Drink {

    private $data;
   

    public function setName(string $name) {
        $this->data['name'] = $name;
    }

    public function getName() {
        if ($this->data ['name']) {
            return $this->name;
        }
    }

    public function setAmount_ml(int $amount_ml) {
        $this->data['amount_ml'] = $amount_ml;
    }

    public function getAmount_ml() {
        if ($this->data['amount_ml']) {
            return $this->amount_ml;
        }
    }

    public function setAbarot(float $abarot) {
        $this->data['abarot'] = $abarot;
    }

    public function getAbarot() {
        if ($this->data['abarot']) {
            return $this->abarot;
        }
    }

    public function setImage(string $url) {
        $this->data['name'] = $url;
    }

    public function getImage() {
        if ($this->date['url']) {
            return $this->url;
        }
    }

}
