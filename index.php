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

    $name = 'Masud';
    $name2 = 'Rana';
    $age1  = 30;
    $age2 = 37.5;
    $religion = true;
    $fruits = array('Apple', 'Banana', 'Plum');
    $null = null .'<br>';

    var_dump($null);

    //PHP object  
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

 //PHP String
    echo strlen('I love to eat Pizza'); //for string er length check
    echo '<br>';
    echo str_word_count('I love to eat Pizza'); //for string er word count  
    echo '<br>';
    echo strrev('I love to eat Pizza'); //for string er word er reverse 
    echo '<br>';
    echo strpos('I love to eat Pizza', 'to'); //for string er length position
    echo '<br>';
    echo str_replace('Pizza', 'Burger','I love to eat Pizza'); //for string er length position
    echo '<br>';
//php number
echo (pi()); //pie er value
echo '<br>';
echo (min(10, 5, 14, 3, 78));// Minimum number search
echo '<br>';
echo (max(10, 5, 14, 3, 78));// Maximum number search
echo '<br>';
echo (rand(1, 6));// Random number search like lodo goti


?>




</body>
</html>