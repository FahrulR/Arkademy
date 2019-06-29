<?php


  require 'db_config.php';


  $id  = $_POST["id"];
  $post = $_POST;


  $sql = "UPDATE nama SET name = '".$post['name']."'
    ,id_hobby = '".$post['hobby']."'
    ,id_category ='".$post['category']."' 
    WHERE id_name = '".$id."'";


  $result = $koneksi->query($sql);


  $sql = "SELECT * FROM nama WHERE id_name = '".$id."'"; 


  $result = $koneksi->query($sql);


  $data = $result->fetch_assoc();


  echo json_encode($data);


?>