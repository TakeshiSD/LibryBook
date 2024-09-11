function scrollRight() {
    const carousel = document.querySelector('.carousel');
    carousel.scrollBy({ left: 300, behavior: 'smooth' });
}

function scrollLeft() {
    const carousel = document.querySelector('.carousel');
    carousel.scrollBy({ left: -300, behavior: 'smooth' });
}