<?php require_once __DIR__ . '/functions.php'; ?>

<?php
// Creo una stringa con i parametri per generare la password usando lettere, lettere maiuscole, numeri, e simboli.
// in base al numero che ricevo, attraverso la input, creo una funzione che genera una password formata dallo stesso numero di caratteri ma presi randomicamente dall'array.
session_start();
$letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers = '0123456789';
$symbols = '!@#$%^&*()_-=+;:,.?';
$characters = $letters . $numbers . $symbols;
$passwordLength = isset($_GET['password-length']) ? intval($_GET['password-length']) : 0;
$repeatFilter = isset($_GET['repeat']) && $_GET['repeat'] === '0' ? false : true;
$charsFilter = isset($_GET['chars']) ? $_GET['chars'] : [];
if ($charsFilter) {
    $characters = '';
    if (in_array('letters', $charsFilter )) {
        $characters .= $letters;
    }
    if(in_array('numbers', $charsFilter )){
        $characters .= $numbers;
    }
    if(in_array('symbols', $charsFilter )){
        $characters .= $symbols;
    }
}
$password = generateRandomPassword($passwordLength, $characters, $repeatFilter);
var_dump($password);

$_SESSION['password'] = $password;
// if ($passwordLength > 0) {
//     header('Location: ./congrats.php');
// }
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
    <div class="container py-4">
        <div class="text-center">
            <h1 class="text-secondary">Strong Password Generator</h1>
            <h2 class="text-light">Genera una password sicura</h2>
        </div>
        <?php if ($passwordLength === 0) { ?>
            <div class="alert alert-warning" role="alert">Nessun Parametro valido inserito</div>
        <?php } ?>
        <form class="my-3 p-3 bg-light rounded-3">
            <div class="row justify-content-between mb-3">
                <label for="password-length" class="col-sm-4 col-form-label">Lunghezza password:</label>
                <div class="col-sm-8">
                    <input
                    type="number" name="password-length" class="form-control" id="password-length" placeholder="Inserisci un numero"
                    value="<?php echo $passwordLength > 0 ? $passwordLength : '' ?>"
                    min="1" max="10">
                </div>
            </div>
            <div class="row justify-content-between mb-3">
                <label class="col-sm-4 col-form-label">Consenti ripetizioni di uno o più caratteri:</label>
                <div class="col-sm-8 d-flex flex-column">
                    <div>
                        <input class="form-check-input" type="radio" name="repeat" id="yes" value="1" <?php echo $repeatFilter ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="yes">Si</label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" name="repeat" id="no" value="0" <?php echo !$repeatFilter ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="no">No</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-8 offset-4">
                    <input class="form-check-input" type="checkbox" name="chars[]" id="letters" value="letters" <?php echo in_array('letters', $charsFilter) ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="letters">Lettere</label>
                </div>
                <div class="col-sm-8 offset-4">
                    <input class="form-check-input" type="checkbox" name="chars[]" id="numbers" value="numbers" <?php echo in_array('numbers', $charsFilter) ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="numbers">Numeri</label>
                </div>
                <div class="col-sm-8 offset-4">
                    <input class="form-check-input" type="checkbox" name="chars[]" id="symbols" value="symbols" <?php echo in_array('symbols', $charsFilter) ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="symbols">Simboli</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>
        </form>
    </div>
</body>
</html>