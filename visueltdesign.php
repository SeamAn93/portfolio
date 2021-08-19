<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Visuelt design</title>

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
    <h2 class="text-center my-5">Visuelt design</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
        <div class="col mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <a href="img/moodboardmusikvideo.png"><img src="img/moodboardmusikvideo.png" class="card-img-top" alt="moodboard til musikvideoprojekt"></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">Moodboard</h5>
                    <p class="card-text">Et lille moodboard fra projekt med en musikvideo, der skabte grundlaget for den stemningen og stilen, for det visuelle design.</p>
                </div>
            </div>

        </div>

        <div class="col mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <a href="img/tid.png"><img src="img/tid.png" class="card-img-top card__img__size" alt="collage"></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">Collage</h5>
                    <p class="card-text">Lidt spas fra min fritid, hvor jeg leget lidt med photoshop og emnet tid og barndom. </p>
                </div>
            </div>
        </div>

        <div class="col mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <a href="img/codeklogprocess.png"><img src="img/codeklogprocess.png" class="card-img-top" alt="processen af logo design"></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">Logo design</h5>
                    <p class="card-text"> Logoet kommer fra en lille klub vi skulle lave på studie, hvor man kunne del vide og hjælpe hinanden. I dette tilfælde er klubben tiltænkt for dem, der kan li at kode.</p>
                </div>
            </div>
        </div>

        <div class="col mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <a href="img/tryktiltshirt.png"><img src="img/tryktiltshirt.png" class="card-img-top" alt="muckup af tryk til t-shirt"></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">Tryk til t-shirt</h5>
                    <p class="card-text">Trykket her, var grundideen til, hvilke tryk der skulle sælges på i t-shirt shop. Du kan se webshoppen her.</p>
                </div>
            </div>
        </div>

        <div class="col mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <a href="img/ujmlions.png"><img src="img/ujmlions.png" class="card-img-top" alt="User Journey Map"></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">User Journey Map</h5>
                    <p class="card-text">Som designer kan det være rart at få visualiseret problemerne på en hjemmeside fra kundens synsvinkel, så man forstå deres problem. Det kan et User Journey Map hjælpe med. Her ses et, før re-designet af Lions website.</p>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'include/footer.php';?>

</body>
</html>
