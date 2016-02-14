/**
 * Created by Oualid on 12.02.2016.
 */
function scrollIntro() {
    $('html, body').animate({ scrollTop: $('#intro').offset().top }, 'slow');
}
function scrollFirst() {
    $('html, body').animate({ scrollTop: $('#first').offset().top }, 'slow');
}
function scrollSecond() {
    $('html, body').animate({ scrollTop: $('#second').offset().top }, 'slow');
}
function scrollThird() {
    $('html, body').animate({ scrollTop: $('#third').offset().top }, 'slow');
}
function setUserInfos() {

    var vorname = document.getElementById("vorname").value;
    document.getElementById("welcomeVorname").innerHTML = vorname;
    var nachname = document.getElementById("nachname").value;
    document.getElementById("welcomeNachname").innerHTML = nachname;
    var uni = document.getElementById("universitaet").value;
    document.getElementById("welcomeUni").innerHTML = uni;
}

function setFaecherInfos() {

    var fach = document.getElementById("fach").value;
    if (fach != '') {
        $('#faecherListe').append('<li>' + fach + '</li>').listview('refresh');
    }}

navigator.geolocation.getCurrentPosition(function(position) {

    var crd = position.coords;

    var map = L.map('map').setView([crd.latitude, crd.longitude], 13);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var circle = L.circle([50.941358, 6.958307], 100, {
        color: '#2D90C1',
        fillColor: '#2D90C1',
        fillOpacity: 0.5
    }).addTo(map).bindPopup('Kölner Dom');


    L.marker([crd.latitude, crd.longitude]).addTo(map)
        .bindPopup('Hier bist du!')
        .openPopup();




});