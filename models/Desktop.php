<?php

class Desktop extends Computer
{
    private $ventole;
    private $schedaWifi;

    public function __construct($schedaMadre, $psu, $cpu, $ram, $ssd, $gpu, $case, $tastiera, $monitor, $mouse, $ventole, $schedaWifi)
    {
        parent::__construct($schedaMadre, $psu, $cpu, $ram, $ssd, $gpu, $case, $tastiera, $monitor, $mouse);
        $this->ventole = $ventole;
        $this->schedaWifi = $schedaWifi;
    }

    public function getNumeroVentole()
    {
        return $this->ventole;
    }
    public function getSchedaWifi()
    {
        return $this->schedaWifi;
    }
    public function getTipoProdotto()
    {
        return "Desktop";
    }
}