function scrollRight() {
    const carrossel = document.querySelector('.carrossel');
    carrossel.scrollBy({ left: 1200, behavior: 'smooth' });
}

function scrollLeft() {
    const carrossel = document.querySelector('.carrossel');
    carrossel.scrollBy({ left: -1200, behavior: 'smooth' });
}