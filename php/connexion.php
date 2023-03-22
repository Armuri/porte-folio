<?php

function postVar($name){
    if (isset($_POST[$name])){
        if (!empty ($_POST[$name])){
            return $_POST[$name];
        }
        else 
        return true;
    }
    else 
    return false;
}

$name = postVar("name");
$email = postVar("email");
$password = postVar("password");

echo $name, $email, $password ;