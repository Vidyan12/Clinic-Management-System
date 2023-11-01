 // JavaScript for the slideshow
 var slides = document.querySelectorAll('.slide-img');
 var currentSlide = 0;

 function showSlide() {
   for (var i = 0; i < slides.length; i++) {
     slides[i].classList.remove('active');
   }
   slides[currentSlide].classList.add('active');
 }

 function nextSlide() {
   currentSlide++;
   if (currentSlide >= slides.length) {
     currentSlide = 0;
   }
   showSlide();
 }

 // Start the slideshow
 setInterval(nextSlide, 3000); // Change slide every 3 seconds




