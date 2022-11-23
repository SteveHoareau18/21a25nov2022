// let couleurs = ["#FF0000"];
// couleurs[9] = ["#00FFF0"];
// console.log(couleurs[0]);
// let voiture = {
//     marque:"Peugeot",
//     couleur:couleurs.rouge,
//     modele:"Twingo",
//     vitesseMax:190,
//     km:30000,
//     annee:2018
// }
// console.log(voiture.marque);
// console.log(couleurs);
// document.body.style="background-color: "+couleurs[9];
// couleurs["test"] = "test";
// console.log(couleurs["test"]);
// function coucou() { 
//     alert(prompt("Votre age")>=18?"Vous êtes majeure":"Vous êtes mineure");
// }

// function bonjour() { 
//     return "Bonjour 👋";
//  }
function verifAge(){
    if(document.getElementById("inputAge").value<18){
        document.getElementById("inputAgeAlert").style = "";
        document.getElementById("inputAge").focus();
        document.getElementById("inputAge").autofocus = true;
        document.getElementById("btnAddUser").disabled = true;
    }else{
        document.getElementById("inputAgeAlert").style = "display:none";
        document.getElementById("btnAddUser").style = "";
        document.getElementById("inputAge").autofocus = false;
        document.getElementById("btnAddUser").disabled = false;
    }
}

function verifMDP(){
    if(document.getElementById("inputMDP").value != document.getElementById("inputCheckMDP").value){
        document.getElementById("inputCheckMDPAlert").style = "";
    }else{
        document.getElementById("inputCheckMDPAlert").style = "display:none";
    }
}