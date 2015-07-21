<?php
  include "connect.php";
?>

<!DOCTYPE html>
<html>
  <head>
  <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="title" content="YOUNITE | Naturally Shared" />
    <meta name="description" content="YOUNITE | Naturally Shared" />
    <title>Younite | Naturally Shared</title>

    <!-- FACEBOOK CARDS -->
    <meta name="author" content="Dopamine">
    <meta property="og:title" content="Younite">
    <meta property="og:description" content="YOUNITE | Naturally Shared">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Younite" >
    <meta property="og:url" content="http://younite.world">
    <meta property="og:image" content="http://younite.world/img/cards_facebook.jpg">

    <!-- LIENS -->
    <link href='css/main.css' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <link rel="icon" href="img/favicon.ico" />

     <!-- MAPBOX -->
    <script src='https://api.tiles.mapbox.com/mapbox.js/v2.2.1/mapbox.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox.js/v2.2.1/mapbox.css' rel='stylesheet' />
    <script type="text/javascript" src="js/moment.js"></script>

  </head>
<body>


<!--[if lt IE 9]>
<link href='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.ie.css' rel='stylesheet' />
<![endif]-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<div id='map'></div>



<div class="container containerYounite">

      <!-- BOUTONS FILTRE ET GEOLOCALISATION -->

          <div class="row">
            </div>
            <img src="img/geo.png" id='geolocate' class="btnGeo" alt="geolocalization">


          <!-- SOUS-MENU TIMELINE PROFIL -->

          <div class="profile">
                
            <section id="cd-timeline" class="cd-container">
              
              <!-- INFO 01 -->

              <div class="cd-timeline-block">
                <div class="cd-timeline-img cd-picture">
                  <img src="img/culture_timeline.png" alt="culture">
                </div>

                <div class="cd-timeline-content">
                  <h2>Jul 23<br><span>Culture</span></h2>
                  <p>Place : Angkor </p>
                  <p>The temples are beautiful just. One step that should not be missed !</p>
                </div>
              </div>

              <!-- INFO 02 -->

              <div class="cd-timeline-block">
                <div class="cd-timeline-img cd-location">
                  <img src="img/nature_timeline.png" alt="pictures">
                </div>

                <div class="cd-timeline-content">
                  <h2>Jul 20<br><span>Nature</span></h2>
                  <p>The Hong Kong Bay</p>
                  <img src="img/hg.jpeg" alt="hong kong"/>
                </div>
              </div>

              <!-- INFO 03 -->

              <div class="cd-timeline-block">
                <div class="cd-timeline-img cd-location">
                  <img src="img/gastronomie_timeline.png" alt="tips">
                </div>

                <div class="cd-timeline-content">
                  <h2>Jul 18<br><span>Gastronomy</span></h2>
                  <p>I really enjoyed myself at Le Mexico</p>
                </div>
              </div>

            </section>

          </div> <!-- fin .profile-->

        <!-- MENU GENERAL -->
        <nav class="navbar navbar-default menuYounite">

          <div class="container-fluid fluidYounite">
            <ul class="nav navbar-nav navYounite">
              <li id="back-map" class="ongletsYounite"><a href="#" title="home"><img src="img/map.png" alt="home"/></a></li>
              <li id="ajout" class="ongletsYounite"><a href="#" title="add"><img src="img/ajout.png" alt="ajout"/></a></li>
              <li id="person" class="ongletsYounite"><a href="#" title="profile"><img src="img/profile.png" alt="profile"/></a></li>
            </ul>
          </div> <!-- fin .fluidYounite-->
        </nav>
    </div> <!-- fin .containerYounite -->

<!-- FORM AJOUT -->

<div id="form_add">
  <div class="error" style="color:#FF0000;"></div>

   <form id="form_spot" class="collapse-delete" method="post" action="addpost.php" enctype="multipart/form-data">

    <input type="submit" class="button-post valid" value=""/>
    <a class="button-post delete cancel" href="#"></a>

    <div class="form-group form-inline">
        <div class="champ">
          <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Adress" size="45">
        </div>
    </div>

    <div class="form-group form-inline">
      <div class="champ">
        <input type="text" class="form-control" id="inputTitle" name="inputTitle" placeholder="Title" required="">
      </div>
    </div>


    <div class="form-group form-inline">
      <div class="champ">
        <textarea class="form-control" id="inputContent" name="inputContent" placeholder="Content" rows="10"></textarea>
      </div>
    </div>

    <div class="form-group form-inline">
      <div class="champ">
        <label for="inputPhoto">Photo</label>
      </div>    
      <div class="champ">
        <input type="file" class="form-control" id="inputPhoto" name="inputPhoto">
      </div>
    </div>

    <div class="form-group form-inline">
      <div class="champ">
        <label for="inputTags">Category</label>
      </div>
      <div class="champ">
        <select class="form-control" id="inputTags" name="inputTags">
          <option value="Nature"> Nature </option>
          <option value="Culture"> Culture </option>
          <option value="SecretSpot"> Secret Spot </option>

        </select>
        <input type="text" class="form-control" id="inputLat" name="inputLat" placeholder="Lat" required="" size="10">
        <input type="text" class="form-control" id="inputLng" name="inputLng" placeholder="Lng" required="" size="10">

      </div>
    </div>

  </form>
