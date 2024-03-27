<?php
class Genre {
    private string $genre;

    public function __construct(string $genre) {
        $this->genre = $genre;
    }

   
    public function getGenre(): string {
        return $this->genre;
    }
}


?>