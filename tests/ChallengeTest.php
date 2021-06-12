<?php
use PHPUnit\Framework\TestCase;

require('Challenge.php');

class ChallengeTest extends TestCase
{

    public function testGetMessagesForMultipleNumbers() {
        $falabellaChallenge = new Challenge();
        $numbersAndMessages = $falabellaChallenge->getMessagesForMultipleNumbers(3, "Falabella", 5, "IT","Integraciones", 100);
        $this->assertIsArray($numbersAndMessages);
        $this->assertEquals(100, count($numbersAndMessages));
        $this->assertSame($numbersAndMessages[8], "Falabella");
        $this->assertSame($numbersAndMessages[9], "IT");
        $this->assertSame($numbersAndMessages[12], "13");
        $this->assertSame($numbersAndMessages[14], "Integraciones");
        $this->assertSame($numbersAndMessages[29], "Integraciones");
    }

    public function testPrintMultipleNumbers() {
        $expected = "1<br/>2<br/>Falabella<br/>4<br/>IT<br/>Falabella<br/>7<br/>8<br/>Falabella<br/>IT<br/>11<br/>Falabella<br/>13<br/>14<br/>Integraciones<br/>";
        $falabellaChallenge = new Challenge();
        $numbersAndMessages = $falabellaChallenge->getMessagesForMultipleNumbers(3, "Falabella", 5, "IT","Integraciones", 15);
        $this->expectOutputString($expected);
        $falabellaChallenge->printNumbersAndMessages($numbersAndMessages);
    }
}
