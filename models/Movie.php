<?php 

class Movie{
    public int $id;
    public string $title;
    public string $original_title;
    public string $nationality;
    public float $vote;
    public string $image;
    public $category = [];

    public function __construct(string $title, string $original_title, string $nationality, float $vote, string $image){
        $this->title = $title;
        $this->original_title = $original_title;
        $this->nationality = $nationality;
        $this->vote = $vote;
        $this->image = $image;
    }
    public function capitalizeTitle(){
        return strtoupper($this->title);
    }
    public function roundVote(){
        return round($this->vote);
    }
}