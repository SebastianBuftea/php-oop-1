<?php
//definizione classe movie
 class Movie{
    public $name;
    public $year;
    public $genre;
    public $duration;

    /* definiamo la funzione construct  */
    function __construct($_name, $_year, $_genre, $_duration){
        $this->name = $_name;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->duration = $_duration;   
    }

    //definiamo un metodo
    public function showFilms(){
        return $this->name." è nei top migliori film";
    }
 };

 $movie_1= new Movie("Oppenheimer", 2023,"Thriller/Film di mistero","3 ore");

 $movie_2= new Movie("Natale in Sudafrica", 2010,"Commedia","1h 45min");

 //mostriamo a schermo i due film
 echo $movie_1->showFilms().' del '.$movie_1->year." con il suo genere ".$movie_1->genre." e la sua durata di ".$movie_1->duration." si è acaparrato un sacco di recensioni positive <br>";
 echo $movie_2->name.' del '.$movie_2->year." dal genere ".$movie_2->genre." e dalla durata di ".$movie_2->duration." risulta un film ancora ad oggi amato dai italiani ";

?>

