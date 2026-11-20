// CAROUSEL

// test function to get product (experiment to understand javascript and objects)
function getproductVar(productNum) {
  for (let index = 0; index < products.length; index++) {
    if (index === productNum - 1) {
      let slides = {};
      return (slides[`slide_${productNum}`] = products[index]);
    }
  }
  return "Could not find product-index";
}
console.log(products[0]);

// carousel move with buttons, desctop view
// declare variables for targeted elements/nodes
const rightArrow = document.querySelector(".right-arrow");
const leftArrow = document.querySelector(".left-arrow");
const slider = document.querySelector(".slides-container");
let slide = document.querySelector("figure");

index = 0;

function moveSliderRight() {
  let width = slide.offsetWidth + 16;

  slider.style.transitionDuration = ".5s";
  slider.style.transitionTimingFunction = "ease-out";

  index++;

  if (index < products.length - 2) {
    slider.style.transform = "translateX(-" + width * index + "px)";
  } else if (index === products.length - 2) {
    slider.style.transform = "translateX(-" + width * (index - 0.3) + "px)";
  }
}

rightArrow.addEventListener("click", moveSliderRight);

function moveSliderLeft() {
  let width = slide.offsetWidth + 16;

  slider.style.transitionDuration = ".5s";
  slider.style.transitionTimingFunction = "ease-out";

  index--;
  if (index > 0) {
    slider.style.transform = "translateX(-" + width * index + "px)";
  } else {
    slider.style.transform = "translateX(-" + width * 0 + "px)";
  }
}
leftArrow.addEventListener("click", moveSliderLeft);
