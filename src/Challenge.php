<?php

/**
 * Class to show differents challenges of Falabella.
 *
 * */ 
class Challenge {

    /**
     * Method to stores a value in array according to the
     * multiplicity of $numberOne and $numberTwo variables
     * while advancing to a limit value.
     *
     * @param integer $numberOne Multiple number
     * @param string  $messageOne Message for the multiple $numberOne
     * @param integer $numberTwo Multiple number
     * @param string  $messageTwo Message for the multiple $numberTwo
     * @param string  $messageForBoth Message for occasion when the number is a multiple of $numberOne and $numberTwo
     * @param int     $limit 
     * 
     * @author Alejandro Gómez Anaya<a.gomezanaya@globant.com>
     * @return Array
     */ 
    public function getMessagesForMultipleNumbers($numberOne = 3, $messageOne = "Falabella",
        $numberTwo = 5, $messageTwo = "IT", $messageForBoth = "Integraciones", $limit = 100) {

        $numbersAndMessages = array();

            for($i = 1; $i <= $limit; $i++) {
                if(($i % $numberOne) == 0 && ($i % $numberTwo) == 0) {
                    $numbersAndMessages[] = $messageForBoth;
                    continue;
                }
                $numbersAndMessages[] = str_repeat($i, (int)(($i % $numberOne != 0) && ($i % $numberTwo != 0)))
                    .str_repeat($messageOne, (int)($i % $numberOne == 0))
                    .str_repeat($messageTwo, (int)($i % $numberTwo == 0));
            }
        return $numbersAndMessages;
    }

    /**
     * Method to print all values inside $numbersAndMessages array
     * 
     * @param array $numbersAndMessages array with numbers and strings values
     * 
     * @author Alejandro Gómez Anaya<a.gomezanaya@globant.com>
     * @return void
     */ 
    public function printNumbersAndMessages($numbersAndMessages) {
        for($i = 0; $i < count($numbersAndMessages); $i++) {
            echo $numbersAndMessages[$i]."<br/>";
        }
    }
}
