<!DOCTYPE html>
<html lang="fr" xml:lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Bienvenue sur le site de location de la maison du tertre Briand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="http://localhost/brehat/css/style.css">
    <link rel="stylesheet" href="http://localhost/brehat/css/animate.css">
    <link rel="stylesheet" href="http://localhost/brehat/css/small-thumbnail.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
  integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
  crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
  integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
  crossorigin=""></script>
    
    <link href="https://unpkg.com/webkul-micron@1.1.6/dist/css/micron.min.css" type="text/css" rel="stylesheet">
    <script src="https://unpkg.com/webkul-micron@1.1.6/dist/script/micron.min.js" type="text/javascript"></script>

    <title>La maison du tertre Briand - Bréhat</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/brehat/brehat.ico">
  
  </head>
        
  <body>
<div class="container-fluid">
  <div class="row" id="rowDiapo">
    <section id="contenantdiapo" class="col-lg-12 col-sm-12 col-sm-12">  <!--contenant diaporama -->

      <div id="bloccontrole" class="col-lg-12 col-sm-12 col-sm-12"> <!--boutons de contrôle du diaporama -->
      <div class="prev">
        <i class="fas fa-angle-left fa-2x"></i>
      </div>
      <div class="pause">
        <i class="fas fa-pause fa-1x"></i>
      </div>
      <div class="play">
        <i class="fas fa-play fa-1x"></i>
      </div>
      <div class="next">
        <i class="fas fa-angle-right fa-2x"></i>
      </div>
    </div>
  
    
       

     
     </section>
    
     <?= $content ?>
    </div>


</div>
 
   
      <!-- liens pour les fichiers javascript-->
    <script src="http://localhost/brehat/js/jquery-3.3.1.js"></script>
   
    <script src="http://localhost/brehat/js/diaporama.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
  integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
  crossorigin=""></script>
  </body>
</html>