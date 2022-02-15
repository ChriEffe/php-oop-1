<?php

class Movie
{
    public $title;
    public $runningTime;
    public $cover;
    public $cast;
    public $plot;
    public $language;
    public $movieDirector;

    public function __construct($title, $cast, $movieDirector)
    {
        $this->title = $title;
        $this->cast = $cast;
        $this->movieDirector = $movieDirector;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setCast($cast)
    {
        $this->cast = $cast;
    }
    public function getCast()
    {
        return $this->cast;
    }

    public function setMovieDirector($movieDirector)
    {
        $this->movieDirector = $movieDirector;
    }
    public function getMovieDirector()
    {
        return $this->movieDirector;
    }
}

$movies = new Movie('Pulp Fiction', 'John Travolta, Samuel L. Jackson, Tim Roth, Amanda Plummer, Eric Stoltz', 'Quentin Tarantino');

$moviesB = new Movie('Matrix', 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss, Hugo Weaving, Gloria Foster', 'Lana Wachowski, Lilly Wachowski');

?>