<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stay-Healthy</title>

    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TTOpen+Sans" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css"
          integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">


    <script src="js/jquery.js"></script>
    <script src="js/index.js"></script>
    //connects to mysql database
    <? require_once 'php/init.php'; ?>
    <!-- Favicon -->
    <link rel="icon" href="Bilder/logo.ico" type="image/x-icon">

    <script src="scrollreveal-master/scrollreveal-master/dist/scrollreveal.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Eigene css Datei (CSS-Dateien werden werden linear von oben nach unten abgearbeitet.)Überschreibt die Boostrap Datei -->
    <link href="css/css.template.css" rel="stylesheet" type="text/css">


</head>
<body>
<div class="welcome-section content-hidden">
    <div class="content-wrap container">
        <ul class="fly-in-text">
            <li>S</li>
            <li>T</li>
            <li>A</li>
            <li>Y</li>
            <li>.</li>
            <li>H</li>
            <li>E</li>
            <li>A</li>
            <li>L</li>
            <li>T</li>
            <li>H</li>
            <li>Y</li>
        </ul>

        <a href="#" class="enter-button"><img src="Bilder/nav-logo.png" alt="Logo">Enjoy</a>

    </div>
</div>
<div class="main-section">
    <!-- Fixierte Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top role=navigation">
        <div class="container" id="text-element">
            <!-- Logo-Start -->
            <a href="index.html">
                <div id="text-logo">
                    <p><img id="image-size" src="Bilder/nav-logo.png" alt="Logo"/>StayHealthy</p>
                </div>
            </a>
            <!-- Logo-Ende -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Navigation ein-/ausblenden</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>

                    <li><a href="Rezepte.html">Rezepte</a></li>

                    <li><a href="Snacks.html">Snacks</a></li>
                    <li><a href="Nachtisch.html">Nachtisch</a></li>
                    <li><a href="Smoothie-Bar.html">Smoothie-Bar</a></li>
                </ul>
            </div>
        </div>
    </nav>

</div>

<!-- Carousel-Section -->
<!-- Slide Zeit wird mit Data-Interval angepasst -->
<div class="slide">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="image-slide" src="Bilder/main-food-title.jpeg" alt="First Slide">
                <div class="carousel-caption d-none d-sd-block">
                    <h2>"Gesund und schnell ist für mich das Richtige"</h2>
                    <p>Nadine</p>
                </div>
            </div>

            <div class="item">
                <img class="image-slide" src=Bilder/side-food-title.jpeg alt="Second Slide">
                <div class="carousel-caption d-none d-sd-block">
                    <h2>"Perfekte Rezepte die auch MANN schaffen kann"</h2>
                    <p>Klaus</p>
                </div>
            </div>
            <div class="item">
                <img class="image-slide" src="Bilder/food-title.jpeg" alt="Second Slide">
                <div class="carousel-caption d-none d-sd-block">
                    <h2>"Für einen gesunden und schnellen Snack findet ihr hier den richtigen Anreiz"</h2>
                    <p>Thomas</p>
                </div>
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>


<!--Eat Healthy Stay Healthy Section-->

