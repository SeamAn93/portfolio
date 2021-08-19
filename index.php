<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include 'include/header.php';?>

<main class="main d-flex justify-content-evenly py-5">
    <div class="main__text flex-md-column align-self-md-center text-white ps-2 pe-1">
    <h3 class="text-xl-center mb-4">Hej med dig</h3>
        <p class="text-xl-center">Jeg hedder Søren og studere til Multimediedesign på Zealand.
            <br><br>
            Website, grafisk design, UX/UI.
            <br><br>
            Se hvad jeg kan.</p>
        <div class="d-xl-flex justify-content-xl-center">
            <a class="btn btn-primary mt-4" href="kompetencer.php" role="button">Klik her</a>
        </div>
    </div>

    <div class="ps-1 pe-2">
        <img class="main__image rounded" src="img/søren3.jpg" alt="billede af Søren">
    </div>
</main>

<section class="container mt-5 mb-4">
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
        <div class="col mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                <img src="img/navneflasken.png" class="card-img-top" alt="billede af websit til KAFFETÅR'N">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">Hjemmeside</h5>
                    <p class="card-text">Se hvilke hjemmesider jeg har været med til at lave. Der er alt fra en t-shirt shop til en launch side for en musikvideo. </p>
                    <div class="d-flex justify-content-center">
                    <a href="hjemmeside.php" class="btn btn-primary btn-lg mt-4">Klik her</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                <img src="img/moodboardmusikvideo.png" class="card-img-top" alt="moodboard til musikvideoprojekt">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">Visuelt design</h5>
                    <p class="card-text">Se hvad jeg kan, inden for visuelt design, hvor du finder en masse forskellig bl.a. logoer, tryk til t-shirt og meget mere.</p>
                    <div class="d-flex justify-content-center">
                    <a href="visueltdesign.php" class="btn btn-primary btn-lg mt-4">Klik her</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                <img src="img/muckupslokalitee.png" class="card-img-top card__img__size" alt="muckups til webshop LOKALITEE">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">Prototyper</h5>
                    <p class="card-text">Se hvordan jeg bygger et website op fra bunden via wireframe og mockups.</p>
                    <div class="d-flex justify-content-center">
                    <a href="prototype.php" class="btn btn-primary btn-lg mt-4">Klik her</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'include/footer.php';?>

</body>
</html>
