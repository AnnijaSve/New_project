<?php

//https://git.codelex.io/learn/php-syllabus
//01 - VARIABLES& DATA TYPES
//Exercise 1
$int = 10;
$float = 10.10;
$str = "hello world";
echo "$int, $float, $str",PHP_EOL;

//Exercise 2
var_dump($int, $float, $str, PHP_EOL);

//Exercise 3
$name = 'Annija';
$surname = 'Švegžda';
$age = 27;
echo $name . ' '. $surname . ' ' .$age;

//02 - IF, ELSE, ELSEIF & SWITCH
//Exercise 1
$int = 10;
$str = '10';
    if ($str == $int) {
    echo 'Both are the same' ;
} else {
    echo 'Both are not the same';
}

//Exercise 2
    $int = 50;
    if ($int > 1 && $int <100) {
        echo 'Its in the range of 1 and 100.';
    }

//Exercise 3
$hello = "hello";
    if ($hello == "hello") {
        echo $hello . ' ' . 'world';
    }

//Exercise 4
$x = 2;
$y = 1;
if (3 < $x & 3 < $y & 3 % 2 ==0 ) {
    echo $x . ' '. 'is greater tha 3,'. ' '. $y . ' '. 'is greater than 3,' .' '. '3 is an even.', PHP_EOL ;
} else {
    echo $x . ' '. 'is less tha 3,'. ' '. $y . ' '. 'is less than 3,' .' '. '3 is not an even.', PHP_EOL ;
}

//Exercise 5
$int = 50;
$y = 1;
$z = 60;
if ( $int > $y && $int < $z) {
    echo 'Correct';
}

//Exercise 6
$plateNumber = 'KM2943';
switch ($plateNumber) {
    case 'OP3123':
        echo 'Your cars plate number is OP3123';
        break;
    case 'KM2943':
        echo 'Your cars plate number is KM2943';
        break;
}

//Exercise 7
$number = 120;
switch ($number) {
    case $number < 50:
        echo 'low';
        break;
    case $number > 50 && $number < 100:
        echo 'medium';
        break;
    case $number > 100:
        echo 'high';
        break;
}

//03 - ARRAY & OBJECTS

//Exercise 1

$numbers = array(1, 2 ,3 );
echo array_sum($numbers);

//Exercise 2

$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];
var_dump($person);

//Exercise 3

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->surname = 50;

var_dump($person);

//Exercise 4

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo $items[0][1]["name"] . ' ' . $items[0][1]["surname"] . ' ' . $items[0][1]["age"] ;


//Exercise 5

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
echo $items[0][0]["name"] . '&' .$items[0][1]["name"] . ' ' . $items[0][1]["surname"] . '`s';

//04 - Loops

//Exercise 1

$integers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
foreach ($integers as $value) {
    echo "$value" , PHP_EOL;
}

//Exercise 2

$integers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10 );
for ($x = 1; $x <= count($integers); $x++) {
    echo $x, PHP_EOL;
}

//Exercise 3

$x = 1 ;
while($x < 10) {
    echo "codelex", PHP_EOL;
    $x++;
}

//Exercise 4

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
for ($x = 1; $x <= max($numbers); $x++) {
    if ($x % 3 == 0) {
        echo $x, PHP_EOL;
    }
}

//Exercise 5

$persons = [

        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 27,
            "birthday" => '12.07.1993.'
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 25,
             "birthday" => '18.01.1995.'
        ]

];
foreach ( $persons as $person ) {
    echo $person, PHP_EOL;
    foreach ($person as $key => $value) {
        echo $value, PHP_EOL;
    }
}

//05 - Functions

//Exercise 1

$str = 'Hello';
function addName($str) {
    return $str . ' ' .'codelex';
}
print addName($str);

//Exercise 2

$x = 2;
$y = 4;
function multiply($x, $y){
    return $x * $y;
}
print multiply($x,$y);

//Exercise 3
$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;

function checkAge($person)
{
    if ($person->age > 18) {
        print 'person has reached age of 18 ';
    }else{
        print  'person hasn`t reached age of 18';
    }
}
checkAge($person);

//Exercise 4

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;

foreach ($person as $key => $value)
    $x=1;
    if ($person->age > 18) {
        print 'person has reached age of 18';
    } else {
        print  'person hasn`t reached age of 18';
    }


//Exercise 5

