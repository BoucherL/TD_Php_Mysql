//---Exercice 1---
function exo1(){
    var longueur = parseInt(prompt("Longueur"));

    var largeur = parseInt(prompt("Largeur"));

    var aire = largeur * longueur;
    
    var perimetre = (longueur + largeur)*2;

    alert("Aire : "+aire +" " + "Périmètre : "+perimetre);
}

//---Exercice 2---
function exo2(){
    var rayon = parseInt(prompt("Rayon"));

    var perimetre = (Math.PI * (rayon * 2));

    var aire = (Math.PI * (rayon * rayon));

    alert("Aire : "+ aire +" " + "Périmètre : "+ perimetre);
}

//---Exercice 3---
var a = 2;
var b = 3;
function multiplie(x = 8){
    return x * 3 ;
}
function affiche(){
    alert(multiplie(a));
    alert(multiplie(b));
    alert(multiplie());
}

//---Exercice 4---
let tab = [-2,1,4];
function additionne(x){
    return x + 2;
}
function affiche1(){
    for(var i = 0; i < 3; i++){
        alert(additionne(tab[i]));

    }
}

//---Exercice 5---
function boucle(){
    var tab = [2,1,3];
    for(var i = 0; i< 3; i++){
        alert(tab[i] * tab[i]);
    }
}
function boucle2(){
    var Longueur= parseInt(prompt("Longueur du tableau"));
    let tab = [Longueur];
    for(var i = 0; i < 3 ; i++){
        tab[0] = Longueur * Longueur;
        alert(tab[0]);
    }
}

//---Exercice 6---
var tab1 = [-2,1,4];
function soustrait(x){
    if (x >= 0){
        return x - 2;
    }else{
        return "Nombre négatif";
    }
}
function affiche2(){
    alert(soustrait(tab1[0]));
    alert(soustrait(tab1[tab1.length -1]));

}

//---Exercice 7---
function jourDeLaSemaine(){
    switch(new Date().getDay()){
        case 1:
            day = "Lundi";
            alert(day);
            break;
        case 2:
            day = "Mardi";
            alert(day);
            break;
        case 3:
            day = "Mercredi";
            alert(day);
            break;
        case 4:
            day = "Jeudi";
            alert(day);
            break;
        case 5:
            day = "Vendredi";
            alert(day);
            break;
        case 6:
            day = "Samedi";
            alert(day);
            break;
        case 7:
            day = "Dimanche";
            alert(day);
            break;
    }
}

//---Exercice 9---
function taille(){
    const text = document.getElementById("text");
    text.style.margin = "0px auto";
    text.style.width = "0px";
}
function taille2(){
    const text = document.getElementById("text");
    text.style.margin = "0px auto";
    text.style.width = "100px";
    
}

//---Exercice 11---
function modifparagraph(){
    const h1 = document.getElementById("h1");

    h1.innerHTML = "<i>Aie !!!</i>";
}
function centrage(){
    const p = document.getElementById("");

    p.setAttribute("p","test");
}

//---Exercice 12---
var Lawindow;
function resizeWinTo() {
    Lawindow = window.open("","","width=250, height=250");
    LaWindow.moveTo(50,50);
    Lawindow.focus();
}
function suiviWinBy() {
    Lawindow.moveTo(150,50);
    Lawindow.focus();
}
function reglagefenetre(){
    Lawindow.resizeTo(100,100);
    Lawindow.focus();
}

//---Exercice 13---
function navigateur(){
    var x= alert("Votre navigateur est configuré pour la plat forme : " + navigator.platform);
    document.getElementById("plateforme").innerHTML=x;
    
}
//---Exercice 14---
function init(){
    var champ = champ;
    var submit = submit;
    var reset = reset;

    ObjectBoutonSubmit.onclick=fctSubmit;
    ObjectBoutonreset.onclick=fctreset;


}
function Submit(){

}
function remise_a_zero(){

}
//---Exercice 15---
function Init(){
    Monobjetyspan = addEventListener("click", mongestionnaire, false);
}
function mongestionnaire(){
    document.getElementById("Monobjetyspan").style.backgroundColor = "lightgreen";
}