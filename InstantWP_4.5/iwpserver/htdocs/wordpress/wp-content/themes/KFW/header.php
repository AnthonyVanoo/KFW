<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kuusamon Fotopalvelu Oy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Custom styles -->
     <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo("template_url");?>/css/bootstrap.min.css" />
     <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo("template_url");?>/style.css" />
</head>
<body>
    <header class="row justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img class="pl-3" src="http://127.0.0.1:4001/wordpress/wp-content/uploads/2018/03/kflogo.gif"><br><p class="bg-danger sloganskew">Aidot valokuvat digikameran kuvista</p></a>
            <!--Picture is the property of Kuusamon fotopalvelu Oy-->
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 3,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbarNavDropdown',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                ) );
            ?>
        </nav>
    </header>