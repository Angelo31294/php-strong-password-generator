<?php
$tiny = "abcdefghijklmnopqrstuvwxyz";
$uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$number = "0123456789";
$special_characters = "£$%&+-*/><!?@§";
$comb = $tiny.$uppercase.$number.$special_characters;
$shuffle = str_shuffle($comb);
$password = substr($shuffle,3,12);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Strong Password Generator</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Generatore di password casuale</h1>
            <form action="" method="$_POST">
                <select class="form-select" aria-label="Default select example">
                    <option selected>scegli la lunghezza della password</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </form>
            <span><?php echo $password; ?></span>
        </div>
    </body>
</html>