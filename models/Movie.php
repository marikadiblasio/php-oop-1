<?php 
include __DIR__.'/Category.php';
class Movie{
    public int $id;
    public string $title;
    public string $original_title;
    public string $nationality;
    public float $vote;
    public string $image;
    public $genre;
    private $availableFlags = ['us'];

    public function __construct(string $title, string $original_title, string $nationality, float $vote, string $image, Category $genre){
        $this->title = $title;
        $this->original_title = $original_title;
        $this->nationality = $nationality;
        $this->vote = $vote;
        $this->image = $image;
        $this->genre = $genre;
    }
    public function capitalizeTitle(){
        return strtoupper($this->title);
    }
    public function roundVote(){
        return round($this->vote / 2);
    }
}