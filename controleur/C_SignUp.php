<?php
var_dump($query);
    require('../model/connexion.php');
    require('../model/bdd.php');
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
                            echo "Informations bien enregistrées";
                            // header('Location:../login_page/login.php');
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