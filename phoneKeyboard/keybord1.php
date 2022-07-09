<?php

class PhoneKeyboardConverter
{


   

    public function getValue($enteredValue)
    {

        if (!isset($enteredValue) || !$enteredValue) { //check exist or not empty
            header("location:../index.php?error=emptyValue");
            exit();
        } elseif (is_string($enteredValue)) { // if is string //check if contains "," if not send to convertToNumeric()
            // maybe string contain wrong character then stop. 

            $result = explode(",", $enteredValue);
            $this->verificationFirstCharacter($result);
        
        
        } 
        // elseif (is_array($enteredValue)) { // if is array // then send to "check first character"
        //     $this->verificationFirstCharacter($enteredValue);
        // } elseif (is_int($enteredValue)) { // if is numeric // then send to convertToString()
        //     $this->verificationIntiger($enteredValue);
        // }
         else { // "invalid value"
            header("location:../index.php?error=invalidValue");
            exit();
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
        $firstWord = $enteredValue[0];
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