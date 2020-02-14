// Ajuste la taille de la bannière à la taille de l'image
if (screen.width > 767){
    let imgHeight = document.getElementById("lake").height ;
    let divBanner = document.getElementById("banner");
    divBanner.style.height = imgHeight + "px" ;
}


//Affiche et cache le menu mobile
let barsButton = document.getElementById("bars_button");
let footer = document.querySelector("footer");
let banner = document.getElementById("banner");

barsButton.addEventListener("click",function(){
    footer.style.display = "flex";
    banner.background.display = "red";

});

document.addEventListener("click",function(){
    footer.style.display = "none";
});

// Vide le champ textarea du formulaire de commentaire lors du clic
let divTextarera = document.getElementById("text");
divTextarera.addEventListener("click",function(){
    divTextarera.innerHTML = "";
});
