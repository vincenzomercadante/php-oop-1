<?php

class Movie extends Production{

    // movie extra attributes
    public $profits;
    public $duration;

    // movie constructor method
    public function __construct(
        String $title,
        String $original_lang,
        float $rate,
        array $genres,
        String $profits,
        String $duration,
    ){
        // calling the ancestor constructor method
        parent::__construct($title, $original_lang, $rate, $genres);
        
        // descendant attributes assignments 
        $this->profits = $profits;
        $this->duration = $duration;
    }
}