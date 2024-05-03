<?php
function generateRandomPassword($passwordLength, $characters) {
    // Creo un ciclo for che aggiunge a $password un carattere random compreso tra 0 e l'ultimo carattere di $characters, finche $i è minore di $passwordLength
    $password = '';
    for ($i = 0; $i < $passwordLength; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
};
?>