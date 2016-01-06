<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>FLAX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="pagprueba.css">
     <script src="jquery-1.11.3.min.js"></script>
     <script type="text/javascript" src="FLAX.js"></script>
</head>

<body onload="explora();" id="tuto">
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
    </header>
<div id="imagen"><img src="Imagenes/stra.jpg" alt="" id="fotofresa"></div> 
    <section id="section">
        <div id="entry">
            <div id="black"><img src="Imagenes/cross.png" alt="" id="exit"></div>
            <div class="miniatura"><img src="Imagenes/model4.jpg" alt="" class="miniatura_foto" onclick="showentry('hidden1');"></div>
            <div class="miniatura">
            <img src="Imagenes/model3.jpg" alt="" class="miniatura_foto" onclick="showentry('hidden2');"></div>
            <div class="miniatura"><img src="Imagenes/pho.jpg" id="pho" onclick="showentry('hidden');" class="miniatura_foto"></div>
            <div class="miniatura"><img src="Imagenes/kiara2.jpg" alt="" class="miniatura_foto" onclick="showentry('hidden3')"></div>
            <br>
            <div class="miniatura"><img src="Imagenes/city.jpg" alt="" class="miniatura_foto" onclick="showentry('hidden4')"></div>
            <div class="miniatura"><img src="Imagenes/model6.jpg" alt="" class="miniatura_foto" onclick="showentry('hidden5')"></div>
            <div class="miniatura"><img src="Imagenes/flower.jpg" alt="" class="miniatura_foto" onclick="showentry('hidden6')"></div>
            <div class="miniatura">
               <img src="Imagenes/model.jpg" alt="" class="miniatura_foto" onclick="showentry('hidden7')"></div>
            <br>
            <div class="miniatura"><img src="Imagenes/macro.jpg" alt="" class="miniatura_foto" onclick="showentry('hidden8')"></div>
            <div class="miniatura">
            <img src="Imagenes/model2.jpg" alt="" class="miniatura_foto" onclick="showentry('hidden9')"></div>
            <div class="miniatura"><img src="Imagenes/ny.jpg" alt="" class="miniatura_foto" onclick="showentry('hidden10')"></div>
            <div class="miniatura"><img src="Imagenes/model7.jpg" alt="" class="miniatura_foto" onclick="showentry('hidden11')"></div>

            <div class="container_hidden" id="hidden">
            <div id="div" class="tutoriales">
                <img src="Imagenes/pho.jpg" alt="" id="foto_entrada">
                <h1>The differences between Photoshop and Lightroom explained</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
        </div>
         
            <div class="container_hidden" id="hidden1">
            <div id="div" class="tutoriales">
                <img src="Imagenes/model4.jpg" alt="" id="foto_entrada">
                <h1>The differences between Photoshop and Lightroom explained</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
        </div>
                        <div class="container_hidden" id="hidden2">
            <div id="div" class="tutoriales">
                <img src="Imagenes/model3.jpg" alt="" id="foto_entrada">
                <h1>The differences between Photoshop and Lightroom explained</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
        </div>
            
                        <div class="container_hidden" id="hidden3">
            <div id="div" class="tutoriales">
                <img src="Imagenes/kiara.jpg" alt="" id="foto_entrada">
                <h1>The differences between Photoshop and Lightroom explained</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
        </div>

                        <div class="container_hidden" id="hidden4">
            <div id="div" class="tutoriales">
                <img src="Imagenes/city.jpg" alt="" id="foto_entrada">
                <h1>The differences between Photoshop and Lightroom explained</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
        </div>

                        <div class="container_hidden" id="hidden5">
            <div id="div" class="tutoriales">
                <img src="Imagenes/model6.jpg" alt="" id="foto_entrada">
                <h1>The differences between Photoshop and Lightroom explained</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
        </div>

                        <div class="container_hidden" id="hidden6">
            <div id="div" class="tutoriales">
                <img src="Imagenes/flower.jpg" alt="" id="foto_entrada">
                <h1>The differences between Photoshop and Lightroom explained</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
        </div>

                        <div class="container_hidden" id="hidden7">
            <div id="div" class="tutoriales">
                <img src="Imagenes/model.jpg" alt="" id="foto_entrada">
                <h1>The differences between Photoshop and Lightroom explained</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
        </div>
            
                        <div class="container_hidden" id="hidden8">
            <div id="div" class="tutoriales">
                <img src="Imagenes/macro.jpg" alt="" id="foto_entrada">
                <h1>The differences between Photoshop and Lightroom explained</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
        </div>

                        <div class="container_hidden" id="hidden9">
            <div id="div" class="tutoriales">
                <img src="Imagenes/model2.jpg" alt="" id="foto_entrada">
                <h1>The differences between Photoshop and Lightroom explained</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
        </div>
                        <div class="container_hidden" id="hidden10">
            <div id="div" class="tutoriales">
                <img src="Imagenes/ny.jpg" alt="" id="foto_entrada">
                <h1>The differences between Photoshop and Lightroom explained</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
        </div>
                        <div class="container_hidden" id="hidden11">
            <div id="div" class="tutoriales">
                <img src="Imagenes/model7.jpg" alt="" id="foto_entrada">
                <h1>The differences between Photoshop and Lightroom explained</h1>
                <h3>Sed ut sapien euismod, vestibulum felis sed, pharetra tortor. Donec tristique nunc est, in lobortis mauris blandit quis. Nunc non vestibulum massa. In mauris urna, ornare aliquam lectus sit amet, ullamcorper sagittis purus.<br><br>

Mauris condimentum diam quis ligula dignissim consequat. Nunc efficitur mi luctus justo molestie, ut ultrices eros ornare. Nulla leo purus, bibendum vitae augue a, blandit pretium felis. Morbi cursus rhoncus est vitae placerat. Nullam feugiat luctus nulla ac maximus. Mauris suscipit egestas ex eget ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam pharetra enim id tincidunt sagittis. Cras id tortor nisi. Pellentesque pellentesque dui in tellus posuere consectetur. Aliquam augue elit, volutpat eu accumsan at, ullamcorper vitae leo.</h3>
            </div>
        </div>
    </section>

</body>

</html>