$fruits = [
[
    'name' => 'Apple',
    'weight' => 5
    ],
    [
    'name' => 'Orange',
    'weight' => 12
    ]
];
$costs =[
    [
     'name'=> 'S',
        'price'=> 1

    ],
    [
    'name'=> 'M',
    'price'=> 2

]
];
foreach ($fruits as $fruit)
{
    echo $fruit['name'] . ' ';

    switch($fruit['weight'])
    {
        case  $fruit['weight'] <=10;
        echo  $costs[0]['name'] .' '. 'price $'. $costs[0]['price'], PHP_EOL;
        break;
        case  $fruit['weight'] > 10;
            echo  $costs[1]['name']. ' '. 'price $'. $costs[1]['price'], PHP_EOL;
            break;
        default:
            echo 'We can`t send the package';
    }
}

//Exercise 6

$numbers = array(1, 2, 3, 1.5, 'hello');

foreach ($numbers as $element) {
    if (is_int($element)) {
        echo $element * 2, PHP_EOL;
    }
};

//Exercise 7

$guns = [
    [
        "name" => "Gun_1",
        "price" => 150,
        "license" => "PR13",
    ],
    [
        "name" => "Gun_2",
        "price" => 80,
        "license"=> "PR15",
    ],
];
$persons = [

    "name" => 'John',
        "cash" => 100,
        "license_1" => "PR10",
        "secondLicense" => "PR15",

];
foreach ($guns as $gun) {
    echo $gun['name'] . ' ', PHP_EOL;


        {
            switch ($gun) {
                case  $gun["price"] < $persons["cash"] and $gun['license'] == $persons['license_1'] ||  $gun['license'] == $persons["secondLicense"];
                    echo 'You can buy this one', PHP_EOL;
                    break;
                case  $gun['price'] > $persons['cash'] ; $gun['license'] == $persons['license_1'] ||  $gun['license'] == $persons["secondLicense"];
                    echo 'not enough money', PHP_EOL;
                    break;
                case  $gun['price'] < $persons['cash'] ; $gun['license'] !== $persons['license_1'] || $gun['license'] !== $persons["secondLicense"];
                    echo 'not valid license', PHP_EOL;
                    break;
                case  $gun['price'] > $persons['cash'] and $gun['license'] !== $persons['license_1'] || $gun['license'] !== $persons["secondLicense"];
                    echo 'not valid license and not enough money', PHP_EOL;



            }
        }
    }

//arithmetic-operations/https://github.com/codelex-io/php-syllabus/tree/main/php-basics/
//Arithmetic Operations
//Exercise #1

$x= 5;
$y= 20;

function checkNumbers($x, $y)
{
    if ($x == 15 || $y == 15 || $x + $y = 15 || $x - $y = 15 || $y - $x = 15) {
        echo 'True ', PHP_EOL;
    }
}
checkNumbers($x,$y);

//Exercise #2

$x = 10;
function CheckOddEven($x)
{
    if ( $x % 2 == 0) {
        echo 'Number is even number ', PHP_EOL;
    }else{
        echo 'Number is odd number ', PHP_EOL;
    }
}
CheckOddEven($x);
echo 'bye!' , PHP_EOL;

//Exercise #3

$x = 1;
$y = 100;
function math($x, $y) {
   return array_sum(range($x,$y,1));
}
echo 'The sum of ' . $x . ' to ' . $y.  ' is ' . math($x,$y), PHP_EOL;
echo 'The average is ' .math($x,$y)/$y;

//Exercise #4

function factorial($x) {
    $x = 1;
    for ($i = 1; $i <= 10; $i++) {
        $x *= $i;
    }

    return $x;
}
echo factorial($x);

//Exercise #5

$pc = rand(0,100);
$input = (int) readline('enter Your number');

while ($input !== $pc) {

    $input = (int)readline('number:');
    if ($input === $pc) {
        echo 'Correct';

    } else if
    ($input > $pc) {
        echo 'Lower';
    } else {
        echo 'Higher';
    }

    echo PHP_EOL;
}

//Exercise #6

for ($x = 1; $x < 110; $x++) {

    if ($x % 3 == 0 && $x % 5 == 0) {
        echo ' CozaLoza ';
        continue;
    }  elseif ($x % 11 == 0){
        echo $x ,PHP_EOL;
        continue;
    } elseif ($x % 3 == 0) {
        echo ' coza ';
        continue;
    } elseif ($x % 5 == 0) {
        echo ' loza ';
        continue;
    } elseif ($x % 7 == 0) {
        echo ' woza ';
        continue;
    }
    echo $x. ' ' ;
    };