<div id="abstand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading text-center" id="eatstayhealthy">Eat Healthy Stay Healthy</h2>
                <hr>
                <h4>Herzlich Willkommen auf unserer HealthyPage. Du hast den ersten Schritt geschafft. Den ersten
                    Schritt zu einer gesunden und ausgewogenen Ernährung.</h4>
                <p class="text">Bei einer gesunden Ernährung denken viele Menschen an ungenießbare Rezepte die man
                    niemanden vorsetzen möchte. Viele greifen aus Bequemlichkeit und Zeitmangel zu Fertigprodukten.
                    Diese ersparen dir zwar langes stehen in der Küche und füllen deinen Magen für kurze Zeit. Jedoch
                    beinhalten solche Unmengen an Zucker und machen dich auf Dauer krank und vermießen nicht nur deinen
                    Magen sondern auch deine Stimmung. Wir zeigen dir wie es auch anders gehen kann. Unsere Rezepte
                    verknüpfen Zeitmangel mit Gesundheit und Genuss. Hier ein paar Anreize warum es sich für dich lohnt
                    auf eine gesunde Ernährung wert zu legen.</p>
                <ol>
                    <li>Herz-Kreislauferkrankungen, Diabetes und Übergewicht werden sich verabschieden.</li>

                    <li>Mit jedem gesunden Bissen wirst du fitter, deine Energie wird steigen und deine Abwehrkräfte
                        bekommen einen neuen Schub.
                    </li>
                    <li>Du wirst anfangen mehr auf dich zu achten und lässt die Zuckerbomben links liegen.</li>
                    <li>Verabschiede dich von lässtigen Diäten und dem gefürchteten JoJo-Effekt.</li>
                    <li>Keine Mangelerscheinungen mehr. Lade deinen Vitamin, Nährstoff und Mineralhaushalt ganz einfach
                        auf.
                    </li>
                    <li>Du wirst den inneren Schweinehund besiegen und mehr Sport treiben.</li>
                    <li>Der Spaß wird auch nicht zu kurz kommen. Mit unseren einfachen Rezepten wirst du wieder Spaß am
                        kochen und Einkaufen bekommen.
                    </li>
                    <li>Durch die Ernährung und Bewegung wirst du wieder besser schlafen.</li>
                </ol>


                <hr>
            </div>
        </div>
    </div>
</div>


<!-- Text-BildBox-->
<div id="first-container">
    <div class="container">
        <div class="row">
            <div class="col-md-4 c1">
                <div class="thumbnail background1">
                    <<<<<<< HEAD
                    <a href="Snacks.html">
                        =======
                        <a href="Snacks.html" target="_blank">
                            >>>>>>> master
                            <img src="Bilder/food-title.jpeg" alt="Lights" style="width:100%">
                            <div class="caption">
                                <h3>Gesunde Snacks sind bei uns kein Problem</h3>
                                <hr>
                                <h4>Jeder mag Snacks und Süßigkeiten. Hier erfährst du wie ein Snack auch gesund und
                                    nahrhaft sein kann.</h4>
                            </div>
                        </a>
                </div>
            </div>
            <div class="col-md-4 c2">
                <div class="thumbnail background2">
                    <<<<<<< HEAD
                    <a href="Rezepte.html">
                        =======
                        <a href="Rezepte.html" target="_blank">
                            >>>>>>> master
                            <img src="Bilder/main-food-title.jpeg" alt="Nature" style="width:100%">
                            <div class="caption">
                                <h3>Für den großen Hunger ist natürlich auch etwas dabei</h3>
                                <hr>
                                <h4>Egal ob Nudel, Fleisch oder Reisgerichte hier findest du was dein Magen und dein
                                    Gaumen wirklich lieben.</h4>
                            </div>
                        </a>
                </div>
            </div>
            <div class="col-md-4 c3">
                <div class="thumbnail background3">
                    <<<<<<< HEAD
                    <a href="Smoothie-Bar.html">
                        =======
                        <a href="Smoothie.html" target="_blank">
                            >>>>>>> master
                            <img src="Bilder/smoothie.jpeg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <h3>Lust auf neue Smoothie Kreationen?</h3>
                                <hr>
                                <h4>Hier findest du Vitaminbomben die dein Tagesbedarf decken und eine erfischende
                                    Abkühlung schaffen.</h4>
                            </div>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Hintergrundbild -->
<div id="background-fixed1" style="background-image: url(Bilder/background.jpg)">
</div>

<!-- Über Uns-->
<div id="abstand2">
    <div class="container">
        <div class="row">
            <div class=" col-xs-12 text-center">
                <h2 id="aboutUs">About Us</h2>
                <hr>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <h2 class="Michael">Michael</h2>
                <p>Studiert Gesundheitsinformatik und ist immer auf der Suche nach neuen kulinarischen Rezepten. Er
                    möchte durch diese Seite Leute inspirieren, sich gut und gesund zu ernähren. Jedes Rezept wurde
                    durch ihn auf Herz und Magen persönlich getestet.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="Bilder/Michael.jpg " alt="Michael" class="img-responsive">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <h2>Anthony</h2>
                <p>Studiert Gesundheitsinformatik. Neben seinen Programmierfähigkeiten ist er talentiert am Herd und am
                    Smoothie Mixer. Seine Kreativität und Herzblut spiegelt sich in jedem einzelnen Rezept wieder.Jedes
                    Rezept wurde durch ihn auf Herz und Magen persönlich getestet.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="Bilder/Anthony.jpg" alt="Anthony" class="img-responsive">
            </div>
        </div>
    </div>
