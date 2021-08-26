<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Prototyper</title>

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
    <h2 class="text-center my-5">Prototype</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">

    <div class="col mb-5 d-flex align-items-stretch">
        <div class="card mx-auto" style="width: 18rem;">
            <div class="card__img__size">
                <a href="img/om-oskaffetaarn.png"><img src="img/om-oskaffetaarn.png" class="card-img-top" alt="wireframe til KAFFETÅR'N om os side"></a>
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center mb-3">Wireframes til "Om os" side</h5>
                <p class="card-text">De første ideer, til side “om os” side for websitet Kaffetar’n. Der sket et par iteration undervejs, hvilket kan ses på det færdig website.</p>
            </div>
        </div>
    </div>

        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <a href="img/wireframnavneflasken.png"><img src="img/wireframnavneflasken.png" class="card-img-top" alt="wireframes til betalingsside Navneflasken"></a>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">Wireframes til betalingsside</h5>
                    <p class="card-text">Her har jeg lavet wireframs til opsætning af en betalingsside, som jeg havde ansvaret for at kode, til hjemmesiden Navneflasken.</p>
                </div>
            </div>
        </div>

        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <a href="img/muckupnavneflasken.png"><img src="img/muckupnavneflasken.png" class="card-img-top card__img__size" alt="muckups til Navneflasken"></a>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">Muckups af betalingsside</h5>
                    <p class="card-text">Her har jeg lavet mockups til betalingssiden i mit trejde projekt. Jeg lagde vægt på, at lave et enkelt og overskudeligt design for brugeren, bl.a. ved den oversigtliste, der viser forløbet ved betalingen.</p>
                </div>
            </div>
        </div>

        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <a href="img/muckupslokalitee.png"><img src="img/muckupslokalitee.png" class="card-img-top card__img__size" alt="muckups af LOKALITEE"></a>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">Muckups til Wordpress</h5>
                    <p class="card-text">Til t-shirt shoppen brugt jeg Wordpress til at design siden. Jeg fandt til det først et tema, jeg kunne li og derefter lavet jeg et muckups, for at få fornemmelsen af, hvordan det ville se ud, med billeder, farver mm.</p>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'include/footer.php';?>

</body>
</html>
