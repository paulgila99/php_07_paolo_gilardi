<?php

// 8 caratteri
function checkLenght($string){
    if (strlen($string)>=8) {
        return true;
    }
    echo "La password deve contenere almeno 8 caratteri \n";
    return false;
}
// $firstrule = checkLenght($password);
// var_dump($firstrule);

// maiuscola
function checkUppercase($string){
    for($i=0; $i<strlen($string); $i++){
        if(ctype_upper($string[$i])){
            return true;
        }
    }
    echo "La password deve contenere almeno una lettera maiuscola \n";
    return false;
}

// $secondrule = checkUppercase($password);
// var_dump($secondrule);

// numero

function checkNumber($string){
     for($i=0; $i<strlen($string); $i++){
        if(is_numeric($string[$i])){
            return true;
        }
     }
     echo "La password deve contenere almeno un numero \n";
     return false;
}
// $thirdrule = checkNumber($password);
// var_dump($thirdrule);

// carattere speciale
function checkSpecial($string){
    $special_chars = ['!', '@','?','$','€'];
    for($i=0; $i<strlen($string); $i++){
        if(in_array($string[$i], $special_chars)){
            return true;
        }
    }
    echo "La password deve contenere almeno un carattere speciale \n";
    return false;
}

// $fourtrule = checkSpecial($password);
// var_dump($fourtrule);

function checkPassword($string){
    $firstrule = checkLenght($string);
    $secondrule = checkUppercase($string);
    $thirdrule = checkNumber($string);
    $fourtrule = checkSpecial($string);

    if($firstrule && $secondrule && $thirdrule && $fourtrule){
        echo "Password accettata!";
    }

    return $firstrule && $secondrule && $thirdrule && $fourtrule;
}



do{
    $password = readline("Inserisci la tua password \n");
}while(!checkPassword($password));