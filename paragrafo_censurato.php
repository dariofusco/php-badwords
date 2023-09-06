<?php

$paragrafo = $_POST['paragrafo'];
$censura = $_POST['parola'];
$paragrafoCensurato = str_replace($censura, '***', $paragrafo);
$paragrafoLunghezza = strlen($paragrafo);
$paragrafoCensuratoLunghezza = strlen($paragrafoCensurato);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container text-center py-5">
        <div class="row">
            <div class="col">
                <h3 class="text-success">Paragrafo:</h3>
                <p><?php echo $paragrafo ?></p>
                <h6 class="py-3">Lunghezza paragrafo: <?php echo $paragrafoLunghezza ?> caratteri.</h6>
                <h3 class="text-danger">Paragrafo censurato:</h3>
                <p><?php echo $paragrafoCensurato ?></p>
                <h6 class="py-3">Lunghezza paragrafo: <?php echo $paragrafoCensuratoLunghezza ?> caratteri.</h6>
            </div>
        </div>
    </div>
</body>

</html>