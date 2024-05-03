<?php
// Funzione che genera una password random
// $passwordLength: elemento di tipo numerico che identifica la lunghezza della password da generare
// $characters: elemento di tipo stringa che identifica i caratteri che servono per generare la password
// return: elemento di tipo stringa che identifica la password generata
function generateRandomPassword($passwordLength, $characters) {
    $password = '';
    for ($i = 0; $i < $passwordLength; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}
?>