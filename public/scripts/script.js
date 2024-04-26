const timeToGo = document.getElementById("timeToGo");
 
const sayBye = document.getElementById("sayBye");



sayBye.addEventListener("click", function (event) {
    event.preventDefault();
    
    timeToGo.classList.add("animate__animated", "animate__fadeOut");

});
