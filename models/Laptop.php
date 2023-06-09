<?php

class Laptop extends Computer
{
    private $dimensioneSchermo;
    private $batteria;
    private $marca;

    public function __construct($schedaMadre, $cpu, $ram, $ssd, $gpu, $dimensioneSchermo, $batteria, $marca, $img,$price)
    {
        parent::__construct($schedaMadre, 'NN', $cpu, $ram, $ssd, $gpu, 'NN', 'NN', 'NN', 'NN', $img, $price);
        $this->dimensioneSchermo = $dimensioneSchermo;
        $this->batteria = $batteria;
        $this->marca = $marca;
    }

    public function getDimensioneSchermo()
    {
        return $this->dimensioneSchermo;
    }

    public function getBatteria()
    {
        return $this->batteria;
    }
    public function getTipoProdotto()
    {
        return "Laptop";
    }
    public function getNumeroVentole()
    {
        return '1';
    }
    public function getSchedaWifi()
    {
        return 'presente';
    }
}