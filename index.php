<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container text-center">
        <h1 class="py-5 text-success">Php Badwords</h1>
        <div class="row">
            <div class="col">
                <form action="paragrafo_censurato.php" method="POST">
                    <div class="mb-3">
                        <label for="paragrafo" class="form-label">Inserisci Paragrafo</label>
                        <input name="paragrafo" class="form-control" id="paragrafo" aria-describedby="paragrafo">
                    </div>
                    <div class="mb-3">
                        <label for="parola" class="form-label">Parola da censurare</label>
                        <input name="parola" class="form-control" id="parola">
                    </div>
                    <button type="submit" class="btn btn-success">Censura</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>