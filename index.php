<?php

class Movie
{
    public $nameMovie;
    public $description;
    public $duration;

    public function  __construct($nameMovie, $description, $duration)
    {
        $this->nameMovie = $nameMovie;
        $this->description = $description;
        $this->duration = $duration;
    }
    public function getInfoMovie()
    {
        return "Nome: $this->nameMovie <br> Descrizione: $this->description <br> Durata: $this->duration  ";
    }
}
