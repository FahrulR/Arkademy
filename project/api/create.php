<?php


require 'db_config.php';


  $post = $_POST;


  $sql = "INSERT INTO nama (name,id_hobby,id_category) 


	VALUES ('".$post['name']."','".$post['hobby']."','".$post['category']."')";


  $result = $koneksi->query($sql);


  $sql = "SELECT * FROM nama Order by id_name desc LIMIT 1"; 


  $result = $koneksi->query($sql);


  $data = $result->fetch_assoc();


echo json_encode($data);


?>