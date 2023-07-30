function toggleInfoBox() {
  var infoBox = document.querySelector('.info-box');
  infoBox.style.display = infoBox.style.display === 'none' ? 'block' : 'none';
}

function toggleNavbar() {
  var navbarLinks = document.getElementById('navbar-links');
  navbarLinks.classList.toggle('active');
}





// Add event listeners to close the navigation bar when a link is clicked
var navbarLinks = document.querySelectorAll('#navbar-links li a');
navbarLinks.forEach(function (link) {
  link.addEventListener('click', function () {
    var navbar = document.querySelector('.navbar');
    navbar.classList.remove('active');
  });
});

