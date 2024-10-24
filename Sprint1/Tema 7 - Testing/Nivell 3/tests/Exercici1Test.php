<?php

require './src/Exercici1.php';

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Library\Book;
use Library\genre;
use Library\Catalog;



class Exercici1Test extends TestCase
{

    private Book $book1;
    private Book $book2;

    // setUp() se ejecuta ANTES de cada prueba. Con esto estoy haciendo que en cada prueba, antes de nada, se creen dos objetos de tipo Book y uno de tupo Catalog con el que hare las pruebas unitarias siguientes
    protected function setUp(): void
    {
        $this->book1 = new Book('Gilmour', 'Seymour', '43534534534', genre::Aventures, 245);
        $this->book2 = new Book('Two Moons', 'Satoshi', '324342343243', genre::Distopia, 4590);
        $this->catalog = new Catalog();
    }
    
    public function testBook():void
    {

        $this->assertEquals('Gilmour', $this->book1->getTitle());
        $this->assertEquals('Seymour', $this->book1->getAuthor());
        $this->assertEquals('43534534534', $this->book1->getIsbn());
        $this->assertEquals(genre::Aventures, $this->book1->getGenre());
        $this->assertEquals(245, $this->book1->getPages());
    }

    public function testAddLibrary():void {

        $this->catalog->addBook($this->book1); 
        $books = $this->catalog->getBooks();
        $this->assertEquals(true, in_array($this->book1, $books));
        
    }

    public function testRemoveLibrary():void {

        $this->catalog->addBook($this->book1); 
        $this->catalog->removeBook($this->book1); 
        $books = $this->catalog->getBooks();
        $this->assertEquals(false, in_array($this->book1, $books));
        
    }

    public function testUpdateLibrary():void {

        $this->catalog->addBook($this->book1); 
        $this->catalog->updateBook($this->book1, $this->book2); 
        $books = $this->catalog->getBooks();
        $this->assertEquals(false, in_array($this->book1, $books));
        $this->assertEquals(true, in_array($this->book2, $books));
    }

    public function testGettingBook():void {

        $this->catalog->addBook($this->book1); 
        $this->catalog->addBook($this->book2); 

        $this->assertEquals($this->book1, $this->catalog->getBook('Title',$this->book1->getTitle()));
        $this->assertEquals($this->book2, $this->catalog->getBook('Genre',$this->book2->getGenre()));
        $this->assertEquals($this->book1, $this->catalog->getBook('Isbn',$this->book1->getIsbn()));
        $this->assertEquals($this->book1, $this->catalog->getBook('Author',$this->book1->getAuthor()));
    }

    public function testLargeBooks():void {

        $this->catalog->addBook($this->book1); 
        $this->catalog->addBook($this->book2); 

        $largeBooks = $this->catalog->getLargeBooks();
        $this->assertEquals(false, in_array($this->book1, $largeBooks));
        $this->assertEquals(true, in_array($this->book2, $largeBooks));
    }

}