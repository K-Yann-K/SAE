<?php 

$bd = new mysqli("localhost", "root", "", "sae_database_connexion");
$bd->query("SET nameS 'utf8'");

if($bd->connect_error){
    die("non connecté: ".$bd->connect_error);
}

$nom_user=$_POST["user"];
$mdp=$_POST["mot_de_passe"];

$requete = $bd->prepare("SELECT * FROM connexion WHERE nom_user=$nom_user AND mdp=$mdp ");
$requete->execute();

while($id = $requete->fetch(PDO::FETCH_ASSOC)) {
    
    if($id['nom_user']=$nom_user and $id['mdp']=$mdp){
        header("Location: ../html/Acceuil_maquette.html");
        exit();
    }    
    }



?>