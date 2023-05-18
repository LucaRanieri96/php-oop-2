<?php

trait Availability {
    protected $available = true;

    public function getAvailability() {
        return $this->available;
    }

}