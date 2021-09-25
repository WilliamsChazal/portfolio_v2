const displayHours = document.getElementById('digital-clock__time--hours');
const displayMinutes = document.getElementById('digital-clock__time--minutes');
const displaySeconds = document.getElementById('digital-clock__time--seconds');
const displayDay = document.getElementById('digital-clock__date--day');

const options = { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' };

setInterval(()=>{

    let date = new Date(); 
    let hours = date.getHours();
    let minutes = date.getMinutes();
    let seconds = date.getSeconds();
    let day = date.toLocaleDateString('fr-FR',options);
      seconds = seconds<10?"0"+seconds:seconds;
      minutes = minutes<10?"0"+minutes:minutes;
      hours = hours<10?"0"+hours:hours;

    displayHours.innerHTML=hours;
    displayMinutes.innerHTML=minutes;
    displaySeconds.innerHTML =seconds;
    displayDay.innerHTML = day;

},1000);

// Get the modal
let modal = document.getElementsByClassName("modal")[0];

// Get the button that opens the modal
let btn = document.getElementById("btn");

// Get the <span> element that closes the modal
let btn2 = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
btn2.onclick = function() {
  modal.style.display = "none";
}

