// CAROUSEL
// declare variables for each slide

// test function to get product (experiment to understand javascript and objects)
function getproductVar(productNum) {
  for (let index = 0; index < products.length; index++) {
    if (index === productNum - 1) {
      slides = {};
      return (slides[`slide_${productNum}`] = products[index]);
    }
  }
  return "Could not find product-index";
}




// TODO: Continue here, read more about event handlers and event listeners and how to connect to css transform and transition styles
window.addEventListener("click", function () {
  const leftArrow = document.getElementsByClassName("left-arrow");
  const slider = document.getElementsByClassName("slide-container");
  }
});
