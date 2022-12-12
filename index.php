<?php

class Genre
{
    public $name;
    public function __construct(String $name)
    {
        $this->name = $name;
    }
}
class Movie
{
    public $nameMovie;
    public $year;
    public $description;
    public $duration;
    public $genre;

    public function  __construct($nameMovie, $year, $description, $duration, Genre $genre)
    {
        $this->nameMovie = $nameMovie;
        $this->year = $year;
        $this->description = $description;
        $this->duration = $duration;
        $this->genre = $genre;
    }
    public function getInfoMovie()
    {
        return "<br> Nome: $this->nameMovie <br> Anno: $this->year <br> Descrizione: $this->description <br> Durata: $this->duration";
    }
}

$movie_1 = new Movie('The Irishman', 2019, 'Drama & Crime Movie', '3h 29m', new Genre('Drama & Crime Movie'));
echo $movie_1->getInfoMovie();

$movie_2 = new Movie('Troll', 2022, 'Fantasy Movie', '1h 41m', new Genre('Fantasy Movie'));
echo $movie_2->getInfoMovie();
