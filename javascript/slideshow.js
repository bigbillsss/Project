window.addEventListener('DOMContentLoaded', (event) => {
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;

    function goToNextSlide() {
        slides[currentSlide].classList.remove('active');

        currentSlide = (currentSlide + 1) % slides.length;

        slides[currentSlide].classList.add('active');
    }

    setInterval(goToNextSlide, 3000);
});