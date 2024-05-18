<?php
class Book {
    // TODO: Add properties as Private
    private $title;
    private $availableCopies;
    public function __construct($title, $availableCopies) {
        // TODO: Initialize properties
        $this->title                =   $title;
        $this->availableCopies      =   $availableCopies;
    }


    // TODO: Add getTitle method
    public function getTitle($bookTitle)
    {
        return $this->title = $bookTitle;
    }



    // TODO: Add getAvailableCopies method

    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }


    // TODO: Add borrowBook method
    public function borrowBook($copies)
    {
            $this->availableCopies  -= $copies;
    }



    // TODO: Add returnBook method
    public function returnBook($copies)
    {
        $this->availableCopies += $copies;
    }

}


class Member {
    // TODO: Add properties as Private

    private $name;

    public function __construct($name) {
        // TODO: Initialize properties
        $this->name     =   $name;
    }
    

    // TODO: Add getName method
    public function getName($memberName)
    {
        return $this->name = $memberName;
    }
    

    // TODO: Add borrowBook method
    public function borrowBook($book)
    {
        return $this->getName($book);
    }


    // TODO: Add returnBook method
    public function returnBook($book)
    {
       return $this->getName($book);
    }

}



// Usage


// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.


// TODO: Create 2 books with the following properties
// Book 1 - Name: The Great Gatsby, Available Copies: 5.
// Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.
$book1      =   new Book("The Great Gatsby", 5);
$book2      =   new Book("To Kill a Mockingbird", 3);



// TODO: Create 2 members with the following properties
// Member 1 - Name: John Doe
// Member 2 - Name: Jane Smith
$member1        =   new Member("John Doe");
$member2        =   new Member("Jane Smith");


// TODO: Apply Borrow book method to each member

$book1->borrowBook(1);
$book2->borrowBook(1);



// TODO: Print Available Copies with their names:

echo "Available Copies with their names:\n";

echo "Available Copies of ".$book1->getTitle("'The Great Gatsby'").": ".$book1->getAvailableCopies()."\n";
echo "Available Copies of ".$book1->getTitle("'To Kill a Mockingbird'").": ".$book2->getAvailableCopies();










