<?php

class Production{

    public $title;
    public $original_lang;
    public $rate;


    public function __construct(
       String $title, String $original_lang, int $rate
    ){
        $this->title = $title;
        $this->original_lang = $original_lang;
        $this->rate = $rate;
    }

    public function get_title(){
        return $this->title;
    }

    public function set_rate($new_rate){
        $this->rate = $new_rate;
    }
    
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming</title>

    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    
</body>
</html>