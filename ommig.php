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

<section class="flex-column bg-black">
    <div class="container d-xl-flex gap-xl-5">
    <div class="py-4 section__flex">
        <img src="img/søren2.jpeg" alt="billede af Søren" class="section__img rounded">
    </div>
    <div class="align-self-center section__flex">
        <h2 class="text-center text-white mb-3 ">Hvem er jeg?</h2>
        <p class="text-white pb-5 pb-xl-0 hej mx-auto">
            Jeg hedder Søren Andersen og kommer fra det flade Lolland nær Sakskøbing.
            <br>
            Som person er en stille og rolig, men altid glad og i godt humør, er ikke bleg for at lave lidt spas, for at få et godt grin.
            <br><br>
            I min fritid bruger jeg tiden på at spille musik, hvilket jeg har gjort i omkring 20 år I forskellig musikkorps, hvor jeg bl.a. har undervist og været trommeleder.
            <br><br>
            Så kan jeg godt li at fiske, som er et dejligt afbræk fra hverdagen foran computeren.
            <br>
            Dog er man da stadig lidt nørd, så et par timer med et godt computerspil er også et godt pusterum.
            <br><br>
            Ellers sætter jeg pris på at bruge tiden sammen med nær venner og familie, hvor jeg ikke er bleg for at give en hjælpende hånd, hvis det skal til.
        </p>
    </div>
    </div>
</section>

<section class="flex-column bg-white">
    <div class="container d-xl-flex gap-xl-5">
        <div class="section__flex">
            <h2 class="text-center mb-3 pt-5">Hvad kan jeg?</h2>
            <p class="hej mx-auto">
                Jeg er god til at strukturere mine projekter, hjælpe andre og skabe et image helt fra bunden.
            </p>
            <div class="d-flex justify-content-center pt-4">
                <div class="me-4">
                    <h4>
                    - html/css
                        <br>
                    - Projektstyring
                        <br>
                    - Brugertest
                        <br>
                    - SEO
                    </h4>
                </div>
                <div class="ms-4">
                    <h4>
                        - Booststrap
                        <br>
                        - Visuelt design
                        <br>
                        - Brand image
                        <br>
                        - Prototype
                    </h4>
                </div>
            </div>
            <div class="d-grid gap-2 gap-md-5 col-6 mx-auto d-md-flex col-md-10 justify-content-md-center">
                <a href="pdf/CV2.pdf" class="btn btn-primary btn-lg mt-4 mt-md-5">Download CV</a>
                <a href="kontakt.php" class="btn btn-primary btn-lg mt-4 mt-md-5">Kontakt mig</a>
            </div>
        </div>

        <div class="section__flex">
            <h2 class="text-center mb-3 pt-5">Hvorfor lige multimediefaget?</h2>
            <p class="pb-5 mx-auto hej">
                Jeg har altid haft det sjovt med at kreere, lige fra at bygge med Lego da jeg var lille, til at skrive musik da jeg var trommeleder, eller skabe en cool karakter i et spil.
                <br>
                Så efter et par i detailbranchen og havde et par andre uddannelser, tog jeg chance og sprang ud i at prøve multimediefaget. Og det har jeg ikke fortrudt et sekund.
                <br><br>
                Jeg elsker mit studie, specielt UI- og programmeringsdelen, hvor man kan være med til at skabe og kreere.
                <br>
                Lige fra at finde ud af, hvordan en side skal bygges op via wireframes, til en prototype med et mockup og til den færdig side, som man kan kode i html/css.
                <br><br>
                Jeg kan godt li´ den sparring og dynamik der er forbundet med at arbejde i et team, men kan også sagtens fordybe mig i et projekt alene.
            </p>
        </div>
    </div>

</section>

<?php include 'include/footer.php';?>

</body>
</html>
