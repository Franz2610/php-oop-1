<?php

class Movie {
    public $title;
    public $director;
    public $time;

    public $genre;


public function __construct(string $title, string $director, int $time, string $genre){
    $this->title = $title;
    $this->director = $director;
    $this->time = $time;
    $this->genre = $genre;
} 
public function getTitle(){
    return $this->title;
}
public function getDirector(){
    return $this->director;
}
public function getTime(){
    return $this->time;
}
public function getGenre(){
    return $this->genre;
}

}
?>