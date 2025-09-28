<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice-1</title>
</head>
<body>



<?php 
    $food = 'pizza';
    $Food = 'Burger';    
    echo 'I love to eat ' . $food . '<br>';

echo '<br>';//for space
echo '<br>'; //for space
echo '<br>'; //for space

/*
masudrana
masudrana
masud_rana
masud-rana
*/ 

// $age = 10;
// $_age = 20;
// $age7 = 20;

$age = 40;
echo 'My age is ' . $age . ', I study in class 12' . '<br>';

echo '<br>';//for space
echo '<br>'; //for space
echo '<br>'; //for space

?>

<?php 
    $x = 15;
    $y = 45;

    echo $x + $y . '<br>';
    echo $x + $y . '<br>';
    print $x + $y . '<br>';
    print $x + $y . '<br>';

    $foods = print('Drinks');
    echo $foods;

echo '<br>';//for space
echo '<br>'; //for space
echo '<br>'; //for space

    $name = 'Masud';
    $name2 = 'Rana';
    $age1  = 30;
    $age2 = 37.5;
    $religion = true;
    $fruits = array('Apple', 'Banana', 'Plum');
    $null = null .'<br>';

    var_dump($null);

    echo '<br>';//for space
    echo '<br>'; //for space
    echo '<br>'; //for space

    //PHP object  **************************
    class phone {
        var $model;
        function phoneModel ($number){
            global $model;
            $model = $number;
            echo "This is $model <br>";
        }
    }
    $apple = new phone;
    $apple-> phoneModel('iphone 13');
    $samsung = new phone;
    $samsung-> phoneModel('S21 Ultra');
    $lg = new phone;
    $lg-> phoneModel('upcoming');

    echo '<br>';//for space
    echo '<br>'; //for space
    echo '<br>'; //for space

 //PHP String *************************

    echo strlen('I love to eat Pizza'); //for string er length check
    echo '<br>';
    echo str_word_count('I love to eat Pizza'); //for string er word count  
    echo '<br>';
    echo strrev('I love to eat Pizza'); //for string er word er reverse 
    echo '<br>';
    echo strpos('I love to eat Pizza', 'to'); //for string er length position
    echo '<br>';
    echo str_replace('Pizza', 'Burger','I love to eat Pizza'); //for string er length position
    
    echo '<br>';//for space
    echo '<br>'; //for space
    echo '<br>'; //for space

//php number *******************

echo (pi()); //pie er value
echo '<br>';
echo (min(10, 5, 14, 3, 78));// Minimum number search
echo '<br>';
echo (max(10, 5, 14, 3, 78));// Maximum number search
echo '<br>';
echo (rand(1, 6));// Random number search like lodo goti
echo '<br>';

//variable php
$x = 5;
$y = 10;

echo ($x);

echo '<br>';//for space
echo '<br>'; //for space
echo '<br>'; //for space

//constant php ********************

define('a', 17);
define('A',18);
define('cars', ['BMW', 'Toyota', 'Mazda']);

echo (cars[2]);
var_dump(cars ); //for checking data type

echo '<br>';
echo '<br>';
echo '<br>';

//php math ***********************

$b = 30;
$c = 4;

echo $b + $c; //jog kora

echo '<br>';

echo $b - $c; //biyog kora

echo '<br>';

echo $b * $c; //gon kora

echo '<br>';

echo $b / $c; //vag kora

echo '<br>';

echo $b % $c; //vagshes barkora

echo '<br>';

echo $b ** $c; //for power - qube and square

echo '<br>';
echo '<br>';

// php assaignment operator*********************

// $e = 3;
// $f = 5;

// $e += $f; //$e = $e + $f; 

// $e -= $f; //$e = $e + $f; 

// $e *= $f; //$e = $e + $f; 

// $e /= $f; //$e = $e + $f; 

// $e %= $f; //$e = $e + $f; 

// echo $e;


echo '<br>';
echo '<br>';

// php if and else********************

//  $date = date('H');

//  if($date < 8){
//     echo 'Good Morning' . $date;
//  }else{
//     echo 'Have a nice day!';
//  }
 
if(23 < 22){
echo 'Good Morning';
}elseif(22 < 21){
    echo 'nice day';
}else{
     echo 'Have a nice day!';
 }

 echo '<br>';
 echo '<br>';

 //php switch *******************

 switch('blue'){
    case 'red':
        echo 'Apple is red'; 
        break;
    case 'green':
        echo 'Mango is green'; 
        break;
    default: 
        echo 'I love to eat fruits';
 }

echo '<br>';
echo '<br>';

 //php loop *****************

  $x = 0;

//   while($x <= 5){
//     echo "The number is: $x <br>";
//     $x++; //ak ak kore barbe
//   }

//do while loop works as same as while loop***************

// do{
//     echo "The number is: $x <br>";
//     $x++;
// }while($x <= 50);

//for loop **********************

for($y = 0; $y <= 10; $y++){
    echo "The number is: $y <br>";
}

echo '<br>'; //for space
echo '<br>'; //for space

for($z = 0; $z <= 20; $z+=5){
    echo "The number is: $z <br>";
}

echo '<br>'; //for space
echo '<br>'; //for space

//php function *******************

function test_name($name, $age = 2){
  echo "This is $name, I am $age <br>"; //use $age = 2 for ignoring error
}
test_name("Masud", 37);
test_name("Mehrab", 9);
test_name("Shabiha");


echo '<br>'; //for space
echo '<br>'; //for space

//php date and time *******************

date_default_timezone_set("Asia/Dhaka"); // for Timezone (like Bangladesh)
echo "Today is " . date("d-m-Y") . "<br>"; //for date
echo "It is " . date("h:i:sa") . "<br>";  // for time

?> 




</body>
</html>