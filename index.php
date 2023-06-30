<?php

class Movie {

    public static $movieCounter = 0;

    public $name;
    public $authors;
    public $genre;
    public $duration;

    public function __construct($name, $authors, $genre, $duration) {
        self::$movieCounter++;
        $this->name = $name;
        $this->authors = $authors;
        $this->genre = $genre;
        $this->duration = $duration;
    }

    public function getDetails() {
        return "Title: " . $this->name . "<br>"
            . "Authors: " . $this->authors . "<br>"
            . "Genre: " . $this->genre . "<br>"
            . "Duration: " . $this->duration . "<br>";
           
    }

    public static function getCounter() {
        return self::$movieCounter;
    }
}

$movie1 = new Movie("Inception", "Christopher Nolan", "Science", "2.30H");
echo $movie1->getDetails();
echo "<br>";

$movie2 = new Movie("Il gladiatore", "Ridley Scott", "Storico", "2.50H");
echo $movie2->getDetails();
echo "<br>";

$movie3 = new Movie("Avatar", "James Cameron", "Fantascienza", "3.20H");
echo $movie3->getDetails();
echo "<br>";
?>
