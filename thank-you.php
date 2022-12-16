<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Generatore di password casuale</h1>
            <form class="mb-3" action="generation.php" method="GET">
                <div class="mb-3">
                    <label for="password-length" class="form-label">Lunghezza password</label>
                    <input type="number" class="form-control" id="password-length" name="length" min="8" max="32" required value="<?php echo $_GET['length']; ?>">
                </div>
                <button type="submit" class="btn btn-ptimary">Genera</button>
            </form>
            <?php if($_SESSION ['$password'] ): ?>
            <div class="alert alert-succes">
                <?php echo $_SESSION['password'] ?>
            </div>
        </div>
        <?php endif ?>
    </body>
</html>