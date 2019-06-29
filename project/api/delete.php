<?php


 require 'db_config.php';


 $id  = $_POST["id"];


 $sql = "DELETE FROM nama WHERE id_name = '".$id."'";


 $result = $koneksi->query($sql);


 echo json_encode([$id]);


?>