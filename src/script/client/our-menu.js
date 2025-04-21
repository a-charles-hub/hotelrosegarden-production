
/** Image Carousel */
/*
    It displays first image in image array by default.
    Once next or prev button is clicked, increment or decrement to display appropriate image.
    Auto play added  - it resets timer if user clicks next or previous button. This is to ensure good user experience
*/

const imageCarousel = () => {
    // Variables
    const slides = document.querySelectorAll('.slide');
    const nextBtn = document.querySelector('.btn-next');
    const prevBtn = document.querySelector('.btn-prev');
    const slideContainer = document.querySelector('.slides');

    let index = 0;
    let autoSlideInterval;

    const updateSlidePosition = () => {
        slideContainer.style.transform = `translateX(-${index * 100}%)`;
    };

    const showSlide = (i) => {
        slides.forEach(slide => slide.classList.remove('active'));
        slides[i].classList.add('active');
        updateSlidePosition();
    };

    const startAutoSlide = () => {
        autoSlideInterval = setInterval(() => {
            index = (index + 1) % slides.length;
            showSlide(index);
        }, 8000);
    };

    const resetAutoSlide = () => {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    };

    nextBtn.addEventListener('click', () => {
        // Remove css previous image
        slides[index].classList.remove('active');
        index = (index + 1) % slides.length;
        // Add css to new image
        slides[index].classList.add('active');
        updateSlidePosition();
        resetAutoSlide();
    });

    prevBtn.addEventListener('click', () => {
        // Remove css previous image
        slides[index].classList.remove('active');
        index = (index - 1 + slides.length) % slides.length;
        // Add css to new image
        slides[index].classList.add('active');
        updateSlidePosition();
        resetAutoSlide();
    });

    // Init
    slides[index].classList.add('active');
    updateSlidePosition();
    startAutoSlide();
};


imageCarousel();