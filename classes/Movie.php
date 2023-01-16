<?php
require_once __DIR__ . "/Genre.php";

class Movie
{

    private $title;
    private $description;
    public $genres;
    

    public function __construct($_title, $_description, Genre $genres)
    {
        $this->setTitle($_title);
        $this->setDescription($_description);
        $this->setGenre($genres);
       
    }

    // Funzione per il title
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    // Funzione per la description
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    // Funzione per genere
    public function getGenre()
    {
        return $this->genres;
    }

    public function setGenre($genre)
    {
        $this->genres = $genre;

        return $this;
    }

    // Funzione per il voto 1-5
   public function random_vote(){
    return mt_rand(1, 5);
   }
}


?>