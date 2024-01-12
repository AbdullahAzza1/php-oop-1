<?php
class Movies
{
    public $LengthOfMovie;
    public $Director;
    public $WrittenBy;
    public $Type;

    public function getFullMovies()
    {
        $result = $this->LengthOfMovie . ", " . $this->Director . " - " . $this->WrittenBy . " (" . $this->Type . ")";
        return $result;
    }
}
