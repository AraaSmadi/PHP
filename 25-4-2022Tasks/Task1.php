
 <?php
// 1.	Write a PHP script to see if the specified year is a leap year or not.
//  Sample Input: 2013
//  Sample Output: ‘This year is not a leap year’
   
$my_year = 1900;
      if ($my_year % 400 == 0)
         echo "It is a leap year".'<br>' ;
      else if ($my_year % 100 == 0)
      echo "It is not a leap year".'<br>';
      else if ($my_year % 4 == 0)
      echo "It is a leap year".'<br>';
      else
      echo "It is not a leap year".'<br>';
   
  
 

// 2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, 
// we are in winter otherwise the season is summer.
$temp = 24;
    if ($temp <= 20)
       echo "It is a winter".'<br>' ;
    else if ($temp > 20 )
    echo "It is a summer".'<br>';
 
 


//  3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
 $num1 = 2;
 $num2 = 2;
    if ( $num1 > $num2 || $num1 < $num2 )
       echo  $num1 +  $num2 .'<br>';
    else if ($num1 == $num2)
    echo ( $num1 +  $num2) * 3 .'<br>';


// 4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
    $num1 = 20;
    $num2 = 30;
       if ( ($num1 + $num2)==30 )
          echo  $num1 + $num2 .'<br>';
       else 
       echo 'false'.'<br>';
      

// 5.	Write in PHP script to check if the given positive number is a multiple of 3.

       $num = 30;
       if ( $num% 3 == 0 &&  $num> 0)
          echo  $num .'<br>';
       else 
       echo 'false'.'<br>';



    //    6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
       $num = 30;
       if ( $num>=20  &&  $num<=50)
          echo  'True' .'<br>';
       else 
       echo 'false'.'<br>';


// 7.	Write PHP script to find the largest number between the three integers

$num1 = 40;
$num2 = 50;
$num3 = 90;
   if ( $num1 > $num2 && $num1 > $num3 )
      echo  $num1  .'<br>';
   else if ( $num2 > $num1 && $num2 > $num3 )
   echo  $num2  .'<br>';
   else if ( $num3 > $num1 && $num3 > $num2 )
   echo  $num3  .'<br>';
   else 
   echo 'numbers is equal '  .'<br>';



//    8.	Write PHP script to calculate the monthly electricity bill according to these rules
 


// 9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

$age = 30;
if ( $age >=18 )
   echo  'is  eligible to vote' .'<br>';
else if  ( $age < 18 )
echo 'is no eligible to vote'.'<br>';

// 10.	Write php script  to check whether a number is positive, negative or zero
$num = 30;
if ( $num<0)
   echo  $num .' is negative' .'<br>';
else if ( $num>0)
echo $num .'is positive'.'<br>';
else if ( $num=0)
echo $num. 'is zero'.'<br>';



// 11.	Write php script to make a calculator, the calculator should contain the four main operations 
$num1 =10;
$num2 = 50;
$operator  = '+' ;
$result = '';
if (is_numeric($num1) && is_numeric($num2)) {
    switch ($operator) {
        case '+' :
           $result = $num1 + $num2;
            break;
        case '-' :
           $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = $num1 / $num2;
    }
    echo $result .'<br>' ;
}


// 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 
$grade1 =90;
$grade2 = 88;
$grade3 =80;
$grade4 = 99;
$av = ($grade1 + $grade2+ $grade3 +$grade4)/4 ;
if ( $av <=60)
echo  'Grade :  F' .'<br>';
else if ( $av<=70 && $av >=60 )
echo 'Grade :  D'.'<br>';
else if ( $av<=80 && $av >=70 )
echo 'Grade : C'.'<br>';
else if ( $av<=90 && $av >=80 )
echo 'Grade : B'.'<br>';
else if ( $av<=100 && $av >=90 )
echo 'Grade : A'.'<br>';




?>
