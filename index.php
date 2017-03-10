<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <link rel='stylesheet' href='style.css'/>
    <link rel="stylesheet" href="caroussel/owl.carousel.min.css">
    <link rel="stylesheet" href="caroussel/owl.theme.default.min.css">
    <title>Music'all</title>
</head>
<body>
    <div id="titre">
        <div class="margin">
            <img src="images/Logo_main.png"/>
        </div>
    </div>


    <section id="main">
        <article id="playlist">
                <div class="float_left">
                    <img id="fleche_gauche" src="images/fleche_gauche.png"/>
                </div>
            <div class="float_right">
                <img id="fleche_droite" src="images/fleche_droite.png"/>
            </div>
            <div class="margin">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="vignette">
                            <img src="IMG_DATA" alt="IMG_TITRE 1"/>
                        </div>
                    </div>
                    <div class="item">
                        <div class="vignette">
                            <img src="IMG_DATA" alt="IMG_TITRE 2"/>
                        </div>
                    </div>
                </div>
            </div>
                <!--
                <div class="vignette">
                    <img src="IMG_DATA" alt="IMG_TITRE"/>
                </div>
                -->
        </article>
        <div class="margin">
            <article id="contenu">
                <article id="chat">

                </article>
                <article id="upload">
                    <div id="dropfile">Drop an image from your computer</div>
                </article>
            </article>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-1.10.0.min.js"></script>
    <script src="caroussel/owl.carousel.min.js"></script>
    <script src='index.js'></script>

</body>
</html>
