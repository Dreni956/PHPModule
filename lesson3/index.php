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
    $day = 'enjte';

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
    

    switch ($day){
        case 'E hene';
        echo 'Sot eshte dite e hene';
        break;
        case 'E marte';
        echo 'Sot eshte dite e marte';
        break;
        case 'E merkure';
        echo 'Sot eshte dite e merkure';
        break;
        case 'E enjte';
        echo 'Sot eshte dite e enjte';
        break;
        case 'E premte';
        echo 'Sot eshte dite e premte';
        break;
        case 'E shtune';
        echo 'Sot eshte dite e shtune';
        break;
        case 'E diell';
        echo 'Sot eshte dite e diell';
        break;
    }

    $whileVar = 1
    while($whileVar <= 5){
        echo "<br> Number is $whileVar <br>";
        $whileVar++;
    }



    $doWhile = 1
    do{
        echo "Number is $doWhile <br>"
        $doWhile++
    }while($doWhile <=5)

    $forVar($forVar= 0; $forVar= <=10; $forVar++){
        echo "The number is $forVar <br>"
    }
    ?>

    <?php
    $cars = array('BMW', 'Audi', 'Mercedes','Volvo');
    foreach($cars as $value) {
        echo "$value <br>"
    }
    ?>

    <?php
    $mosha = array("John" =>"18" , "Michael" => "50" , "Ben" =>'25')
    foreach($mosha as $a => $b){
        echo "$a";
    }

    
    
    ?>
</body>
</html>