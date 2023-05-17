<?php

class Computer
{
  private $schedaMadre;
  private $psu;
  private $cpu;
  private $ram;
  private $ssd;
  private $gpu;
  private $case;
  private $tastiera;
  private $monitor;
  private $mouse;

  public function __construct($schedaMadre, $psu, $case, $tastiera, $monitor, $mouse, $cpu, $ram, $ssd, $gpu)
  {
    $this->schedaMadre = $schedaMadre;
    $this->psu = $psu;
    $this->case = $case;
    $this->tastiera = $tastiera;
    $this->monitor = $monitor;
    $this->mouse = $mouse;
    $this->cpu = $cpu;
    $this->ram = $ram;
    $this->ssd = $ssd;
    $this->gpu = $gpu;
  }

  public function getSchedaMadre()
  {
    return $this->schedaMadre;
  }

  public function getPsu()
  {
    return $this->psu;
  }

  public function getCase()
  {
    return $this->case;
  }

  public function getTastiera()
  {
    return $this->tastiera;
  }

  public function getMonitor()
  {
    return $this->monitor;
  }

  public function getMouse()
  {
    return $this->mouse;
  }

  public function getCpu()
  {
    return $this->cpu;
  }

  public function getRam()
  {
    return $this->ram;
  }

  public function getSsd()
  {
    return $this->ssd;
  }

  public function getGpu()
  {
    return $this->gpu;
  }
}

class Desktop extends Computer
{
  private $ventole;
  private $schedaWifi;

  public function __construct($schedaMadre, $psu, $case, $tastiera, $monitor, $mouse, $cpu, $ram, $ssd, $gpu, $ventole, $schedaWifi)
  {
    parent::__construct($schedaMadre, $psu, $case, $tastiera, $monitor, $mouse, $cpu, $ram, $ssd, $gpu);
    $this->ventole = $ventole;
    $this->schedaWifi= $schedaWifi;
  }

  public function getNumeroVentole()
  {
    return $this->ventole;
  }
  public function getSchedaWifi()
  {
    return $this->schedaWifi;
  }
}

class Laptop extends Computer
{
  private $dimensioneSchermo;
  private $batteria;

  public function __construct($schedaMadre, $cpu, $ram, $ssd, $gpu, $dimensioneSchermo, $batteria)
  {
    parent::__construct($schedaMadre, null, null, null, $dimensioneSchermo, null, $cpu, $ram, $ssd, $gpu);
    $this->dimensioneSchermo = $dimensioneSchermo;
    $this->batteria = $batteria;
  }

  public function getDimensioneSchermo()
  {
    return $this->dimensioneSchermo;
  }

  public function getBatteria()
  {
    return $this->batteria;
  }
}