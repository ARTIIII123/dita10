<?php


    include_once 'config.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM user WHERE id= :id";

    $prep = $conn->prepare($sql);
    $prep->bindPara(":id",id);

    $prep->execute();

    $data = $prep->fetch();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        for,>input {

            margin-bottom: 10px;
            font-size: 20px;
            padding: 5px;
        }

        button {
            background:none;
            border: solid 1px black;
            padding: 10px 40px;
            font-size: 20px;
            cursor: pointer;

        }

        </style>
</head>


<body>
    
    <form action="update.php" method="POST">
        <input type="text" name="name" placeholder="Name"></br>
        <input type="text" name="surname" placeholder="Surname"></br>
        <input type="email" name="email" placeholder="Email"></br>
        <input type="submit" name="submit">Update</buton>





    </form>
    
</body>
</html>