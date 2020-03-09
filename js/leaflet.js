
//lien Leaflet pour afficher la carte
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoibW9yaWxsb243NiIsImEiOiJjanB3ZnE1ZWswdGpmNDNtbXhnczY4Z2RlIn0.jllLxiQNME56CdtUOnBtBw'
}).addTo(carteBrehat.Mymap);




var marker = L.marker([48.843467, -2.999505]).addTo(carteBrehat.Mymap);


var popup = L.popup()
    .setLatLng([48.843467, -2.999505])
    .setContent("la maison du tertre Briand")
    

marker.bindPopup("la maison du tertre Briand").openPopup();




var marker = L.marker([48.821886, -3.013983]).addTo(carteBrehat.Mymap);


var popup = L.popup()
    .setLatLng([48.821886, -3.013983])
    .setContent("Vedettes de Bréhat")
    

marker.bindPopup("Vedettes de Bréhat").openPopup();






var marker = L.marker([48.836244, -3.009182]).addTo(carteBrehat.Mymap);


var popup = L.popup()
    .setLatLng([48.836244, -3.009182])
    .setContent("zone d'arrivée des vedettes")
    

marker.bindPopup("zone d'arrivée des vedettes").openPopup();