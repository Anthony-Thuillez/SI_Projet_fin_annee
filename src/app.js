var burger = document.querySelector('.burger__container__style');
var nav = document.querySelector('.burger__mainNav');

burger.addEventListener('click', function() {
  if (nav.style.display === "none") {
    nav.style.display = 'block'
  } else {
    nav.style.display = 'none'
  }
})