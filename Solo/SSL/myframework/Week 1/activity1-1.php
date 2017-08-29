<?php

//							PART ONE

class Act1 {
    function act1test(){
        echo "Activity 1-1 <br><br><br>";
    }

    //PART TWO
    function part2($n, $a) {
        $name = $n;
        $age = $a;

        $personI = array($name, $age);
        $person = array("Name"=>$name, "Age"=>$age);

        echo "<br>1. My name is $name and my age is $age.";

        echo '<br>2. My name is ' . $name . ' and my age is ' . $age . '.';

        echo "<br>3. My name is " . $personI[0] . " and my age is " . $personI[1] . ".";

        echo "<br>4. My name is " . $person["Name"] . " and my age is " . $person["Age"] . ".";
    }

    //PART THREE
    function part3($g){
        $grade = $g;

        if ($grade < 60) {
            $grade = "F";
        } elseif ($grade < 70) {
            $grade = "D";
        } elseif ($grade < 80) {
            $grade = "C";
        } elseif ($grade < 90) {
            $grade = "B";
        } elseif ($grade <= 100) {
            $grade = "A";
        } else {
            $grade = "Grade over 100.";
        }

        return $grade;
    }

    //PART FOUR
    function part4() {
        $colors = array("Purple", "Lavendar", "Blue", "Cerulean", "Green", "Chartreuse", "Orange", "Peach", "Red", "Rose");
        $colorsLen = count($colors);

        for($i = 0; $i < $colorsLen; $i++) {
            echo "<br>Color " . $i . " is " . $colors[$i];
        }
    }
}

$act1Var = new Act1();

$act1Var->act1test();


//							PART TWO
echo "PART 2<br>";

$name = "Nicole";
$age = 27;
$act1Var->part2($name, $age);

//5.
$age = null;
echo "<br><br>5. " . $age . "<br>";
//Result: ''

//6.
unset($name);
echo "6. " . $name;
//Result: 'Notice: Undefined variable: name in /var/www/html/myframework/Week 1/activity1-1.php on line 35'
//Result: ''



//							PART THREE
echo "<br><br><br>PART 3<br>";


echo "<br>1. " . $act1Var->part3(94);
//Result: 'A'

echo "<br>2. " . $act1Var->part3(54);
//Result: 'F'

echo "<br>3. " . $act1Var->part3(89.9);
//Result: 'B'

echo "<br>4. " . $act1Var->part3(60.01);
//Result: 'D'

echo "<br>5. " . $act1Var->part3(102.1);
//Result: 'Grade over 100.'



//							PART FOUR
echo "<br><br><br>PART 4<br>";

$act1Var->part4();



?>