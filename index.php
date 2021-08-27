<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Søren Andersen Design - Website der bliver set - Brand image, website, SEO, grafisk desgin, visuelt design</title>
    <meta name="robots" content="All">
    <meta name="author" content="Søren Andersen">
    <meta name="copyright" content="© Søren Andersen, 2021">
    <meta name="description" content="Søren Andersen Design - Skaber velfungerende website, der får dit website til tops på google ved hjælp af SEO. Kan hjælpe dit website med SEO, brand image, grafisk desgin, visuelt design">
    <meta name="keywords" content="website, SEO, frontend, develop, grafisk design, visuelt design, brand image, html, css, javascript, portfolio, multimediedesigner">
    <meta name="og:title" property="og:title" content="Søren Andersen Design - Website der bliver set - Brand image, website, SEO, grafisk desgin, visuelt design">
    <meta name="og:description" property="og:description" content="Søren Andersen Design - Skaber velfungerende website, der får dit website til tops på google ved hjælp af SEO. Kan hjælpe dit website med SEO, brand image, grafisk desgin, visuelt design">
    <meta name="og:type" property="og:type" content="website, SEO, frontend, develop, grafisk design, visuelt design, brand image, html, css, javascript, portfolio, multimediedesigner">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Metrophobic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="img/logo_icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php include 'include/header.php';?>

<main class="main d-flex justify-content-evenly py-5">
    <div class="main__text flex-md-column align-self-md-center text-white ps-2 pe-1">
    <h1 class="text-xl-center main__text__header mb-4">Hej med dig</h1>
        <p class="text-xl-center main__text__body">Jeg hedder Søren og studere til Multimediedesign på Zealand.
            <br><br>
            Front-end, website, SEO, brand image, grafisk design.
            <br><br>
            Find ud af, hvad jeg kan.</p>
        <div class="d-xl-flex justify-content-xl-center">
            <a class="btn btn-primary btn-lg mt-4" href="kompetencer.php" role="button">Se her</a>
        </div>
    </div>
    <div class="ps-1 pe-2 my-sm-auto">
        <img class="main__image rounded" src="img/søren.jpg" alt="billede af Søren">
    </div>
</main>

<section class="container mt-5 mb-4">
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
                <div class="card__img__size bg-imgcard">
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
    </div>
</section>

<?php include 'include/footer.php';?>

</body>
</html>