<?php
    try{
        $pdo=new PDO('mysql: host=localhost;dbname=ninjafood','root','');
    }
    catch(PDOException $e){
        die("Connection failed". $e->getMessage());
    }
    if(isset($_GET['id'])){

    
        $recupId = $_GET['id'];
        $delete = $pdo->prepare("DELETE FROM recipes WHERE id = ?");
        $delete->execute(array(
            $recupId
        ));
        if($delete){
            echo "<script>
            alert('Recipe deleted successfully'); 
            </script>";
            header('Location:Merecipes.php');
        }else{
            echo 'fichier non supprimé';
        }
    }
?>