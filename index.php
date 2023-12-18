 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 </head>
 <body>
    <form  action="index.php" method="POST">
      Marks: <input type="number" name="data">
      <input type="submit" value="check">
    </form>
 </body>
 </html>

<?php  
// IF CONDITION and if else condition
   $marks =$_POST["data"];
  
   if ($marks>=300) {
     echo "Congrats!! Voter";
   }else if($marks>=250){
    echo "2nd";
    // echo "Oops!! Not Valid Voter";
   }else if($marks>=150){
    echo "3rd";
    // echo "Oops!! Not Valid Voter";
   }else if($marks>=100){
    echo "4th";
    // echo "Oops!! Not Valid Voter";
   }else{
     echo "Fail"; 
    // echo "Oops!! Not Valid Voter";
   }





// Scope of Variables;
//1. Local Variables:-
//  function fun(){
//     $a=10;   // Local Varibale 
//     // echo $a;
//  }
//  fun();
  // can not access coz local scope.


 //2. Global variable
//   $name="Ash Sutkar";
// //   echo $name;

//   function func1(){
//     global $name;
//     echo "$name";
//   }
//   func1();
//   print_r($GLOBALS);


?>