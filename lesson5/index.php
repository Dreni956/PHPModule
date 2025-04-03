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