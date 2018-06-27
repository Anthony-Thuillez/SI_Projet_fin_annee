var burgerOpen = document.querySelector(".header-tablette-burger");
var topContainer = document.querySelector(".header");
var crossClosed = document.querySelector('.header-redCross');

burgerOpen.addEventListener('click', function() {
  topContainer.style.display = "block";
  topContainer.style.position = "absolute";
  topContainer.style.zIndex = "1";
  topContainer.style.transition = "width 2s"
})
crossClosed.addEventListener('click', function() {
  topContainer.style.display = "none";
})
