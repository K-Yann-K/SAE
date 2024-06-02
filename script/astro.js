let en_tete = document.getElementById("en_tete");
let proposition = document.getElementById("proposition");
let resultat = document.getElementById("resultat");

resultat.style.display = "none";
function startQuestions() {
    en_tete.style.display = "none";
    /*proposition.style.display = "block";*/

    quiz.displayCurrentQuestion();
}

function next() {
    let variable = document.getElementById("en_tete_".compteur);
    variable.style.display = "none";
    compteur++;
}


let btn_start = document.getElementById("bouton");
btn_start.addEventListener("click", startQuestions);

compteur=1;
let next_btn = document.getElementById("next_btn");
next_btn.addEventListener("click", next);

