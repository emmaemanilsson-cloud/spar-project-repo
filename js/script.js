// CAROUSEL

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
let slideGap = 16;
let widthSlide = slide.offsetWidth;
let widthSlider =
  widthSlide * products.length + (products.length - 1) * slideGap;
let widthView = view.offsetWidth;
let slideStep = widthSlide + slideGap;
let transportRange = widthSlider - widthView;

// number of slides in view
let numSlidesInView = widthView / slideStep;

// movement right button
function moveSliderRight() {
  calculations();
  // transition-styles
  slider.style.transitionDuration = ".4s";
  slider.style.transitionTimingFunction = "ease-out";
  // update slide-width
  widthSlide = slide.offsetWidth;

  // if at rightmost edge
  if (position >= transportRange) {
    rightArrow.disabled = true;
    return;
  }

  // check if below max allowed transport-range => moves one slide-width (+gap)
  if (position + slideStep < transportRange) {
    index = position / (widthView * slideGap);
    console.log("index left before: " + index);
    console.log("position left before: " + position);
    position += slideStep;
    index++;
    slider.style.transform = "translateX(-" + position + "px)";
    console.log("left after: " + index);
    console.log("position left after: " + position);

    leftArrow.style.opacity = "1";
    leftArrow.disabled = false;
    // if a step would exceed max allowed transport-range => position at the rigthmost edge
  } else if (position + slideStep >= transportRange) {
    index = position / (widthView * slideGap);
    console.log("index left before: " + index);
    console.log("position left before: " + position);
    position = transportRange;
    index++;
    slider.style.transform = "translateX(-" + transportRange + "px)";
    console.log("Indexleft after: " + index);
    console.log("position left after: " + position);

    rightArrow.disabled = true;
    rightArrow.style.opacity = "0.5";
    return;
  }
}

// implement click right-button
rightArrow.addEventListener("click", moveSliderRight);

// movement left button
function moveSliderLeft() {
  calculations();

  slider.style.transitionDuration = ".4s";
  slider.style.transitionTimingFunction = "ease-out";
  widthSlide = slide.offsetWidth;

  // if position at rightmost edge => return to previous position (which is less than i slides width)
  if (position === transportRange) {
    index = position / (widthView * slideGap);
    console.log("index left before: " + index);
    console.log("position left before: " + position);
    index--;
    position -= slideStep;
    slider.style.transform = "translateX(-" + position + "px)";
    console.log("Index left after: " + index);
    console.log("position left after: " + position);

    rightArrow.style.opacity = "1";
    rightArrow.disabled = false;
    // style section margin to change depending on where/which direction your moving in carousel?
    // section.style.marginRight = 0;
    // if between start position and rightmost edge => move one slide-width to left
  } else if (
    position - slideStep > 0 &&
    position - slideStep < transportRange
  ) {
    index = position / (widthView * slideGap);
    position -= slideStep;
    console.log("index right before: " + index);
    console.log("position right before: " + position);
    index--;
    slider.style.transform = "translateX(-" + position + "px)";
    console.log("Index right after: " + index);
    console.log("position right after: " + position);

    rightArrow.disabled = false;
    rightArrow.style.opacity = 1;
    // if at startposition => reset index and position to 0
  } else if (position - slideStep <= 0) {
    console.log("Index right before: " + index);
    console.log("position right before: " + position);
    position = 0;
    index = 0;
    slider.style.transform = "translateX(-" + position + "px)";
    console.log("Index right after: " + index);
    console.log("position right after: " + position);

    // add style to apply disabled-effect
    leftArrow.disabled = true;
    leftArrow.style.opacity = "0.5";
  }
}

// Add opacity when carousel is in startposition
if (position === 0) {
  leftArrow.style.opacity = "0.5";
}

// implement click left-button
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

// footer disable click - accordion
//  + make javascript run again when passing breaking point between mobile and desktop view
// (otherwise the carousel calculations would not transfer correctly if you resized window without loading the page)
const mediaQueryObject = window.matchMedia("(min-width: 768px)");
const details = document.querySelectorAll("details");

const figure = document.querySelector("figure");

function match(event) {
  details.forEach((detail) => {
    if (event.matches) {
      detail.removeAttribute("name");
      detail.setAttribute("open", "");
    } else {
      detail.removeAttribute("open");
      detail.setAttribute("name", "accordion-footer");
    }
  });
}

match(mediaQueryObject);

mediaQueryObject.addEventListener("change", match);

function calculations() {
  widthSlide = slide.offsetWidth;
  widthSlider = widthSlide * products.length + (products.length - 1) * slideGap;
  widthView = view.offsetWidth;
  slideStep = widthSlide + slideGap;
  numSlidesInView = widthView / slideStep;

  transportRange = widthSlider - widthView;

  maxindex = Math.floor(transportRange / (widthView * slideGap));
  lastIndex = maxindex + 1;
}

calculations();

window.addEventListener(window, calculations);

// IN PROGRESS: create functions to update position in relation to index when you resize window and position changes

// function updatePosition() {
//   calculations();
//   if (index >= maxindex) {
//     position = transportRange;
//     slider.style.transform = "translateX(-" + transportRange + "px)";
//   } else if (index <= 0) {
//     index = 0;
//     position = 0;
//     slider.style.transform = "translateX(-" + position + "px)";
//   } else if (index > 0 && index < maxindex) {
//     position = slideStep * index;
//     slider.style.transform = "translateX(-" + position + "px)";
//   }
// }

// updatePosition();

// function updateSlider() {
//   calculations();
//   if (index >= maxindex) {
//     slider.style.transform = "translateX(-" + transportRange + "px)";
//   } else if (index <= 0) {
//     slider.style.transform = "translateX(-" + position + "px)";
//   } else if (index > 0 && index < maxindex) {
//     slider.style.transform = "translateX(-" + position + "px)";
//   }
// }

// updateSlider();
