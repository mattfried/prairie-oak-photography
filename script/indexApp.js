/* ===== INDEX PAGE IMAGE SLIDESHOW ===== */

// IMAGE SLIDES & CIRCLES ARRAYS, LEFT & RIGHT ARROW, & COUNTER VARIABLES
const imageSlides = document.getElementsByClassName('image-slides');
const circles = document.getElementsByClassName('circle');
const leftArrow = document.getElementById('left-arrow');
const rightArrow = document.getElementById('right-arrow');
let counter = 0;


// HIDE ALL IMAGES FUNCTION
const hideImages = () => {
  for (let i = 0; i < imageSlides.length; i++) {
    imageSlides[i].classList.remove('visible');
  }
}


// REMOVE ALL FILLED 'dot' CLASSES FROM 'circle' <span> ELEMENTS FUNCTION
const removeDots = () => {
  for (let i = 0; i < imageSlides.length; i++) {
    circles[i].classList.remove('dot');
  }
}


// SINGLE IMAGE LOOP & CIRCLES FUNCTION
const imageLoop = () => {
  // set the current img & dot based on the counter variable
  const currentImage = imageSlides[counter];
  const currentDot = circles[counter];
  currentImage.classList.add('visible');
  removeDots();
  currentDot.classList.add('dot');
  counter++;
}


// LEFT & RIGHT ARROW FUNCTIONS
const arrowClick = e => {
  const target = e.target;
  // left arrow
  if (target == leftArrow) {
    //console.log('left');
    // remove automatic slideshow interval
    clearInterval(imageSlideshowInterval);
    // hide images
    hideImages();
    // remove filled 'dot' classes
    removeDots();
    if (counter == 1) {
      //console.log('that was the first image, loop to the last image');
      counter = (imageSlides.length - 1);
      // loop back to last image & corresponding filled 'dot'
      imageLoop();
      // reset the automatic slideshow interval
      imageSlideshowInterval = setInterval(slideshow, 8000);
    } else {
      //console.log('previous image');
      counter--;
      counter--;
      // switch to previous image & corresponding filled 'dot'
      imageLoop();
      // reset the automatic slideshow interval
      imageSlideshowInterval = setInterval(slideshow, 8000);
    }
  }
  // right arrow
  else if (target == rightArrow) {
    //console.log('right');
    // remove the automatic slideshow interval
    clearInterval(imageSlideshowInterval);
    // hide images
    hideImages();
    // remove filled 'dot' classes
    removeDots();
    if (counter == imageSlides.length) {
      //console.log('that was the last image, loop to the first image');
      counter = 0;
      // loop back to first image & corresponding filled 'dot'
      imageLoop();
      // reset the automatic slideshow interval
      imageSlideshowInterval = setInterval(slideshow, 8000);
    } else {
      //console.log('next image');
      // switch to next image & corresponding filled 'dot'
      imageLoop();
      // reset the automatic slideshow interval
      imageSlideshowInterval = setInterval(slideshow, 8000);
    }
  }
}

// LEFT & RIGHT ARROW CLICK EVENT LISTENERS
leftArrow.addEventListener('click', arrowClick);
rightArrow.addEventListener('click', arrowClick);


// IMAGE SLIDESHOW FUNCTION
const slideshow = () => {
  if (counter < imageSlides.length) {
    // show next image & dot
    imageLoop();
  } else {
    // loop slideshow, go back to the first image & dot
    counter = 0;
    // hide images
    hideImages();
    // loop to next image & dot
    imageLoop();
  }
}


// SHOW FIRST IMAGE AFTER 1 SECOND TIMEOUT, & THEN SET & CALL SLIDESHOW INTERVAL EVERY 8 SECONDS AFTER THAT
setTimeout(slideshow, 1000);
let imageSlideshowInterval = setInterval(slideshow, 8000);
