<?php
//Write a PHP script to calculate the difference between two dates.
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
    <h1 class="jumbotron m-2">Number 8</h1>
 <div class="container m-5">
     <form id="nameForm" class="form" method="post">
         <label for="firstDate">First Date:</label>
         <input type="date" name="firstDate"><br><br>
         <label for="secondDate">Second Date</label>
         <input type="date" name="secondDate"><br>
         <input type="submit" name="submit" value="Minus">
     </form>
 </div>

<div class="container m-3">
<?php

if(isset($_POST['submit'])){
    $firstDate= new DateTime($_POST['firstDate']);
    $secondDate= new DateTime($_POST['secondDate']);
    $dateDifference=date_diff($firstDate,$secondDate);
    echo 'Difference is: '.$dateDifference->y.' years, ' .$dateDifference->m.' months, ' .$dateDifference->d.' days';
}
?>

</div>
</body>
</html>
