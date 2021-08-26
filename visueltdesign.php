<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">

    <title>Visuelt design</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php include 'include/header.php';?>

<main class="container mb-5">
    <h2 class="text-center my-5">Visuelt design</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size bg-imgcard">
                    <a href="img/moodboardmusikvideo.png"><img src="img/moodboardmusikvideo.png" class="card-img-top card__img__size" alt="moodboard til musikvideoprojekt"></a>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">Moodboard</h5>
                    <p class="card-text">Et lille moodboard fra projekt med en musikvideo, der skabte grundlaget for den stemningen og stilen, for det visuelle design.</p>
                </div>
            </div>

        </div>

        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size bg-imgcard">
                    <a href="img/tid.png"><img src="img/tid.png" class="card-img-top card__img__size" alt="collage"></a>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">Collage</h5>
                    <p class="card-text">Lidt spas fra min fritid, hvor jeg leget lidt med photoshop og emnet tid og barndom. </p>
                </div>
            </div>
        </div>

        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size bg-imgcard">
                    <a href="img/codeklogprocess.png"><img src="img/codeklogprocess.png" class="card-img-top card__img__size" alt="processen af logo design"></a>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">Logo design</h5>
                    <p class="card-text"> Logoet kommer fra en lille klub vi skulle lave på studie, hvor man kunne del vide og hjælpe hinanden. I dette tilfælde er klubben tiltænkt for dem, der kan li at kode.</p>
                </div>
            </div>
        </div>

        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size bg-imgcard">
                    <a href="img/tryktiltshirt.png"><img src="img/tryktiltshirt.png" class="card-img-top card__img__size" alt="muckup af tryk til t-shirt"></a>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">Tryk til t-shirt</h5>
                    <p class="card-text">Trykket her, var grundideen til, hvilke tryk der skulle sælges på i t-shirt shop. Du kan se webshoppen her.</p>
                </div>
            </div>
        </div>

        <div class="col mb-5 d-flex align-items-stretch">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card__img__size bg-imgcard">
                    <a href="img/ujmlions.png"><img src="img/ujmlions.png" class="card-img-top card__img__size" alt="User Journey Map"></a>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center mb-3">User Journey Map</h5>
                    <p class="card-text">Som designer kan det være rart at få visualiseret problemerne på en hjemmeside fra kundens synsvinkel, så man forstå deres problem. Det kan et User Journey Map hjælpe med. Her ses et, før re-designet af Lions website.</p>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'include/footer.php';?>

</body>
</html>
