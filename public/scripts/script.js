const timeToGo = document.getElementById("timeToGo");
 
const sayBye = document.getElementById("sayBye");
const getColour = document.getElementById("getColour")
const body = document.querySelector("body");

getColour.addEventListener("click", changeColour);

function changeColour() {
    body.className = "";    
    const colourPick = document.querySelector(':checked').value;
    console.log(colourPick);
    body.classList.add(colourPick);

}
/*

sayBye.addEventListener("click", function (event) {
    event.preventDefault();
    
    timeToGo.classList.add("animate__animated", "animate__fadeOut");

});

*/