<?php
//to use the functions from starRating.php
include 'starRating.php';
?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT|Open+Sans" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css"
          integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">

    <script src="scrollreveal-master/scrollreveal-master/dist/scrollreveal.min.js"></script>


    <!-- Favicon -->
    <link rel="icon" href="Bilder/logo.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Eigene css Datei (CSS-Dateien werden werden linear von oben nach unten abgearbeitet.)Überschreibt die Boostrap Datei -->
    <link href="css/NudelGerichte.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Fixierte Navbar -->
<nav class="navbar navbar-default navbar-fixed-top role=navigation ">
    <div class="container" id="text-element">
        <!-- Logo-Start -->
        <a href="index.php">
            <div id="text-logo">
                <p><img id="image-size" src="Bilder/nav-logo.png"/>StayHealthy</p>
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
                <li><a href="index.php"><span>Home</span></a></li>

                <li><a href="Rezepte.html">Rezepte</a></li>

                <li><a href="Snacks.html">Snacks</a></li>
                <li><a href="Nachtisch.html">Nachtisch</a></li>
                <li><a href="Smoothie-Bar.html">Smoothie-Bar</a></li>
                <li><a href="Impressum.html">Impressum</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center">
    <div class="container">
        <h1 class="display-3 main-title">Gesunde Nudelgerichte</h1>
        <hr>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
            clita kasd .</p>
    </div>
</div>

<div id="first-container">
    <div class="container c1">
        <div class="row">
            <div class="col sm-4 col-md-4">
                <div class="thumbnail background1">
                    <img src="Bilder/pasta1.jpg" alt="Pasta1" style="width:100%">
                    <div class="caption">
                        <h3>Nudeln mit Tomatensoße Schafskäse und Oliven</h3>
                        <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</h4>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                data-target="#meinModal1"><span>
                Rezept Anzeigen 
                  </span></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail background2">
                    <img src="Bilder/food-title.jpeg" alt="Pasta2" style="width:100%">
                    <div class="caption">
                        <h3>Nudeln mit Tomatensoße Schafskäse und Oliven</h3>
                        <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</h4>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                data-target="#meinModal2">
                            <span>Rezept Anzeigen</span>
                        </button>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail background3">
                    <img src="Bilder/food-title.jpeg" alt="Pasta3" style="width:100%">
                    <div class="caption">
                        <h3>Nudeln mit Tomatensoße Schafskäse und Oliven</h3>
                        <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</h4>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                data-target="#meinModal3">
                            <span>Rezept Anzeigen</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container c2">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail background3">
                    <img src="Bilder/food-title.jpeg" alt="Pasta4" style="width:100%">
                    <div class="caption">
                        <h3>Nudeln mit Tomatensoße Schafskäse und Oliven</h3>
                        <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</h4>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                data-target="#meinModal4">
                            <span>Rezept Anzeigen</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail background2">
                    <img src="Bilder/food-title.jpeg" alt="Pasta5" style="width:100%">
                    <div class="caption">
                        <h3>Nudeln mit Tomatensoße Schafskäse und Oliven</h3>
                        <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</h4>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                data-target="#meinModal5">
                            <span>Rezept Anzeigen</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail background1">
                    <img src="Bilder/food-title.jpeg" alt="Pasta6" style="width:100%">
                    <div class="caption">
                        <h3>Nudeln mit Tomatensoße Schafskäse und Oliven</h3>
                        <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</h4>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                data-target="#meinModal6">
                            <span>Rezept Anzeigen</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Rezept Nudelgericht 1 -->
<div class="modal fade" id="meinModal1" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content" id="contantBackground">
            <div class="modal-header">
                <button id="button-close" type="button" class="close" data-dismiss="modal" aria-label="Schließen"><i
                            class="fas fa-times-circle"></i></button>


                <h3 class="modal-title" id="meinModalLabel">Nudeln mit Tomatensoße Schafskäse und Oliven</h3>

                <hr>
            </div>
            <div class="modal-body background3">

                <table class="table table-striped zutaten-liste">
                    <thead>
                    <tr>
                        <th scope="col">Zutaten</th>
                        <th scope="col">Menge</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Pinenkerne</th>
                        <td>40g</td>
                    </tr>
                    <tr>
                        <th scope="row">Blattspinat</th>
                        <td>250g</td>
                    </tr>
                    <tr>
                        <th scope="row">Olivenöl</th>
                        <td>200ml</td>
                    </tr>
                    <tr>
                        <th scope="row">Spaghetti</th>
                        <td>300g</td>
                    </tr>
                    <tr>
                        <th scope="row">Ricottakäse</th>
                        <td>40g</td>
                    </tr>
                    </tbody>
                </table>
                <div id="rezept-box">
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.1 &nbsp; <img src="Bilder/messer.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.2 &nbsp; <img src="Bilder/topf.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.3 &nbsp; <img src="Bilder/kellner.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div id="star">
                        <?php
                        drawStars(1);
                        ?>
                        <!--as backup, if something happens
                        <span id="star1"><a href=\"hello.php?article=1&rating=$i\"><i class="far fa-star"></i></span>
                        <span id="star2"><i class="far fa-star"></i></span>
                        <span id="star3"><i class="far fa-star"></i></span>
                        <span id="star4"><i class="far fa-star"></i></span>
                        <span id="star5"><i class="far fa-star"></i></span>
                        -->
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
</div>

