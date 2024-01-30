<?php
//definizione classe movie
 class Movie{
    public $name;
    public $year;
    public $genre;

    function __construct($_name, $_year, $_genre){
        $this->name = $_name;
        $this->year = $_year;
        $this->genre = $_genre;
        
    }
 };

 $movie_1= new Movie();

 $movie_2= new Movie();

?>

