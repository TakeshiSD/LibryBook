function searchBooks() {
    // Obtém o valor digitado na barra de pesquisa
    var input = document.getElementById('search-input');
    var filter = input.value.toUpperCase();

    // Obtém a lista de livros
    var bookListContainer = document.getElementById('book-list-container');
    var books = bookListContainer.getElementsByClassName('book-item');

    // Itera sobre os itens da lista de livros e exibe ou oculta conforme a pesquisa
    for (var i = 0; i < books.length; i++) {
        var title = books[i].getElementsByTagName('h3')[0];
        var author = books[i].getElementsByTagName('p')[0];

        if (title.innerHTML.toUpperCase().indexOf(filter) > -1 || author.innerHTML.toUpperCase().indexOf(filter) > -1) {
            books[i].style.display = '';
        } else {
            books[i].style.display = 'none';
        }
    }
}

// Adiciona o evento de digitação à barra de pesquisa
document.getElementById('search-input').addEventListener('keyup', searchBooks);

