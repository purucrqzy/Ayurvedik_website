var navLinks= document.getElementById("navLinks");

function showmenu(){
    navLinks.style.right="0";
}   
function hidemenu(){
    navLinks.style.right="-200px";
}

//Slider Functionality
let slideIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function showSlides() {
    slides.forEach((slide, index) => {
        if (index === slideIndex) {
            slide.style.display = 'block';
        } else {
            slide.style.display = 'none';
        }
    });
}

function nextSlide() {
    slideIndex = (slideIndex + 1) % totalSlides;
    showSlides();
}

function prevSlide() {
    slideIndex = (slideIndex - 1 + totalSlides) % totalSlides;
    showSlides();
}

function autoSlide() {
    nextSlide();
}

// Start automatic sliding every 5 seconds
const interval = setInterval(autoSlide, 5000);

// Stop automatic sliding when user interacts with navigation buttons
function stopAutoSlide() {
    clearInterval(interval);
}

showSlides();


// document.addEventListener('contextmenu', event => event.preventDefault());

//scroll to top buttton functionality
document.addEventListener('DOMContentLoaded',function(){
    const scrollToTopButton= document.getElementById('scrollToTopButton');

    window.addEventListener('scroll',function(){
        if(this.window.scrollY>100){
            scrollToTopButton.style.display='block';
        }else{
            scrollToTopButton.style.display='none';
        }
    });

    scrollToTopButton.addEventListener('click',function(){
        window.scrollTo({
            top:0,behavior:'smooth'
        });
    });
});