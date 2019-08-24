<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <title>Bedos&Fils fioul GNR</title>
</head>
<body>
<header>
    <nav id="nav1" class="navbar navbar-expand-lg fixed-top navbar-dark scrolling-navbar h-25 rgba-white-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="justify-content-center m-auto">
            <ul class="navbar-nav h3-responsive d-flex justify-content-center ">
                <li class="nav-item">
                    <a class="nav-link" href="{{ path('home') }}">Acceuil<span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ path('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ path('opinions') }}">Avis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ path('access') }}">Plan d'accès</a>
                </li>
            </ul>
            {% block titles %}
            <div class="justify-content-center text-center">
                <h1 class="h1-reponsive green-text text-uppercase font-weight-bold wow fadeInDown mt-1"
                    data-wow-delay="0.3s"><strong>Bedos & Fils</strong>
                </h1>
                <hr class="green-text hr-light wow fadeInDown" data-wow-delay="0.4s">
                <h5 class="text-uppercase mb-5 wow fadeInDown green-text font-weight-bold" data-wow-delay="0.4s">
                    <strong>Livraison de fioul et GNR</strong></h5>
            </div>
            {% endblock %}
        </div>
    </nav>
    <nav id="nav2" class="col-md-12 navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar h-25 bg-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="row justify-content-around col-12 ">
            <div class="container-fluid">
                <ul class="navbar-nav h3-responsive">
                    <li class="nav-item">
                        <a class="nav-link black-text" href="{{ path('home') }}">Acceuil<span
                                    class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link black-text" href="{{ path('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link black-text" href="{{ path('opinions') }}">Avis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link black-text" href="{{ path('access') }}">Plan d'accès</a>
                    </li>
                </ul>
                <div class="text-right logo-wrapper" style="margin-top: -60px;">
                    <h3 class="green-text text-uppercase font-weight-bold wow fadeInDown"
                        data-wow-delay="0.3s"><strong>Bedos & Fils</strong>
                    </h3>
                    <h5 class="text-uppercase wow fadeInDown green-text font-weight-bold" data-wow-delay="0.4s">
                        <strong>Livraison de fioul et GNR</strong></h5>
                </div>
            </div>
        </div>
    </nav>
    <!-- Intro Section -->

    <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold text-success">Rappel gratuit et Immédiat</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-phone prefix grey-text"></i>
                        <input type="text" id="form3" class="form-control validate" placeholder="Entrez votre numero de téléphone">
                        <label data-error="wrong" data-success="right" for="form3"></label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-green darken-2">Me faire rappeler<i class="fas fa-paper-plane-o ml-1"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid p-0" style="background-color: #4D616E">
    <div class="col-md-2 card fixed-top rgba-white-light wow fadeInc h-auto text-center"
         style="visibility: visible; animation-name: fadeInUp; margin-top:20%">
        <div class="pt-3 pb-3">
            <i class="fas fa-phone fa-2x white-text icon-quote1 mb-2"></i>
            <p class="black-text">Nous vous rappellons <b>GRATUITEMENT</b></p>
            <a class="btn btn-primary btn-sm ml-0" data-toggle="modal"
               data-target="#modalSubscriptionForm">Etre
                rappelé</a>
        </div>
    </div>
    {% block body %}{% endblock %}
</div>
<!-- Footer -->
<footer class="page-footer font-small green darken-2">

    <!-- Footer Links -->
    <div class="container">

        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5 mb-3">

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!">Accueil</a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!">Contact</a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!">Plan d'accès</a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!">Mension légale</a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!">Plan du site</a>
                </h6>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->
        <hr class="rgba-green-light" style="margin: 0 15%;">

        <!-- Grid row-->
        <div class="row pb-3">

            <!-- Grid column -->
            <div class="col-md-12">

                <div class="mb-5 flex-center">

                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
                    </a>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="https://bedos-fioul.com"> bedos-fioul.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
<!--  SCRIPTS  -->
<!-- JQuery -->
{% block javascripts %}{% endblock %}
<script type="text/javascript" src="{{ asset('js/jquery-3.4.0.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>