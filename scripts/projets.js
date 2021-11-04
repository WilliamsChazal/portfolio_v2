// Get the modal
let modal_2 = document.getElementsByClassName("modal_projets")[0];

// Get the button that opens the modal
let btn_2 = document.getElementById("openProjet");

// Get the <span> element that closes the modal
let btn__2 = document.getElementsByClassName("close")[2];

// When the user clicks on the button, open the modal
btn_2.onclick = function() {
  modal_2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
btn__2.onclick = function() {
  modal_2.style.display = "none";
}

function openProjectDetails(id){
  getText('details.php?id='+id)
}

//fetch en JS// 


 async function getText(file) {
  let myObject = await fetch(file);
  console.log(myObject)
  let myText = await myObject.text();
  document.getElementById("demo").innerHTML = myText;
  console.log(myText);
} 











/*  Get the modal des compétences
let modal_6 = document.getElementsByClassName("modal_game")[0];

 Get the button that opens the modal
let btn_6 = document.getElementById("openGame");

Get the <span> element that closes the modal
let btn__6 = document.getElementsByClassName("close")[4];

 When the user clicks on the button, open the modal
btn_6.onclick = function() {
  modal_6.style.display = "block";
}

When the user clicks on <span> (x), close the modal
btn__6.onclick = function() {
  modal_6.style.display = "none";
} */