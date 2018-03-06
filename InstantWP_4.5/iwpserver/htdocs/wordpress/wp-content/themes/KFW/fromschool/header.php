
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Startup Template">
    <meta name="author" content="Ecation Finland">
    <link rel="icon" href="">

    <title>Dynamic technology and scalable solutions</title>
    
     <!-- Custom styles -->
    <link href="<?php bloginfo("stylesheet_url");?>" rel="stylesheet">

      <?php wp_head();?>
      
  </head>

  <body>
   
   
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">SCALABLE SOLUTIONS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            
            <li class="page_item"><a href="<?php echo home_url(); ?>">Home</a></li>
            <?php wp_list_pages(array('title_li' => '')); ?>
            <!-- BS theme
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            -->
        </ul>
      
      </div>
    </nav>
    
    <div id="main_content" class="container-fluid d-flex flex-column">