<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Om mig</title>
    <meta name="robots" content="All">
    <meta name="author" content="Søren Andersen">
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

<section class="flex-column bg-black">
    <div class="container d-xl-flex gap-xl-5">
    <div class="py-4 section__flex">
        <img src="img/søren2.jpeg" alt="billede af Søren" class="section__img rounded">
    </div>
    <div class="align-self-center section__flex">
        <h2 class="text-center text-white mb-4 ">Hvem er jeg?</h2>
        <p class="text-white pb-5 pb-xl-0 hej mx-auto">
            Jeg hedder Søren og kommer fra Sydhavsøerne, hvor jeg bor i hovedstaden Nykøbing F.
            <br>
            Som person er jeg stille og rolig, altid i godt humør, og ikke bleg for at lave lidt spas, for at få et godt grin.
            <br><br>
            Min fritid bruger jeg på lidt af hvert. Jeg spiller tromme, hvilket jeg har gjort i 25 år, hvor jeg både har undervist, været musisk leder, og skrevet musik i musikkorps.
            <br><br>
            Derudover kan jeg godt lide at komme lidt ud i det blå, hvor jeg bruger min tid på at fiske forskellige steder, eller gå ture i skoven eller ved vandet.
            <br>
            Og ja, man er vel lidt en nørd, så en våd dag foran pc’en, med et computerspil er også et godt pusterum.
            <br><br>
            Ellers sætter jeg pris på at bruge tiden sammen med nære venner og familie, hvor jeg ikke er bleg for at give en hjælpende hånd, hvis det skal til.
        </p>
    </div>
    </div>
</section>

<section class="flex-column bg-white">
    <div class="container d-xl-flex gap-xl-5">
        <div class="section__flex mb-xl-5">
            <h2 class="text-center mb-4 pt-5">Hvad kan jeg?</h2>
            <p class="hej mx-auto">
                Jeg er god til at strukturere mine projekter, hjælpe andre og skabe et image helt fra bunden.
            </p>
            <div class="row text-center text-md-start pt-4">
                <div class="col-12 col-md-6">
                    <h4 class="d-flex justify-content-center justify-content-md-end text__height">
                    html/css
                        <br>
                    Webudvikling
                        <br>
                    Brugertest
                        <br>
                    SEO
                        <br>
                    Javascript
                        <br>
                    Grafisk design
                    </h4>
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="d-flex justify-content-center justify-content-md-start text__height">
                    Booststrap
                        <br>
                    Visuelt design
                        <br>
                    Webdesign
                        <br>
                    Prototype
                        <br>
                    PHP & MySQL
                        <br>
                    Front- & back-end
                    </h4>
                </div>
            </div>
            <div class="d-grid gap-2 gap-md-5 col-10 mx-auto d-md-flex justify-content-md-center">
                <a href="pdf/CV2.pdf" target="_blank" class="btn btn-primary btn-lg mt-4 d-flex justify-content-center btn__size"><img src="img/cvicon.png" alt="papir ikon" class="btn__icon__size me-2 my-auto">CV</a>
                <a href="kontakt" class="btn btn-primary btn-lg mt-4 d-flex justify-content-center btn__size"><img src="img/contactphone.png" alt="telefon kontakt icon" class="btn__icon__size me-2 my-auto">Kontakt</a>
            </div>
        </div>

        <div class="section__flex mt-4 mt-xl-0">
            <h2 class="text-center mb-4 pt-5">Hvorfor lige multimediefaget?</h2>
            <p class="pb-5 mx-auto hej">
                Jeg har altid haft det sjovt med at kreere, lige fra at bygge med Lego da jeg var lille, til at skrive musik da jeg var trommeleder, eller skabe en cool karakter i et spil.
                <br>
                Så efter et par år, hvor jeg arbejdede i forskellige jobs og fik prøvet et par andre uddannelser, fandt jeg multimedieuddannelse og tænkte, “det da lige mig!”. Og det har jeg ikke fortrudt et sekund.
                <br><br>
                Det var det helt perfekte for mig, specielt front-end indenfor webdesign og webudvikler, hvor man kan være med til at skabe og kreere, lige fra idegenerering, til at skabe prototyper, som man herefter bygger op med kode, og man er med til at lave noget praktisk.
                <br><br>
                Derfor endte jeg også med at tage kode sporet på uddannelse, hvor jeg fik indblik i back-end udvikling og virkelig nyd at nørde med kode, selvom det blev til et par ekstra grå hår på hovedet.
                <br><br>
                Men selvom webudvikling og webdesign er toppen af poppen, så synes jeg stadig det er sjovt at lave andre ting inden for multimediedesign, som grafiske materialer til print, usability tests i forhold til website eller en lille reklamevideo.
                <br><br>
                Og selvom det første rigtige job stadig lader vente på sig, så er min passion, gåpåmod og interesse for branchen stadig høj.
            </p>
        </div>
    </div>
</section>

<?php include 'include/footer.php';?>

</body>
</html>