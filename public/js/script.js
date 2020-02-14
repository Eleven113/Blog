// Ajuste la taille de la bannière à la taille de l'image
if (screen.width > 767){
    let imgHeight = document.getElementById("lake").height ;
    let divBanner = document.getElementById("banner");
    divBanner.style.height = imgHeight + "px" ;
}


//Affiche et cache le menu mobile
let barsButton = document.getElementById("bars_button");
let barsButtonFooter = document.getElementById("bars_button_footer");
let footer = document.querySelector("footer");
let banner = document.getElementById("banner");
let CompStyle = window.getComputedStyle(footer);


barsButton.addEventListener("click",function(){
    console.log("click");
    if (CompStyle.getPropertyValue("display") === "none"){
        footer.style.display = "flex";
        barsButton.style.color = "black";
        barsButton.style.border = "3px solid black";
    }
    else {
        footer.style.display = "none";
        barsButton.style.color = "snow";
        barsButton.style.border = "3px solid snow";       
    }
});


// Vide le champ textarea du formulaire de commentaire lors du clic
let divTextarera = document.getElementById("text");
divTextarera.addEventListener("click",function(){
    divTextarera.innerHTML = "";
});
