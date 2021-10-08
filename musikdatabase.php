<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Projekter - Music Lookup</title>
    <meta name="robots" content="All">
    <meta <meta name="author" content="Søren Andersen">
    <meta name="copyright" content="© Søren Andersen, 2021">
    <meta name="description" content="Søren Andersen Design - Skaber velfungerende website, der får dit website til tops på google ved hjælp af SEO. Kan hjælpe dit website med SEO, brand image, grafisk desgin, visuelt design">
    <meta name="keywords" content="website, SEO, frontend, develop, grafisk design, visuelt design, brand image, html, css, javascript, portfolio, multimediedesigner">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" href="img/logo_icon.svg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php include 'include/header.php';?>

<section>
    <div class="container py-5">
        <div class="row justify-content-center">
            <h2 class="text-center mb-4">Music lookup</h2>
            <img class="project__header__img" src="img/musiclookupwebsit.png" alt="billede af siden Music lookup">
        </div>
    </div>
</section>

<section class="bg-black">
    <div class="container py-5">
        <h2 class="text-white mb-3">Opsætning af en database</h2>
        <p class="text-white fs-6 pb-5">
            En øvelse i at lære at kode med php, opsætte en databasen med phpMyAdmin, lave en API og til sidst, fetch fra en API, samt at opsætte en side med et fedt design, som er responsiv.
            <br><br>
            Det endte med en musik database, hvor brugeren kan finde detaljer om en sang, album og kunstner og meget mere.
        </p>
        <h2 class="text-white mb-3">UI-designer, front-end og back-end developer</h2>
        <p class="text-white fs-6 pb-4">
            I forløbet, var jeg med til at lave prototyper for designet af siderne, samt være med til at kode dele af websitet, både front- og backend, hvor backend delen bestod af php, javascript og opsætningen af databasen i phpMyAdmin.
        </p>
        <div class="d-grid gap-2 gap-md-5 col-8 mx-auto d-md-flex justify-content-md-center">
            <a href="http://www.s-andersen.dk/musikPhp/index.php" target="_blank" class="btn btn-primary btn-lg mt-3 px-5">Website</a>
            <a href="kontakt.php" class="btn btn-primary btn-lg mt-3 px-5">Kontakt</a>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <div class="flex-column d-flex flex-md-row justify-content-md-between gap-1 mb-4">
            <div class="d-inline-block mx-auto mb-4">
                <a href="img/muisclookupmockups.JPG" target="_blank">
                    <img class="project__img__size" src="img/muisclookupmockups.JPG" alt="">
                </a>
            </div>
            <div class="d-inline-block mx-auto mb-4">
                <a href="img/musiclookupdatabase.png" target="_blank">
                    <img class="project__img__size" src="img/musiclookupdatabase.png" alt="">
                </a>
            </div>
        </div>
        <h2 class="mb-3">Fra front-end til back-end</h2>
        <p class="fs-6 pb-4">
            Selve websitet består af 4 dele, der tilsammen skaber fundamentet for siden:
            <br><br>
            Insert form, som gjorde det muligt at tilføje nye numre / data til databasen, ved at oprette en database i phpMyAdmin, med forskellige parameter, som var relevant viden for et musiknumre. Derefter kunne inputs fletterne og SQL til at indsætte det data, brugeren har indtastet.
            <br><br>
            Til vores to tekstfelter, “Band members” og “Tracklist”, bruges der TinyMCE. Dog er det ikke den bedste løsning, fordi hvis brugeren fx kopier en trackliste over i input feltet, kommer det hele i et paragraph tag i html, som skabe en anden styling end hvad der er tiltænkt. Løsningen her ville være at lave individuelle input felter for hvert numre på albummet, og derefter compile det til et dataset.
            <br><br>
            Front page, hvor alle numre i databasen er vist, i alfabetisk orden og hvor brugeren kan klikke ind på hvert enkelt numre for at finde flere information om sangen.
            Derudover er der et søgefelt, der via API’en fetcher data fra databasen, for henholdsvis sange, albums og kunstner, når brugeren søge på en af disse parameter.
            Altså, javascript bruges til at fetch data fra API i JSON format, som så viser informationen på hvert enkelt card.
            <br><br>
            Track page, hvor brugeren finder flere informationer om en sang. Hver sang har deres eget unikke ID, og ved hjælp af SQL, kan kommunikere med database og få php koden, til at print informationerne om sangen som fx navn, længde på numre, udgivelsesår, gerne og meget mere.
            <br><br>
            Og sidste, men ikke mindst, Edit & Remove page, hvor man fra websitet af, kan redigere eller slette sange i databasen.
            Når man vil redigere kommer der den sammen form op, som på inset side, bare hvor de allerede indtastede informationer står og som man så kan redigere i.
            Disse ville dog ikke normalt være tilgængelige for brugeren, men er det i dette tilfælde, for visse hele projektet.
        </p>
        <div class="d-grid gap-2 gap-md-5 col-8 mx-auto d-md-flex justify-content-md-center">
            <a href="lokalitee.php" class="btn btn-primary btn-lg mt-3 px-5">Forrig</a>
            <a href="kaffetaarn.php" class="btn btn-primary btn-lg mt-3 px-5">Næste</a>
        </div>
    </div>
</section>

<?php include 'include/footer.php';?>

</body>
</html>