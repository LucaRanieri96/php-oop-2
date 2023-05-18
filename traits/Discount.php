<?php

trait Discount {
    protected $discount = 0;

    public function setDiscount($discount) {
        $this->discount = $discount;
        return $discount;
    }

    public function getDiscount($price) {
        return $price - ($price * $this->discount / 100);
    }
}