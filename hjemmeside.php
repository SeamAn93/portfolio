<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Hjemmesider</title>

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
    <h2 class="text-center my-5">Kompetencer</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
        <div class="col mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <img src="img/kaffetaarn.png" class="card-img-top" alt="billede af websit til KAFFETÅR'N">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">KAFFETÅR'N</h5>
                    <p class="card-text">Her var problemet, at kunder ikke helt vidste, hvor caféen lå. Men med en “Find vej” side, med et google maps, gjorde det nemt for kunde at visuelisere, hvor sted er. Og med lidt god SEO, står man højt på søgemaskinernes lister og bliver hurtigere set. Tjek også “Om Kaffetår’n”, som jeg også har stået for.  </p>
                    <div class="d-flex justify-content-center">
                        <a href="http://www.s-andersen.dk/Kaffetaarn/" class="btn btn-primary btn-lg mt-4">Klik her</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <img src="img/lions.png" class="card-img-top" alt="billede af tilmeldingside hos Lions">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">Lions</h5>
                    <p class="card-text"> Det var svært for kunde at finde ud af, hvad forskellig på at være frivillig eller være medlem var. Derfor gjorde jeg det klar for kunden, med korte præcise tekster og semiotik, hvad forskellen er. </p>
                    <div class="d-flex justify-content-center">
                        <a href="http://www.s-andersen.dk/master/" class="btn btn-primary btn-lg mt-4">Klik her</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <img src="img/navneflasken.png" class="card-img-top card__img__size" alt="billede af betalingsside på Navneflasken">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">Navneflasken</h5>
                    <p class="card-text"> Det skal være let og forståeligt, at købe sine vare på nettet. Derfor har jeg her, skabt en let betalingsforløb for kunden fra man indtaster sin adresse, til at købet er gået igennem. Der er i alt 5 sider. </p>
                    <div class="d-flex justify-content-center">
                        <a href="http://www.s-andersen.dk/tema3kundeinfo/" class="btn btn-primary btn-lg mt-4">Klik her</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col mb-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <img src="img/lokalitee.png" class="card-img-top" alt="billede webshoppen lokalitee">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">LOKALITEE</h5>
                    <p class="card-text">Wordpress er en hurtig og nem måde, at få fx en t-shirt shop, op at kører. Her ses en del af forside, hvor de bedste produkterne bliver vist og hurtig kan lægges i kurven. </p>
                    <div class="d-flex justify-content-center">
                        <a href="http://www.s-andersen.dk/lokalitee/" class="btn btn-primary btn-lg mt-4">Klik her</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'include/footer.php';?>

</body>
</html>
