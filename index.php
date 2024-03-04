<?php

class Production{

    // Production class variables
    public $title;
    public $original_lang;
    public $rate;

    // class construct
    public function __construct(
       String $title, String $original_lang, float $rate
    ){
        $this->title = $title;
        $this->original_lang = $original_lang;
        $this->rate = $rate;
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

// Create production instances
$film_1 = new Production('Titanic', 'ENG', 9);
$film_2 = new Production('Interstellar', 'ENG', 7.5);
$film_3 = new Production('La vita è bella', 'ITA', 8.5);

// create Production Array
$films = [$film_1, $film_2, $film_3]; 


?>



<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming</title>

    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="m-5">

    <div class="container">
        <!-- production table -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <!-- production keys -->
                    <th class="text-warning">Title</th>
                    <th class="text-warning">Original Language</th>
                    <th class="text-warning">Rate</th>
                </tr>
            </thead>
            <tbody>
                <!-- production generator -->
                <?php foreach( $films as $film): ?>
                <tr>
                    <!-- single production values -->
                    <td class='text-uppercase'><?= $film->get_title()?></td>
                    <td><?= $film->original_lang ?></td>
                    <td><?= $film->rate ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>