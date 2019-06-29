<?php  
 $source = 'biodata.json';
 $content = file_get_contents($source);
 $data = json_decode($content, true);
 echo "Name: ".$data['biodata']['name']."</br>";
 echo "Age: ".$data['biodata']['age']."</br>";
 echo "Address: ".$data['biodata']['address']."</br>";
 echo "Hobbies: </br>";
 foreach($data['biodata']['hobbies'] as $hobbies) {
    echo "-".$hobbies. '<br />';
 }
 if($data['biodata']['is_married'] === false){
 	$is_married = "Not Married";
 } else {
 	$is_married = 'Married';
 }
echo "Is married: $is_married</br>";
echo "List of school: </br>";
foreach ($data['biodata']['list_school'] as $key => $value) {
    echo "-".$value["name"].", ".$value["year_in"]."-".$value["year_out"]." ".$value["major"]."<br>";
 }
echo "Skills: </br>";
foreach ($data['biodata']['skills'] as $key => $value) {
    echo "-".$value["skill_name"].": ".$value["level"]."<br>";
 }
 if($data['biodata']['interest_in_coding'] === false){
 	$interest = "No";
 } else {
 	$interest = 'Yes';
 }
echo "Interest in coding: $interest</br>";
  ?>