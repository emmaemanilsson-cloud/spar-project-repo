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
const view = document.querySelector(".carousel-viewer");
const slider = document.querySelector(".slides-container");
let slide = document.querySelector("figure");

index = 0;

let slideGap = 16;
let widthSlide = slide.offsetWidth;
let widthSlider =
  widthSlide * products.length + (products.length - 1) * slideGap;
let widthView = view.offsetWidth;
let slideStep = widthSlide + slideGap;
let position = 0;

console.log(widthSlider / widthView);
console.log((widthView + slideGap) / slideStep);

let transportRange = widthSlider - widthView;
let numSlidesInView = widthView / slideStep;

function moveSliderRight() {
  slider.style.transitionDuration = ".5s";
  slider.style.transitionTimingFunction = "ease-out";

  console.log("before right: " + index);

  if (position + slideStep < transportRange) {
    leftArrow.disabled = false;
    position += slideStep;
    index++;
    slider.style.transform = "translateX(-" + position + "px)";
  } else if (position + slideStep > transportRange) {
    slider.style.transform = "translateX(-" + transportRange + "px";
    rightArrow.disabled = true;
  }
}
rightArrow.addEventListener("click", moveSliderRight);

// TODO: make left movement dynamic
function moveSliderLeft() {
  slider.style.transitionDuration = ".5s";
  slider.style.transitionTimingFunction = "ease-out";
  console.log("before right: " + index);

  if (position - slideStep < transportRange) {
    rightArrow.disabled = false;
    position -= slideStep;
    index--;
    slider.style.transform = "translateX(-" + position + "px)";
  } else if (position - slideStep > 0) {
    rightArrow.disabled = false;
    position -= slideStep;
    index--;
    slider.style.transform = "translateX(-" + position + "px)";
  } else if (position <= 0) {
    leftArrow.disabled = true;
    slider.style.transform = "translateX(-" + position + "px";
  }
}

leftArrow.addEventListener("click", moveSliderLeft);
