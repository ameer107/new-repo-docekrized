var mapdiv = document.getElementById('mapid');

mapdiv.style.height = '300px';
mapdiv.style.width = '300px';

/////
var map = L.map('mapid').setView([22.2869,114.1529], 16);

var apikey = '584b2fa686f14ba283874318b3b8d6b0'
L.tileLayer('https://api.hkmapservice.gov.hk/osm/xyz/basemap/WGS84/tile/{z}/{x}/{y}.png?key=' + apikey, {
  attribution: "<a href='https://api.portal.hkmapservice.gov.hk/disclaimer' target='_blank'>&copy; Map from Lands Department <img src='https://api.hkmapservice.gov.hk/mapapi/landsdlogo.jpg' style='width:25px;height:25px'/></a>",
  maxZoom: 19,
  id: 'APIKEY'
}).addTo(map);


L.tileLayer('https://api.hkmapservice.gov.hk/osm/xyz/label-en/WGS84/tile/{z}/{x}/{y}.png?key=' + apikey, {
  maxZoom: 19,
  id: 'APIKEY'
}).addTo(map);

L.marker([22.2869,114.1529]).addTo(map);
