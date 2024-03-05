<?php

class TVSerie extends Production{

    // tvserie extra attribute
    public $seasons;

    // tvserie constructor method
    public function __construct(
        String $title,
        String $original_lang,
        float $rate,
        array $genres,
        int $season,
    ){

        // calling ancestor's constructor method
        parent::__construct($title, $original_lang, $rate, $genres);
        
        // descendant attribute assignment
        $this->seasons = $season;
    }
}