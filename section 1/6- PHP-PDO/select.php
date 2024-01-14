<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    table{
        width:80%;
        margin:20px auto;
        border-collapse: collapse;
    }

    table th{
        background-color: lightblue;
    }
table th, td{
    
    padding:10px;
    text-align: center;
}

table tr:hover{
    background-color: #f2f2f2;
}

</style>
</head>
<body>

<?php
# 1 get the connecton to the database
require 'connect.php';
#2 sql query 
$sql="SELECT * FROM employee where id=:id";
#where name=:name
#3 
$statement=$pdo->prepare($sql);
#$name="Ray";
$ID=11;
#$name="admin";
$statement->bindParam(":id",$ID , PDO::PARAM_INT);
#$statement->bindParam(":name",$name, PDO::PARAM_STR);
$statement->execute();

$data=$statement->fetchAll();
// print_r($data);

echo "<table border='1'>";
echo "<tr> <th> Name </th> <th> Job-title </th> <th> Department </th> </tr>";
foreach($data as $row){
    echo"<tr> <td>". $row['name']. '</td> <td> '. $row['job_title'] .' </td> <td> '. $row['department'] . '</td> </tr>';
}
echo "</table>";
$pdo=null;

?>
    
</body>
</html>




