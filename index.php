<?php
//definizione classe movie
 class Movie{
    public $name;
    public $year;
    public $genre;
    public $duration;
    public $permitted_age;

    function __construct($_name, $_year, $_genre, $_duration){
        $this->name = $_name;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->duration = $_duration;   
    }
    public function showFilms(){
        return $this->name." è nei top migliori film";
    }
 };

 $movie_1= new Movie("Oppenheimer", 2023,"Thriller/Film di mistero","3 ore");
 


 $movie_2= new Movie("Natale in Sudafrica", 2010,"Commedia","1h 45min");

 echo $movie_1->showFilms().' del '.$movie_1->year;

?>

