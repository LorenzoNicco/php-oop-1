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

    // echo $lotr->title;
    // echo '<br>';
    // echo $lotr->releaseYear;
    // echo '<br>';
    // foreach ($lotr->genres as $singleGenre) {
    // echo $singleGenre;
    // echo '<br>';
    // }
    // echo '<hr>';

    $padrino = new Movie("The Godfather Part 1");
    $padrino->setReleaseYear(1972);
    $padrino->setGenres('Thriller, Crime, Drama');

    // echo $padrino->title;
    // echo '<br>';
    // echo $padrino->releaseYear;
    // echo '<br>';
    // foreach ($padrino->genres as $singleGenre) {
    // echo $singleGenre;
    // echo '<br>';
    // }
    // echo '<hr>';

    $avatar2 = new Movie("Avatar: The Way of Water");
    $avatar2->setReleaseYear(2023);
    $avatar2->setGenres('Sci-fi, Drama');

    // echo $avatar2->title;
    // echo '<br>';
    // echo $avatar2->releaseYear;
    // echo '<br>';
    // foreach ($avatar2->genres as $singleGenre) {
    // echo $singleGenre;
    // echo '<br>';
    // }
    // echo '<hr>';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <title>PHP OOP 1</title>
    </head>
    <body>
        <main class="p-5">
            <table class="table table-success border border-primary">
                <thead>
                    <tr>
                        <th scope="col">Titolo</th>
                        <th scope="col">Data di uscita</th>
                        <th scope="col">Generi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <?php echo $lotr->title; ?>
                        </th>
                        <td>
                            <?php echo $lotr->releaseYear; ?>
                        </td>
                        <td>
                            <?php   foreach ($lotr->genres as $singleGenre) {
                                        echo $singleGenre.' ';
                                    } 
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <?php echo $padrino->title; ?>
                        </th>
                        <td>
                            <?php echo $padrino->releaseYear; ?>
                        </td>
                        <td>
                            <?php   foreach ($padrino->genres as $singleGenre) {
                                        echo $singleGenre.' ';
                                    } 
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <?php echo $avatar2->title; ?>
                        </th>
                        <td>
                            <?php echo $avatar2->releaseYear; ?>
                        </td>
                        <td>
                            <?php   foreach ($avatar2->genres as $singleGenre) {
                                        echo $singleGenre.' ';
                                    } 
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </body>
</html>