//Exercise #7

$a = -9.81;
$t = 10;
$v = 0;
$x = 0;

function myFunction($a,$t,$v,$x){
    return 0.5 * $a * $t**2 + $v + $x;
}
echo myFunction($a, $t, $v,$x) . 'm', PHP_EOL;

//Exercise #8

$employers = [
    [
        "name" => "Employee 1",
        "base pay" => 7.50,
        "hours worked" => 35,
    ],
    [
        "name" => "Employee 2",
        "base pay" => 8.20,
        "hours worked" => 47,
    ],
    [
        "name" => "Employee 3",
        "base pay" => 10,
        "hours worked" => 73,
    ],
];
foreach ($employers as $employer) {
    echo $employer['name'] . ' ', PHP_EOL;


        {
            switch ($employer) {
                case $employer["hours worked"] > 60;
                    echo 'Error', PHP_EOL;
                    break;
                case $employer['hours worked'] > 40;
                    echo $employer['base pay'] * 40 + ($employer['hours worked'] - 40) * ($employer['base pay'] * 1.5 ) . '$', PHP_EOL;
                    break;
                case $employer['base pay'] < 8 ;
                    echo 'Error', PHP_EOL;


            }
        }
    }

//Exercise #9

$weight = 55;
$height = 1.73;
    if (($weight / 0.4535 * 703) / (($height / 0.0254) ** 2) <18.5 ){
        echo 'Your BMI index is ' . ($weight / 0.4535 * 703) / (($height / 0.0254) ** 2). '.'  .' You are underweight ';
    }  elseif (($weight / 0.4535 * 703) / (($height / 0.0254) ** 2) >= 25 ){
        echo 'Your BMI index is ' . ($weight / 0.4535 * 703) / (($height / 0.0254) ** 2). '.'  .' You are overweight ';
    }

//Exercise #10

