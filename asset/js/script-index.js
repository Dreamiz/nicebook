let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("slider-item");
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove('active');
    }
    slideIndex++;
    if (slideIndex >= slides.length) {slideIndex = 0}    
    slides[slideIndex].classList.add('active');
    setTimeout(showSlides,7000); 
}

function plusSlides(n) {
    let slides = document.getElementsByClassName("slider-item");
    slideIndex += n;
    if (slideIndex < 0) { slideIndex = slides.length - 1; }
    if (slideIndex >= slides.length) { slideIndex = 0; }
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove('active'); 
    }
    slides[slideIndex].classList.add('active');
}

