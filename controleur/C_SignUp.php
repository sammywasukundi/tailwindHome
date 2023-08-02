<?php
    require('../model/database.php');
    if(isset($_POST['submit'])){
        if(isset($_POST['nom'],$_POST['email'],$_POST['password'])){
            if($_POST['nom'] != '' && $_POST['email'] != '' && $_POST['password'] != ''){
                $nom=$_POST['nom'];
                $mail=$_POST['email'];
                $password=$_POST['password'];
                // admin password
                $password_admin='admin';

                if($_POST['password'] == $password_admin){
                    header('Location:owner.php');
                    $req = $pdo->prepare("INSERT INTO user(nom,email,password,image) VALUES(?,?,?,?)");
                    $req->execute(array(
                        $_POST['nom'],
                        'admin',
                        $_POST['email'],
                        $_FILES['image']['name']
                    )); 
                }
                else{
                        if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['email'])){
                            // verifions que le fichier a été transmis sans erreurs
                            if(isset($_FILES['image']) AND $_FILES['image']['error'] == 0){
                                // verifions la taille du fichier
                                if($_FILES['image']['size'] < 5000000)
                                {
                                    // stockons le nom du fichier dans une variable
                                    $nom_fichier = pathinfo($_FILES['image']['name']);

                                    // récuperons l'extension du fichier
                                    $recup_extension =  $nom_fichier['extension'];
                                    // définissons les extensions autorisées
                                    $extensions =array('zip','png','rar','iso','jpg','JPG','PNG','jpeg','pdf','docx','xlx');
                                    // verifions si l'extension du fichier uploader est autorisé
                                    if(in_array($recup_extension,$extensions)){
                                        // deplaçons le fichier vers notre serveur
                                        if(move_uploaded_file($_FILES['image']['tmp_name'],'profiles/'.basename($_FILES['image']['name'])))
                                        {
                                            $req = $pdo->prepare("INSERT INTO user(nom,email,password,image) VALUES(?,?,?,?)");
                                            $req->execute(array(
                                                $_POST['nom'],
                                                md5($_POST['email']),
                                                $_POST['password'],
                                                $_FILES['image']['name']
                                            )); 
                                    
                                            if($req == true){
                                                echo "Informations bien enregistrées";
                                                header('Location:../../login_page/login.php');
                                            }
                                            else{
                                                echo "<script>

                                                alert('L'enregistrement n'a pas pu être effectué'); 
                            
                                                </script>";
                                            }                   
                                        }
                                    }
                                    else{
                                        echo "<script>

                                        alert('extension non autorisée'); 
                    
                                        </script>";
                                    }
                                }
                                else{
                                    echo "<script>

                                    alert('Fichier volumineux'); 
                
                                    </script>";
                                }
                            }

                        }
                        else{
                            echo "<script>

                            alert('Veuillez taper un vrai adresse email'); 
        
                            </script>";
                        }
                    }
            }
            else{
                echo "<script>
                alert('Veuillez compléter tous les champs'); 
                </script>";   
            }
        }
    }
?>