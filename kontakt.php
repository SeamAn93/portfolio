<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Kontakt - Har du noget der skal designes?</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Front-end, hjemmesider, Multimediedesign - Søren Andersen Design laver alt fra websit, brand image, viseult design. Multimediedesign studerende">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include 'include/header.php';?>

<section class="flex-column bg-white">
    <div class="container flex-column">
        <h2 class="text-center mb-3 mt-5 ">Kontakt mig</h2>
        <p class="text-center pb-5 fs-5 mx-auto">
            Har du noget der skal designes?
            <br>
            Så ring eller skriv.
        </p>
        <h2 class="mb-4 text-center">Sociale medier</h2>
        <div class="footer__social__item d-flex justify-content-center mb-5">
            <a class="" href="https://www.linkedin.com/in/s%C3%B8ren-andersen-900379202/">
                <img class="footer__social__icon mx-2" src="img/005-linkedin-1.svg" alt="linkedin profil">
            </a>
            <a class="" href="https://github.com/SeamAn93">
                <img class="footer__social__icon mx-2" src="img/002-github-1.svg" alt="GitHub profil">
            </a>
        </div>
        <h2 class="text-center mb-4 ">Ring til mig</h2>
        <div class="d-grid col-6 mx-auto d-md-flex col-md-10 justify-content-md-center">
            <a href="tel:24427892" class="btn btn-primary btn-lg mb-5">Klik her</a>
        </div>
        <h2 class="text-center mb-4 ">Send en mail</h2>
        <div class="d-grid col-6 mx-auto d-md-flex col-md-10 justify-content-md-center">
            <a href="mailto:andersen-s93@hotmail.com" class="btn btn-primary btn-lg mb-5">Klik her</a>
        </div>

    </div>
</section>

<?php include 'include/footer.php';?>

</body>
</html>