</div>

<!-- Google Maps -->
<div id="mapBuild">
    <div class="container text-center">
        <h2 id="hierFindestDuUns">Hier findest du uns</h2>
        <hr>
        <div id="map">
        </div>
    </div>
</div>

<!-- Kontakt-->
<div id="contact">
    <div class="container">
        <div id="container-kontakt">
            <h2 class="text-center">Deine Meinung<img id="logoM" src="Bilder/nav-logo.png" alt="Logo"/>Deine Rezepte
            </h2>
            <h3 class="text-center">Sag uns deine Meinung und gebe uns neue Inspirationen</h3>
            <hr>
        </div>
        <form method="post" action="php/formContact.php">
            <div class="form-group ">
                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="E-Mail" name="eMail">
            </div>
            <div class="form-group">
                <textarea name="message" class="form-control" id="textfeld" rows="3" placeholder="Inspiriere uns !"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" value="Submit">Absenden</button>
        </form>
    </div>
</div>

=======

>>>>>>> master

<!-- Scroll Back -->
<div class="container" id="scroll-back">
    <a href="#top" class="buttonTop"><i class="fas fa-chevron-circle-up"></i></a>
</div>


<!-- Hier entsteht der Footer -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <h4>Copyright &copy; 2018</h4>

            </div>
            <div class="col-sm-4">
                <h4>About</h4>
                <p>Diese Seite wurde im Rahmen eines Studienprojektes entwickelt. Sie ziehlt darauf ab Personen zu
                    animieren sich gut und gesund zu ernähren. Des Weiteren ist jeder eingeladen, eigene Ideen und
                    Rezepte vorzuschlagen. Guten Appetit and Stay Healthy.</p>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="logo-bar">
                <h4>Follow US</h4>
                <ul class="container img-responsive">
                    <li><a href="#"><img src="Bilder/facebook.png" style="width:15%" alt="facebook"></a></li>
                    <li><a href="#"><img src="Bilder/youtube.png" style="width:15%" alt="youtube"></a></li>
                    <li><a href="#"><img src="Bilder/twitter.png" style="width:15%" alt="twitter"></a></li>
                </ul>

            </div>
            <div class="col-sm-2">
                <h4 class="impressum"><a href="Impressum.html">Impressum</a></h4>
            </div>


            <div class="col-sm-2">
                <h5>Coded with <span class="glyphicon glyphicon-heart"></span> byAnthonyAndMichael</h5>
            </div>

        </div>

    </div>
</footer>

<!-- script frenzies starting -->
<script> welcome();</script>
<script> scrollLogo();</script>
<script> scrollBack();</script>
<script>initMap();</script>
<script> scrollReveal();</script>
<script> cookieUserRead();</script>


<script src="js/bootstrap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJxKQHC_SlMp_C6A9W5QduocPPFATpBpY&callback=initMap&language=de&region=DE"
        async defer></script>

<!-- Cookie Hinweis -->

<div id="mbmcookie">

    <a onClick="var d = new Date(); d = new Date(d.getTime() +1000*60*60*24*730); document.cookie = 'mbmcookie=1; expires='+ d.toGMTString() + ';'; document.getElementById('mbmcookie').style.display = 'none';"
       class="button">Akzeptieren</a>

    <p class="cookiemessage">Auch Stay Healthy verwendet Cookies. Durch die Nutzung dieser Webseite erkl&auml;ren Sie
        sich damit einverstanden, dass Cookies gesetzt werden.

        <a href="">Mehr erfahren</a></p>

</div>
</body>
</html>