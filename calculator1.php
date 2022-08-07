<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="calculator1.php">
<input type= "text" name="number1">
<select name="operations">
    <option value= "+">+</option>
    <option value= "-">-</option>
    <option value= "*">*</option>
    <option value= "/">/</option>
</select>
<input type="text" name="number2">
<input type="submit">
</form>
<?php
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
$operations = $_GET['operations'];  
$result  = 0;
    if($operations=="+"){
        $result = $number1 + $number2;
    }else if($operations == "-"){
        $result = $number1 - $number2; 
    }else if($operations =="*"){
        $result = $number1 * $number2;
    }else if($operations == "/"){
        $result = $number1 / $number2;
    }
echo "Result is : ". $result;




?>



    <?php






?>




</body>
</html>