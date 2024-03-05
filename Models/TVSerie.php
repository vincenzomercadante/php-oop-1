<?php

class TVSerie extends Production{

    // tvserie extra attribute
    public $seasons;

    // tvserie constructor method
    public function __construct(
        String $title,
        String $original_lang,
        float $rate,
        Genre $genre,
        int $season,
    ){

        // calling ancestor's constructor method
        parent::__construct($title, $original_lang, $rate, $genre);
        
        // descendant attribute assignment
        $this->seasons = $season;
    }
}