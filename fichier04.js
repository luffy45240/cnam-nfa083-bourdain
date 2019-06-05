/**/

/* VARIABLES ======================================= */

    var $latitude2=document.getElementById('latitude2').innerHTML; 
    var $longitude2=document.getElementById('longitude2').innerHTML;
    var $secteur2=document.getElementById('secteur2').innerHTML*250;
    var $logo2='img/'+document.getElementById('logo2').innerHTML+'.png';
    
    var $latitude3=47.88; var $longitude3=1.9;
    var $zoom=12;
    var $map_id='map'; /* id de la balise HTML pour insertion de la map : */
    var $pointeur1_texte = "<p><strong style='color:blue' >Pointeur1</strong><br /> Ex. localisation avec <strong>Open Street Map</strong></p>";
    var $pointeur2_texte = "<p>Pointeur 2</p>";
    var $texte_legal = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';


    if(document.getElementById($map_id)!= null){ /* il existe une balise HTML avec l'identifiant recherché */
    
/* CARTE CREATION =================================== */
      var $mymap = L.map($map_id).setView([document.getElementById('latitude1').innerHTML, 
                                           document.getElementById('longitude1').innerHTML], $zoom);
      L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: $texte_legal,
        minZoom: 1,
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoiZW5naGF6YXIiLCJhIjoiY2pxaHJsNGJ3MDc2cjN4cG9jcWJ3aGF5dSJ9.Z8jjJfV6dkobuY-ZdbcaCg'
      }).addTo($mymap);

      var $compteur=1;
      while(document.getElementById('latitude'+$compteur) != null){
    
        /* POINTEUR 1 CREATION =============================== */
          var $pointeur_icon = L.icon({
            iconUrl: 'img/'+document.getElementById('logo'+$compteur).innerHTML+'.png',
            iconSize: [50, 50],
            iconAnchor: [25, 50],
            popupAnchor: [-3, -76]
          });

          var $pointeur = L.marker(
          [document.getElementById('latitude'+$compteur).innerHTML, document.getElementById('longitude'+$compteur).innerHTML],
          {icon:$pointeur_icon}
          ).addTo($mymap); /* creation du pointeur */

          /* CERCLE 3 CREATION =============================== */
            var circle1 = L.circle(
              [document.getElementById('latitude'+$compteur).innerHTML, document.getElementById('longitude'+$compteur).innerHTML],
              {  color: 'blue',            /* couleur bordure    */
                fillColor: 'red',         /* couleur remplissage */
                fillOpacity: 0.3,         /* transparence        */
                radius: document.getElementById('secteur'+$compteur).innerHTML*250         /* rayon du cercle     */
              }
            ).addTo($mymap);
        
          $compteur++;
      } /* fin while */
    } /* fin if */

  
/* tuto : https://leafletjs.com/examples/quick-start/ */