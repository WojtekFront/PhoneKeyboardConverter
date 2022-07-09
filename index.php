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



    $enteredValue = "ala"; //value from API
    $enteredValue = "22,666,22,2";
    $returnedValue = "";   // value back to API
    $enternedArray = explode(",", $enteredValue);


    if (false) {
        foreach ($enternedArray as $enternedArrayWord) {
            foreach ($enternedArrayLetter as $newValueFromConvert) {
                $enternedArrayLetter = str_split($enternedArrayWord);
                if ($returnedValue != "") {
                    $returnedValue = $returnedValue . ",";
                }
                $returnedValue = $returnedValue . $convert[$newValueFromConvert];
            }
        }
    } elseif (true) {

        for ($n = 0; count($enternedArray) > $n; $n++) {
            foreach ($convert as $keyEnternedArrayWord => $enternedArrayWord) {

                if ($enternedArrayWord == $enternedArray[$n]) {
                    $returnedValue = $returnedValue . $keyEnternedArrayWord;
                }
            }
        }
    } else {

        $returnedValue = "error";
    }


    echo $returnedValue;
    ?>

    <br>-----------------<br>
    <?php
    include "phoneKeyboard/keybord1.php";
    ?>
    <br>-----------------</br>


    <?php
    $arrayx = array(
        'fruit1' => 'apple',
        'fruit2' => 'orange',
        'fruit3' => 'grape',
        'fruit4' => 'apple',
        'fruit5' => 'apple'
    );

    // this cycle echoes all associative array
    // key where value equals "apple"
    while ($fruit_namex = current($arrayx)) {
        if ($fruit_namex == 'apple') {
            echo key($arrayx), "\n";
        }
        next($arrayx);
    }
    ?>
</body>

</html>