<?php

// include store file
require_once __DIR__ . "/store.php";

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
                </tr>
            </thead>
            <tbody>
                <!-- production generator -->
                <?php foreach( $films as $film): ?>
                <tr>
                    <!-- single production values -->
                    <td class='text-uppercase fw-semibold'><?= $film->get_title()?></td>
                    <td><?= $film->original_lang ?></td>
                    <td><?= $film->rate ?></td>
                    <td><?= $film->genre->name ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>