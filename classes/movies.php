<?php

// DEFINIZIONE CLASSE

class Movie {
    // VARIABILI / PROPRIETA'

    public $title;
    public $overview;
    public $year;
    public $genre;
    public $userAge;
    public $discount = 10;

    // COSTRUTTORE

    function __construct($title, $genre, $overview) {
        $this->title = $title;
        $this->genre = $genre;
        $this->overview = $overview;
    }

    // METHODS

    public function setAge($age) {
        $this->userAge = $age;
    }

    public function getDiscount() {
        if($this->userAge > 50) {
            $this->discount = 25;
        }

        return $this->discount;
    }
}

?>