</div>

<!-- FIN FORM AJOUT --> 

<div class="viewpost_div"></div>

<!-- VIEW POST -->

<!-- -->


<script type="text/javascript">

// MAPBOX

L.mapbox.accessToken = 'pk.eyJ1Ijoic29oZWlsc2siLCJhIjoiNDA1NDkzMDgzMDFiNGE4ZTE5Zjc0ODExYmNiNWQ4ODMifQ.mrohOcL12LhO6DHHd1U05A';

 

    var map = L.mapbox.map('map', 'soheilsk.5ce7bce8', {
        maxZoom : 19,
        minZoom : 2,
        worldCopyJump : true
    })
    
    
    // Vue du plan lorsqu'on arrive
    .setView([0, 0], 3)

    // Partager le plan
    .addControl(L.mapbox.shareControl()

    );

    // Regrouper les markers

// map.setMaxBounds(map.getBounds());
  
  map.setMaxBounds([[85, -180],[-85, 180]]);

 $.getJSON("listposts.php", function(data){



    for (var i=0; i<data.length; i++){

      var element = data[i];



                if (
                    element.tags == "Nature"
                  )
                  {
                    var myIcon = L.icon({
                      iconUrl: 'img/nature-icon.png',
                      iconSize: [30, 47],
                      iconAnchor: [15, 47],
                      popupAnchor: [0, -47],
                    });          

                  }
                else if (
                    element.tags == "Culture"
                  )
                {

                  var myIcon = L.icon({
                      iconUrl: 'img/culture-icon.png',
                      iconSize: [30, 47],
                      iconAnchor: [15, 47],
                      popupAnchor: [0, -47],
                    });

                }

                else if (
                    element.tags == "SecretSpot"
                  )

                {

                  var myIcon = L.icon({
                      iconUrl: 'img/secret-icon.png',
                      iconSize: [30, 47],
                      iconAnchor: [15, 47],
                      popupAnchor: [0, -47],
                    });

                }

                else{

                  var myIcon = L.icon({
                      iconUrl: 'img/normal-icon.png',
                      iconSize: [30, 47],
                      iconAnchor: [15, 47],
                      popupAnchor: [0, -47],
                    });

                }

      var myMarker = L.marker(
      [parseFloat(element.lat) , parseFloat(element.lng)],
        {
           title : element.title,
           icon : myIcon
        }
      );


    myMarker.bindPopup("<img src='timthumb.php?src="+ element.photo +"&h=70&w=130'><hr class='pop_hr'> "+ element.title + "<br/><a class='viewpost_page'"+ " id_post=" + element.id + " href='#'></a>");

    myMarker.addTo(map);
    }


      $('#map').on('click','.viewpost_page', function(){

        $('#form_add').fadeOut();
        element_id = $(this).attr('id_post');
        $.ajax({
          url: "viewpost?pid="+ element_id,
          success: function(data){
            $('.viewpost_div').html(data);

        }

    });
  });
});

// ******************************************************************************************************************//
// Ajout de pins sur le plan

    var geolocate = document.getElementById('geolocate');

    var maPosition = L.mapbox.featureLayer().addTo(map);

// ******************************************************************************************************************//
// geolocation
if (!navigator.geolocation) {
    geolocate.innerHTML = 'Vous êtes dans un endroit très pommé :)';
} else {
    geolocate.onclick = function (e) {
        e.preventDefault();
        e.stopPropagation();
        map.locate();
    };
}

// Une fois la position récupérée, on zoom et on centre la map
// Et dessus, on ajoute un pin.
map.on('locationfound', function(e) {
    map.fitBounds(e.bounds);

    maPosition.setGeoJSON({
        type: 'Feature',
        geometry: {
            type: 'Point',
            coordinates: [e.latlng.lng, e.latlng.lat]
        },
        properties: {
            'title': 'Hey, Here I am !',
            'marker-color': '#2AC9C4',
            'marker-symbol': 'star'
        }
    });

    // On cache le button de géolocalisation
    // geolocate.parentNode.removeChild(geolocate);
});

// Si la personne choisi de ne pas donner sa géolocalisation
// On affiche un message d'erreur.
map.on('locationerror', function() {
    geolocate.innerHTML = 'Allez laisse nous voir ou t\'es !';
});

 var carte = {
      Younite: L.mapbox.tileLayer('soheilsk.5ce7bce8'),

      EcoLight: L.mapbox.tileLayer('soheilsk.aa042d14')
  };

  carte.Younite.addTo(map); 
  L.control.layers(carte).addTo(map);


