<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Confirmation Get </title>
</head>
<body>

<?php print_r($_REQUEST);
echo $_GET['name'].", you are Welcome ";
echo "<table> <tr> <th> id </th> <th> name </th></tr>";
echo "<tr><td>". $_GET['id'] ."</td> <td>". $_GET['name'] ."</td> </tr>";
echo "</table>";

if($_GET['id']=='123'){
    header("location:success.php? name=". $_GET['name']);
}


?>

    
</h1>
</body>
</html>