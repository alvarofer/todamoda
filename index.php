<?php

session_start();
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" type="text/css" href="CSS/Estilos.css">-->
        <link rel="stylesheet" type="text/css" href="CSS/EstilosIndex.css">
        <link rel="stylesheet" type="text/css" href="fonts.css">
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/jquery.slides.min.js"></script>
        <script src="js/jquery.slides.js"></script>
        <script src="js/jquery-latest.min.js" type="text/javascript"></script>
        
        <title>Toda Moda</title>
    </head>
    <body>
        <header>
                ﻿<?=include('menu.php');?>
        </header>
        <section id="contenedorPrincipal">
            <section class="main">
                <div class="slides">
                    <img src="Imagenes/oferta2.jpg">
                    <img src="Imagenes/oferta3.jpg">
                </div>
                <section id="destacado"></section>
                <section id="lonuevo"></section>
            </section>
            <footer>
                <section id="acercade">
                    <article>
                        <hgroup>
                            <h3>Acerca de TodaModa</h3>
                            <p>*texto*
                                <br>
                                <br><br><br>
                                <br><br><br>
                                <br><br><br><br>
                                <br><br><br><br>
                                <br><br><br>
                                 hola
                            </p>
                        </hgroup>
                    </article>
                </section>
            </footer>
        </section>
        <?php
            if (!isset($_SESSION["oUsuario"])){
            }
            else{
                $oUsr=$_SESSION["oUsuario"];
           ?>
        <header>
            <div id="subhead">
                <?=include('menu.php');?>
                BIENVENIDO: <?=$oUsr->getNombre();?>
                <a href="logout.php">Salir</a>
                <?php }?>   
            </div>
        </header>
        <section id="contenedorPrincipal">
            <section id="main">
                <section id="slideshow"></section>
                <section id="destacado"></section>
                <section id="lonuevo"></section>
            </section>
        </section>
        
        <script>
        $(document).ready(function(){
            var altura = $('.menu').offset().top;
            $(window).on('scroll', function(){
                if($(window).scrollTop() > altura){
                    $('.menu').addClass('menu-fixed');
                }
                else{
                    $('.menu').removeClass('menu-fixed');
                }
            });
        });
        
          
        </script>
        <script>
        $(function(){
        $(".slides").slidesjs({
            play: {
             active: true,
             effect: "slide",
            interval: 3000,
            auto: true,
            swap: true,
            pauseOnHover: false,
            restartDelay: 2500
        
    }
  });
});
        </script>
</body>
</html>