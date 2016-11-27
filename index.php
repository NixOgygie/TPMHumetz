<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>



    <script src="js/bootstrap.min.js"></script>



    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">


    <!---Select Bootstrap --->
    <!-- Latest compiled and minified CSS -->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">-->

    <!-- Latest compiled and minified JavaScript -->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>-->





    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Contact AllSafe</h1>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">AllSafe</a>
                </div>
<!--                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">-->
                        <ul class="nav navbar-nav">
                        <li><a href="/">Recherche</a></li>
                        </ul>
                    </div>



        </nav>
        <div id="regle" class="jumbotron">
            <h1>Règles de confidentialité</h1>
            <p>Ce website est exclusivement réservé aux employés de la société.</p>
              <p>  Merci de respecter la vie privé des m. Toutes propagations ou abus de ces informations occasionera des poursuites judiciaires</p>
            <p><a class="btn btn-primary btn-lg" href="#" id="accept" role="button">J'accepte les termes >></a></p>
        </div>







    <div id="search">

        <div class="page-header">
            <h1>Recherche de d'informations sur le personnel :</h1>
        </div>

        <p>Choisissez le département :</p>



        <div class="col-lg-6">
            <div class="input-group my-group">
                <div class="form-group">
                    <select id="categorie" class="selectpicker form-control">

                    </select>
                </div>
                <span class="input-group-btn">
                    <button class="btn btn-primary" id="submit">Rechercher !</button>
                 </span>

            </div>
        </div>
    </div>
        <br/>
        <br/>
        <div id="result">
           <p>Liste des personnes pour le département </p>
        <div class="col-12 col-sm-12 col-lg-12">

            <div class="table-responsive">
        <table class="table table-responsive">
            <thead>
                <tr>

                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Mail</th>
                    <th>Téléphone</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table></div></div>


    </div>
        </div>

    <script src="script.js"></script>
</body>
</html>