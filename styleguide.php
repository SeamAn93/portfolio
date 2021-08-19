<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Styleguide</title>

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

<main class="container mb-5">
    <h2 class="text-center my-5">Styleguide</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
        <div class="col mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <img src="img/kaffetaarnstyleguide.png" class="card-img-top" alt="Styleguide KAFFETÅR'N">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">KAFFETÅR'N</h5>
                    <p class="card-text"> I dette projekt, var der flere typer af logoer. Derfor var det vigtig at få beskrevet hvor og hvordan, logoerne skulle bruges. </p>
                    <div class="d-flex justify-content-center">
                        <a href="pdf/Styleguide%20Kaffetår'n.pdf" class="btn btn-primary btn-lg mt-4">Klik her</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <img src="img/musikstyleguide.png" class="card-img-top" alt="Styleguide til musikvideo">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">The Heart of the Stoics</h5>
                    <p class="card-text">Her var der især fokus på billederne, da de skulle være med til at vis den stemning, der kom til udtryk i musikvideoen, når der fx skulle laves plakater eller opslag på de sociale medier. </p>
                    <div class="d-flex justify-content-center">
                        <a href="pdf/Styleguide%20musikvideo.pdf" class="btn btn-primary btn-lg mt-4">Klik her</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <img src="img/lionsstyleguide.png" class="card-img-top card__img__size" alt="styleguide Lions">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">Prototyper</h5>
                    <p class="card-text">For en stor velgørenhedsorganisation som Lions er det vigtig at typografien og farver er ens og fastsat, så brandet står klart og tydeligt. Derfor lagde jeg vægt på at få beskrevet det så godt, som muligt, så de små lokale klubber, kunne holde det. </p>
                    <div class="d-flex justify-content-center">
                        <a href="pdf/Styleguide%20Lions.pdf" class="btn btn-primary btn-lg mt-4">Klik her</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'include/footer.php';?>

</body>
</html>
