<?php 
class Category{
    public array $genre;
    public function __construct(array $genre){
        $this->genre = $genre;
    }
}