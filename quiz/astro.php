<!DOCTYPE html>
<?php 

$bd = new mysqli("localhost", "root", "", "sae_database");
$bd->query("SET nameS 'utf8'");

if($bd->connect_error){
    die("non connecté: ".$bd->connect_error);
}

$requete =mysqli_query( $bd, "SELECT * FROM quiz");
?>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Accueil - Quiz Master</title>
        <link href="../styles/astro.css"  rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    
    <body>
        <nav>
            <img src="../img/quiz.png" alt="logo de quiz par freepik">
            <a href="../html/Acceuil_maquette.html"><h1>Quiz Master</h1></a>
            <a href="../html/paramètre.html"><img src="../img/parametres.png" alt="logo de paramètre par feen"></a>
            <!--ajouter potentiellement une section-->
        </nav>

        

        <main>
            <header id="en_tete" class="en_tete">
                <h2 class="titre"> Quizz Master Thème Informatique </h2>
                <p class="sous_titre"> Il y a <span class="nbrQuestion"> ?? </span> Questions </p>
                <div>
                    <button id="bouton" class="start"> Commencer </button>
                </div>
            </header>

           <!-- <section id="proposition" class="proposition">
                <div>

                </div>
            </section>

            <div id="resultat" class="resultat">
                <h3 class=""> Résultat </h3>
                <span class=""> Vous avez <span id="nbrCorrects"> ?? </span> réponses correctes sur <span class="nbrQuestion"> ?? </span> </span>
            </div> -->

            <?php 
                if(mysqli_num_rows($requete)>0){
                    echo "<script> require('../script/astro.js')";
                    echo "while (compteur != 1){}";
                    echo "<section id='proposition' class='proposition'>";
                    while($tab=mysqli_fetch_array($requete)){
                        /*echo "<header id='en_tete_".$tab['id']." class='en_tete_".$tab['id'].">";*/
                        echo "<h2>".$tab['question']."</h2>";
                        echo $tab['id']." / 10";
                        echo "<section>";
                        echo "<button id='btn_1' class='btn_1'>".$tab["choix_1"]."</button>";
                        echo "<button id='btn_2' class='btn_2'>".$tab["choix_2"]."</button>";
                        echo "<button id='btn_3' class='btn_3'>".$tab["choix_3"]."</button>";
                        echo "<button id='btn_4' class='btn_4'>".$tab["choix_4"]."</button>";
                        echo "</section>";
                        echo "</header>";
                        echo "<script> import { compteur } from '../script/astro.js'";
                        echo "while (compteur !=".($tab+1)."){}";
                    }
                    
                    echo "<button id='next_btn' class='nextQuestion'>Prochaine Question</button>";

                    echo"</section>";
                }

            ?>

        </main>

        <script src="../script/astro.js"></script>

        <footer>
            <img src="../img/quiz.png" alt="logo de quiz par freepik">

            <section>
                <a href="https://www.linkedin.com/in/yannick-khamis-7b48142b6/"><p>étudiant Yannick Khamis</p></a>
                    
                <a href="https://www.linkedin.com/in/lydia-akmoussi-9b2619258/"><p>étudiante Lydio Akmousso</p></a>

                <a href="https://www.linkedin.com/in/slimane-ainouz-6a2309268/"><p>WatiBg Slimane Ainouz</p></a>
            </section>
        </footer>

    </body>
</html>