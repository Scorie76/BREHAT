
// Objet carte Bréhat Mapbox
class Carte{
    constructor(mapid , Mymap){
        this.mapid = mapid;
        this.Mymap =  Mymap;
    }
}

let carteBrehat = new Carte (
        document.getElementById('mapid'),
        L.map('mapid').setView([ 48.8434, -3.0012289], 13),
);












