console.log("Fichier settings chargé");

var overlay = document.getElementById('overlay');
var menu = document.getElementById('hiddenMenu');
var menuoverlay = document.getElementById('hiddenMenuOverlay')

var moon = document.getElementById('moon');
var sun = document.getElementById('sun');

var param = document.getElementById('settingsCog');

var switch_theme = document.getElementById('switch_theme');

param.addEventListener('click', function() {
    menuoverlay.classList.add('show')
    param.style.transform = "rotate(-360deg)"
})

overlay.addEventListener('click', function() {
    menuoverlay.classList.remove('show')
    param.style.transform = "rotate(360deg)"
})

switch_theme.addEventListener('click', function() {
    moon.classList.toggle('visible')
    sun.classList.toggle('visible')
    if (sun.classList.contains('visible')) {
        alert("Oops... Il semblerait qu'il y ait manqué de temps pour le thème clair..!");
    }
})

