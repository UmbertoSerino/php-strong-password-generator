<?php
include_once __DIR__ . '/function/function.php';
// ci creiamo una variabile vuota dove andremo ad inserire la nostra password
$genPassword = '';
// verifichiamo se la chiamata non è vuota e se è stato inserito un numero
if (isset($_GET['psw-length']) && is_numeric($_GET['psw-length'])) {
    // salviamo il dato
    $passwordLength = $_GET['psw-length'];
    $genPassword = funGenPassword($passwordLength);
} else {
    // altrimenti
    $passwordLength = $_GET['psw-length'];
    echo 'errore';
};
var_dump('numero inserito:' . ' ' . $passwordLength);
var_dump('password generata:' . ' ' . $genPassword);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- MyStyle -->
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <main>
        <section class="container">
            <h1 class="text-center">Strong Password Generator</h1>
            <h2 class="text-center text-white mb-5">Genera una password sicura</h2>
            <article class="container bg-white mb-5 p-2">
            </article>
            <article class="container bg-white rounded">
                <!-- Form -->
                <form class="pb-3" action="./index.php" method="GET">
                    <div class="row g-3 align-items-center">
                        <!-- Password -->
                        <div class="col-6 mb-3">
                            <label for="inputPassword6" class="col-form-label">Lughezza Password:</label>
                        </div>
                        <div class="col-auto ps-0">
                            <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="psw-length">

                        </div>
                        <!-- Checkbox Radius -->
                        <div class="row mb-3">
                            <div class="col-6 p-2">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Consenti ripetizioni di uno o più caratteri:
                                </label>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label for="">Sì</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label for="">No</label>
                                </div>
                            </div>
                        </div>
                        <!-- Checkbox -->
                        <div class="row">
                            <div class="offset-6 col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="letter">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Lettere
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="flexCheckChecked" name="number">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Numeri
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="flexCheckChecked" name="symbol">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Simboli
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary">Invia</button>
                    <button type="button" class="btn btn-secondary">Annulla</button>
                </form>
            </article>
        </section>
    </main>
</body>

</html>