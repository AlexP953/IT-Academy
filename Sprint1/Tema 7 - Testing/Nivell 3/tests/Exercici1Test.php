<?php

require './src/Exercici1.php';

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Library\Book;
use Library\genre;
use Library\Catalog;



class Exercici1Test extends TestCase
{
    public function testBook():void
    {
        $book1 = new Book(
            'Gilmour', 
            'Seymour', 
            '43534534534', 
            genre::Aventures, 
            245);

        $this->assertEquals('Gilmour', $book1->getTitle());
        $this->assertEquals('Seymour', $book1->getAuthor());
        $this->assertEquals('43534534534', $book1->getIsbn());
        $this->assertEquals(genre::Aventures, $book1->getGenre());
        $this->assertEquals(245, $book1->getPages());
    }

    public function testAddLibrary():void {

        $book1 = new Book(
            'Gilmour', 
            'Seymour', 
            '43534534534', 
            genre::Aventures, 
            245);

        $catalog = new Catalog();
        
        $catalog->addBook($book1); 
        $books = $catalog->getBooks();
        $this->assertEquals(true, in_array($book1, $books));
        
    }

    public function testRemoveLibrary():void {

        $book1 = new Book(
            'Gilmour', 
            'Seymour', 
            '43534534534', 
            genre::Aventures, 
            245);

        $catalog = new Catalog();
        
        $catalog->addBook($book1); 
        $catalog->removeBook($book1); 
        $books = $catalog->getBooks();
        $this->assertEquals(false, in_array($book1, $books));
        
    }

    public function testUpdateLibrary():void {

        $book1 = new Book(
            'Gilmour', 
            'Seymour', 
            '43534534534', 
            genre::Aventures, 
            245);

        $book2 = new Book(
            'Two Moons', 
            'Satoshi ', 
            '324342343243', 
            genre::Distopia, 
            4590);

        $catalog = new Catalog();
        
        $catalog->addBook($book1); 
        $catalog->updateBook($book1, $book2); 
        $books = $catalog->getBooks();
        $this->assertEquals(false, in_array($book1, $books));
        $this->assertEquals(true, in_array($book2, $books));
    }

    public function testGettingBook():void {

        $book1 = new Book(
            'Gilmour', 
            'Seymour', 
            '43534534534', 
            genre::Aventures, 
            245);

        $book2 = new Book(
            'Two Moons', 
            'Satoshi ', 
            '324342343243', 
            genre::Distopia, 
            4590);

        $catalog = new Catalog();
        
        $catalog->addBook($book1); 
        $catalog->addBook($book2); 

        $this->assertEquals($book1, $catalog->getBook('Title',$book1->getTitle()));
        $this->assertEquals($book2, $catalog->getBook('Genre',$book2->getGenre()));
        $this->assertEquals($book1, $catalog->getBook('Isbn',$book1->getIsbn()));
        $this->assertEquals($book1, $catalog->getBook('Author',$book1->getAuthor()));
    }

    public function testLargeBooks():void {
        $book1 = new Book(
            'Gilmour', 
            'Seymour', 
            '43534534534', 
            genre::Aventures, 
            245);

        $book2 = new Book(
            'Two Moons', 
            'Satoshi ', 
            '324342343243', 
            genre::Distopia, 
            4590);

        $catalog = new Catalog();
        
        $catalog->addBook($book1); 
        $catalog->addBook($book2); 

        $largeBooks = $catalog->getLargeBooks();
        $this->assertEquals(false, in_array($book1, $largeBooks));
        $this->assertEquals(true, in_array($book2, $largeBooks));
    }

}