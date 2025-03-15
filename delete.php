<?php


 include_once 'config.php';

 $id = 1;

 $sql = "DELETE FROM users WHERE id=:id";

 $deleteid = $conn->prepare($sql);

 $deleteid->bindParam(":id",$id);

 $deleteid->execute();

 //header("Location:dashboard.php");//
