// Encore une première... Séparer les fonctions JS en fichiers individuels.
// Celui-ci s'occupe du changeur de couleurs que j'ai ajouté pour André

const body      = document.querySelector("body");
const getColour = document.querySelectorAll(".dropdown-item");
const listItem  = document.querySelectorAll(".list-group-item");


for (let i = 0; i < getColour.length; i++) {   
    getColour[i].addEventListener("click", changeColour);
}

function changeColour() {
    body.className = "";    
    const colourPick = this.id
        body.classList.add(colourPick);
    
    sessionStorage.setItem("colour", colourPick);
        applyColour();
}

function applyColour () {
    let colourPick = sessionStorage.getItem("colour");
        switch(colourPick) {
            case "bodyRed" :
                bootstrapColour = "border-danger";
                break;
            case "bodyGreen" :
                bootstrapColour = "border-success";
                break;
            case "bodyBlue" :
                bootstrapColour = "border-info";
                break;
            case "bodyClassic" :
                bootstrapColour = "border-secondary";
                break;
            default :
            bootstrapColour = "border-secondary";                                    
        }

    body.className = "";  
    body.classList.add(colourPick);
    
    for (let i = 0; i < listItem.length; i++) {
       listItem[i].className = "";
       listItem[i].classList.add("list-group-item");
       listItem[i].classList.add("bg-transparent");
       listItem[i].classList.add("border-bottom");
       listItem[i].classList.add(bootstrapColour);
    }
   
}

applyColour();

 