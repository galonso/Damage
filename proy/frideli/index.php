<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <!-- ## Meta ## -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> 
        <!-- ## Css ## -->
        <link href="css/home.css" rel="stylesheet" type="text/css"/>
        <link href="css/colorbox.css" rel="stylesheet" type="text/css"/>
      
        <!-- ## Script:include ## -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" ></script>
        <script type='text/javascript' src="js/jquery.imageScroller.js"></script>
        <script type='text/javascript' src="js/jquery.colorbox-min.js"></script>
        <script type='text/javascript' src="js/test.js"></script> 
        
     
        <!-- ## Script ## -->





    </head>
    <body>
        <div class="wrapp">

            <div class="slideshow">
                <?php
                for ($i = 1; $i <= 22; $i++) {                
                    echo '<a href="img/food'.$i.'.jpg"><img src="img/thumbs/food'.$i.'.jpg"/></a>';
                }
                ?>
            </div>

            <div class="leftMenu">
                <ul>
                    <li><a href="#">Proceso productivo</a></li>
                    <li><a href="#">Productos destacados</a></li>
                    <li><a href="#">Recetas</a></li>
                    <li><a href="#">Enlaces</a></li>
                </ul>
            </div>
            <div class="rightMenu">
                <ul>
                    <li class="drop"><a href="#">Seccion 1</a></li>
                    <ul class="slide">
                        <li><a href="#">Subseccion 1.1</a></li>
                        <li><a href="#">Subseccion 1.2</a></li>
                        <li><a href="#">Subseccion 1.3</a></li>
                    </ul>
                    <li  class="drop"><a href="#">Seccion 2</a></li>
                    <ul class="slide">
                        <li><a href="#">Subseccion 2.1</a></li>
                        <li><a href="#">Subseccion 2.2</a></li>
                        <li><a href="#">Subseccion 2.3</a></li>
                    </ul>
                    <li  class="drop"><a href="#">Seccion 3</a></li>
                    <ul class="slide">
                        <li><a href="#">Subseccion 3.1</a></li>
                        <li><a href="#">Subseccion 3.2</a></li>
                        <li><a href="#">Subseccion 3.3</a></li>
                    </ul>
                    <li  class="drop"><a href="#">Seccion 4</a></li>
                    <ul class="slide">
                        <li><a href="#">Subseccion 4.1</a></li>
                        <li><a href="#">Subseccion 4.2</a></li>
                        <li><a href="#">Subseccion 4.3</a></li>
                    </ul>
                </ul>
            </div>
            <div class="content">
                <div class="texto">
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div>
                        Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                    </div>
                </div>
                <div class="galeria">
                    <a href="img/food1.jpg"><img src="img/thumbs/food1.jpg"></img></a>
                    <a href="img/food2.jpg"><img src="img/thumbs/food2.jpg"></img></a>
                    <a href="img/food3.jpg"><img src="img/thumbs/food3.jpg"></img></a>
                    <a href="img/food4.jpg"><img src="img/thumbs/food4.jpg"></img></a>
                </div>
            </div>
        </div>
    </body>
</html>