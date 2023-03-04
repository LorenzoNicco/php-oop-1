<?php
    class Movie {
    public $title;
    public $releaseYear;
    public $genres;

    function __construct(string $_title) {
        $this->title = $_title;
    }

    public function setReleaseYear($Year) {
        if (is_string($Year)) {
            echo "Inserici un numero";
        }
        else {
            $this->releaseYear = $Year;
        }
    }

    public function setGenres($genre) {
        if (is_string($genre)) {
            $this->genres = explode(", ", $genre);
        }
        else {
            echo "Input non valido: inserire una stringa";
        }
    }

    }

    $lotr = new Movie("The Lord Of The Rings");
    $lotr->setReleaseYear(2001);
    $lotr->setGenres('Fantasy, Action');

    var_dump($lotr);

    echo $lotr->title;
    echo '<br>';
    echo $lotr->releaseYear;
    echo '<br>';
    foreach ($lotr->genres as $singleGenre) {
    echo $singleGenre;
    echo '<br>';
    }

    $padrino = new Movie("The Godfather Part 1");
    $padrino->setReleaseYear(1972);
    $padrino->setGenres('Thriller');

    var_dump($padrino);

    echo $padrino->title;
    echo '<br>';
    echo $padrino->releaseYear;
    echo '<br>';
    foreach ($padrino->genres as $singleGenre) {
    echo $singleGenre;
    echo '<br>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    
</body>
</html>