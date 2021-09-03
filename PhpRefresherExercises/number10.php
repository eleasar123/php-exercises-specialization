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
    <h1 class="jumbotron m-2">Number 10</h1>

 <div class="container m-5">
     <form id="nameForm" class="form" method="post">
         <label for="text">First Number</label>
         <input type="number" name="firstNumber">
         <label for="text">Second Number</label>
         <input type="number" name="secondNumber">
         <label for="text">Third Number</label>
         <input type="number" name="thirdNumber">
         <input type="submit" name="submit" value="Submit">
     </form>
 </div>

<div class="container m-5">
<?php

if(isset($_POST['submit'])){
    $firstNumber=$_POST['firstNumber'];
    $secondNumber=$_POST['secondNumber'];
    $thirdNumber=$_POST['thirdNumber'];
    $arrayNumber=array($firstNumber, $secondNumber, $thirdNumber);
    
    for($i=0;$i<count($arrayNumber)-1;$i++){
        for($x=1;$x<count($arrayNumber);$x++){
            if($arrayNumber[$i]>$arrayNumber[$x]){
                $backUp=$arrayNumber[$i];
                $arrayNumber[$i]=$arrayNumber[$x];
                $arrayNumber[$x]=$backUp;
                //echo $arrayNumber[$i].' ';
            }
            //echo $arrayNumber[$i] .' ';
        }
    }
    foreach($arrayNumber as $number){
        echo $number. " ";
    }

}
?>
</div>
</body>
</html>