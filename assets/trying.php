<?php 
    require('../controleur/C_SignUp.php');
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
    <form class="flex flex-col gap-4" action="" method="post">
        <input type="text" name="nom" placeholder="Name">
        <input type="mail" name="email" placeholder="Email">
        <div >
            <input type="password" name="password" placeholder="Password">
        </div>
        <button name="submit" type="submit">Sign up</button>
        <div >
            <p>Already a member ?</p>
            <button ><a href="../login_page/login.php"> login</a></button>
        </div>
    </form>
</body>
</html>