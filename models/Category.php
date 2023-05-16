<?php 
class Category{
    public string $genre;
    public function __construct(string $genre){
        $this->genre = $genre;
    }
}