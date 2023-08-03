<?php 
    //require('../../controleur/C_SignUp.php');
    try{
        $pdo=new PDO('mysql: host=localhost','root','');
        $pdo->exec('CREATE DATABASE ninjafood');
    }
    catch(PDOException $e){
        die("Connection failed". $e->getMessage());
    }
    try{
        $pdo=new PDO('mysql: host=localhost;dbname=ninjafood','root','');
    }
    catch(PDOException $e){
        die("Connection failed". $e->getMessage());
    }
    if(isset($_POST['submit'])){
        if(isset($_POST['nom'],$_POST['email'],$_POST['password'])){
            if($_POST['nom'] != '' && $_POST['email'] != '' && $_POST['password'] != ''){
                $nom=$_POST['nom'];
                $mail=$_POST['email'];
                $password=$_POST['password'];
                // admin password
                // $password_admin='admin';

                // if($_POST['password'] == $password_admin){
                //     $req = $pdo->prepare("INSERT INTO user(nom,email,password) VALUES(?,?,?)");
                //     $req->execute(array(
                //         $_POST['nom'],
                //         $_POST['email'],
                //         'admin'
                //     )); 
                //     header('Location:../owner.php');
                //     echo "bonjour";
                // }
                // else{
                    if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['email'])){
                        $query = $pdo->prepare("INSERT INTO user(nom,email,password) VALUES(:nom,:email,:password)");
                        $query->execute(array(
                            'nom' => $nom,
                            'email' => $mail,
                            'password' => $password
                        )); 
                        if($query == true){
                            // echo "Informations bien enregistrées";
                            header('Location:../login_page/login.php');
                        }
                        else{
                            echo "<script>

                            alert('L'enregistrement n'a pas pu être effectué'); 
        
                            </script>";
                        }
                    }                   
                    else{
                        echo "<script>

                        alert('Veuillez taper un vrai adresse email'); 
    
                        </script>";
                    }
                }
            //}
            else{
                echo "<script>
                alert('Veuillez compléter tous les champs'); 
                </script>";   
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sign up sreen</title>
</head>
<body class="text-gray-700">
    <div class="grid md:grid-cols-3">
        <div class="md:col-span-1 md:flex justify-end">
            <nav class="text-right">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold uppercase p-5 border-b border-gray-200">
                        <a href="#" class="text-yellow-700 hover:text-red-600">NinjaFood</a>
                    </h1>
                    <div class="px4 cursor-pointer md:hidden " id="burger">
                        <svg class="w-6 mr-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                    </div>
                </div>
                <ul class="text-sm mt-6 hidden md:block" id="menu">
                    <li  class="text-gray-600 font-bold border-r-4 border-yellow-500">
                        <a href="#" class="px-4 flex justify-end">
                            <span>Home</span>
                            <svg class="w-5 ml-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="border-r-4 border-white">
                        <a href="#" class="px-4 flex justify-end mt-2">
                            <span>About</span>
                            <svg class="w-5 ml-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>               
                        </a>
                    </li>
                    <li class="border-r-4 border-white">
                        <a href="#" class="px-4 flex justify-end mt-2">
                            <span>Contact</span>
                            <svg class="w-5 ml-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>

                    </li>
                    <li  class="border-r-4 border-white">
                        <a href="#" class="px-4 flex justify-end mt-2">
                            <span>Logout</span>
                            <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                            </svg>
                              
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <section class="bg-blue-50 min-h-screen flex items-center justify-center md:col-span-2">
            <div class="bg-gray-200 flex rounded-2xl shadow-2xl max-w-4xl p-5 items-center contrast-100">
                <div class="md:w-2/3 px-16">
                    <h2 class="font-bold text-2xl text-yellow-700">Sign up</h2>
                    <p class="text-sm mt-4 text-yellow-700">If you are not a member, register</p>

                    <form class="flex flex-col gap-4" action="" method="post">
                        <input class="p-2 mt-8 rounded-xl" type="text" name="nom" placeholder="Name">
                        <input class="p-2 rounded-xl" type="text" name="email" placeholder="Email">
                        <div class="relative">
                            <input class="p-2 rounded-xl w-full" type="text" name="password" placeholder="Password">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                        </div>
                        <button class="bg-yellow-700 rounded-xl text-white py-2 hover:shadow-inner transform hover:scale-110 transition ease-in duration-500" name="submit" type="submit">Sign up</button>
                        <div class="mt-3 flex justify-between text-xs items-center">
                            <p>Already a member ?</p>
                            <button class="py-2 px-5 bg-white border rounded-xl hover:shadow-inner transform hover:scale-110 transition ease-in duration-500"><a href="../login_page/login.php"> login</a></button>
                        </div>
                    </form>
                </div>
                <div class="md:block hidden w-1/3">
                    <img class=" rounded-2xl object-cover" src="melogin.png" alt="">
                </div>
            </div>
        </section>
    </div>
    <script src="../index.js"></script>
</body>
</html>