$input = (int) readline('Geometry calculator: enter 1 = Calculate the Area of a Circle, 2 = Calculate the Area of a 
Rectangle, 3 = Calculate the Area of a Triangle, 4 = Quit, Enter your choice (1-4) :');
if ( $input > 4){
    echo 'Error';
}
    if ($input == 1 ) {
        echo $input1 = (int) readline('enter radius'), PHP_EOL;
                echo 'Area of circle is:' . (pi() * $input1 * 2);
            } else if ($input == 2) {
                echo $input2 = (int)readline('enter length'), PHP_EOL;
                echo $input3 = (int)readline('enter width'), PHP_EOL;
                echo 'Area of rectangle is: ' . $input2 * $input3;
            } else if ($input == 3) {
        echo $input4 = (int)readline('enter base'), PHP_EOL;
        echo $input5 = (int)readline('enter height'), PHP_EOL;
        echo 'Area of triangle is: ' . $input4 * $input5 * 0.5;


        }

//Flow of Control
//Exercise #1

$input = (int) readline('Type number 1st');
$input1 = (int) readline('Type number 2nd ');
$input2 = (int) readline('Type number 3rd ');
echo 'Maximum number is: '. max($input, $input1, $input2), PHP_EOL;

//Exercise #2

$input = (int) readline('Type number');
if ($input > 0) {
    echo 'Number is positive', PHP_EOL;
} elseif ($input < 0){
    echo 'Number is negative', PHP_EOL;
}

//Exercise #3

$x= 58;
if ($x > 0){
    echo strlen((string) $x), PHP_EOL;
}

//Exercise #4

$dayNumber = 6;

switch ($dayNumber) {
    case "1":
        echo "Today is Monday";
        break;
    case "2":
        echo "Today is Tuesday";
        break;
    case "3":
        echo "Today is Wednesday";
        break;
    case "4":
        echo "Today is Thursday";
        break;
    case "5":
        echo "Today is Friday";
        break;
    case "6":
        echo "Today is Saturday";
        break;
    case "7":
        echo "Today is Sunday";
        break;
    default:
        echo "Not a valid day!";
}

$dayNumber = 10;
if ($dayNumber == 1) {
    echo 'Today is Monday', PHP_EOL;
} elseif ($dayNumber == 2){
    echo 'Today is Tuesday', PHP_EOL;
}elseif ($dayNumber == 3) {
    echo 'Today is Wednesday', PHP_EOL;
} elseif ($dayNumber == 4){
    echo 'Today is Thursday', PHP_EOL;
} elseif ($dayNumber == 5){
    echo 'Today is Friday', PHP_EOL;
} elseif ($dayNumber == 6){
    echo 'Today is Saturday', PHP_EOL;
} elseif ($dayNumber == 7){
    echo 'Today is Sunday', PHP_EOL;
} else {
    echo 'Not a valid day!', PHP_EOL;
}

//Exercise #5

$buttons = 'A(2) B(2,2) C(2,2,2), D(3) E(3,3) F(3,3,3), G(4) H(4,4) I(4,4,4),
J(5) K(5,5) L(5,5,5), M(6) N(6,6) O(6,6,6), P(7) Q(7,7) R(7,7,7) S(7,7,7,7),
T(8) U(8,8) V(8,8,8), W(9) X(9,9) Y(9,9,9) Z(9,9,9,9), space(0), exit(1)';

$text = [];
$input = "";

while ($input != 1) {
    echo "\n$buttons";
    echo "\nType number here :";
    $input = readline("\n");
    switch ($input) {
        case "2":
            $text[] = "a";
            echo "Your text: " . implode("", $text);
            break;
        case "22":
            $text[] = "b";
            echo "Your text: " . implode("", $text);
            break;
        case "222":
            $text[] = "c";
            echo "Your text: " . implode("", $text);
            break;
        case "3":
            $text[] = "d";
            echo "Your text: " . implode("", $text);
            break;
        case "33":
            $text[] = "e";
            echo "Your text: " . implode("", $text);
            break;
        case "333":
            $text[] = "f";
            echo "Your text: " . implode("", $text);
            break;
        case "4":
            $text[] = "g";
            echo "Your text: " . implode("", $text);
            break;
        case "44":
            $text[] = "h";
            echo "Your text: " . implode("", $text);
            break;
        case "444":
            $text[] = "i";
            echo "Your text: " . implode("", $text);
            break;
        case "5":
            $text[] = "j";
            echo "Your text: " . implode("", $text);
            break;
        case "55":
            $text[] = "k";
            echo "Your text: " . implode("", $text);
            break;
        case "555":
            $text[] = "l";
            echo "Your text: " . implode("", $text);
            break;
        case "6":
            $text[] = "m";
            echo "Your text: " . implode("", $text);
            break;
        case "66":
            $text[] = "n";
            echo "Your text: " . implode("", $text);
            break;
        case "666":
            $text[] = "o";
            echo "Your text: " . implode("", $text);
            break;
        case "7":
            $text[] = "p";
            echo "Your text: " . implode("", $text);
            break;
        case "77":
            $text[] = "q";
            echo "Your text: " . implode("", $text);
            break;
        case "777":
            $text[] = "r";
            echo "Your text: " . implode("", $text);
            break;
        case "7777":
            $text[] = "s";
            echo "Your text: " . implode("", $text);
            break;
        case "8":
            $text[] = "t";
            echo "Your text: " . implode("", $text);
            break;
        case "88":
            $text[] = "u";
            echo "Your text: " . implode("", $text);
            break;
        case "888":
            $text[] = "v";
            echo "Your text: " . implode("", $text);
            break;
        case "9":
            $text[] = "w";
            echo "Your text: " . implode("", $text);
            break;
        case "99":
            $text[] = "x";
            echo "Your text: " . implode("", $text);
            break;
        case "999":
            $text[] = "y";
            echo "Your text: " . implode("", $text);
            break;
        case "9999":
            $text[] = "z";
            echo "Your text: " . implode("", $text);
            break;
        case "0":
            $text[] = " ";
            echo "Your text: " . implode("", $text);
            break;
        case "1":
            break;

    }
}
echo "Your wrote:" . implode("",$text) , PHP_EOL;

//Arrays
//Exercise #1

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];
$string = implode(',', $numbers);
echo "Original numeric array: " . $string , PHP_EOL;

sort($numbers);
$nlength = count($numbers);
for($x = 0; $x < $nlength; $x++) {
    $nlength=1;
    $string = implode(',', $numbers);
    echo 'Sorted numeric array: '. $string , PHP_EOL;
}

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];
$string = implode(', ', $words);
echo "Original string array: " . $string , PHP_EOL;

sort($words);
$wlength = count($words);
for($x = 0; $x < $wlength; $x++) {
    $wlength = 1;
    $string = implode(', ', $words);
    echo 'Sorted numeric array: ' . $string, PHP_EOL;
}

//Exercise #2

$numbers = [20, 30, 25, 35, -16, 60, -100];

