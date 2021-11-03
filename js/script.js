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


const btn = document.querySelector(".button");
const content = document.querySelector(".fixed");

btn.addEventListener("click", btnClick);

function btnClick() {
    console.log(content.classList);
    content.classList.toggle("fixed_none");
}

const cross = document.querySelector(".close");

cross.addEventListener("click", btnClick);

function crossClick() {
    console.log(content.classList);
    content.classList.add("fixed_none");
}