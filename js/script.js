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
