<?php


class Movie
{
    public $name; //viene vista come proprietà della classe
    public $year;
    public $img;
    public $genre;
    public $duration;


    function __construct($_name, $_year, $_img, $_genre, $_duration)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->img = $_img;
        $this->genre = $_genre;
        $this->duration = $_duration;
    }

    public function getNome()
    {
    }


    public function setnome($name)
    {

        if (is_numeric($name)) {
            echo "Errore, il parametro nome deve essere una stringa";
        } else {
            var_dump($this);
            $this->name = $name;
            var_dump($this);
        }
    }
}




$movies = new Movie("Titanic", "2021", "link", "Drammatico", "150");

var_dump($movies);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
</head>

<body>

    <h1>Coming Soon</h1>

    <p>
        <?php

        foreach ($movies as $movie) {
            echo "$movie <br>";
        }


        ?>
    </p>

</body>

</html>