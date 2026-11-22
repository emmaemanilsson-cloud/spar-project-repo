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
const slide = document.querySelector("figure");
const section = document.querySelector(".section-carousel");

// declare variables for calculate and declare movement-ranges
// index and position
let index = 0;
let position = 0;

// widths and ranges
const slideGap = 16;
const widthSlide = slide.offsetWidth;
const widthSlider =
  widthSlide * products.length + (products.length - 1) * slideGap;
const widthView = view.offsetWidth;
const slideStep = widthSlide + slideGap;
const transportRange = widthSlider - widthView;

// number of slides in view
const numSlidesInView = widthView / slideStep;

// movement right button
function moveSliderRight() {
  // transition-styles
  slider.style.transitionDuration = ".5s";
  slider.style.transitionTimingFunction = "ease-out";
  console.log("index:", index);
  console.log("position:", position);
  console.log("transportRange:", transportRange);

  if (position >= transportRange) {
    rightArrow.disabled = true;
    return;
  }

  // check if below max allowed transport-range => moves one slide-width (+gap)
  if (position + slideStep < transportRange) {
    leftArrow.disabled = false;
    position += slideStep;
    index++;
    slider.style.transform = "translateX(-" + position + "px)";
    // if a step would exceed max allowed transport-range => position at the rigthmost edge
  } else if (position + slideStep > transportRange) {
    position = transportRange;
    slider.style.transform = "translateX(-" + transportRange + "px)";
    rightArrow.disabled = true;
    return;
    // section.style.marginLeft = 0;
  }
}
// implement click to right-button
rightArrow.addEventListener("click", moveSliderRight);

// movement left button
function moveSliderLeft() {
  slider.style.transitionDuration = ".5s";
  slider.style.transitionTimingFunction = "ease-out";

  console.log("index:", index);
  console.log("position:", position);
  console.log("transportRange:", transportRange);

  // if position at rightmost edge => return to previous position (which is less than i slides width)
  if (position === transportRange) {
    index--;
    position -= transportRange - slideStep * index;
    slider.style.transform = "translateX(-" + position + "px)";
    rightArrow.disabled = false;
    // style section margin to change depending on where/which direction your moving in carousel?
    // section.style.marginRight = 0;
    // if between start position and rightmost edge => move one slide-width to left
  } else if (
    position - slideStep > 0 &&
    position - slideStep < transportRange
  ) {
    rightArrow.disabled = false;
    position -= slideStep;
    index--;
    slider.style.transform = "translateX(-" + position + "px)";
    // if at startposition => reset index and position to 0
  } else if (position - slideStep === 0) {
    position = 0;
    index = 0;
    leftArrow.disabled = true;
    slider.style.transform = "translateX(-" + position + "px)";
  }
}
// implement click to left-button
leftArrow.addEventListener("click", moveSliderLeft);

// Add touch-events (for mobile)
let startTouch = 0;
let endTouch = 0;

function handleTouchStart(event) {
  startTouch = event.touches[0].clientX;
  console.log("start: " + startTouch);
}

function handleTouchEnd(event) {
  endTouch = event.changedTouches[0].clientX;
  let touchDistance = startTouch - endTouch;
  console.log(touchDistance);
  if (touchDistance > 50) {
    moveSliderRight();
  }
  if (touchDistance < -50) {
    moveSliderLeft();
  }
  console.log("end: " + endTouch);
}

view.addEventListener("touchstart", handleTouchStart);
view.addEventListener("touchend", handleTouchEnd);
