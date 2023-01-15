function initMap() {
  new google.maps.Map(document.getElementById("map"), {
    mapId: "52dcb2d4339dcfed",
    center: { lat: 48.85, lng: 2.35 },
    zoom: 12,
  });
}

window.initMap = initMap;