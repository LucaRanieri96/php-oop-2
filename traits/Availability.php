<?php

trait Availability {
    protected $available = 'Yes';

    public function getAvailability() {
        return $this->available;
    }
}