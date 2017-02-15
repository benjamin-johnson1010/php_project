<?php
try {
  $db = new PDO("pgsql:host=localhost;port=5432;dbname=testdb;user=benjaminjohnson;");
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO names(first_name, last_name)
    VALUES ('John', 'Doe')";
    // use exec() because no results are returned
    $db->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$db = null;

 ?>
