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

<body>
    <header>
        <label id="titulo">FLAX</label>
        <label for="show-menu" class="show-menu"><img src="Imagenes/menu.png" alt="" id="imagenmenu"></label>
        <input type="checkbox" id="show-menu" role="button">
        <div id="fondo"></div>
               <ul id="menu">
            <li id="current"><a id="current2" onclick="load('current','current2');">INICIO</a></li>
            <li id="fav"><a id="fav2" onclick="load('fav','fav2');">TUTORIALES</a></li>
            <li id="fav3"><a id="fav4" onclick="load('fav3','fav4');">NUESTROS FAVORITOS</a></li>
            <li id="fav5"><a id="fav6" onclick="load('fav5','fav6');">INSPIRACION</a></li>
            <li id="fav7"><a id="fav8" onclick="load('fav7','fav8');">SOBRE NOSOTROS</a></li>
        </ul>
    <div id="imagen"><img src="Imagenes/stra.jpg" alt="" id="tutoriales"></div>
    </header>
    <section>
        <div id="section2">
        <img src="Imagenes/circle-right.png" alt="" class="next">
          <img src="Imagenes/circle-left.png" alt="" class="prev">
        <div class="container">
            <div id="div" class="tutoriales">
                <img src="Imagenes/pho.jpg" alt="" id="foto_entrada">
                <h1>The differences between Photoshop and Lightroom explained</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
            <div class="tutoriales">
                <img src="Imagenes/kiara.jpg" alt="" id="foto_entrada">
                <h1>How to retouch a portrait in Photoshop Elements</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div> 
             <div class="tutoriales">
                <img src="Imagenes/flor.jpg" alt="" id="foto_entrada">
                <h1> Creative flower images:<br> How to shift the focus using layer blending techniques</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
              <div class="tutoriales">
                <img src="Imagenes/sunset.jpg" alt="" id="foto_entrada">
                <h1> Creative Photoshop ideas: Make your biggest ever conceptual images</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
        </div>
</div>
    </section>
    <script type="text/javascript" src="slideshow.js"></script>
</body>

</html>