<?php
  $db = new PDO("pgsql:host=localhost;port=5432;dbname=testdb;user=benjaminjohnson;");
    // set the PDO error mode to exception
    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $query = "SELECT * FROM names";

       foreach ($db->query($query) as $row) {
       print $row['first_name'] . "\t";
       print $row['last_name'] . "\t";
       print $row['id'];
   }

    if (isset($_POST['first_name']))
{
  $sql = "INSERT INTO names(first_name, last_name)
  VALUES ('$_POST[first_name]','$_POST[last_name]')";
  // use exec() because no results are returned
  $db->exec($sql);
//     }
// catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getMessage();
//     }

$db = null;
  // Instructions if $_POST['value'] exist
}

//     }
// catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getMessage();
//     }

$db = null;

 ?>
