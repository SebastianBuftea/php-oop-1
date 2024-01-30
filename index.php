<?php
//definizione classe movie
 class Movie{
    public $name;
    public $year;
    public $genres=[];
    public $duration;

    /* definiamo la funzione construct  */
    function __construct($_name, $_year, $_duration){
        $this->name = $_name;
        $this->year = $_year;
        $this->duration = $_duration;   
    }

    //definiamo un metodo
    public function showFilms(){
        return $this->name." è nei top migliori film";
    }
 }

 class Genre{
    public $name;

    function __construct($_name){
        $this->name= $_name;
    }
 }

 $genre_1=new Genre("Thriller");
 $genre_2=new Genre("Film di mistero");
 $genre_3=new Genre("Commedia");

 $movie_1= new Movie("Oppenheimer", 2023,"3 ore");
 $movie_1->genres=[$genre_1,  $genre_2 ];

 $movie_2= new Movie("Natale in Sudafrica", 2010,"1h 45min");
 $movie_2->genres= $genre_3;


 //mostriamo a schermo i due film
 echo $movie_1->showFilms().' del '.$movie_1->year." con il suo genere ".$movie_1->genres[0]->name."/".$movie_1->genres[1]->name." e la sua durata di ".$movie_1->duration." si è acaparrato un sacco di recensioni positive <br>";
 echo $movie_2->name.' del '.$movie_2->year." dal genere ".$movie_2->genres->name." e dalla durata di ".$movie_2->duration." risulta un film ancora ad oggi amato dai italiani ";

?>

