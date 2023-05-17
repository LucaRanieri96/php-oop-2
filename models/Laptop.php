<?php

class Laptop extends Computer
{
    private $dimensioneSchermo;
    private $batteria;
    private $marca;

    public function __construct($schedaMadre, $cpu, $ram, $ssd, $gpu, $dimensioneSchermo, $batteria, $marca, $img)
    {
        parent::__construct($schedaMadre, null, $cpu, $ram, $ssd, $gpu, null, null, null, null, $img);
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
}