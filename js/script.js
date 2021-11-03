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

var linkNav = document.querySelectorAll('[href^="#"]'),
    V = 0.2; 
for (var i = 0; i < linkNav.length; i++) {
    linkNav[i].addEventListener('click', function(e) { 
        e.preventDefault(); 
        var w = window.pageYOffset,  
            hash = this.href.replace(/[^#]*(.*)/, '$1'); 
        t = document.querySelector(hash).getBoundingClientRect().top, 
            start = null;
        requestAnimationFrame(step); 
        function step(time) {
            if (start === null) start = time;
            var progress = time - start,
                r = (t < 0 ? Math.max(w - progress/V, w + t) : Math.min(w + progress/V, w + t));
            window.scrollTo(0,r);
            if (r != w + t) {
                requestAnimationFrame(step)
            } else {
                location.hash = hash 
            }
        }
    }, false);
}

const btn = document.querySelector(".button");
const content = document.querySelector(".fixed");

btn.addEventListener("click", btnClick);

function btnClick() {
    console.log(content.classList);
    content.classList.toggle("fixed_none");
}

const cross = document.querySelector(".close");

cross.addEventListener("click", crossClick);

function crossClick() {
    console.log(content.classList);
    content.classList.add("fixed_none");
}

const field = document.querySelector(".fixed");

field.addEventListener("click", fieldClick);

function fieldClick() {
    console.log(content.classList);
    content.classList.add("fixed_none");
}


