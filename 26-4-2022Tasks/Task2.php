<?php 
// 1.$colors = array('white', 'green', 'red') 
// Write a PHP script that will display the colors as unordered list : 
// Expected Output:  
// •	green
// •	red
// •	white

echo " EX :1 <br>";

   $colors = array('white', 'green', 'red');
   foreach ($colors as $value)
   {
   echo "$value, ";
   }
   sort($colors);
   echo "<ul>";
   foreach ($colors as $value)
   {
   echo "<li>$value</li>";
   }
   echo "</ul>";


//2.**  Required ** $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

// Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
// Expected Output:
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin 
echo " EX : 2 <br>";
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

foreach ($cities as $key => $value)
   {
   echo "The capital of $key is  $value <br> ";
   }
   

// 3.	**  Required ** $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 

// Write a PHP script to display the first element of the above array. 
// Expected Output:  white

echo "<br><br> EX : 3 <br>";

$colors = array (4 => 'white', 6 => 'green', 11=> 'red'); 
foreach ($colors as $value)
{
echo "$value, ";
}
echo "<br>". $colors[4];


// 4.	**  Required ** Write a PHP script to sort the following associative array depending on the key value [asc] :  

// Sample Input: 

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Expected Output:

// c = apple
// b = banana
// d = lemon
// a = orange



echo "<br><br> EX : 4 <br>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
   foreach ($fruits  as $value)
   {
   echo "$value, ";
   }
   krsort($fruits);
   echo "<ul>";
   foreach ($fruits as $value)
   {
   echo "<li>$value</li>";
   }
   echo "</ul>";



// 8.	**  Required ** Write a PHP script to get the shortest/longest string length from an array.
//    Sample Input:
//     $words =  array("abcd","abc","de","hjjj","g","wer")
//    Expected Output : 
//    The shortest array length is 1. The longest array length is 4.

echo "<br><br> EX : 4 <br>";

$words =  array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $words);
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';




?>