<?php

class PhoneKeyboardConverter
{


    public $convert = [
        1 => "a", 11 => "b", 111 => "c",
        2 => "d", 22 => "e", 22 => "f",
        3 => "g", 33 => "h", 333 => "i",
        4 => "j", 44 => "k", 444 => "l",
        5 => "m", 55 => "n", 555 => "o",
        6 => "p", 66 => "q", 666 => "r",
        7 => "s", 77 => "t", 777 => "u",
        8 => "v", 88 => "w", 888 => "x",
        9 => "y", 99 => "z", 999 => ".",
        0 => " ", 00 => "+", 000 => "*"
    ];
    public function getValue($enteredValue)
    {

        if (!isset($enteredValue) || !$enteredValue) { //check exist or not empty
            header("location:../index.php?error=empty value");
            exit();
        } elseif (is_array($enteredValue)) { // if is array then send to "check first character"
            $this->verificationFirstCharacter($enteredValue);
        } elseif (is_int($enteredValue)) { // if is numeric then send to convertToString()
            $this->verificationIntiger($enteredValue);
        } elseif (is_string($enteredValue)) { // if is string check if contains "," if not send to convertToNumeric()
            // maybe string contain wrong character then stop. 
            
            $result = explode(",", $enteredValue);
            $this->verificationFirstCharacter($result);
        } else { // "invalid value"

        }
    }

    private function convertToNumeric()
    {
    }

    private function convertToString()
    {
    }

    private function verificationFirstCharacter($enteredValue) //here you should take from array the first letter from the zero element
    {
        $firstWord =$enteredValue[0];
        
    }

    private function verificationIntiger()
    {
    }

    private function verificationString()
    {
    }
    //check value empty - not goood, we want : string, number array

}

$tablicaDoZmianyNumery = [33, 22, 444, 444, 555];
$tablicaDoZmianyTekst = ["w", "o", "r", "d"];


?>
<!-- weryfikacja:
1. sprawdzamy co dostajemy i czy jest to tablica; //R
2. sprawdzamy czy tablica jest pusta // R
3. weryfikujemy pierwszy znak tablicy czy jest to nr lub litera plus spacja lub przecinek //
4. jeżeli jest numer to sprawdzamy czy wszystkie znaki są numerami i analogicznie do litery plus spacja przecinek

tłumaczenie:
1. zlecamy tłumaczenie cyfr na znaki
2. zlecamy tłumaczenie znaków na cyfry i drukujemy komunikat
 -->