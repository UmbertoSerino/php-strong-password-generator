<?php
include_once __DIR__ . '/../index.php';
// ci creiamo una funzione dove verra' generata la password
function funGenPassword(string $passwordLength)
{
    $genPassword = '';
    $letterDown = 'qwertyuioplkjhgfdsazxcvbnm';
    $letterUP =  'QWERTYUIOPLKJHGFDSAZXCVBNM';
    $number = '0123456789';
    $symbol = '!@#$%^&*()_+[]{}|;:,.<>?';

    // calcoliamo la lunghezza di letterdown
    $letterDownLength = strlen($letterDown);

    for ($i = 0; $i < $passwordLength; $i++) {
        // sovrascrivimo genPass con i caratteri randomici di letterDown
        $genPassword .= $letterDown[rand(0, $letterDownLength - 1)];
    }
    return $genPassword;
}
// controllare se le checkbox, possono includere, lettere, numeri e simboli