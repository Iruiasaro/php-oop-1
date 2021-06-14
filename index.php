<?php
include 'data.php';

class Movie { 
    public $titolo;
    public $genere;
    public $regia;
    public $music;
    public $year;

    function __construct($film)
    {
        $this->titolo  = $film["titolo"];
        $this->genere = $film["genere"] ;
        $this->regia = $film["regia"];
        $this->music  = $film["music"];
        $this->year  = $film["year"];
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <title>Php_Oop_1</title>
</head>

<body>
    <?php
    foreach ($lista_film as $film) {
        $movie = new Movie($film);
            echo "<h1> Titolo: " . $movie->titolo . "</h1>";
            echo "<h4> Genere: " . $movie->genere . "</h4>";
            echo "<h4> Regia di: " . $movie->regia . "</h4>";
            echo "<h4> Musiche di: " . $movie->music . "</h4>";
            echo "<h4> Anno di uscita: " . $movie->year . "</h4>";
    }
    ?>
</body>

</html>