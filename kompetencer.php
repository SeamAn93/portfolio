<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Kompetencer</title>
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

<main class="container mb-5">
    <h2 class="text-center my-5">Kompetencer</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size bg-imgcard">
                    <img src="img/navneflasken.png" class="card-img-top card__img__size" alt="billede af websit til KAFFETÅR'N">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">Website</h5>
                    <p class="card-text">Se hvilke hjemmesider jeg har været med til at lave. Der er alt fra en t-shirt shop til en launch side for en musikvideo. </p>
                    <div class="d-flex justify-content-center mt-auto">
                        <a href="website.php" class="btn btn-primary btn-lg mt-4">Se her</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size">
                    <img src="img/moodboardmusikvideo.jpg" class="card-img-top card__img__size" alt="moodboard til musikvideoprojekt">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">Visuelt design</h5>
                    <p class="card-text">Se hvad jeg kan, inden for visuelt design, hvor du finder en masse forskellig bl.a. logoer, tryk til t-shirt og meget mere.</p>
                    <div class="d-flex justify-content-center mt-auto">
                        <a href="visueltdesign.php" class="btn btn-primary btn-lg mt-4">Se her</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size bg-imgcard">
                    <img src="img/muckupslokalitee.PNG" class="card-img-top card__img__size" alt="muckups til webshop LOKALITEE">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">Prototyper</h5>
                    <p class="card-text">Se hvordan jeg bygger et website op fra bunden via wireframe og mockups.</p>
                    <div class="d-flex justify-content-center mt-auto">
                        <a href="prototype.php" class="btn btn-primary btn-lg mt-4">Se her</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size bg-imgcard">
                    <img src="img/kaffetaarnstyleguide.png" class="card-img-top card__img__size" alt="billeder af styleguide KAFFETÅR'N">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">Styleguide</h5>
                    <p class="card-text">Se hvilke styleguides jeg har lavet, for forskelige virksomheder og brancher.</p>
                    <div class="d-flex justify-content-center mt-auto">
                        <a href="styleguide.php" class="btn btn-primary btn-lg mt-4">Se her</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size bg-imgcard">
                    <img src="img/CV.jpg" class="card-img-top card__img__size" alt="moodboard til musikvideoprojekt" style="height: 125%;">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">CV</h5>
                    <p class="card-text">Download mit cv her, og læs mere om mine arbejdserfaringer.</p>
                    <div class="d-flex justify-content-center mt-auto">
                        <a href="pdf/CV2.pdf" target="_blank" class="btn btn-primary btn-lg mt-4">Download</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'include/footer.php';?>

</body>
</html>
