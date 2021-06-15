<?php

require('Challenge.php');

$falabellaChallenge = new Challenge();
$numbersAndMessages = $falabellaChallenge->getMessagesForMultipleNumbers();
$falabellaChallenge->printNumbersAndMessages($numbersAndMessages);


