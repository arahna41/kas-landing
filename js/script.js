/* Initialise carousel */
const mediaQuery = window.matchMedia("(max-width: 767px)");
if (mediaQuery.matches) {
  var myCarousel = new Carousel(document.querySelector(".carousel"), {
    preload: 2,
    infinite: false,
    center: true,
    fill: true,
    slidesPerPage: 1,
  });
}
