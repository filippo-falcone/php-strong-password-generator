<?php
session_start();
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
<body class="bg-success">
    <div class="container text-center w-50 py-4">
        <div class="mb-4">
            <h1 class="text-light">Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
        </div>
        <div class="bg-light p-4 rounded-3">
            <h2 class="text-success my-3">Congratulazioni!</h2>
            <h3 class="my-3">La tua password è: <?php echo $_SESSION['password'] ?></h3>
            <a href="./index.php" class="link-warning link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Torna alla HomePage</a>
        </div>
    </div>
</body>
</html>