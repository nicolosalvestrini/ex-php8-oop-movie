<?php
class Movie {
    public $title;
    public $director;
    public $releaseYear;
    public $genre;

    function __construct($title, $director, $releaseYear, Genre $genre) {
        $this->title = $title;
        $this->director = $director;
        $this->releaseYear = $releaseYear;
        $this->genre = $genre;
    }

    function getMovieInfo() {
        return "Title: " . $this->title . ", Director: " . $this->director . ", Release Year: " . $this->releaseYear . "Genre: " . $this->genre->name . "Description: " . $this->genre->description;
    }
}