<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>FLAX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="pagprueba.css">
     <script src="jquery-1.11.3.min.js"></script>
     <script type="text/javascript" src="FLAX.js"></script>
     <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
</head>

<body onload="getcurrent();">
    <header>
        <label id="titulo">FLAX</label>
        <label for="show-menu" class="show-menu"><img src="Imagenes/menu.png" alt="" id="imagenmenu"></label>
        <input type="checkbox" id="show-menu" role="button">
        <div id="fondo"></div>
        <ul id="menu">
            <li id="current"><a id="current2" onclick="load('current','current2');">INICIO</a></li>
            <li id="fav"><a id="fav2" onclick="load('fav','fav2');">TUTORIALES</a></li>
            <li id="fav3"><a id="fav4" onclick="load('fav3','fav4');">NUESTROS FAVORITOS</a></li>
            <li id="fav5"><a id="fav6" onclick="load('fav5','fav6');">BLOG</a></li>
            <li id="fav7"><a id="fav8" onclick="load('fav7','fav8');">SOBRE NOSOTROS</a></li>
        </ul>
    </header>
        <div id="imagen"><img src="Imagenes/stra.jpg" alt="" id="fotofresa"></div>
    <section id="index">
       <div id="hola" onclick="explore();"><h1 id="explora">EXPLORA</h1></div>
        <div class="entrada">
        <h1 class="hide">REACHING MAJESTY</h1>
        <h2 class="hide">OCTOBER 6, 2015</h2>
            <img src="Imagenes/pexels-photo.jpg" alt="" id="foto1" class="hide">
        <h3 class="hide">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar odio a faucibus consectetur. Vivamus at dolor pretium, facilisis lacus nec, lacinia risus. Proin quam nunc, lobortis sit amet hendrerit sed, pharetra id lorem. Phasellus suscipit aliquam odio ultrices ornare. Fusce faucibus pretium odio at convallis. Sed tristique gravida lectus eu mollis. Pellentesque elementum scelerisque auctor. Aenean fringilla nisl sed pellentesque gravida. Donec vitae neque consequat, dictum purus pharetra, varius quam. Suspendisse pellentesque ultrices sem eu tempor. Nullam finibus erat eget dui volutpat, a iaculis dui malesuada. Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
                <div class="entrada">
        <h1 class="hide">REACHING MAJESTY</h1>
        <h2 class="hide">OCTOBER 6, 2015</h2>
            <img src="Imagenes/black-and-white-bw-dance-theme-minimalism.jpg" alt="" id="foto1" class="hide">
        <h3 class="hide">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar odio a faucibus consectetur. Vivamus at dolor pretium, facilisis lacus nec, lacinia risus. Proin quam nunc, lobortis sit amet hendrerit sed, pharetra id lorem. Phasellus suscipit aliquam odio ultrices ornare. Fusce faucibus pretium odio at convallis. Sed tristique gravida lectus eu mollis. Pellentesque elementum scelerisque auctor. Aenean fringilla nisl sed pellentesque gravida. Donec vitae neque consequat, dictum purus pharetra, varius quam. Suspendisse pellentesque ultrices sem eu tempor. Nullam finibus erat eget dui volutpat, a iaculis dui malesuada. Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
    </section>

</body>

</html>