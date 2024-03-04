<?php 

class Production{

    // Production class variables
    public $title;
    public $original_lang;
    public $rate;
    public $genre;

    // class construct
    public function __construct(
       String $title, String $original_lang, float $rate, Genre $genre
    ){
        $this->title = $title;
        $this->original_lang = $original_lang;
        $this->rate = $rate;
        $this->genre = $genre;
    }

    /**
     * Get the title of a production
     * 
     * @return string production title
     */
    public function get_title(){
        return $this->title;
    }

    /**
     * From a rate change the production rate
     * 
     * @param float $new_rate new rate value
     * 
     */
    public function set_rate($new_rate){
        $this->rate = $new_rate;
    }
}