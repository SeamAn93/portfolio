<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Styleguide</title>
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
    <link rel="icon" type="img/logo_icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php include 'include/header.php';?>

<main class="container mb-5">
    <h2 class="text-center my-5">Styleguide</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size bg-imgcard">
                    <img src="img/kaffetaarnstyleguide.png" class="card-img-top card__img__size" alt="Styleguide KAFFETÅR'N">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">KAFFETÅR'N</h5>
                    <p class="card-text"> I dette projekt, var der flere typer af logoer. Derfor var det vigtig at få beskrevet hvor og hvordan, logoerne skulle bruges. </p>
                    <div class="d-flex justify-content-center mt-auto">
                        <a href="pdf/Styleguide%20Kaffetår'n.pdf" target="_blank" class="btn btn-primary btn-lg mt-4">Download</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size bg-imgcard">
                    <img src="img/musikstyleguide.png" class="card-img-top card__img__size" alt="Styleguide til musikvideo">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">The Heart of the Stoics</h5>
                    <p class="card-text">Her var der især fokus på billederne, da de skulle være med til at vis den stemning, der kom til udtryk i musikvideoen, når der fx skulle laves plakater eller opslag på de sociale medier. </p>
                    <div class="d-flex justify-content-center mt-auto">
                        <a href="pdf/Styleguide%20musikvideo.pdf" target="_blank" class="btn btn-primary btn-lg mt-4">Download</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size bg-imgcard">
                    <img src="img/lionsstyleguide.png" class="card-img-top card__img__size" alt="styleguide Lions">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">Lions</h5>
                    <p class="card-text">For en stor velgørenhedsorganisation som Lions er det vigtig at typografien og farver er ens og fastsat, så brandet står klart og tydeligt. Derfor lagde jeg vægt på at få beskrevet det så godt, som muligt, så de små lokale klubber, kunne holde det. </p>
                    <div class="d-flex justify-content-center mt-auto">
                        <a href="pdf/Styleguide%20Lions.pdf" target="_blank" class="btn btn-primary btn-lg mt-4">Download</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'include/footer.php';?>

</body>
</html>