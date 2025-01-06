<?php 

class Author {
    private string $name;
    private string $email;
    private string $gender; 

    public function __construct(string $name, string $email, string $gender) {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getGender(): string {
        return $this->gender;
    }
    public function __toString(): string {
        return "Author[name={$this->name}, email={$this->email}, gender={$this->gender}]";
    }
}
// echo"<br>*****************Auther&Book***************<br>";
// $a1 = new Author("shimoo", "shimoo.tarek@example.com", 'f');
// $a2 = new Author("Menna", "Menna.Mahmoud@example.com", 'f');

// echo "Name: " . $a1->getName()."<br>" ;
// echo "Email: " . $a1->getEmail() ."<br>";
// echo "Gender: " . $a1->getGender() ."<br>";
// echo"<br>";
// $a1->setEmail("new.email@example.com");
// echo "Updated Email: <br>" ;
// echo $a1 ,"<br" ;
// echo $a2  , "<br";

echo"***********************class Book*******************************";

class Book {
    private string $title;
    private array $authors; 
    private float $price;
    private int $quantity;

    
    public function __construct(string $title, array $authors, float $price, int $quantity) {
        $this->title = $title;
        $this->authors = $authors;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthors(): array {
        return $this->authors;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void {
        $this->quantity = $quantity;
    }
    public function getAuthorNames(): string {
        $names = array_map(fn($author) => $author->getName(), $this->authors);
        return implode(", ", $names);
    }

    public function __toString(): string {
        $authorDetails = implode(", ", array_map(fn($author) => $author->__toString(), $this->authors));
        return "Book[title={$this->title}, authors=[{$authorDetails}], price={$this->price}, quantity={$this->quantity}]";
    }
}


$a1 = new Author("shimoo", "tarek@example.com", 'f');
$a2 = new Author("Menna", "Mahmoud.smith@example.com", 'f');
$authors = [$a1, $a2];

echo "<br>";
$book = new Book(" PHP ", $authors, 49.99, 150);

echo "Book Title: " . $book->getTitle(),"<br>" ;
echo "Authors: " . $book->getAuthorNames() ,"<br>";
echo "Price: " . $book->getPrice() ,"<br>";
echo "Quantity: " . $book->getQuantity() ,"<br>";

$book->setPrice(54.99);
$book->setQuantity(200);
echo "Updated Price: " . $book->getPrice(),"<br>" ;
echo "Updated Quantity: " . $book->getQuantity() ,"<br>";

echo $book ;





?>