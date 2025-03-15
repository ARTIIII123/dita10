<?php

require_once 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$surname $_POST['surname'];
$email = $_POST['email'];

$sql = "UPDATE user SET name=:name, surname=:surname, email=email WHERE id=:id";

$prep => $conn->prepare($sql);

$prep ->bindPaeam(":id", $id);
$prep ->bindPaeam(":name", $name);
$prep ->bindPaeam(":surname", $surname);
$prep ->bindPaeam(":email", $email);

$prep->execute();

hader("Location:dashoard.php");

