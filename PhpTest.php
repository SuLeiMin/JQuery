<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <?php

   function getSum($num1,$num2){
       $sum = $num1 + $num2;
        return $sum;
    }
// Calling function
   echo getSum(10,20); 
    ?>
</body>
</html>