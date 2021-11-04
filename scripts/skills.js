var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("demo");
  /* var captionText = document.getElementById("caption"); */
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  /* captionText.innerHTML = dots[slideIndex-1].alt; */
}

/* // Get the modal des compétences
let modal_4 = document.getElementsByClassName("modal_skills")[0];

// Get the button that opens the modal
let btn_4 = document.getElementById("openSkills");

// Get the <span> element that closes the modal
let btn__4 = document.getElementsByClassName("close")[1];

// When the user clicks on the button, open the modal
btn_4.onclick = function() {
  modal_4.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
btn__4.onclick = function() {
  modal_4.style.display = "none";
} */