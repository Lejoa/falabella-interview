<?php

require('Challenge.php');

$falabellaChallenge = new Challenge();
$numbersAndMessages = $falabellaChallenge->getMessagesForMultipleNumbers(3, "Falabella", 5, "IT","Integraciones", 30);
$falabellaChallenge->printNumbersAndMessages($numbersAndMessages);


