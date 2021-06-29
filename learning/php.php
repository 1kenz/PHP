<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        // echo "Merhaba.<br>";
        // // echo "<br>";
        // print("yazı.<br>");
        // // echo "<br>";
        // print("merhaba");   
        
        // VARIABLES
        // $variableName
        // $coding = 25;

        // $design = 55;

        // echo $coding.$design;
        // echo "<br>";
        // echo "$coding $design";

        // CAN'T CREATE VAR
        // $1var = 5; // it is rise an error


        // comment
        # comment

        // aritmetic operations
        // $number1 = 50;
        // $number2 = 10;
        // $number3 = 105;
        // $number4 = 25;
        // $number5 = 7;

        // echo $number1 * $number2 / $number3 + $number4 - $number5

        // FUNCTIONS
        // $word = "HI how are you?";
        // echo strlen(utf8_decode($word)); // türkçe vs. dilleri tanımasını sağlamak için
        // echo str_word_count($word);
        // echo strrev($word);  // tersten yazdırma
        // echo strtolower($word);  // küçük harf olarak yazdırma
        // echo substr($word, 0, 8);  // harf aralığı yazdırma

        // FUNCTIONS-2
        // $number = 20;

        // $number++;  // first number then +1
        // $number--;  // first number then -1
        // ++$number;  // number +1
        // --$number;  // number -1

        // echo --$number;  // 19
        // echo ++$number;  // 21

        // QUOTES
        // echo 'hello "number"';  // hello "number"
        
        // echo 'hello "number"';  // hello "number"
        
        // $number = 7;

        // echo "hello '$number' ";  // hello 'number'
        
        // echo 'hello "$number"';  // hello '7'

        // Escape sequence
        // echo 'hello \'number\'';  // hello "number"
        // echo "<br>";
        // echo "hello \"number\"";  // hello "number"

        // CONDITIONALS
        
        // $clock = 20;
        // if ($clock==5) {
        //     echo "Wake up time";
        // }
        // elseif ($clock == 20) {
        //     echo "Sleep time";
        // }
        // else {
        //     echo "Free time";
        // }

        // $clock = 12;

        // if ($clock >= 1 & $clock < 12) {
        //     echo "Good morning";
        // }
        // elseif ($clock >= 12 & $clock < 20) {
        //     echo "Good evening";
        // }
        // else {
        //     echo "Good night";
        // }

        // SWITCH-CASE
        // switch ($clock) {
        //     case '1':
        //         echo "Good morning";
        //         break;
            
        //     default:
        //         echo "time is passing";
        //         break;
        // }

        // WHILE
        // $a = 5;
        // while ($a <= 10) {
        //     echo "$a";
        //     echo "<br>";
        //     $a++;
        // }

        // FOR
        // for ($i=0; $i < 10 ; $i++) { 
        //     echo "$i";
        //     echo "<br>";
        // }
        // for ($i=0; $i < 10 ; $i+=5) { 
            //     echo "$i";
            //     echo "<br>";
            // }

        // RANDOM
        // $randomNumber = rand(1,20);
        // echo $randomNumber;
    ?>

<!-- FORM OPERATIONS -->
        <!-- <form action="result.php" method="POST">
            <input type="text" name="name" id="name">
            <button type="submit">Submit</button>
        </form> -->

<!-- FORM OPERATIONS-2 -->
<form action="result.php" method="POST" >
    <input type="text" name="name">
    <button name="submit" type="submit" >Submit</button>
</form>

</body>
</html>