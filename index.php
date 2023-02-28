<?php

require_once 'connection.php';

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testphp</title>
</head>
<style>
    th,td {
        padding: 20px;
    }

    th {
        background: grey;
    }

    td {
        background: #A5A5A5;
    }
</style>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>surname</th>
            <th>alive</th>
        </tr>
        <?php
            $name = mysqli_query($link, query:"SELECT * FROM `hehe`");
            $name = mysqli_fetch_all($name);
            foreach ($name as $name){
                echo "
            <tr>
                <td>". $name[0]. "</td>
                <td>". $name[1]. "</td>
                <td>". $name[2]. "</td>
                <td>". $name[3]. "</td>
            </tr>
                ";
            }
        ?>
    </table>
</body>
<table>
    <h2>Add new coal</h2>
    <form action="updateDB.php" method="post">
        <a>Name</a>
        <input type="text" name="name"> <br> <br>
        <a>Surname</a>
        <input type="text" name="surname" id=""> <br> <br>
        <a>alive or die (0 - yes, 1 = nope</a>
        <input type="number" name="alive" id="">
        <button type="submit">Add new vocalist</button>
    </form>
</table>
</html>