function math($numbers) {
   return array_sum($numbers);
}
echo 'The average is ' . math($numbers)/count($numbers) , PHP_EOL;

//Exercise #3

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];
echo "Enter the value to search for: ", array_search("1254",$numbers ) ? "Number is in array": "Number is not in array" ,PHP_EOL;

//Exercise #4
$random_number = (rand(1,100). " " . rand(1,100). " " . rand(1,100). " " . rand(1,100). " " . rand(1,100). " " .
    rand(1,100). " " . rand(1,100). " " . rand(1,100). " " . rand(1,100). " " );

echo "Array 1 :" . $random_number, -7, PHP_EOL;
echo "Array 2 :" . $random_number, rand(1,100);



//Loops
//Exercise #1

echo "The first 10 natural numbers are:" ;
for ($x = 1; $x <= 10; $x++) {
    echo $x . " ";
} ;

//exercise-2

$number = 5;
$multiplier = 3;
$result = $number;
for ($i = 0; $i < ($multiplier - 1); $i++)
    $result = $result * $number;

echo $result ;

//Exercise #3

$input1 = readline('enter word');
$input2 = readline('enter word');


while (strlen($input1) + strlen($input2)  ) {
    $sum = strlen($input1) + strlen($input2);
    $n = 30 - $sum;
    $dots = str_repeat(".", $n);
    echo $input1,$dots,$input2;
    break;
}

//Exercise #4

$input = (int) readline('enter number');
for ($x = 1; $x < $input; $x++) {

    if ($x % 20 == 0){
        echo $x ,PHP_EOL;
        continue;
    }  elseif ($x % 3 == 0 && $x % 5 == 0) {
        echo ' FizzBuzz ';
        continue;
    } elseif ($x % 3 == 0) {
        echo ' Fizz ';
        continue;
    } elseif ($x % 5 == 0) {
        echo ' Buzz ';
        continue;
    }
    echo $x. ' ' ;
    };



//Exercise #5

$combinations = [
    '0' => 'yes',
];
$pc = rand(1,10);
$pc1 = rand(1,10);
$pc2 = rand(1,10);
$pc3 = rand(1,10);

echo "You got points:" . $pc , PHP_EOL;
$input = (int) readline('Do You want to roll again ? 0 => yes ');

if  ($pc == 1 || $pc1 == 1 || $pc2 == 1 || $pc3 == 1 ) {
    echo "You lose, because You rolled 1:", PHP_EOL;
    exit;


}if ($input == $combinations["0"] ) {
    echo "Now You got points:" . $pc1, PHP_EOL;
    echo ($pc + $pc1) . " points total" ,PHP_EOL;
    $input = (int)readline('roll again ? 0 => yes ');

}if ($input == $combinations["0"] ) {
    echo "Now You got points:" . $pc2, PHP_EOL;
    echo ($pc + $pc1 + $pc2) . " points total" , PHP_EOL;
    $input = (int)readline('roll again ? 0 => yes ');

}if ($input == $combinations["0"] ) {
    echo "Now You got points:" . $pc3, PHP_EOL;
    echo  ($pc + $pc1 + $pc2 + $pc3) . " points total" , PHP_EOL;

}


//Exercise #6

$pictures = [
    [
        "structure" => "////////////////////////*///////////////////////",
    ],
    [
        "structure" => "////////////////////********////////////////////",
    ],
    [
        "structure" => "////////////////****************////////////////",
    ],
    [
        "structure" => "////////////************************////////////",
    ],
    [
        "structure" => "////////********************************////////",
    ],
    [
        "structure" => "////****************************************////",
    ],
    [
        "structure" => "************************************************",
    ],

    ];

foreach ($pictures as $picture) {
    echo $picture['structure'], PHP_EOL;
}

//Exercise #7

$input = (int) readline('Enter desired sum from 2 to 12');
echo "Desired sum :" . $input , PHP_EOL;
$pc1 = rand(1,6);
$pc2 = rand(1,6);

