<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    $num = -10;
    $age = 54;
    $numri = 23;

    $a = 50;
    $b = 10;
    $age2 = 35

    if($num > 10) {
        echo 'Numri eshte me i madh se 18';
    }else{
        echo 'Numri eshte me i vogel se 18';
    }

    if(($age>13) && ($age< 20)) {
        echo 'You are a teenager'
    }else{
        echo 'You are a grown man'
    }
    

    if(($a == $b)){
        echo '1'
    }
    if(($a < $b)){
        echo '2'
    }
    if(($a == $b)){
        echo '>'
    }

    switch ($age2){
        case $age2 <= 0 && $age2 >= 18;
        echo 'You are a minor';
    }
    
    
    ?>
</body>
</html>