<?php 
$file = fopen("tasks.txt" , "r")

$header = fgetcsv($file,0,"\t");

echo implode($header,"\t")."\n";

while (($row= fgetcsv($file , 0 , "\t")) !== false){
    echo implode ("\t" , $row). "\n";
}
fclose($file);
?>