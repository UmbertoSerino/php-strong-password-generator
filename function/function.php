<?php
include_once __DIR__ . '/../index.php';
// ci creiamo una funzione dove verra' generata la password
function funGenPassword($passwordLength, $callLetterUpOn, $callNumberOn, $callSymbolOn)
{
    $genPassword = '';
    $letterDown = 'qwertyuioplkjhgfdsazxcvbnm';
    $letterUP =  'QWERTYUIOPLKJHGFDSAZXCVBNM';
    $number = '0123456789';
    $symbol = '!@#$%^&*()_+[]{}|;:,.<>?';
    // controllare se le checkbox, possono includere, lettere, numeri e simboli
    if ($callLetterUpOn) {
        $letterDown .= $letterUP;
    }
    if ($callNumberOn) {
        $letterDown .= $number;
    }
    if ($callSymbolOn) {
        $letterDown .= $symbol;
    }

    // calcoliamo la lunghezza di letterdown
    $letterDownLength = strlen($letterDown);

    for ($i = 0; $i < $passwordLength; $i++) {
        // sovrascrivimo genPass con i caratteri randomici di letterDown
        $genPassword .= $letterDown[rand(0, $letterDownLength - 1)];
    };
    return $genPassword;
}
