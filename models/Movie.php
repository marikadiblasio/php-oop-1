<?php 

class Movie{
    public int $id;
    public string $title;
    public string $original_title;
    public string $nationality;
    public int $vote;
    public string $image;
    public $category = [];

    public function __construct(string $title, string $original_title, string $nationality, int $vote, string $image){
        $this->title = $title;
        $this->original_title = $original_title;
        $this->nationality = $nationality;
        $this->vote = $vote;
        $this->image = $image;
    }
}