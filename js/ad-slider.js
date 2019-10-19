

const slides = document.querySelectorAll('.ad-slider ul li');
console.log(slides)

let counter = 0;
let currSlideIdx = 0;
const showSlide = () => {




  if (currSlideIdx >= slides.length) {
    // reset counter
    currSlideIdx = 0;
  }


  console.log('showing slide', currSlideIdx);
  // Remove other slides
  const oldSlides = Array.from(slides).filter((value, indx) => {
    return indx !== currSlideIdx;
  });

  if (oldSlides) {
    // console.log('old', oldSlides);
    oldSlides.forEach(el => {
      if (el.classList.contains('show')) {
        el.classList.remove('show');
      }
    })
  }


  const currSlide = slides[currSlideIdx];
  currSlide.classList.add('show');
  currSlideIdx++;
};

setInterval(showSlide, 3000);