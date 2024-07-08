<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Projekter - Falk Fysioterapi</title>
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
            <h2 class="text-center mb-4">Falk Fysioterapi</h2>
            <img class="project__header__img" src="img/falk.svg" alt="billede af websitet LOKALITEE">
        </div>
    </div>
</section>

<section class="bg-black">
    <div class="container py-5">
        <h2 class="text-white mb-3">Branding af ny virksomhed</h2>
        <p class="text-white fs-6 pb-5">
            Projektet var for en kunde, og mit afsluttende projekt som multimediedesigner, som var nyopstartet børnefysioterapeutisk klinik drevet alene i Nykøbing Falster.
            <br><br>
            Her havde kunden behov for at få hjælp til at skabe en visuel identitet, et design til sin klinik, samt et website, hvor hun selv kunne ændre indholdet, og der kunne linkes til et eksternt bookingsystem.
        </p>
        <h2 class="text-white mb-3">Webudvikling, front- & back-end</h2>
        <p class="text-white fs-6 pb-4">
            I projektet arbejdede jeg hovedsageligt med at bygge moduler til et CMS med html/css, SASS og Bootstrap, samt at programmere et login system med PHP, MySQL og Javascript.
            <br><br>
            Selve CMS er bygget op omkring GrapesJS, som er et open source web builder framework der kan bruges til visuelt at bygge websites og har funktionaliteter til at opsætte og bygge elementer fra bunden af.
        </p>
        <div class="d-grid gap-2 gap-md-5 col-8 mx-auto d-md-flex justify-content-md-center">
            <a href="https://www.falkfys.dk/" target="_blank" class="btn btn-primary btn-lg mt-3 px-5 d-flex justify-content-center"><img src="img/homeiconsilhouette.png" alt="hus icon" class="btn__icon__size me-2 my-auto">Website</a>
            <a href="kontakt.php" class="btn btn-primary btn-lg mt-3 px-5 d-flex justify-content-center"><img src="img/contactphone.png" alt="telefon icon" class="btn__icon__size me-2 my-auto">Kontakt</a>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <div class="flex-column d-flex flex-md-row justify-content-md-between gap-1 mb-4">
            <div class="d-inline-block mx-auto mb-4">
                <a href="img/falklogin.png" target="_blank">
                    <img class="project__img__size" src="img/falklogin.png" alt="login siden til CMS system">
                </a>
            </div>
            <div class="d-inline-block mx-auto mb-4">
                <a href="img/falkCMS.png" target="_blank">
                    <img class="project__img__size" src="img/falkCMS.png" alt="brugerfladen af editoren i CMS systemet">
                </a>
            </div>
        </div>
        <h2 class="mb-3">CMS og login system</h2>
        <p class="fs-6 pb-4">
            GrapesJS blev brugt til at bygge en editor, så kunden fik sit eget lille CMS system, så personen nemt kunne ændre tekst og billeder på websitet.
            <br>
            Derfor var funktionerne som at kunne vælge blokke, style elementer, oversigt af alle elementer og preview af siderne i tablet og mobil, nok for kunden at have.
            <br><br>
            Jeg designede blokke/sektioner til websitet, som blev bygget op af html og bootstrap for at gøre blokkene responsiv.
            <br><br>
            Blokkene blev så gemt, som en streng html i en database ved hjælp af en API. På samme måde kunne html’en fetches, når en af siderne skulle redigeres og vises på selve websitet.
            <br>
            Derudover blev der opsat en database til at uploade og gemme billeder i editoren.
            <br><br>
            For at sikre CMS systemet, byggede jeg et login system, så kun oprettet brugere kunne logge ind.
            <br><br>
            Til at starte med lavede jeg en database for brugere (login profil) med en mail, et password og et navn.
            <br>
            Når en bruger blev oprettet, krypterede systemet passwordet ved brug af password_hash, i tilfælde af at hacker skulle få adgang til databasen.
            <br><br>
            Når en bruger ville logge ind, tjekket scriptet om deres brugernavn (e-mail), var i databasen.
            <br>
            Hvis ikke var det i databasen, så var statement false og brugeren kunne ikke logge ind.
            <br>
            Hvis statementet var true, fetches passwordet fra databasen, dekrypteres med password_verify, og hvis det stemte overens, startede der en session og brugeren adgang til systemet.
            <br><br>
            Sessionen kigger på om en bruger er logget ind, og sørger for at man ikke bare kan skrive pathen direkte i URL’en på siden, og på den måde “logge ind” på systemet.
        </p>
        <div class="d-grid gap-2 gap-md-5 col-8 mx-auto d-md-flex justify-content-md-center flex-row-reverse">
            <a href="eatit" class="btn btn-primary btn-lg mt-3 px-5 d-flex justify-content-center">Næste<img src="img/rightarrows.png" alt="pil til højre næste" class="btn__icon__size ms-2 my-auto"></a>
            <a href="funkesmultiservice" class="btn btn-primary btn-lg mt-3 px-5 d-flex justify-content-center"><img src="img/leftarrow.png" alt="pil til venstre forrig" class="btn__icon__size me-2 my-auto">Forrige</a>
        </div>
    </div>
</section>

<?php include 'include/footer.php';?>

</body>
</html>