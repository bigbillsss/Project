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

//   .topbar {
//         display: flex;
//         justify-content: space-around;
//         align-items: center;
//         width: 100%;

//     }

//     .topbar nav {
//         display: flex;
//         gap: 20px;
//     }

//     .topbar a {
//         color: #fff;
//         text-decoration: none;
//         font-size: 1.1rem;
//         flex: 1;
//         text-align: center;
        
        
//     }

//     .topbar a:hover {
//         color: #F77839; 
//         font-weight: bolder;
//     }