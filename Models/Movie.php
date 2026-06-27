<?php
class Movie {
    public $title;
    public $director;
    public $releaseYear;

    function __construct($title, $director, $releaseYear) {
        $this->title = $title;
        $this->director = $director;
        $this->releaseYear = $releaseYear;
    }

    function getMovieInfo() {
        return "Title: " . $this->title . ", Director: " . $this->director . ", Release Year: " . $this->releaseYear;
    }
}