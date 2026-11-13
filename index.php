<?php

$password = readline("Inserisci la tua password: \n");

// almeno 8 caratteri
function checkLength($string) {
    if (strlen($string) >= 8) {
        return true;
    }
    echo "La password deve contenere almeno 8 caratteri \n";
    return false;
}

// almeno una lettera maiuscola
function checkUppercase($string) {
    if (preg_match('/[A-Z]/', $string)) {
        return true;
    }
    echo "La password deve contenere almeno una lettera maiuscola \n";
    return false;
}

// almeno un numero
function checkNumber($string) {
    if (preg_match('/[0-9]/', $string)) {
        return true;
    }
    echo "La password deve contenere almeno un numero \n";
    return false;
}

// almeno un carattere speciale (qualsiasi cosa che non sia lettera o numero)
function checkSpecial($string) {
    if (preg_match('/[^A-Za-z0-9]/', $string)) {
        return true;
    }
    echo "La password deve contenere almeno un carattere speciale (es. ! @ # $ % & *) \n";
    return false;
}

// Eseguo tutti i controlli (non uso && direttamente, così vengono
// stampati TUTTI i messaggi di errore e non solo il primo)
$lunghezzaOk = checkLength($password);
$maiuscolaOk = checkUppercase($password);
$numeroOk    = checkNumber($password);
$specialeOk  = checkSpecial($password);

if ($lunghezzaOk && $maiuscolaOk && $numeroOk && $specialeOk) {
    echo "Password accettata! \n";
} else {
    echo "Password non valida. \n";
}