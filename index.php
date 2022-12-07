<?php

class Movie
{
    public $nameMovie;
    public $year;
    public $description;
    public $duration;

    public function  __construct($nameMovie, $year, $description, $duration)
    {
        $this->nameMovie = $nameMovie;
        $this->year = $year;
        $this->description = $description;
        $this->duration = $duration;
    }
    public function getInfoMovie()
    {
        return "<br> Nome: $this->nameMovie <br> Anno: $this->year <br> Descrizione: $this->description <br> Durata: $this->duration  ";
    }
}

$movie_1 = new Movie('The Irishman', 2019, 'Drama & Crime Movie', '3h 29m');
echo $movie_1->getInfoMovie();

$movie_2 = new Movie('Troll', 2022, 'Fantasy Movie', '1h 41m');
echo $movie_2->getInfoMovie();
