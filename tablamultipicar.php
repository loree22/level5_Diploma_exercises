<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #tables{display:flex;
        }
        #tables div{display: flex;
        }
    </style>
</head>
<body>
<?php

echo "<h1>Multiplication Table</h1>";
echo "<div id= tables>";
$one=1;
for ($i=1; $i<=10; $i++){
    echo $i. " x ".$one." = " . $i*$one;
    echo "<br>";
}
echo"<br>";

$two=2;
for ($i=1; $i<=10; $i++){
    echo $i. " x ".$two." = " . $i*$two;
    echo "<br>";
}
echo"<br>";

$three=3;
for ($i=1; $i<=10; $i++){
    echo $i. " x ".$three." = " . $i*$three;
    echo "<br>";
}
    echo"<br>";

    $four=4;
    for ($i=1; $i<=10; $i++){
        echo $i. " x ".$four." = " . $i*$four;
        echo "<br>";}

        echo"<br>";

        $five=5;
        for ($i=1; $i<=10; $i++){
            echo $i. " x ".$five." = " . $i*$five;
            echo "<br>";}

            echo"<br>";

            $six=6;
            for ($i=1; $i<=10; $i++){
                echo $i. " x ".$six." = " . $i*$six;
                echo "<br>";}
echo"</div>"


?>



</body>
</html>