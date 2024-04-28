// Voici les contrôles pour l'insertion
// Les fonctions pour l'insertion et la mise à jour sont presque identiques. Je devrais trouver comment les combiner, mais ce sera pour demain
// Il y a quelques jours, André a aligné tous les "="
// C'est génial. Le code est beaucoup plus clair

if (document.getElementById("insertForm")) {
const insertForm    = document.getElementById("insertForm"),
      nomInp        = document.getElementById("nomInp"),
      descInp       = document.getElementById("descInp"),
      latInp        = document.getElementById("latInp"),
      lonInp        = document.getElementById("lonInp"),
      insertError   = document.getElementById("insertError");

      
      insertForm.addEventListener("submit", function(event) {
    event.preventDefault();
        validateInputsForInsert();
    });
    
    
    function validateInputsForInsert () {
        insertError.textContent = ""
        let nom  = nomInp.value;
        let desc = descInp.value;
        let lat  = latInp.value;
        let lon  = lonInp.value;
        
        (nom == "" || desc == "" || lat == "" || lon == "") || (isNaN(lat) || isNaN(lon)) ?
        insertError.textContent = "Remplissez correctement les champs" :
        insertForm.submit();   
    }
    
}  

 
if (document.getElementById("updateForm")) {
const updateForm    = document.getElementById("updateForm"),
      nomInpUpdate        = document.getElementById("nomInpUpdate"),
      descInpUpdate       = document.getElementById("descInpUpdate"),
      latInpUpdate        = document.getElementById("latInpUpdate"),
      lonInpUpdate        = document.getElementById("lonInpUpdate");
    

updateForm.addEventListener("submit", function(event) {
    event.preventDefault();
        validateInputsForUpdate();
});

function validateInputsForUpdate () {
       insertError.textContent = ""
       let nom  = nomInpUpdate.value;
       let desc = descInpUpdate.value;
       let lat  = latInpUpdate.value;
       let lon  = lonInpUpdate.value;

    (nom == "" || desc == "" || lat == "" || lon == "") || (isNaN(lat) || isNaN(lon)) ?
        insertError.textContent = "Remplissez correctement les champs" :
        updateForm.submit();   
}
}