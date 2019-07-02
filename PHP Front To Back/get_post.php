<?php
   if(isset($_POST['name'])){
     $name = htmlentities($_POST['name']);
     echo $name;
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form method="POST" action= "get_post.php">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>
            <input type="submit" value="Submit">  
    </form>
</body>
</html>