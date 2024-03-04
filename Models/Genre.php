<?php 

class Genre {

    // class variables
    public $name;
    public $description;

    // class constructor
    public function __construct(
        string $name,
        string $description
    ) {
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * Get a Genre description 
     */
    public function get_description(){
        return $this->description;
    }
}