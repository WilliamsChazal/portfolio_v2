
// Get the modal du formulaire de contact
let modal_5 = document.getElementsByClassName("modal_contact")[0];

// Get the button that opens the modal
let btn_5 = document.getElementById("openForm");

// Get the <span> element that closes the modal
let btn__5 = document.getElementsByClassName("close")[4];

// When the user clicks on the button, open the modal
btn_5.onclick = function() {
  modal_5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
btn__5.onclick = function() {
  modal_5.style.display = "none";
}