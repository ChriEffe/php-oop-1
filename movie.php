<?php

class Movie
{
    public $title;
    public $runningTime;
    public $cover;
    public $cast;
    public $plot;
    public $language;

    public function __construct($title, $cast, $language)
    {
        $this->title = $title;
        $this->cast = $cast;
        $this->language = $language;
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

    public function setLanguage($language)
    {
        $this->language = $language;
    }
    public function getLanguage()
    {
        return $this->language;
    }
}



?>