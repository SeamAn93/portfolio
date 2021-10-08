<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Projekter - Kaffetår'n</title>
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
            <h2 class="text-center mb-4">Kaffetår'N</h2>
            <img class="project__header__img" src="img/kaffetaarn.png" alt="">
        </div>
    </div>
</section>

<section class="bg-black">
    <div class="container py-5">
        <h2 class="text-white mb-3">Cafeen i vandtårnet</h2>
        <p class="text-white fs-6 pb-5">
            Projektet her var en del af eksamen på 2 semester, og var med en rigtig kunde.
            Cafeen var forholdsvis ny, og havde bruge for at få fastsat dens brande, samt at folk blev bevidst om at cafeen var i byen.
            <br><br>
            Samtidig var det vigtig, at det udtryk fra cafeen blev en del af dens identitet på digitale medier
            og at stemningen af cafeen kom til udtryk på de sociale medier som fx Facebook og Instagram, lige fra farver og stil, til stemningen på billeder og videoer.
        </p>

        <h2 class="text-white mb-3">Front-end developer, Art director, UX/UI-designer, SEO-specialist</h2>
        <p class="text-white fs-6 pb-4">
            Jeg var med til at skabe det visuelle image for cafeen, da jeg stod for at lave en styleguide for cafeen, og var med til at lave prototyperne til designet af websitet.
            <br><br>
            Stod også for at kode websitet fra bunden af, samt at planlægge og undersøge, hvordan vi kunne optimere SEO, på websitet.
        </p>
        <div class="d-grid gap-2 gap-md-5 col-8 mx-auto d-md-flex justify-content-md-center">
            <a href="http://www.s-andersen.dk/Kaffetaarn/" target="_blank" class="btn btn-primary btn-lg mt-3 px-5">Website</a>
            <a href="kontakt.php" class="btn btn-primary btn-lg mt-3 px-5">Kontakt</a>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <div class="flex-column d-flex flex-md-row justify-content-md-between gap-1 mb-4">
            <div class="d-inline-block mx-auto mb-4">
                <a href="img/om-oskaffetaarn.png" target="_blank">
                    <img class="project__img__size" src="img/om-oskaffetaarn.png" alt="wireframe af om os side">
                </a>
            </div>
            <div class="d-inline-block mx-auto mb-4">
                <a href="pdf/Styleguide%20Kaffetår'n.pdf" target="_blank">
                    <img class="project__img__size" src="img/kaffetaarnstyleguide.png" alt="">
                </a>
            </div>
        </div>
        <h2 class="mb-3">Øget kendskab på de sociale medier</h2>
        <p class="fs-6 pb-4">
            Det vigtig her var at først finde ud af, hvilken målgruppe cafe henvendte sig til. Det gjorde vi gennem et spørgeskema, for at finde ud af gennem en række spørgsmål, hvem cafe livet tiltalte.
            <br><br>
            Derefter definerede vi to målgrupper og testet et moodboard med stemningen af cafeen via interviews, for at finde frem til stilen, vi skulle design ud fra.
            <br><br>
            Det var også ud fra spørgeskemaet og de valgte målgrupper, defineret vi de sociale medier, vi ville promovere cafeen, og lavede en SoMe strategi,
            med retningslinje for eksempel tone of voice, format og kvalitet af videoer og billeder, tidsrum for opslag mm. samt en content plan, af forløbet for promoveringen.
            <br><br>
            Med hjælp af moodboardet, redesignet vi bl.a. logo, skilte, ikoner mm. og brugte det, som et springbræt til at designe et website til cafeen,
            hvor vi startede med prototyper og derefter kodet siden helt fra bunden med bl.a med bootstrap og sass, for at gøre sine responsiv,
            samt SEO optimeret den med fx meta tag i html og et integreret google map, på “Find vej” siden, så cafe kunne nå til tops på google.
        </p>
        <div class="d-grid gap-2 gap-md-5 col-8 mx-auto d-md-flex justify-content-md-center">
            <a href="musikdatabase.php" class="btn btn-primary btn-lg mt-3 px-5">Forrig</a>
            <a href="lokalitee.php" class="btn btn-primary btn-lg mt-3 px-5">Næste</a>
        </div>
    </div>
</section>

<?php include 'include/footer.php';?>


</body>
</html>
