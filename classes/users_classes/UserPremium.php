<?php

class UserPremium extends User {
    private $sconto;

    // GET FUNCTION
    public function getSconto() {
        return $this -> sconto;
    }
}