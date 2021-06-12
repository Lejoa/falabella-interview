<?php

/**
 * Short description for class
 *
 * Long description for class (if any)...
 *
 * @copyright  2006 Zend Technologies
 * @license    http://www.zend.com/license/3_0.txt   PHP License 3.0
 * @version    Release: @package_version@
 * @link       http://dev.zend.com/package/PackageName
 * @sinc
 * */ 
class Challenge {

    /**
     * Does something interesting
     *
     * @param integer $numberOne multiple number
     * @param string  $messageOne message for multiple $numberOne
     * @param integer $numberTwo multiple number
     * @param string  $messageTwo message for multiple $numberTwo
     * 
     * 
     * @author Alejandro Gómez Anaya<a.gomezanaya@globant.com>
     * @return Array
     */ 
    public function getMessagesForMultipleNumbers($numberOne, $messageOne,
        $numberTwo, $messageTwo, $messageForBoth, $limit) {
        
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

    public function printNumbersAndMessages($numbersAndMessages) {
        for($i = 0; $i < count($numbersAndMessages); $i++) {
            echo $numbersAndMessages[$i]."<br/>";
        }
    }
}
