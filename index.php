<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $convert = [
        "a" => "2",
        "b" => "22",
        "c" => "222",
        "d" => "3",
        "e" => "33",
        "f" => "333",
        "g" => "4",
        "h" => "44",
        "i" => "444",
        "j" => "5",
        "k" => "55",
        "l" => "555",
        "m" => "6",
        "n" => "66",
        "o" => "666",
        "p" => "7",
        "q" => "77",
        "r" => "777",
        "s" => "7777",
        "t" => "8",
        "u" => "88",
        "v" => "888",
        "w" => "9",
        "x" => "99",
        "y" => "999",
        "z" => "9999",
        " " => "0"
    ];



    $enteredValue = " ala"; //value from API
  // $enteredValue = "22,666,22,2";
    $returnedValue = "";   // value back to API
    $enternedArray = explode(",", $enteredValue);
    function assignToArray($firstCharacterNew){
       // var_dump($firstCharacterNew);
        $patern ="";
        echo "<br>";
        if(preg_match( "/[0-9] /",$firstCharacterNew)){
            echo "number 1";
            return "number";
        }elseif(preg_match( "/[a-zA-Z\s]/",$firstCharacterNew)){
            echo "text";
            return "text";
        }else{
            echo "error";
            return $firstCharacterNew;
        }
    }
    

    
    function verificationFirstCharacter($enteredValue)
    {
       // global $returnedValue;
        $firstCharacter=substr($enteredValue, 0,1);
        // $returnedValue = $firstCharacter;
        // return $returnedValue;
       // echo $firstCharacter."<br>";
       return assignToArray($firstCharacter);
    }
   
    

    
    
    
    var_dump( verificationFirstCharacter($enteredValue));


    echo $returnedValue;
    ?>

    <br>-----------------<br>
    <?php
    include "phoneKeyboard/keybord1.php";
    ?>
    <br>-----------------</br>


    <?php

    ?>
</body>

</html>