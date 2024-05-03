<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /Bootstrap CSS -->
</head>
<body class="bg-primary">
    <div class="container w-50 py-4">
        <div class="text-center">
            <h1 class="text-secondary">Strong Password Generator</h1>
            <h2 class="text-light">Genera una password sicura</h2>
        </div>
        <form class="my-3 p-3 bg-light rounded-3">
            <div class="row justify-content-between mb-3">
                <label for="password-length" class="col-sm-4 col-form-label">Lunghezza password:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="password-length">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="submit" class="btn btn-secondary">Annulla</button>
        </form>
    </div>
</body>
</html>