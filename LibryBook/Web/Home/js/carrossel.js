// Selecionar os elementos do carrossel e os botões
const carrossel = document.querySelector('.carrossel');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

// Definir a quantidade de rolagem
const scrollAmount = 200; // Ajuste esse valor conforme o necessário

// Função para rolar à esquerda
function scrollLeft() {
    carrossel.scrollBy({
        top: 0,
        left: -scrollAmount,
        behavior: 'smooth'
    });
}

// Função para rolar à direita
function scrollRight() {
    carrossel.scrollBy({
        top: 0,
        left: scrollAmount,
        behavior: 'smooth'
    });
}

// Adicionar eventos de clique aos botões
prevBtn.addEventListener('click', scrollLeft);
nextBtn.addEventListener('click', scrollRight);
