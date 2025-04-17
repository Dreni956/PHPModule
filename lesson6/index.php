<?php 
// $my_file = fopen("ds.txt", "r");

// $my_filename = "ds.txt";
// $my_file = fopen($my_filename ,"r");

// $size = filesize($my_filename);
// $my_filedata = fread($my_filename);

// fclose($my_file)

// $file = fopen("ds.txt" , "r");
// while(!feof($file)) {
//     echo fgets($file);
// }
// fclose($file);

// $my_file = fopen("ds.txt", "r");
// $my_text = "Digital School";
// fwrite($my_file , $my_text);


file_put_contents("ds.txt", "Add more text");
echo file_get_contents("ds.txt");








//  w- write only mode

// r - read only mode

// a - write only mode. Te dhenat ne files ruhen

// w+ , r+ , a+ 




?>