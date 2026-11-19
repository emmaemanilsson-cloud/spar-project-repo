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

// declare variables for targeted elements/nodes
const rightArrow = document.querySelector(".right-arrow");
const leftArrow = document.querySelector(".left-arrow");
const slider = document.querySelector(".slides-container");
let slide = document.querySelector("figure");

index = 1;

// movement right, desctop
// TODO: how distinguish movement desctop from mobile? Do I add it to the same code-block, with more if-conditionals?
function moveSliderRight() {
  // declare the width of one slide/image
  let width = slide.offsetWidth + 16;
  // transition-styles
  slider.style.transitionDuration = ".6s";
  slider.style.transitionTimingFunction = "ease-in-out";
  // if-conditionals to count what index is active and width-change for each click
  if (index < products.length - 2) {
    slider.style.transform = "translateX(-" + width * index + "px)";
  } else if (index === products.length - 2) {
    // TODO: calculate in detail how big portion of the half-hidden slide that will show and ultimately decide the value of the last transition. (How do I pin-point it dynamically?)
    slider.style.transform = "translateX(-" + width * (index - 0.3) + "px)";
  }

  index++;
}

rightArrow.addEventListener("click", moveSliderRight);
