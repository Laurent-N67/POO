<?php

class Order{
    protected $ref;
    protected $userID;
    protected $priceTTC;
    protected $priceHT;
    protected $totalVat;

    public function getRef(){
        return $this->ref;
    }
}
?>