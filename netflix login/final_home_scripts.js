let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slideshow_image");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";
}


let Index = 1;
scrollSlides(Index);

function plusscroll(a) {
  scrollSlides(Index += a);
}

function scrollSlides(a) {
  let b;
  let scroll_images = document.getElementsByClassName("slide_scroll");
  if (a > scroll_images.length) {Index = 6}    
  if (a < 6) {Index = scroll_images.length}
  for (b = 0; b < scroll_images.length; b++) {
    scroll_images[b].style.display = "none";
    
  }
  scroll_images[Index-1].style.display = "";
  scroll_images[Index-2].style.display = "";
  scroll_images[Index-3].style.display = "";
  scroll_images[Index-4].style.display = "";
  scroll_images[Index-5].style.display = "";
  scroll_images[Index-6].style.display = ""; 
}

