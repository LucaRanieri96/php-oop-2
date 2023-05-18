<?php

trait Discount {
    protected $discount = 0;

    public function setDiscount($discount) {
        $this->discount = $discount;
        return $discount;
    }

    public function getDiscount($price) {
        // if ($price < 800) {
        //     throw new Exception("Niente sconti ai poveri(fa male ma è così)");
        // }else{
            return $price - ($price * $this->discount / 100);
        // }
    }
}