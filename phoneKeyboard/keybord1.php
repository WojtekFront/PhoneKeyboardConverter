<?php

class PhoneKeyboardConverter
{
    function __construct($enteredValue)
    {
        $this->enteredValue = $enteredValue;
    }
    public $convert = [
        "a" => "2", "b" => "22", "c" => "222",
        "d" => "3", "e" => "33", "f" => "333",
        "g" => "4", "h" => "44", "i" => "444",
        "j" => "5", "k" => "55", "l" => "555",
        "m" => "6", "n" => "66", "o" => "666",
        "p" => "7", "q" => "77", "r" => "777", "s" => "7777",
        "t" => "8", "u" => "88", "v" => "888",
        "w" => "9", "x" => "99", "y" => "999", "z" => "9999",
        " " => "0", "error" => "error"
    ];

    public $returnedValue = "";

    public function getValue($enteredValue)
    {

        if (!isset($enteredValue) || !$enteredValue) { //check exist or not empty
            return "brak danych";
        } elseif (is_string($enteredValue)) {
            return $this->verificationFirstCharacter($enteredValue);
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

    function verificationFirstCharacter($enternedArray) // here we check the first character in the array
    { 
        $firstCharacter = substr($enternedArray, 0, 1);
        return $this->assignToArray($firstCharacter, $enternedArray);
    }

    function assignToArray($firstCharacterNew, $enternedArray)
    {
        if (is_numeric($firstCharacterNew)) {
            $numericValue = $this->convertToString($enternedArray);
            return $numericValue;
        } elseif (preg_match("/[a-zA-Z\s]/", $firstCharacterNew)) {
            $stringValue = $this->convertToNumeric($enternedArray);
            return $stringValue;      
        } else {
            return "niepoprawna wartość";
        }
    }

    function convertToString($enternedArray) //change number na string
    {
        $convert =$this-> convert; 
        $returnedValue =$this-> returnedValue;
        $enternedArray = explode(",", $enternedArray);
        for ($n = 0; count($enternedArray) > $n; $n++) {
            if(!is_numeric($enternedArray[$n])){
                $enternedArray[$n] ="error";
                           }
            foreach ($convert as $keyEnternedArrayWord => $enternedArrayWord) {
                if ($enternedArrayWord == $enternedArray[$n]) {
                    $returnedValue = $returnedValue . $keyEnternedArrayWord;
                }
            }
        }
        return $returnedValue;
    }

    function convertToNumeric($enternedArray) //change string to number
    { 
        $convert =$this-> convert; 
        $returnedValue =$this-> returnedValue;
        $enternedArray = str_split(strtolower($enternedArray));
        for ($n = 0; (count($enternedArray)) > $n; $n++) {
            if ($returnedValue != "") {
                $returnedValue = $returnedValue . ",";
            }
            if(!preg_match("/[a-zA-Z\s]/", $enternedArray[$n])){
 $enternedArray[$n] ="error";
            }
            $returnedValue = $returnedValue . $convert[$enternedArray[$n]];
        }
        return $returnedValue;
    }
}

$newSting = "22,22";
$test = new PhoneKeyboardConverter($newSting);
echo $test-> getValue($newSting);










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