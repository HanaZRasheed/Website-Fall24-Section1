<?php
require 'connect.php';
$sql="DELETE FROM employee WHERE name=:name";

$statement=$pdo->prepare($sql);
$title="admin";
$name="Raneem";

echo "Job title is $title <br/>";
echo 'Job title is $title <br/>';
$statement->bindParam(":name",$name, PDO::PARAM_STR);
$statement->execute();
$pdo=null;
?>

