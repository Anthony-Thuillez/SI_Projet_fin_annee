var headerFixeContainer = document.querySelector('.headerFixeContainer');

window.addEventListener('wheel', function(event) {
  console.log(event.deltaY);
  if (event.deltaY > 0) {
    // headerFixeContainer.classList.add("is-not-active");
    headerFixeContainer.style.marginTop = "-50px";

  } else if (event.deltaY < 0) {
    // headerFixeContainer.classList.remove("is-not-active");
    headerFixeContainer.style.marginTop = "";

})
