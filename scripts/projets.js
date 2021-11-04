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


function closeModal(uuidv4){

  const modal = document.getElementById(uuidv4)
  document.getElementById('modals').removeChild(modal)
}


async function openProjectDetails(id, title){
  openModal('details.php?id='+id,'modal_details', title, 100)
  
}

async function openModal(url, eClass,title, zIndex){
  const content =await getText(url)
  const modal =document.createElement('div')
  const uuid = uuidv4()
  modal.setAttribute('id',uuid)
  modal.setAttribute('class',eClass+ ' modal_generic')
  modal.style.zIndex=zIndex
  modal.innerHTML=`<section class='${eClass}'>

  <div class='task_bar'>
              <span>Williams.Chazal > <strong>${title}</strong></span>
              <span ><button class='close' onclick="closeModal('${uuid}')"></button></span>
  </div> 
  <div class='${eClass}--content'>${content}</div>

</section>`
  document.getElementById('modals').appendChild(modal)
  dragElementGeneric(modal)
}
//fetch en JS// 


 async function getText(file) {
  let myObject = await fetch(file);
  console.log(myObject)
  let myText = await myObject.text(); 
  console.log(myText);
  return myText;
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