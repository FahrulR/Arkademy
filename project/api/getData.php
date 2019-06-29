<?php
require 'db_config.php';

$sql = "select nama.name as name, hobi.name as hobby, kategori.name as category from nama, hobi, kategori where nama.id_hobby = hobi.id_hobby and nama.id_category = kategori.id_category";

$result = $koneksi->query($sql);


  while($row = $result->fetch_assoc()){


     $json[] = $row;


  }


  $data['data'] = $json;


$result =  mysqli_query($koneksi,$sql);


$data['total'] = mysqli_num_rows($result);


echo json_encode($data);


?>