/* Initialise carousel */
$(window).on("load", function () {
  $(".owl-carousel").owlCarousel({
    margin: 12,
    stagePadding: 20,
    dotsEach: true,
    stagePadding:20,
    responsive: {
      0: {
        items: 1,
      },
      500: {
        items: 2,
      },
    },
  });
});

var linkNav = document.querySelectorAll('[href^="#"]'),
  V = 0.2;
for (var i = 0; i < linkNav.length; i++) {
  linkNav[i].addEventListener(
    "click",
    function (e) {
      e.preventDefault();
      var w = window.pageYOffset,
        hash = this.href.replace(/[^#]*(.*)/, "$1");
      (t = document.querySelector(hash).getBoundingClientRect().top),
        (start = null);
      requestAnimationFrame(step);
      function step(time) {
        if (start === null) start = time;
        var progress = time - start,
          r =
            t < 0
              ? Math.max(w - progress / V, w + t)
              : Math.min(w + progress / V, w + t);
        window.scrollTo(0, r);
        if (r != w + t) {
          requestAnimationFrame(step);
        } else {
          location.hash = hash;
        }
      }
    },
    false
  );
}

/*To close navigation on click*/
let elements = document.querySelectorAll(".burger_menu_link");

for (let elem of elements) {
  elem.addEventListener("click", navLinkClick);
  function navLinkClick() {
    document.getElementById("checkbox").checked = false;
  }
}


const btn = document.querySelector(".button");
const content = document.querySelector(".fixed");
btn.addEventListener("click", btnClick);
function btnClick() {
  content.classList.toggle("fixed_none");
}

const cross = document.querySelector(".close");
cross.addEventListener("click", crossClick);
function crossClick() {
  content.classList.add("fixed_none");
}

const field = document.querySelector(".fixed");
field.addEventListener("click", fieldClick);
function fieldClick() {
  content.classList.add("fixed_none");
}
