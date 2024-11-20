<?php
class Book {
    private $title;
    private $author;
    private $year;

    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    public function getInfo() {
        return "Title: $this->title, Author: $this->author, Year: $this->year";
    }
}

class Library {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function displayBooks() {
        foreach ($this->books as $index => $book) {
            $index += 1;
            echo "Buku Ke-" . $index . " " . $book->getInfo() . "<br>";
        }
    }

    public function removeBook($title) {
        foreach ($this->books as $index => $book) {
            if (strpos($book->getInfo(), "Title: " . $title) === 0) {
                unset($this->books[$index]);
                echo "Book '$title' has been removed.<br>";
                return;
            }
        }
        echo "Book '$title' not found.<br>";
    }

    public function getBooks() {
        return $this->books;
    }
}

// Contoh penggunaan
$library = new Library();
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925);
$book2 = new Book("1984", "George Orwell", 1949);
$book3 = new Book("Pulang Pergi", "Tere Liye", 2018);
$book4 = new Book("Setelah gelap terbitlah terang", "Kartini", 1951);
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);
$library->addBook($book4);
$booksArray = $library->getBooks();

echo "<h2>Array of Book List</h2>";
echo "<pre>";
print_r($booksArray);
echo "</pre>";

// Menampilkan semua buku
echo "<hr>Books in the library:<br>";
$library->displayBooks();

echo "<hr>";
$library->removeBook("1984");
echo "<hr>";

// Menampilkan isi array buku secara langsung
$booksArray = $library->getBooks();
echo "<h2>Array of Book List (After Some Book Deleted)</h2>";
echo "<pre>";
print_r($booksArray);
echo "</pre>";