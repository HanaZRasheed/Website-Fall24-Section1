<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $id=$_POST['id'];
unset($_COOKIE['name']);
unset($_COOKIE['id']);
   setcookie('name',$name);
   setcookie('id',$id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hello  <?php echo $_COOKIE['name']. ' Your id is '. $_COOKIE['id'];?></h1>
    <a href="viewCookie.php"> View cookies  </a>
</body>
</html>