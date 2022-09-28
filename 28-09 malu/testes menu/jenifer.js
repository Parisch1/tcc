let menuToggle = document.querySelector('.menu-toggle');
let navigation = document.querySelector('.navigation-menu');

menuToggle.onclick = function() {
  navigation.classList.toggle('active');
}