while ($pc1 + $pc2 != $input) {
    $pc1 = rand(1, 6);
    $pc2 = rand(1, 6);
    echo $pc1 . "+" . $pc2 . "=" . ($pc1 + $pc2), PHP_EOL;


    if ($pc1 + $pc2 == $input) {
        $pc1 = rand(1, 6);
        $pc2 = rand(1, 6);
        echo $pc1 . "+" . $pc2 . "=" . ($pc1 + $pc2), PHP_EOL;
        break;
    } elseif ($pc1 + $pc2 > $input) {
        $pc1 = rand(1, 6);
        $pc2 = rand(1, 6);
        echo $pc1 . "+" . $pc2 . "=" . ($pc1 + $pc2), PHP_EOL;
        continue;
    } elseif
        ($pc1 + $pc2 < $input){
        $pc1 = rand(1, 6);
        $pc2 = rand(1, 6);
        echo $pc1 . "+" . $pc2 . "=" . ($pc1 + $pc2), PHP_EOL;
        continue;

    }
}

//Exercise #8

$input = (int) readline('Enter min');
$input2 = (int) readline('Enter max');
echo 'Min ' . $input , PHP_EOL;
echo 'Max ' . $input2, PHP_EOL;
    for($i=$input;$i<=$input2;$i++) {
        for($j=$i;$j<=$input2;$j++) {
            echo $j;
        }
        for($k=$input;$k<$i;$k++){
            echo $k;
        }
        echo PHP_EOL;
    }


//Tic-toc-toe

class  Game
{
    public array $box = array(
        array(' ', ' ', ' '),
        array(' ', ' ', ' '),
        array(' ', ' ', ' ')
    );
    public int $moveX;
    public int $moveO;
    public bool $winsX;
    public bool $winsO;


    public function __construct(array $box)
    {

        $this->box[0][0] = $box;
        $this->box[0][1] = $box;
        $this->box[0][2] = $box;
        $this->box[1][0] = $box;
        $this->box[1][1] = $box;
        $this->box[1][2] = $box;
        $this->box[2][0] = $box;
        $this->box[2][1] = $box;
        $this->box[2][2] = $box;

    }

    public function getBox(): array
    {
        return $this->box;
    }

    public function getMoveX(): int
    {
        return $this->moveX = readline("X: enter Your row first and than column");
    }

    public function getMoveO(): int
    {
        return $this->moveO = readline("O: enter Your row first and than column ");
    }


    public function winsX(): bool
    {

        if ($this->box[0][0] == 'x' && $this->box[0][1] == 'x' && $this->box[0][2] == 'x'
            || $this->box[1][0] == 'x' && $this->box[1][1] == 'x' && $this->box[1][2] == 'x'
            || $this->box[2][0] == 'x' && $this->box[2][1] == 'x' && $this->box[2][2] == 'x'
            || $this->box[0][0] == 'x' && $this->box[1][0] == 'x' && $this->box[2][0] == 'x'
            || $this->box[0][1] == 'x' && $this->box[1][1] == 'x' && $this->box[2][1] == 'x'
            || $this->box[0][2] == 'x' && $this->box[1][2] == 'x' && $this->box[2][2] == 'x'
            || $this->box[0][0] == 'x' && $this->box[1][1] == 'x' && $this->box[2][2] == 'x'
            || $this->box[2][0] == 'x' && $this->box[1][1] == 'x' && $this->box[0][2] == 'x'
        ) {
            echo 'X wins';
        }
        $this->winsX;
    }

    public function winsO(): bool
    {
        if ($this->box[0][0] == 'o' && $this->box[0][1] == 'o' && $this->box[0][2] == 'o'
            || $this->box[1][0] == 'o' && $this->box[1][1] == 'o' && $this->box[1][2] == 'o'
            || $this->box[2][0] == 'o' && $this->box[2][1] == 'o' && $this->box[2][2] == 'o'
            || $this->box[0][0] == 'o' && $this->box[1][0] == 'o' && $this->box[2][0] == 'o'
            || $this->box[0][1] == 'o' && $this->box[1][1] == 'o' && $this->box[2][1] == 'o'
            || $this->box[0][2] == 'o' && $this->box[1][2] == 'o' && $this->box[2][2] == 'o'
            || $this->box[0][0] == 'o' && $this->box[1][1] == 'o' && $this->box[2][2] == 'o'
            || $this->box[2][0] == 'o' && $this->box[1][1] == 'o' && $this->box[0][2] == 'o'
        ) {
            echo 'O wins';
        }
        $this->winsO;
    }
}

$game = new Game(array());
foreach ($game as $gam) {
    echo $gam;
}
while ($game->winsO() == false || $game->winsX() == false) {

    echo $game->getBox();
    echo str_replace($game->getMoveX(), 'x', $this->box);
    echo $game->getMoveO();
    echo $game->getBox();
    echo str_replace($game->getMoveO(), 'o', $this->box);

}
