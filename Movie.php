<?php
class Movie
{
public $title;
public $anno;
public $durata;
public $regista;
public $genere;

    public function __construct($title, $anno, $durata)
    {
        $this->title = $title;
        $this->anno = $anno;
        $this->durata = $durata;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getAnno()
    {
        return $this->anno;
    }
    public function setAnno($anno)
    {
        $this->anno = $anno;
    }

    public function getDurata()
    {
        return $this->durata;
    }
    public function setDurata($regista)
    {
        $this->regista = $regista;
    }

    public function getRegista()
    {
        return $this->regista;
    }
    public function setRegista($regista)
    {
        $this->regista = $regista;
    }

    public function getGenere()
    {
        return $this->genere;
    }
    public function setGenere($genere)
    {
        $this->genere = $genere;
    }
}

$movie = new Movie('3 Uomini e una gamba', '1997', '1h 40m');
$movie2 = new Movie('Chiedimi se sono felice', '2000', '1h 40m');

var_dump($movie);
var_dump($movie2);