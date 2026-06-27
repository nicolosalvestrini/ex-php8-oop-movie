<?php

trait HasRating {
    public $rating;

    public function getRating() {
        return $this->rating . "/10";
    }
}