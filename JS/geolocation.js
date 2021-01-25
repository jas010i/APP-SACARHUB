





let map, heatmap;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    zoom: 10,
    center: { lat: 29.4241, lng: -98.4936 },
    mapId: "6cbaf94f194ffc7a",
  });

  
  heatmap = new google.maps.visualization.HeatmapLayer({
    data: getPoints(),
    map: map,
  });
}

function toggleHeatmap() {
  heatmap.setMap(heatmap.getMap() ? null : map);
}

function changeGradient() {
  const gradient = [
    "rgba(0, 255, 255, 0)",
    "rgba(0, 255, 255, 1)",
    "rgba(0, 191, 255, 1)",
    "rgba(0, 127, 255, 1)",
    "rgba(0, 63, 255, 1)",
    "rgba(0, 0, 255, 1)",
    "rgba(0, 0, 223, 1)",
    "rgba(0, 0, 191, 1)",
    "rgba(0, 0, 159, 1)",
    "rgba(0, 0, 127, 1)",
    "rgba(63, 0, 91, 1)",
    "rgba(127, 0, 63, 1)",
    "rgba(191, 0, 31, 1)",
    "rgba(255, 0, 0, 1)",
  ];
  heatmap.set("gradient", heatmap.get("gradient") ? null : gradient);
}

function changeRadius() {
  heatmap.set("radius", heatmap.get("radius") ? null : 20);
}

function changeOpacity() {
  heatmap.set("opacity", heatmap.get("opacity") ? null : 0.2);
}


function getPoints() {
  return [
    new google.maps.LatLng(29.4241, -98.4936),
    new google.maps.LatLng(29.4241, -98.4936),
    new google.maps.LatLng(29.4241, -98.4936),
    new google.maps.LatLng(29.4241, -98.4936),
    new google.maps.LatLng(29.4241, -98.4936),
    new google.maps.LatLng(29.4241, -98.4936),
    new google.maps.LatLng(29.4241, -98.4936),
    new google.maps.LatLng(29.4241, -98.4936),
    new google.maps.LatLng(29.589892108084058, -98.60783367084859),
    new google.maps.LatLng(29.589892108084058, -98.60783367084859),
    new google.maps.LatLng(29.589892108084058, -98.60783367084859),
    new google.maps.LatLng(29.589892108084058, -98.60783367084859),
    new google.maps.LatLng(29.589892108084058, -98.60783367084859),
    new google.maps.LatLng(29.48052575084171, -98.60368512947191),
    new google.maps.LatLng(29.48052575084171, -98.60368512947191),
    new google.maps.LatLng(29.48052575084171, -98.60368512947191),
    new google.maps.LatLng(29.48052575084171, -98.60368512947191),
    new google.maps.LatLng(29.48052575084171, -98.60368512947191),
    new google.maps.LatLng(29.48052575084171, -98.60368512947191),
    new google.maps.LatLng(29.48052575084171, -98.60368512947191),
    new google.maps.LatLng(29.48052575084171, -98.60368512947191),
    new google.maps.LatLng(29.48052575084171, -98.60368512947191),
    new google.maps.LatLng(29.48052575084171, -98.60368512947191),
    new google.maps.LatLng(29.48052575084171, -98.60368512947191),
  ];
}