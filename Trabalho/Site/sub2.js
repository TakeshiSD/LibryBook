function searchBooks() {
    var input = document.getElementById('search-input');
    var filter = input.value.toUpperCase();

    var bookListContainer = document.getElementById('book-list-container');
    var books = bookListContainer.getElementsByClassName('emp-book-item');

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

document.getElementById('search-input').addEventListener('keyup', searchBooks);

