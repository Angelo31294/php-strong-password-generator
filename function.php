<?php
function get_password($length){
$alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$uppercase = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","U","V","W","X","Y","Z"];
$numbers = ['0','1','2','3','4','5','6','7','8','9'];
$symbols = ['@','#','§','*','/','&','%',"^",'(',')'];

$comb = array_merge($alphabet, $uppercase, $numbers, $symbols);

if( !empty($length) ) {
    if (!is_numeric($length) ) {
        $error = "parametro non valido";
    }
    if ($length < 8 ) {
        $error = "la password è troppo corta";
    } elseif ($length > 32 ) {
        $error = "la password è troppo lunga";
    } else {
        $password = "";
        for($i = 0; $i < $length; $i++) {
            $random_comb_index = rand(0, count($comb) - 1);
            $password .= $comb($random_comb_index); 
        }    
    }

    return [
        "password" => $password,
        "error" => $error 
    ];
}
}
