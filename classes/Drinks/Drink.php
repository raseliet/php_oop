<?php

declare (strict_types = 1);

class Drink {
    
    private $data;
    
    public function getName() {
        return $this->data['name'];
    }
    
    public function setName(string $name) {
        $this->data['name'] = $name;
    }
    
    public function getAmount() {
        return $this->data['amount_ml'];
    }
    
    public function setAmount(int $amount_ml) {
        $this->data['amount_ml'] = $amount_ml;
    }
    
    public function getAbarot() {
        return $this->data['abarot'];
    }
    
    public function setAbarot(float $abarot) {
        $this->data['abarot'] = $abarot;
    }
    
    public function getImage() {
        return $this->data['image'];
    }
    
    public function setImage(string $url) {
        $this->data['image'] = $url;
    }
    
}