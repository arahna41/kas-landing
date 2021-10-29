/* Initialise carousel */
const myCarousel = new Carousel(document.querySelector(".carousel"), {
  preload: 2,
  infinite: false,
  center: true,
  fill: true,
  slidesPerPage : 1,
});

/* Customize Fancybox */
Fancybox.bind('[data-fancybox="gallery"]', {
  Thumbs: false,
  Toolbar: false,
  closeButton: "top",
  center: true,
  infinite: false,
  slidesPerPage : 1,
  Carousel: {
    on: {
      change: (that) => {
        mainCarousel.slideTo(mainCarousel.findPageForSlide(that.page), {
          friction: 0,
        });
      },
    },
  },
});