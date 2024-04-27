// Voici les contrôles pour l'insertion

const insertForm    = document.getElementById("insertForm"),
      nomInp        = document.getElementById("nomInp"),
      descInp       = document.getElementById("descInp"),
      latInp        = document.getElementById("latInp"),
      lonInp        = document.getElementById("lonInp"),
      insertError   = document.getElementById("insertError");

insertForm.addEventListener("submit", function(event) {
    event.preventDefault();
        validateInputs();
});

function validateInputs () {
    insertError.textContent = ""
   let nom  = nomInp.value;
   let desc = descInp.value;
   let lat  = latInp.value;
   let lon  = lonInp.value;

    (nom == "" || desc == "" || lat == "" || lon == "") || (isNaN(lat) || isNaN(lon)) ?
        insertError.textContent = "Remplissez correctement les champs" :
        insertForm.submit();   
}