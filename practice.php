<?php  

/* Create function that takes name (string) and year (number) as arguments and return string "name year"
    Create function that takes string as an argument and return number of characters
    Create function that takes string as an argument and return number of words
    Create function that takes two arguments text (string), and search (string). Find start index position for search criteria word inside text.
    Inside word "Hello World!" replace word "World" with word "Dolly", and convert both words to upper case
    Split some string into array by white spaces. 
    You are given the string "Hello world". 
    - Take a slice at index 6 and end slice 5 positions later.
    - Take a slice at index 6 and end go all the way to the end.
    create function that take an argument with any type of value. If it's string replace character at 3 position, if exists, with word "Hello". In case of number sum its value with 3. If its float echo 0.
 */



 //Create function that takes name (string) and year (number) as arguments and return string "name year"
function foo1($name,$year){
    return "$name $year";
}
echo foo1("Luka",44);
echo "<br>";

//Create function that takes string as an argument and return number of characters
function foo2($string){
    return strlen($string);
}
echo foo2("Luka");
echo "<br>";

//Create function that takes string as an argument and return number of words
function foo3($str){
    return str_word_count($str);
}
echo foo3("asdf asdyxcv yxcv wer");
echo "<br>";

//Create function that takes two arguments text (string), and search (string). Find start index position for search criteria word inside text.
function foo4($text,$search){
    return strpos($text,$search);
}
echo foo4("asdfghjk","df"); 

/*Inside word "Hello World!" replace word "World" with word "Dolly", and convert both words to upper case
Split some string into array by white spaces.*/
echo strtoupper(str_replace("World","Dolly","Hello World"));
echo "<br>";

//Split some string into array by white spaces. 
$str1 = "Hi my name is Luka";
print_r ( explode(" ", $str1));
echo "<br>";

//You are given the string "Hello world". 
    //Take a slice at index 6 and end slice 3 positions later.
    $str2 = "Hello world";
    echo substr($str2, 6, 3);
    echo "<br>";

    //Take a slice at index 6 and end go all the way to the end. 
    echo substr($str2, 6);
    echo "<br>";

//create function that take an argument with any type of value. If it's string replace character at 3 position, if exists, with word "Hello". In case of number sum its value with 3. If its float echo 0.
function foo5($arg){ 
    if(gettype($arg)==="string"){   
        return substr_replace($arg,"Hello",3);
    }else if(gettype($arg)==="integer"){
        return $arg + 3;
    }else if(gettype($arg)==="boolean"){
        echo 0;
    } 
}

echo foo5(false);



echo ("<hr>");

//String Manipulation:

//Write a function to count the number of characters in a string.
//Create a function to reverse a string.
//Implement a function to check if a string is a palindrome.
//Write a function to extract the first word from a sentence.
//Create a function to convert a string to title case.


//Write a function to count the number of characters in a string.
function countString($str){
    return strlen($str);
}


//Create a function to reverse a string.
function reverseString($str){
    return strrev($str);
}

//Implement a function to check if a string is a palindrome.
function checkPalindrome($str){
    return strrev($str)===$str;
}

//Write a function to extract the first word from a sentence.
function extractFirstWord($str){
    return explode(" ",$str)[0];
}


//Create a function to convert a string to title case.
function convert($str){
    return strtoupper($str);
}

echo extractFirstWord("ava n");



echo "<hr>";


//Number Operations:

//Write a function to find the factorial of a number.
//Implement a function to check if a number is prime.
//Create a function to calculate the sum of digits of a number.
//Write a function to find the largest and smallest numbers in an array.
//Implement a function to generate Fibonacci series up to a given number of terms.


//Write a function to find the factorial of a number.
function findFactorial($num){
    $factorial = 1;
    for($i=1; $i<=$num; $i++){
        $factorial*=$i;
    }
    return $factorial;
}

echo findFactorial(4);
echo "<br>";

//Implement a function to check if a number is prime.
function isPrime($num){
    $i=2;
    while($i<$num/2){
        if($num%$i===0) return false;
        $i++;
    }
    return true;
}

var_dump(isPrime(10));
echo "<br>";
 
//Create a function to calculate the sum of digits of a number.
function calculateSum($num){
    return array_sum(str_split($num));
}

echo calculateSum(123);
echo "<br>";

//Write a function to find the largest and smallest numbers in an array.
function findLargest($array){
    //return max($array);
    $largest=0;
    for($i=0; $i<count($array); $i++){
        if($array[$i]>$largest){
            $largest=$array[$i];
        }
    }
    return $largest;
}

