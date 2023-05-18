<?php
 include_once __DIR__.'/../traits/Availability.php';
 include_once __DIR__.'/../traits/Discount.php';
class Computer
{
  use Availability;
  use Discount;
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
  private $img;
  private $price;

  public function __construct($schedaMadre, $psu, $cpu, $ram, $ssd, $gpu, $case, $tastiera, $monitor, $mouse, $img, $price)
  {
    $this->schedaMadre = $schedaMadre;
    $this->psu = $psu;
    $this->cpu = $cpu;
    $this->ram = $ram;
    $this->ssd = $ssd;
    $this->gpu = $gpu;
    $this->case = $case;
    $this->tastiera = $tastiera;
    $this->monitor = $monitor;
    $this->mouse = $mouse;
    $this->img = $img;
    $this->price = $price;
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
  public function getImg()
  {
    return $this->img;
  }

  public function getPrice()
  {
    return $this->price;
  }
}