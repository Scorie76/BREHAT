<!DOCTYPE html>
<html lang="fr" xml:lang="fr">
  <head>

    <meta charset="utf-8" />
    <meta name="description" content="Bienvenue sur le site de location de la maison du tertre Briand ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="http://localhost/brehat/css/style.css">
    <link rel="stylesheet" href="http://localhost/brehat/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="http://localhost/brehat/css/small-thumbnail.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="http://localhost/brehat/css/tiny.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
  integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
  crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
  integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
  crossorigin=""></script>
    <script type="text/javascript" src="http://localhost/brehat/js/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
      selector: '#textarea',  // change this value according to your HTML
      language: 'fr_FR',
      entity_encoding : "raw",
      forced_root_block : "",
      force_br_newlines : true,
      force_p_newlines : false,
      invalid_elements : 'p, strong, em, br',
        //setup: function (editor) {
        //editor.on('click', function (e) {
          //document.getElementById('aideTextarea') = aideTexte;
          //texteAide = "noubliez pas de renseigner votre message";
          //aideTexte.textContent = texteAide;
         // alert('Champ obligatoire');
        //});
      //}
    });
    </script>


    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/brehat/brehat.ico">
    <link href="http://localhost/brehat/js/fullCalendar/fullcalendar-4.2.0/packages/core/main.css" rel="stylesheet" />
    <link href="http://localhost/brehat/js/fullCalendar/fullcalendar-4.2.0/packages/daygrid/main.css" rel="stylesheet" />
    <script src="http://localhost/brehat/js/fullCalendar/fullcalendar-4.2.0/packages/core/main.js"></script>
    <script src="http://localhost/brehat/js/fullCalendar/fullcalendar-4.2.0/packages/core/main.js"></script>
    <script src="http://localhost/brehat/js/fullCalendar/fullcalendar-4.2.0/packages/daygrid/main.js"></script>
    <script src='http://localhost/brehat/js/fullCalendar/fullcalendar-4.2.0/packages/core/locales/fr.js'></script>
    <script src="http://localhost/brehat/js/fullCalendar/fullcalendar-4.2.0/packages/google-calendar/main.js"></script>
    <link href="https://unpkg.com/webkul-micron@1.1.6/dist/css/micron.min.css" type="text/css" rel="stylesheet">
	<script src="https://unpkg.com/webkul-micron@1.1.6/dist/script/micron.min.js" type="text/javascript"></script>
    <title>La maison du tertre Briand - Bréhat</title>
    
  </head>
   



  <body>

    <?php require("http://localhost/brehat/view/header.php"); ?>
          <?= $content ?>
    <?php require("http://localhost/brehat/view/footer.php"); ?>
        <!-- liens pour les fichiers javascript-->
      
      
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
          AOS.init({
              easing: 'ease-out-back',
              duration: 1200
           });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
    <script src="http://localhost/brehat/js/jquery-3.3.1.js"></script>
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
    integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
    crossorigin=""></script>

  </body>
</html>