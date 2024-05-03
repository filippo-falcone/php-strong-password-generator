<?php require_once __DIR__ . '/functions.php'; ?>

<?php
// Creo una stringa con i parametri per generare la password usando lettere, lettere maiuscole, numeri, e simboli.
// in base al numero che ricevo, attraverso la input, creo una funzione che genera una password formata dallo stesso numero di caratteri ma presi randomicamente dall'array.
session_start();
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_-=+;:,.?';
$passwordLength = isset($_GET['password-length']) ? intval($_GET['password-length']) : '';
$password = generateRandomPassword($passwordLength, $characters);
$_SESSION['password'] = $password;
if ($passwordLength > 0) {
    header('Location: ./congrats.php');
}
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
        <?php if ($passwordLength > 0) { ?>
            <div class="alert alert-success" role="alert">La tua password è: <?php echo $password; ?></div>
        <?php } elseif ($passwordLength === 0) { ?>
            <div class="alert alert-danger" role="alert">Carattere non supportato</div>
        <?php } else { ?>
            <div class="alert alert-warning" role="alert">Nessun Parametro valido inserito</div>
        <?php } ?>

        <form class="my-3 p-3 bg-light rounded-3">
            <div class="row justify-content-between mb-3">
                <label for="password-length" class="col-sm-4 col-form-label">Lunghezza password:</label>
                <div class="col-sm-4">
                    <input type="text" name="password-length" class="form-control" id="password-length" placeholder="min (1 carattere)" value="<?php echo $passwordLength > 0 ? $passwordLength : '' ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>
        </form>
    </div>
</body>
</html>