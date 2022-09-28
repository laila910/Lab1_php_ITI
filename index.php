<?php


// Use constant to display your website name which mustn’t change across your pages.
define('website_name','Lab1_ITI_PHP');
echo `<h1>`. website_name.`</h1>`;

// Show your server name, address, port,filename and path of the currently executing script.
echo '<pre>';
// print_r( $_SERVER); // is an array containing information such as headers, paths, and script locations.
echo '</pre>';

echo "Server Name is  ". $_SERVER['SERVER_NAME']."<br>"; //localhost

echo "Server Address is ". $_SERVER['SERVER_ADDR']."<br>"; // Server Address is ::1

echo "Server Port is ".$_SERVER['SERVER_PORT']."<br>";// Server Port is 80

echo "Server File Name is ".$_SERVER['PHP_SELF']."<br>";// Server File Name is /Lab1_php/index.php

echo "Path is ".$_SERVER['SCRIPT_FILENAME']."<br>";// Path is C:/xampp/htdocs/Lab1_php/index.php

// Display the output of for,while,do while and foreach fn code from demo file 
//for loop
$a = 0;
$b = 0;
echo "<br><br>Output of for loop <br>";
for( $i = 0; $i<5; $i++ ) {
   $a += 10;
   echo "a = ".$a."<br>";
   $b += 5;
   echo "b = ".$b."<br>";
   if($i==4){
    echo "At the end of the loop a = ".$a ." and b = ". $b;
   }
}
// output of for loop :
// a = 10
// b = 5
// a = 20
// b = 10
// a = 30
// b = 15
// a = 40
// b = 20
// a = 50
// b = 25
// At the end of the loop a = 50 and b = 25

// ******************************
//while loop
$i = 0;
$num = 50;

echo "<br><br>Output of while loop<br>";

while( $i < 10) {
   $num--;
   echo "num is =".$num."<br>";
   $i++;
   echo "i = ".$i."<br>";
   if($i==10){
    echo "<br> Loop stopped at i = ".$i." and num = ".$num;
   }
}
// output of while loop is :
// num is =49
// i = 1
// num is =48
// i = 2
// num is =47
// i = 3
// num is =46
// i = 4
// num is =45
// i = 5
// num is =44
// i = 6
// num is =43
// i = 7
// num is =42
// i = 8
// num is =41
// i = 9
// num is =40
// i = 10

// Loop stopped at i = 10 and num = 40

// *********************
//do...while
$i = 0;
$num = 0;
echo "<br><br>do while loop output<br>";
 do {
      $i++;
      echo "i = ".$i."<br>";
      if($i==10){
        echo " Loop stopped at i = ".$i."<br>";
      }
 }while( $i < 10 );

// do while loop output
// i = 1
// i = 2
// i = 3
// i = 4
// i = 5
// i = 6
// i = 7
// i = 8
// i = 9
// i = 10
// Loop stopped at i = 10
// **************************
//foreach
$arr = array( 1, 2, 3, 4, 5);
echo "<br><br> output of foreach loop is <br>";   
foreach( $arr as $value ) {
   echo "Value is $value <br />";
}
// output of foreach is :
// Arrayof foreach loop and output is
// Value is 1
// Value is 2
// Value is 3
// Value is 4
// Value is 5
//*************************
 //break
$i = 0;
echo "<br> output of while loop with break is <br>";
while( $i < 10) {
   $i++;
   echo "i = ".$i."<br>";
   if( $i == 3 ){
   echo "loop stopped at i = ".$i."<br>";
   break;
   }
}


// output of while loop with break is
// i = 1
// i = 2
// i = 3
// loop stopped at i = 3

//***************************
//continue
$array = array( 1, 2, 3, 4, 5);
//    echo  $array[2]; 
echo "<br><br> output of foreach loop with continue at value = 3 of loop  <br>";

foreach( $array as $value ) {
   if( $value == 3 )continue;
   echo "Value is $value <br />";
}
// output of foreach loop with continue at value = 3 of loop
// Value is 1
// Value is 2
// Value is 4
// Value is 5
//************************
//   Your brother is 10 years old, If you know that :
//    age less than 5 --> Print Msg --> Stay at home,
//     age equal 5 --> Print Msg --> Go to Kindergarden,
//     age between 6 & 12 --> Print Msg --> Go to grade :XXX
//     (Use switch case).
$age=10;
switch($age){
    case  0:
    case 1:
    case 2: 
    case 3:
    case 4: 
        echo "Stay at home";
        break;
    case 5: 
        echo "Go to Kindergarden";
        break;
    case 6:
    case 7:
    case 8:
    case 9:
    case 10:
    case 11:
    case 12:
        echo "Go to grade :XXX";
        break;
}


// if $age = 10 ; print on the screen --->Go to grade :XXX
// if $age = 5; print on the screen -->  Go to Kindergarden
// if $age = 2; print on the screen ---> Stay at home







?>