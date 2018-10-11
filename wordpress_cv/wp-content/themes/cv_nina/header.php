<!DOCTYPE html> 
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Curriculum Vitae</title>

   <?php wp_head() ?>


</head>

<body>

<header>

    <div class="container-fluid">
        <div class="row">
            <div class="acerca col-lg-4 col-md-4 col-xs-12">
              <nav id="sidebar">
                <div class="sidebar-header">
                   <img src="<?php echo get_theme_file_uri() ?>/img/nina.png" class="rounded-circle">
                </div>
    
                <ul class="list-unstyled components">
                    <li class="lista"><a href="#acerca">ACERCA DE MÍ</a></li>
                    <li class="lista"><a href="#experiencia">EXPERIENCIA</a></li>
                    <li class="lista"><a href="#educación">EDUCACIÓN</a></li>
                    <li class="lista"><a href="#habilidades">HABILIDADES</a></li>
                    <li class="lista"><a href="#contacto">CONTACTO</a></li>
                </ul>
              </nav> 
            </div>

<?php get_footer() ?>