echo findLargest([1,3,7,2,99,-333]);
echo "<br>";




// Write a function to merge two arrays and remove duplicate elements.
// Create a function to find the intersection of two arrays.
// Implement a function to remove specific elements from an array.
// Write a function to sort an associative array by the values.
// Create a function to find the second largest element in an array.



// Write a function to merge two arrays and remove duplicate elements.
function arrayMerge($arr1,$arr2){
    return array_merge($arr1,$arr2);
}
//print_r(array_merge([1,2,3],["a",3,4]));


// Create a function to find the intersection of two arrays.
function intersection($arr1,$arr2){ 
    return array_intersect($arr1,$arr2);
}
print_r(intersection([1,2,3],["a",3,4]));
echo "<br>";

// Implement a function to remove specific elements from an array.
function removeElements($arr,$remove){
    $resultArray = [];
    for($i=0; $i<count($arr); $i++){
        if(!in_array($arr[$i], $remove)){
            $resultArray[] = $arr[$i];
        }
    }
    return $resultArray;
}
print_r(removeElements([1,2,3],[1,2,5]));
echo "<br>";

// Write a function to sort an associative array by the values.
function sortAscArr($arr){
    arsort($arr);
    return $arr;
}

function sortAscArr2($arr){
    $n = count($arr);
    for($i=0; $i<$n-1; $i++){
        for($j=0; $j<$n-$i-1; $j++){
            if($arr[$i]>$arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}

print_r(sortAscArr(["name"=>"Peter", "age"=>44, "height"=>189]));
echo "<br>";






//Create array of numbers
//Create array "carsBrands" with a few car's brand (strings)
//Create array of string and numbers
//Change value at second position of array carsBrands
//Create array cars that contain a few associative arrays as elements. Let each array has the following keys: brand, model, year
//Loop through one car associative array
//Add a new array to the cars array
//Loop through all cars array
//Create associative array person with follow keys: firstName, lastName, age
//Changing firstName at array person
//Add new element with key gender with value "male"
//In array numbers add new numbers with values from 5 to 10
//remove element from numbers array with value 6
//remove elements from array numbers with value bigger than 6
//remove cars from cars array produced before 2000



//Create array of numbers
$numbers = [1,2,3,4];
$numbers2 = array(1,2,3);
print_r($numbers2);
echo "<br>";

//Create array "carsBrands" with a few car's brand (strings)
$carsBrands = ["Volvo","Golf","Toyota","Opel"];
print_r($carsBrands);
echo "<br>";

//Create array of string and numbers
$arrayStrNum = ["asdf",234];

//Change value at second position of array carsBrands
$carsBrands[1]="Honda";
print_r($carsBrands);
echo "<br>";

//Create array cars that contain a few associative arrays as elements. Let each array has the following keys: brand, model, year
$cars = [
    ["brand"=>"Mercedes", "model"=>"C200", "year"=>1998],
    ["brand"=>"Opel", "model"=>"A6", "year"=>2002],
    ["brand"=>"WV", "model"=>"Golf2", "year"=>2005]
];

//Loop through one car associative array
foreach($cars[0] as $key=>$value){
    echo "$key: $value, ";
}
echo "<hr>";

//Add a new array to the cars array
$cars[] = ["brand"=>"Fiat", "model"=>"Punto", "year"=>2004];


//Loop through all cars array
for($i=0; $i<count($cars); $i++){
    foreach($cars[$i] as $k => $v){
        echo "$k: $v";
        echo "<br>";
    }
    echo "<hr>";
}

//Create associative array person with follow keys: firstName, lastName, age
$person = ["firstName"=>"Pera", "LastName"=>"Peric", "age"=>22];

//Changing firstName at array person
$person["firstName"]="Jova";

//Add new element with key gender with value "male"
$person["gender"]="male";

print_r($person);
echo "<br>";

//In array numbers add new numbers with values from 5 to 10
for($i=5; $i<=10; $i++){
    $numbers[]=$i;
}
print_r($numbers);
echo "<br>";

//remove element from numbers array with value 6
$index = array_search(6, $numbers);
array_splice($numbers,$index,1);
print_r($numbers);
echo "<br>";

//remove elements from array numbers with value bigger than 6
function biggerThan($num){
    return $num<6;
}
$filteredResult = array_filter($numbers, "biggerThan" );
print_r($filteredResult);
echo "<br>";

//remove cars from cars array produced before 2000
function test($var){
    return $var["year"]>2000;
}
$filteredCars = [];
$filteredCars = array_filter($cars, "test");

print_r($filteredCars);


?>
