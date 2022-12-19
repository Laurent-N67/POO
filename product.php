<?php 

class Product {
    public $label;
    public $desc;
    public $brand;
    protected $priceTTC;
    protected $priceHT;
    const VAT = [20, 10, 5.5];
    protected $vat;
    protected  $quantity;

    public function __construct($label, $desc, $brand){
        $this->label = $label;
        $this->desc = $desc;
        $this->brand = $brand;
    }

    public function getPriceTTC(){
        return $this->priceTTC;
    }

    public function setPriceTTC($priceTTC){
        $this->priceTTC = $priceTTC;
        return $this;
    }

    public function getPriceHT(){
        return $this->priceHT;
    }

    public function setPriceHT($priceHT){
        $this->priceHT = $priceHT;
        return $this;
    }

    public function getVat(){
        return $this->vat;
    }

    public function setVat($vat){
        if (in_array($vat, self::VAT)) {
            $this->vat = $vat;
            return $this;
        }else {
            throw new Exception('Error : La tva ne fait pas partie des possibilitées');
        }
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function setQuantity($quantity){
        $this->quantity = $quantity;
        return $this;
    }

    public function getCalculPriceHT(){

        $this->priceHT = $this->priceTTC / (1 + $this->vat/100);
        return $this->priceHT;
        
    }

    public function getCalculPriceTTC(){

        $this->priceTTC = $this->priceHT * (1+$this->vat/100);
        return $this->priceTTC;
    }

    public function getTotalPriceTTC(){

        $totalPrice = $this->priceTTC * $this->quantity;
        return $totalPrice;

    }

    public function __toString(){
    
        return $this->label." ".$this->desc." ".$this->brand." ". $this->getCalculPriceHT()." ".$this->getCalculPriceTTC()." ".$this->getTotalPriceTTC();

    }
}

?>