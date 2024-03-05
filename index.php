<?php

// include store file
require_once __DIR__ . "/database/store.php";

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
                    <th class="text-warning">Genre</th>
                    <th class="text-warning">Duration</th>
                    <th class="text-warning">Earnings</th>
                    <th class="text-warning">Seasons</th>
                </tr>
            </thead>
            <tbody>
                <!-- production generator -->
                <?php foreach( $productions as $production): ?>
                
                    <tr>
                        <!-- single production values -->
                        <td class='text-uppercase fw-semibold'><?= $production->get_title()?></td>
                        <td><?= $production->original_lang ?></td>
                        <td><?= $production->rate ?></td>
                        <td><?= $production->genre->name ?></td>

                        <?php if($production instanceof Movie): ?>
                            <td><?= $production->duration .'h'?></td>
                            <td><?= $production->profits . '$'?></td>
                            <td><?= '/' ?></td>
                        <?php else: ?>
                            <td><?= '/' ?></td>
                            <td><?= '/' ?></td>
                            <td><?= $production->seasons ?></td>
                        <?php endif ?>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>