<?php

// 1.	Write a PHP script to check if the inserted number is a prime number 

// Sample Input:  3
// Expected Output: 3 is a prime number 

echo "EX : 1 <br>";

function check_prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$num = 3;
$flag_val = check_prime($num);
if ($flag_val == 1)
   echo " $num It is a prime number";
else
   echo " $num It is a non-prime number";

   // 2.	Write a PHP script to reverse a string 

   // Sample Input:  remove
   // Expected Output: evomer
   
   
echo " <br><br> EX : 2 <br>";
$string = "remove";
echo "$string <br>";
echo strrev($string);


// 3.	 Write a PHP script to check if the all string characters are lower cases

// Sample Input:  remove
// Expected Output: Your String is Ok 

echo " <br><br> EX : 3 <br>";
$test = "remove";
if (ctype_lower($test)) {
   echo "all string characters are lower cases\n";
} else {
   echo " Not all string characters are lower cases  \n";
}


// 4.	Write a PHP function to swap to variables?

// Sample Input:  x = 12     y= 10
// Expected Output: y=12   x=10 

echo " <br><br> EX : 4 <br>";

function Swap($num1 , $num2)
{
   $i = $num1;
   $num1 = $num2;
   $num2 =$i ; 
   echo " After swapping : <br> num1: $num1 <br> num2: $num2  <br>";
}
$num1 = 10;
$num2 = 12;
echo "Before swapping : <br> num1: $num1 <br> num2: $num2 <br> ";
Swap($num1 , $num2);


// 5.	Write a PHP function to swap to variables?

// Sample Input:  x = 12     y= 10
// Expected Output: y=12   x=10 

echo " <br><br> EX : 5 <br>";

function Swap2($num1 , $num2)
{
   $i = $num1;
   $num1 = $num2;
   $num2 =$i ; 
   echo " After swapping : <br> num1: $num1 <br> num2: $num2  <br>";
}
$num1 = 10;
$num2 = 12;
echo "Before swapping : <br> num1: $num1 <br> num2: $num2 <br> ";
Swap2($num1 , $num2);


// 6.	Write a PHP function to check if a number is an Armstrong number or not ?
// **Armstrong number is a number that is equal to the sum of cubes of its digits.

// Sample Input:  407
// Expected Output: 407 is Armstrong Number 

echo " <br><br> EX : 6 <br>";

function armstrong_number($num) {
   $sl = strlen($num);
   $sum = 0;
   $num = (string)$num;
   for ($i = 0; $i < $sl; $i++) {
     $sum = $sum + pow((string)$num{$i},$sl);
   }
   if ((string)$sum == (string)$num) {
     return "True";
   } else {
     return "False";
   }
 }
 echo "Is 153 Armstrong number? ".armstrong_number(153);
 echo "<br> Is 21 Armstrong number? ".armstrong_number(21);
 echo "<br> Is 4587 Armstrong number? ".armstrong_number(4587);"\n";


//  7.	Write a PHP function that checks whether a passed string is a palindrome or not?
//  Sample Input:  Eva, can I see bees in a cave?
//  xpected Output: Yes it is a palindrome 
 
echo " <br><br> EX : 7 <br>";

function check_palindrome($string) 
{
  if ($string == strrev($string))
  echo "yes palindrome <br>";
  else
  echo "no palindrome <br>";
}

$string = "madam";
echo "$string <br>";
check_palindrome($string);


// 8.	Write a PHP function to remove duplicates from an array ?
// Sample Input:  
// $array1 = array(2, 4, 7, 4, 8, 4);
// Expected Output:
// $array1 = array(2, 4, 7, 8);

echo " <br><br> EX : 8 <br>";

function  remove_duplicates($arr) 
{
   print_r(array_unique($arr));
   echo " <br>";
}

$arr= array(2, 4, 7, 4, 8, 4);
print_r($arr);
echo " <br>";
remove_duplicates($arr);


?>