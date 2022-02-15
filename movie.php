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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><h1>Title: <?php echo $movies->getTitle() ?></h1></li>
        <li><h2>Cast: <?php echo $movies->getCast() ?></h2></li>
        <li><h3>Regista: <?php echo $movies->getMovieDirector() ?></h3></li>
    </ul>
    <ul>
        <li><h1>Title: <?php echo $moviesB->getTitle() ?></h1></li>
        <li><h2>Cast: <?php echo $moviesB->getCast() ?></h2></li>
        <li><h3>Regista: <?php echo $moviesB->getMovieDirector() ?></h3></li>
    </ul>
</body>
</html>