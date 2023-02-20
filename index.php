<?php
class Movie
{
    // Inserisco la variabile d'istanza
    public $title;
    public $length;
    public $poster;
    public $genre;

    // Inserisco il costruttore
    public function __construct($title, $length, $poster, $genre)
    {
        $this->title = $title;
        $this->length = $length;
        $this->poster = $poster;
        $this->genre = $genre;
    }

    // Inserisco un metodo
    public function getDetails()
    {
        return "Titolo: $this->title - Genere: $this->genre Durata: $this->length";
    }
}

// Instanzio i film e li metto in un array per poterci ciclare
$il_signore_degli_anelli = new Movie('Il signore degli anelli: la compagnia dell\'anello', '2:58h', 'https://m.media-amazon.com/images/I/41uiXGrV+pL.jpg', 'Fantasy');

$il_signore_degli_anelli_1 = new Movie('Il signore degli anelli: le due torri', '2:59h', 'https://m.media-amazon.com/images/I/51xiT0l57mL._SY445_.jpg', 'Fantasy');

$il_signore_degli_anelli_2 = new Movie('Il signore degli anelli: il ritorno del re', '3:21h', 'https://m.media-amazon.com/images/I/81f2rBdsEZL.jpg', 'Fantasy');

$movies = [$il_signore_degli_anelli, $il_signore_degli_anelli_1, $il_signore_degli_anelli_2];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- COLLEGAMENTO BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- COLLEGAMENTO ICONE BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Movies</title>
</head>

<body>

    <header class="bg-secondary text-center py-3">
        <h1 class="text-white">Movies</h1>
    </header>

    <main>
        <div class="container">
            <div class="row row-cols-3">
                <?php foreach ($movies as $movie) : ?>
                    <div class="col text-center my-5">
                        <div class="card">
                            <img src="<?= $movie->poster ?>" style="width: 14rem" class="m-auto py-3" alt="<?= $movie->title ?>">
                            <div class="card-body">
                                <p class="card-text"><?= $movie->title ?></p>
                                <p class="card-text"><?= $movie->length ?></p>
                                <p class="card-text"><?= $movie->genre ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

</body>

</html>