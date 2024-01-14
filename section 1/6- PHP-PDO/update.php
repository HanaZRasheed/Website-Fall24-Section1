<?php
require 'connect.php';
$sql="UPDATE employee SET job_title=:job where name=:name";

$statement=$pdo->prepare($sql);
$name="omar";
$new_title="manager";
$statement->bindParam(":job",$new_title, PDO::PARAM_STR);
$statement->bindParam(":name",$name, PDO::PARAM_STR);
$statement->execute();
$pdo=null;

?>


