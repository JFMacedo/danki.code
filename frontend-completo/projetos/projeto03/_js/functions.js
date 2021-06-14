window.onload = function() {
  var map;
  
  function initialize() {
    var mapProp = {
      center: new google.maps.LatLng(-23.0507862, -50.2333173),
      scrollWhell: false,
      zoom: 15,
      MapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("map"), mapProp)
  }

  function addMarker(lat, long, icon, content) {
    var latLng = {"lat": lat, "lng": long}
    var marker = new google.maps.Marker({
      position: latLng,
      map: map,
      icon: icon,
    })

    var infoWindow = new google.maps.InfoWindow({
      content: content,
      maxWidth: 200,
      pixelOffset: new google.maps.Size(0, 20)
    })

    google.maps.event.addListener(marker,"click", function(){
      infoWindow.open(map, marker)
    })
  }

  initialize()

  var conteudo = "<p style='color: #000000; font-weight: bold;'>Tigers</p><p style='color: #000000;'>Rua São Paulo, 505</p>"
  addMarker(-23.049035, -50.230613, '', conteudo)
}