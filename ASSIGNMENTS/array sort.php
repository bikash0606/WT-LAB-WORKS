<?php

echo "<h1>Array Sorting Functions</h1>";    
echo "Sorting Array in <strong>Descending order</strong> (according to the key) using <strong>arsort function</strong>:<br/>";
$record = array("Ram"=>"23","Shyam"=>"30","Hari"=>"40","Sita"=>"34");
arsort($record);
foreach ($record as $x => $x_value) {
    echo "Name = ".$x." , Age = ".$x_value."<br/>";
    }
    echo "<br/>";
       
    
echo "Sorting Array in <strong>Ascending order</strong> (according to the key) using <strong>asort function</strong> : <br/>";   
asort($record);
foreach ($record as $x => $x_value) {
    echo "Name = ".$x." , Age = ".$x_value,"<br/>";
    }
    echo "<br/>";


echo "Sorting Array in <strong>Descending order</strong> (according to the value) using <strong>krsort function</strong> : <br/>";
krsort($record);
foreach ($record as $x => $x_value) {
    echo "Name = ".$x." , Age = ".$x_value,"<br/>";
    }
    echo "<br/>";

echo "Sorting Array in <strong>Ascending order</strong> (according to the value) using <strong>ksort function</strong> : <br/>";
ksort($record);
foreach ($record as $x => $x_value) {
    echo "Name = ".$x." , Age = ".$x_value,"<br/>";
    }
    echo "<br/>";
?>

        