<?php

namespace Library;

enum Genre {
  case Aventures;
  case Ciència_ficció;
  case Conte;
  case Novella_Policial;
  case Paranormal;
  case Distopia;
  case Fantàstic;
}

class Book
{
  public function __construct( 
    public string $title, 
    public string $author, 
    public string $Isbn, 
    public Genre $genre, 
    public int $bookLength)
    
    {
    $this->title = $title;
    $this->author = $author;
    $this->Isbn = $Isbn;
    $this->genre = $genre;
    $this->bookLength = $bookLength;
  }

  public function getTitle(): string{
    return $this->title;
  }

  public function getAuthor(): string{
    return $this->author;
  }

  public function getIsbn(): string{
    return $this->Isbn;
  }

  public function getGenre(){
    return $this->genre;
  }

  public function getPages(): int{
    return $this->bookLength;
  }
}

class Catalog {

  public $catalog = [];
  
  public function getBooks(): array {
    return $this->catalog;
  }  
  
  public function addBook(Book $book): void{
    array_push($this->catalog, $book);
  }

  public function removeBook(Book $book):void {
    $key = array_search( $book, $this->catalog );
    unset($this->catalog[$key]);
  }

  public function updateBook(Book $oldBook, Book $newBook){
    $key = array_search( $oldBook, $this->catalog );
    unset($this->catalog[$key]);
    $this->catalog[$key] = $newBook;
  }

  public function getBook(string $type, string | Genre $goal) {
    $filteredBooks = array_filter($this->catalog, function($book) use ($type, $goal) {
      switch ($type) {
        case 'Title':
          return $book->getTitle() === $goal;
        
        case 'Genre':
          //instanceof verifica si lo que le estoy pasando coincide con alguno de los enum de Genre.
          return $goal instanceof Genre ? $book->getGenre()->name == $goal->name : false;
          
        case 'Isbn':
          return $book->getIsbn() === $goal;
        case 'Author':
          return $book->getAuthor() === $goal;

        default:
          return 'No matches';
      }
    });

    // array_values reindexa los elementos del array. Sin esto provocaba un error al devolver el elemento [0] ya que a veces devolvia el elemento [1] y eso devolvia null
    $filteredBooks = array_values($filteredBooks);
    return $filteredBooks[0] ?? null;    
  }

  public function getLargeBooks() {
    $filteredBooks = array_filter($this->catalog, function($book) {
        $length = $book->getPages(); 
        return $length >= 500;
    });
    return array_values($filteredBooks);
}
}
