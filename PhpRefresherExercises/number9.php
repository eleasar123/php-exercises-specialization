<?php
//Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
 

    </style>
</head>

<body bgColor="">
    <h1 class="jumbotron m-2">Number 9</h1>
 <div class="container m-5">
     <form id="nameForm" class="form" method="post">
         <label for="number">Enter Number:</label>
         <input type="number" name="firstNumber"><br><br>
         <input type="submit" name="submit" value="Convert to Roman Number">
     </form>
 </div>

<div class="container m-3">
<?php

function ConvertArabicToRoman($num){ 
    $num = intval($num); 
    $res = ''; 

    //array of roman numbers
    $romanNumeral_Array = array( 
        'M'  => 1000, 'CM' => 900, 'D'  => 500, 'CD' => 400, 'C'  => 100, 'XC' => 90, 'L'  => 50, 'XL' => 40, 
        'X'  => 10, 'IX' => 9, 'V'  => 5, 'IV' => 4, 'I'  => 1); 

    foreach ($romanNumeral_Array as $romanCounterpart => $romanNumber){ 

        $matches = intval($num / $romanNumber); 

        $res .= str_repeat($romanCounterpart, $matches); 

        $num = $num % $romanNumber; 
    } 

    return $res; 
}

if(isset($_POST['submit'])){
    echo "The roman numeral value of: ".$_POST["firstNumber"].' is '. ConvertArabicToRoman($_POST["firstNumber"]);
}
?>
</div>
</body>
</html>
