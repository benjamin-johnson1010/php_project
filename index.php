<?php

include("inc/header.php"); ?>
<h1>Hello</h1>
<form method="post">
<input type="text" name="username" value=""><br>
<input type="submit" value="send">
</form>
<?php
if(!empty($_POST)){
$username = $_POST['username'];
echo $username;
}
 ?>
<?php include("inc/footer.php"); ?>
