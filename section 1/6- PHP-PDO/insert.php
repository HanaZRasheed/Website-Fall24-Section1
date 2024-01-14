<?php
// 1- Establish the connection with the database
require 'connect.php';
// 2- SQL Statement
$sql="INSERT INTO employee(name,job_title,department) values (:name,:job,:department)";
// 3- prepare Statement
$statement=$pdo->prepare($sql);
$name='Fahed';
$job_title='Developer';
$department='department1';
// 4- Bind the parameters with the values
$statement->bindParam(":name",$name,PDO::PARAM_STR);
$statement->bindParam(":job",$job_title,PDO::PARAM_STR);
$statement->bindParam(":department",$department,PDO::PARAM_STR);
// 5- Execute the statement 
$statement->execute();
// 6- Close the connection 
$pdo=null;
echo " record is inserted successfully";
?>