<!-- Rezept Nudelgericht 2 -->
<div class="modal fade" id="meinModal2" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content" id="contantBackground">
            <div class="modal-header">
                <button id="button-close" type="button" class="close" data-dismiss="modal" aria-label="Schließen"><i
                            class="fas fa-times-circle"></i></button>


                <h3 class="modal-title" id="meinModalLabel">Pasta meets Zucchnini</h3>

                <hr>
            </div>
            <div class="modal-body background3">

                <table class="table table-striped zutaten-liste">
                    <thead>
                    <tr>
                        <th scope="col">Zutaten</th>
                        <th scope="col">Menge</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Pinenkerne</th>
                        <td>40g</td>
                    </tr>
                    <tr>
                        <th scope="row">Blattspinat</th>
                        <td>250g</td>
                    </tr>
                    <tr>
                        <th scope="row">Olivenöl</th>
                        <td>200ml</td>
                    </tr>
                    <tr>
                        <th scope="row">Spaghetti</th>
                        <td>300g</td>
                    </tr>
                    <tr>
                        <th scope="row">Ricottakäse</th>
                        <td>40g</td>
                    </tr>
                    </tbody>
                </table>
                <div id="rezept-box">
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.1 &nbsp; <img src="Bilder/messer.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.2 &nbsp; <img src="Bilder/topf.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.3 &nbsp; <img src="Bilder/kellner.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div id="star">
                        <?php drawStars(2); ?>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
</div>

<!-- Rezept Nudelgericht 3 -->
<div class="modal fade" id="meinModal3" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content" id="contantBackground">
            <div class="modal-header">
                <button id="button-close" type="button" class="close" data-dismiss="modal" aria-label="Schließen"><i
                            class="fas fa-times-circle"></i></button>


                <h3 class="modal-title" id="meinModalLabel">Nudeln mit Tomatensoße Schafskäse und Oliven</h3>

                <hr>
            </div>
            <div class="modal-body background3">

                <table class="table table-striped zutaten-liste">
                    <thead>
                    <tr>
                        <th scope="col">Zutaten</th>
                        <th scope="col">Menge</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Pinenkerne</th>
                        <td>40g</td>
                    </tr>
                    <tr>
                        <th scope="row">Blattspinat</th>
                        <td>250g</td>
                    </tr>
                    <tr>
                        <th scope="row">Olivenöl</th>
                        <td>200ml</td>
                    </tr>
                    <tr>
                        <th scope="row">Spaghetti</th>
                        <td>300g</td>
                    </tr>
                    <tr>
                        <th scope="row">Ricottakäse</th>
                        <td>40g</td>
                    </tr>
                    </tbody>
                </table>
                <div id="rezept-box">
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.1 &nbsp; <img src="Bilder/messer.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.2 &nbsp; <img src="Bilder/topf.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.3 &nbsp; <img src="Bilder/kellner.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div id="star">
                        <?php drawStars(3); ?>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
</div>

<!-- Rezept Nudelgericht 4 -->
<div class="modal fade" id="meinModal4" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content" id="contantBackground">
            <div class="modal-header">
                <button id="button-close" type="button" class="close" data-dismiss="modal" aria-label="Schließen"><i
                            class="fas fa-times-circle"></i></button>


                <h3 class="modal-title" id="meinModalLabel">Nudeln mit Tomatensoße Schafskäse und Oliven</h3>

                <hr>
            </div>
            <div class="modal-body background3">

                <table class="table table-striped zutaten-liste">
                    <thead>
                    <tr>
                        <th scope="col">Zutaten</th>
                        <th scope="col">Menge</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Pinenkerne</th>
                        <td>40g</td>
                    </tr>
                    <tr>
                        <th scope="row">Blattspinat</th>
                        <td>250g</td>
                    </tr>
                    <tr>
                        <th scope="row">Olivenöl</th>
                        <td>200ml</td>
                    </tr>
                    <tr>
                        <th scope="row">Spaghetti</th>
                        <td>300g</td>
                    </tr>
                    <tr>
                        <th scope="row">Ricottakäse</th>
                        <td>40g</td>
                    </tr>
                    </tbody>
                </table>
                <div id="rezept-box">
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.1 &nbsp; <img src="Bilder/messer.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.2 &nbsp; <img src="Bilder/topf.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.3 &nbsp; <img src="Bilder/kellner.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div id="star">
                        <?php drawStars(3); ?>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
</div>

