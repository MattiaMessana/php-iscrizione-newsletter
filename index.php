<?php
// require_once __DIR__ . "/partials/function.php";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News Letter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <div class="container mt-4">
        <!-- controllo email -->
        <?php include __DIR__ . "/partials/function.php" ?>
        <!-- controllo email -->

        <form action="index.php" method="get">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" name="control_email" class="form-control w-50" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <button class="btn btn-primary mb-3" type="submit">ENTRA</button>
        </form>
    </div>


</body>

</html>