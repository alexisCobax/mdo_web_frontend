// Carousel de marcas
const carouselWrapper = document.querySelector('.carousel-wrapper');
if (carouselWrapper) {
setInterval(() => {
  const currentTranslate = parseFloat(carouselWrapper.style.transform.slice(11, -3));
  const maxTranslate = -((carouselWrapper.children[0].children.length * carouselWrapper.children[0].children[0].offsetWidth) - carouselWrapper.offsetWidth);
  const newTranslate = currentTranslate - carouselWrapper.children[0].children[0].offsetWidth;
  if (newTranslate < maxTranslate) {
    carouselWrapper.style.transform = `translateX(0)`;
  } else {
    carouselWrapper.style.transform = `translateX(${newTranslate}px)`;
  }
}, 3000);
}