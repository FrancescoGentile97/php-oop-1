<?php

class Genre {
private $name;
private $description;
private $vote;

    public function __construct($_name, $_description, $_vote,) {
        $this->fetchName($_name);
        $this->setDescription($_description);
        $this->randomVote($_vote);
    }

    public function setDescription($_description) {
        $this->description = $_description;
    }
    
    public function getDescription() {
        return $this->description;
    }

    public function fetchName() {
        $array = ["Action"=>1, "Drammatic"=>2, "Scienze"=>3, "Comedy"=>4, "Thriller"=>5, "Fantasy"=>6, "Horror"=>7, "Documentary"=>8];
        $name = (array_rand($array,1));

        $this->name = "Genere: " . $name;
    }

    public function randomVote() {
        $vote = random_int(min:0, max: 5);

        $this->vote = "Voto: " . $vote;
    }
};

?>