<!-- Rezept Nudelgericht 5 -->
<div class="modal fade" id="meinModal5" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content" id="contantBackground">
            <div class="modal-header">
                <button id="button-close" type="button" class="close" data-dismiss="modal" aria-label="Schließen"><i
                            class="fas fa-times-circle"></i></button>


                <h3 class="modal-title" id="meinModalLabel">Nudeln mit Tomatensoße Schafskäse und Oliven</h3>

                <hr>
            </div>
            <div class="modal-body background3">

                <table class="table table-striped zutaten-liste">
                    <thead>
                    <tr>
                        <th scope="col">Zutaten</th>
                        <th scope="col">Menge</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Pinenkerne</th>
                        <td>40g</td>
                    </tr>
                    <tr>
                        <th scope="row">Blattspinat</th>
                        <td>250g</td>
                    </tr>
                    <tr>
                        <th scope="row">Olivenöl</th>
                        <td>200ml</td>
                    </tr>
                    <tr>
                        <th scope="row">Spaghetti</th>
                        <td>300g</td>
                    </tr>
                    <tr>
                        <th scope="row">Ricottakäse</th>
                        <td>40g</td>
                    </tr>
                    </tbody>
                </table>
                <div id="rezept-box">
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.1 &nbsp; <img src="Bilder/messer.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.2 &nbsp; <img src="Bilder/topf.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.3 &nbsp; <img src="Bilder/kellner.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div id="star">
                        <?php drawStars(4); ?>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
</div>


<!-- Rezept Nudelgericht 6 -->
<div class="modal fade" id="meinModal6" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content" id="contantBackground">
            <div class="modal-header">
                <button id="button-close" type="button" class="close" data-dismiss="modal" aria-label="Schließen"><i
                            class="fas fa-times-circle"></i></button>


                <h3 class="modal-title" id="meinModalLabel">Nudeln mit Tomatensoße Schafskäse und Oliven</h3>

                <hr>
            </div>
            <div class="modal-body background3">

                <table class="table table-striped zutaten-liste">
                    <thead>
                    <tr>
                        <th scope="col">Zutaten</th>
                        <th scope="col">Menge</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Pinenkerne</th>
                        <td>40g</td>
                    </tr>
                    <tr>
                        <th scope="row">Blattspinat</th>
                        <td>250g</td>
                    </tr>
                    <tr>
                        <th scope="row">Olivenöl</th>
                        <td>200ml</td>
                    </tr>
                    <tr>
                        <th scope="row">Spaghetti</th>
                        <td>300g</td>
                    </tr>
                    <tr>
                        <th scope="row">Ricottakäse</th>
                        <td>40g</td>
                    </tr>
                    </tbody>
                </table>
                <div id="rezept-box">
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.1 &nbsp; <img src="Bilder/messer.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.2 &nbsp; <img src="Bilder/topf.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="jumbotron jumbotron-fluid jumbotron-rezept">
                        <div class="container">
                            <h3 class="display-3">Zubereitung Step.3 &nbsp; <img src="Bilder/kellner.png"></h3>
                            <hr>
                            <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div id="star">
                        <?php drawStars(5); ?>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
</div>


<!-- Hier entsteht der Footer -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <h6>Copyright &copy; 2018</h6>
            </div>
            <div class="col-sm-4">
                <h6>About</h6>
                <p>Diese Seite wurde im Rahmen eines Studienprojektes entwickelt. Sie ziehlt darauf ab Personen zu
                    animieren sich gut und gesund zu ernähren. Des Weiteren ist jeder eingeladen, eigene Ideen und
                    Rezepte vorzuschlagen. Guten Appetit and Stay Healthy.</p>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="logo-bar">
                <h6>Follow US</h6>
                <ul class="img-responsive">
                    <li><a href="#"><img src="Bilder/facebook.png" style="width:20%"></a></li>
                    <li><a href="#"><img src="Bilder/youtube.png" style="width:20%"></a></li>
                    <li><a href="#"><img src="Bilder/twitter.png" style="width:20%"></a></li>
                </ul>

            </div>
            <div class="col-sm-2">
                <h6>Coded with <span class="glyphicon glyphicon-heart"></span> byAnthonyAndMichael</h6>
            </div>

        </div>

    </div>

</footer>
<script src="js/jquery.js"></script>

<script src="js/bootstrap.js"></script>
<script>
    /*Scroll-Reveal */
    /*Muss eventuell wieder gelöscht werden Absprache */

    window.sr = ScrollReveal();
    sr.reveal('.main-title', {
        duration: 2000,
        origin: 'top',
        distance: '100px',
        mobile: true
    })
    sr.reveal('.c1', {
        duration: 2000,
        origin: 'left',
        distance: '300px',
        mobile: true
    })

    sr.reveal('.c2', {
        duration: 2000,
        origin: 'right',
        distance: '300px',
        mobile: true
    })


</script>

<script>
    /*Logo vergörßert rotiert und vergrößert sich beim scrollen*/
    $(document).on("scroll", function () {
        if
        ($(document).scrollTop() > 500) {
            $(".navbar-default").addClass("kleiner");
        }
        else {
            $(".navbar-default").removeClass("kleiner");
        }
    });

</script>

</body>


</html>
    
    
    
    
    