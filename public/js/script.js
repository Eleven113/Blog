// Ajuste la taille de la bannière à la taille de l'image
let imgHeight = document.getElementById("lake").height ;
let divBanner = document.getElementById("banner");
divBanner.style.height = imgHeight + "px" ;


// Vide le champ textarea du formulaire de commentaire lors du clic
let divTextarera = document.getElementById("text");
divTextarera.addEventListener("click",function(){
    divTextarera.innerHTML = "";
});



