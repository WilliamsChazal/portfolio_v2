// Get the modal d'un projet
let modal_3 = document.getElementsByClassName("modal_details")[0];

// Get the button that opens the modal
let btn_3 = document.getElementById("openDetails");

// Get the <span> element that closes the modal
let btn__3 = document.getElementsByClassName("close")[3];

// When the user clicks on the button, open the modal
btn_3.onclick = function() {
  modal_3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
btn__3.onclick = function() {
  modal_3.style.display = "none";
}