// ******************************************************************************************************************//
// Ne fonctionne pas sous IE 8
// Canvas filtre sur le plan
var canvasTiles = L.tileLayer.canvas();

canvasTiles.drawTile = function(canvas, tilePoint, zoom) {
    var ctx = canvas.getContext('2d');
      ctx.fillText(tilePoint.toString(), 50, 50);
      ctx.globalAlpha = 0.2;
      ctx.fillStyle = '#aaa';
      ctx.fillRect(10, 10, 246, 246);
};

canvasTiles.addTo(map);


// ******************************************************************************************************************//

</script>


          
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script> 
<script>
  // This example displays an address form, using the autocomplete feature
  // of the Google Places API to help users fill in the information.
  
  var placeSearch, autocomplete;
  var componentForm = {
    street_number: 'short_name',
    route: 'long_name',
    locality: 'long_name',
//    administrative_area_level_1: 'short_name',
    country: 'long_name',
    postal_code: 'short_name'
  };
  var componentMapToYounite_ = {
    street_number: 'inputNumber',
    route: 'inputStreet',
    locality: 'inputCity',
//    administrative_area_level_1: 'short_name',
    country: 'inputCountry',
    postal_code: 'inputPostalCode'
  };
  function placeAutocompleteInitialize_() {
    // Create the autocomplete object, restricting the search
    // to geographical location types.
    autocomplete = new google.maps.places.Autocomplete(
        /** @type {HTMLInputElement} */(document.getElementById('inputAddress')),
        { types: ['geocode'] });
    // When the user selects an address from the dropdown,
    // populate the address fields in the form.
    google.maps.event.addListener(autocomplete, 'place_changed', function() {

      fillInAddress_();
    });
  }

  // [START region_fillform]
  function fillInAddress_() {

    // Get the place details from the autocomplete object.
    var place = autocomplete.getPlace();


    $("#inputLat").val(place.geometry.location.lat());
    $("#inputLng").val(place.geometry.location.lng());

    if(map){

    $.getJSON("listposts.php", function(data){

       

              for (var i=0; i<data.length; i++){

                var element = data[i];

                 if (
                    element.tags == "Nature"
                  )
                  {
                    var myIcon = L.icon({
                      iconUrl: 'img/nature-icon.png',
                      iconSize: [30, 47],
                      iconAnchor: [15, 47],
                      popupAnchor: [0, -47],
                    });          

                  }
                else if (
                    element.tags == "Culture"
                  )
                {

                  var myIcon = L.icon({
                      iconUrl: 'img/culture-icon.png',
                      iconSize: [30, 47],
                      iconAnchor: [15, 47],
                      popupAnchor: [0, -47],
                    });

                }

                else if (
                    element.tags == "SecretSpot"
                  )

                {

                  var myIcon = L.icon({
                      iconUrl: 'img/secret-icon.png',
                      iconSize: [30, 47],
                      iconAnchor: [15, 47],
                      popupAnchor: [0, -47],
                    });

                }

                else{

                  var myIcon = L.icon({
                      iconUrl: 'img/normal-icon.png',
                      iconSize: [30, 47],
                      iconAnchor: [15, 47],
                      popupAnchor: [0, -47],
                    });

                }
                var myMarker = L.marker(
                  [parseFloat(element.lat) , parseFloat(element.lng)],
                  {
                     title : element.title,
                     icon : myIcon
                  }
                );

              myMarker.bindPopup("<img src='timthumb.php?src="+ element.photo +"&h=70&w=130'> <a class='viewpost_page' href='viewpost?pid="+ element.id +"'><hr class='pop_hr'>"+ element.title +"</a>");

              myMarker.addTo(map);
              }

    });
}


    
    // Get each component of the address from the place details
    // and fill the corresponding field on the form.
    for (var i = 0; i < place.address_components.length; i++) {
      var addressType = place.address_components[i].types[0];
      if (componentForm[addressType]) {
        var val = place.address_components[i][componentForm[addressType]];

      }
    }



  }
  // [END region_fillform]


  placeAutocompleteInitialize_();


  $('#form_spot').submit(function(){
    var el      = $(this),
      action    = $(el).attr('action'),
      method    = $(el).attr('method'),
      formData = new FormData($(this)[0]);
        
    if($(el).attr('enctype'))
    {
      var files     = $(el).find('input[type="file"]')[0].files;
      if(files.length > 0){
        var file = files[0];
        formData.append('photo', file);
      }
    }


      $.ajax({
        url: action,
        data: formData,
        // $(this).serialize() pour les formulaires sans photos :)
        contentType: false,
        processData: false,
        cache: false,
        async: false,
        type: method,
        dataType: "json",
        success: function(data){


          if(data.errors) {
            $('.error').html('');
            $.each(data.errors,function(key,val){
              $('.error').append(val+"<br />");
            });
          }
          else{
            location.reload();
          }
        }
      
      });
      return false;
  });





</script>




        <!-- SCRIPTS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>

</body>
</html>
