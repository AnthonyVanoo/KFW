<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kuusamon Fotopalvelu Oy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <!-- Custom styles -->
    <link href="<?php bloginfo("stylesheet_url");?>" rel="stylesheet">

      <?php wp_head();?>
</head>
<body>
    <header class="row justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img class="pl-3" src="img/kflogo.png"><br><p class="bg-danger sloganskew">Aidot valokuvat digikameran kuvista</p></a>
            <!--Picture is the property of Kuusamon fotopalvelu Oy-->
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Etusivu <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Palvelut</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Kuvauspalvelut</a>
                            <a class="dropdown-item" href="#">Digikuvatilaukset</a>
                            <a class="dropdown-item" href="#">Kuvanvalmistuspalvelut</a>
                            <a class="dropdown-item dropdown dropdown-toggle" href="#">Kuvatuotteet</a><!-- possibly add another dropdown-->
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Kuvauspalvelut</a>
                                    <a class="dropdown-item" href="#">Digikuvatilaukset</a>
                                    <a class="dropdown-item" href="#">Kuvanvalmistuspalvelut</a>
                                </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tuotteet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Yhteystiedot</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>