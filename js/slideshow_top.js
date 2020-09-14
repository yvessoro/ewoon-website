var slideIndex = 0;
showTopSlides();

function plusSlides(n) {
    showTopSlide(slideIndex += n);
}

function showTopSlides() {
  var i;
  var slides = document.getElementsByClassName("top_slides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block"; 
  setTimeout(showTopSlides, 3000); // Change image every 2 seconds
}

function showTopSlide(n) {
    var i;
    var slides = document.getElementsByClassName("top_slides");
    var dots = document.getElementsByClassName("dot");
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
  }