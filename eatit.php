<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Projekter - Eatit</title>
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
            <h2 class="text-center mb-4">Eatit</h2>
            <img class="project__header__img" src="img/onboarding.png" alt="billede af websitet LOKALITEE">
        </div>
    </div>
</section>

<section class="bg-black">
    <div class="container py-5">
        <h2 class="text-white mb-3">Entrepreneurship med grøn ide</h2>
        <p class="text-white fs-6 pb-5">
            Et eksamensprojekt fra 3 semester, hvor opgaven var at komme på et koncept til en virksomhed og et produkt der kunne skabe værdi eller løse en udfordring i samfundet.
            <br><br>
            Ideen blev til en Madspilds app, hvor fokuset var, at man ud fra de rester man havde i køleskabet, fryseren og køkkenskabet, kunne finde opskrifter med disse rester, og på den måde undgå madspild.
            <br><br>
            Appen var et koncept, og er derfor ikke fuld funktionel.
        </p>
        <h2 class="text-white mb-3">Prototype, front- og back-end udvilking.</h2>
        <p class="text-white fs-6 pb-4">
            I projektet arbejdede jeg med prototyper, wireframing og mockups, samt flowchart over de valg, brugeren mødte igennem appen.
            <br>
            Derudover var jeg både med til at udvikle front-end, med html/css, Bootstrap og Javascript, samt back-end med PHP og MySQL.
        </p>
        <div class="d-grid gap-2 gap-md-5 col-8 mx-auto d-md-flex justify-content-md-center">
            <a href="https://s-andersen.dk/eatit-app" target="_blank" class="btn btn-primary btn-lg mt-3 px-5 d-flex justify-content-center"><img src="img/homeiconsilhouette.png" alt="hus icon" class="btn__icon__size me-2 my-auto">Website</a>
            <a href="kontakt.php" class="btn btn-primary btn-lg mt-3 px-5 d-flex justify-content-center"><img src="img/contactphone.png" alt="telefon icon" class="btn__icon__size me-2 my-auto">Kontakt</a>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <div class="flex-column d-flex flex-md-row justify-content-md-between gap-1 mb-4">
            <div class="d-inline-block mx-auto mb-4">
                <a href="img/onboarding-ingredienser.png.png" target="_blank">
                    <img class="project__img__size" src="img/onboarding-ingredienser.png" alt="to mobiltelefoner, det ene viser onboarding og den anden viser søgfunktionen for ingredienser">
                </a>
            </div>
            <div class="d-inline-block mx-auto mb-4">
                <a href="img/opskrifter-enopskrift.png" target="_blank">
                    <img class="project__img__size" src="img/opskrifter-enopskrift.png" alt="to mobiltelefoner, det ene viser en søgning efter opskrifter, den anden en opskrift">
                </a>
            </div>
        </div>
        <h2 class="mb-3">Brugervenlig app og søgemaskine med API’er</h2>
        <p class="fs-6 pb-4">
            I dette projekt var fokuset i designprocessen på, at produktet skulle være en mobilapp, hvilket gjorde at man skulle tænke lidt anderledes strukturmæssigt.
            <br><br>
            Et af elementerne var at have menuen, som et fast element i bunden af skærmen, da der var taget udgangspunkt i at brugeren bruger en hånd, hvilket også var tanken med onboarding i starten af app'en, hvor en lille animation indikerer, at man skal swipe mellem siderne.
            <br><br>
            På selve menulinjen var der taget udgangspunkt i den proces brugeren skulle igennem, så brugeren blev guidet fra problemet med madrester, til en løsning nemlig en opskrift.
            <br>
            Derudover var fokuset på at gøre app'en hurtig og enkel at forstå, ved at bruge semiotik til at forklare funktioner, og guide brugeren igennem appen.
            <br><br>
            Til at søge efter ingredienser og opskrifter i app’en, måtte der oprettes databaser og API’er for at fetch dataen.
            <br><br>
            Den første database indeholder alle informationer om de enkle opskrifter og bruges til at vise disse informationer visuelt på en opskrift side.
            <br>
            Den anden database indeholder alle ingredienserne, der findes i opskrifterne og giver dem et unikt ID nummer hver og den sidste database er en connection database, som matcher de to databasers ID numre.
            <br><br>
            For at vise forslag til opskrifter, bruges en connection API, så bruger en SQL sætning til at vælge alt fra connection databasen og sætter det sammen med alle opskrifts ID’erne fra vores opskrift databasen.
            <br>
            Derefter kigger den på inputtet i søgefeltet, og tager de ingredienser der er skrevet ind og matcher ingrediensernes ID, med opskrifternes ID via connection databasen og fetcher de opskrifter til brugeren, som matcher med ingredienserne.
            <br><br>
            Derudover står opskrifterne i rækkefølge, så de opskrifter med flest matchende ingredienser, står først, og dem med færrest matchende ingredienser står sidst.
        </p>
        <div class="d-grid gap-2 gap-md-5 col-8 mx-auto d-md-flex justify-content-md-center flex-row-reverse">
            <a href="funkesmultiservice" class="btn btn-primary btn-lg mt-3 px-5 d-flex justify-content-center">Næste<img src="img/rightarrows.png" alt="pil til højre næste" class="btn__icon__size ms-2 my-auto"></a>
            <a href="falkfysioterapi" class="btn btn-primary btn-lg mt-3 px-5 d-flex justify-content-center"><img src="img/leftarrow.png" alt="pil til venstre forrig" class="btn__icon__size me-2 my-auto">Forrige</a>
        </div>
    </div>
</section>

<?php include 'include/footer.php';?>

</body>
</html>