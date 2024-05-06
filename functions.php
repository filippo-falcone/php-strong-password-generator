<?php
// Funzione che genera una password random
// $passwordLength: elemento di tipo numerico che identifica la lunghezza della password da generare
// $characters: elemento di tipo stringa che identifica i caratteri che servono per generare la password
// $repeatFilter : elemento di tipo booleano che identifica se l'utente ha selezionato o no l'opzione di ripetere i caratteri
// return: elemento di tipo stringa che identifica la password generata
function generateRandomPassword($passwordLength, $characters, $repeatFilter) {
    $password = '';
    for ($i = 0; $i < $passwordLength; $i++) {
        if ($repeatFilter) {
            $password .= $characters[rand(0, count($characters) - 1)];
        } elseif (!$repeatFilter) {
            $randomCharacters = $characters[rand(0, count($characters) - 1)];
            if(!str_contains($password, $randomCharacters)) {
                $password .= $randomCharacters;
            } else {
                $i--;
            }
        }
    }
    return $password;
}
?>