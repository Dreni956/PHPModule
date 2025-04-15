<?php 
$dogs = array(
   array("Husky" , "Siberis" , 15);
   array("Husky" , "Siberis" , 15);
   array("Husky" , "Siberis" , 15);
);
echo $dogs[0][0].": orgin:".$dogs[0][1].": Life-span:".$dogs[0][2]. "<br>";
echo $dogs[1][0].": orgin:".$dogs[1][1].": Life-span:".$dogs[0][2]. "<br>";
echo $dogs[2][0].": orgin:".$dogs[2][1].": Life-span:".$dogs[0][2]. "<br>";

for($row=0; $row<3; $row++){
   echo "<p><b> Row Number $row </b></p>";
   for ($col=0, $col<3, $col++){
      echo "ul";
      echo "<li>".$dogs[$row][$col]."</li>";
   }
   echo "</ul>";
}
?>

<?php 
// $array = array(
//    array(1,2,3)
//    array(1,2,3)
//    array(1,2,3)
// );

// for($i=0,$i<4, $i++){
//    for ($j=0, $j<4 , $j++){
//       echo "Array $i of $j";
//    }
// }




//  for($i=0,$i <5, $i++){
//    for($j=$i, $j <=$i , $j++){
//       echo "&nbsp";
//   }
//    for($j=1, $j <=$i , $j++){
//        echo "*";
//    }
//    echo "<br>";
// }
?>

<?php
$grade = array(
   "Math" => 4,
   "Art" => 3,
   "History" => 2,
   "Music" => 3,
)

// echo "Math grade is:".$grade['Math'];
foreach($grade as $subject => $grade){
   echo "Subject:$subject Grade:$grade <br>"
}



?>





