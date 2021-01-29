<?php

$value = "World";
$dbhost = "database";
$dbname = "mydb";
$dbuser = "myuser";
$dbpassword = "secret";

$db = new PDO("mysql:host=".$dbhost.";dbname=".$dbname, $dbuser, $dbpassword);


$databaseTest = ($db->query('SELECT * FROM dockerSample'))->fetchAll(PDO::FETCH_OBJ);

?>

<html>
    <body>
        <h1>Hello, <?= $value ?>!</h1>

        <?php foreach($databaseTest as $row): ?>
            <p>Hello, <?= $row ?></p>
        <?php endforeach; ?>
    </body>
</html>
